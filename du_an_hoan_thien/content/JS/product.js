// đánh giá
const ran = document.querySelectorAll('.myRange');
const demo = document.querySelectorAll('.rangeValue');

for (let i = 0;i<ran.length;i++) {
    demo[i].innerHTML = ran[i].value;
    ran[i].oninput = () => {
        demo[i].innerHTML = ran[i].value;
    }
}

//màu sao
function starColor(selecterListStar) {
    const starParentElement = document.querySelectorAll(selecterListStar);
    starParentElement.forEach((starParent) => {
        const starElement = starParent.querySelectorAll(selecterListStar + ' i');
        const starNumber = starParent.querySelector(selecterListStar+ ' span');
        for (let i = 0;i< Math.floor(+starNumber.innerText);i++) {
            starElement[i].style.color = '#ffc000';
        }
    });
}

// hiện form trả lời
function showFormRep(selectorBtns) {
    const btnReps = document.querySelectorAll(selectorBtns);

    btnReps.forEach((btnRep) => {
        const formEl = btnRep.parentElement.querySelector('.product__navbar-item-comment-item-input'); 
        btnRep.onclick = () => {
            for (let i = 0; i < btnReps.length; i++) {
                btnReps[i].classList.remove('active');
                let formElDefault = btnReps[i].parentElement.querySelector('.product__navbar-item-comment-item-input'); 
                if (formElDefault) {
                    formElDefault.onsubmit = (e) => {
                        e.preventDefault();
                    }
                }
            }

            if (formEl) {
                btnRep.classList.add('active');
                if (formEl.querySelector('label[for="check__submit-comment"]')) {
                    formEl.querySelector('label[for="check__submit-comment"]').onclick = () => {
                        if (formEl.querySelector('textarea').value.length > 3 && formEl.querySelector('textarea').value.length < 200) {
                            formEl.submit();
                        }else {
                            showModifier('.modifier.modifier-err','Nội dung không được ít hơn 3 và nhỏ hơn 200 ký tự','');
                        }
                    };
                }
                
            }else {
                showModifier('.modifier.modifier-err','Bạn cần đăng nhập để thực hiện chức năng này','');
            }
        }
    });
}

// chú ý khi dùng function thì btn và inputForm phải là các element ngang cấp (btn ~ form)
function showListRep (type,options) {
    console.log('hello');
    const listBlock = document.querySelector(options.selectorList);
    const showListBtns = listBlock.querySelectorAll('.showListRep');

    showListBtns.forEach((showListBtn) => {
        showListBtn.onclick = () => {
            let i = 0;
            let itemEl = showListBtn;
            //Lấy ra thẻ đánh giá to nhất
            while (i < 100) {
                itemEl = itemEl.parentElement;
                if (itemEl.matches(options.selectorItem)) {
                    break;
                }
                i++;
            }
            // Đếm số lượng rep đánh giá của đánh giá đó
            const idDanhGia = +itemEl.dataset.id; //lấy id đánh giá
            const listArrRep = [];
            const listShowEl = itemEl.querySelector('.listRep');
            options.subArr2.forEach(itemRep => {
                if (type == 'danhGia') {
                    if (itemRep['idDanhGia'] == idDanhGia) {
                        listArrRep.push(itemRep);
                    }
                }else if (type == 'comment') {
                    if (itemRep['idComment'] == idDanhGia) {
                        listArrRep.push(itemRep);
                    }
                }
            });
            let numberShowRep = 10;

            const htmls = listArrRep.map(itemRepShow => {
                //lấy ra user trả lời
                let userRep;
                let userLogin;
                options.subArr.forEach(itemUser => {
                    if (itemRepShow['idUser'] == itemUser['idUser']) {
                        userRep = itemUser;
                    }
                    if (itemUser['idUser'] == options.idUser) {
                        userLogin = itemUser;
                    }
                });
                let checkUserLike = false;
                if (itemRepShow['likeRep']) {
                    checkUserLike = itemRepShow['likeRep'].indexOf(options.idUser) != -1; // true đã like
                }
                
                
                return `
                <div class="product__navbar-item-comment-item">
                    <div class="product__navbar-item-comment-item-img">
                        <img src="${options.contentUrl}/IMG/${userRep['imgUser']}" alt="">
                        <span>Cấp ${userRep['quyenHan']}</span>
                    </div>
                    <div class="product__navbar-item-comment-item-right">
                        <a href="${options.userUrl}/user_profile/index.php?idUser=${itemRepShow['idUser']}" class="product__navbar-item-comment-item-name text limit1" style="font-size: 1.6rem;">`+(userRep['trangThaiComment'] == 1 ? userRep['userName'] : 'Một Bạn Đọc Ngại Ngùng')+`</a>
                        
                        <div class="product__navbar-item-comment-item-content">
                            ${itemRepShow['noiDung']}
                        </div>
                        <div class="product__navbar-item-comment-item-bottom">
                            <a `+(options.idUser ? '' : `onclick="showModifier('.modifier.modifier-err','Bạn cần đăng nhập để thực hiện chức năng này','');return false;"`)+` href="${options.userUrl}/truyen/likeRep.php?idTruyen=${itemRepShow['idTruyen']}&idUser=${options.idUser}&type=`+(type == 'danhGia' ? 'danhGia' : 'comment')+`&link=${options.linkPage}&idReply=${itemRepShow['idReply']}&idUserMain=${itemRepShow['idUser']}" class="product__navbar-item-comment-item-bottom-item `+(checkUserLike ? 'like' : '')+`">
                                <i class="fas fa-thumbs-up"></i>
                                <span>${checkNumberLike(itemRepShow['likeRep'])}</span>
                            </a>
                            <div class="product__navbar-item-comment-item-icon" `+(options.userManager ? 'style="color: #999;font-weight: 400;"' : '')+`>
                                <i class="fas fa-clock"></i>
                                ${time_distance_current(itemRepShow['dateReply'])}
                            </div>
                        </div>
                    </div>
                    `+(options.idUser && +userLogin['quyenHan'] >= 3 ? `
                        <a href="${options.userUrl}/truyen/deleteRepComment.php?type=`+(type =='danhGia' ? 'danhGia' : 'comment')+`&link=`+(options.userManager ? `${options.userUrl}/userManager/index.php` : `${options.userUrl}/truyen/index.php?idTruyen=${itemRepShow['idTruyen']}`)+`&idReply=${itemRepShow['idReply']}" class="admin-right-item-comment-delete text"><i class="fas fa-trash"></i></a>
                    ` : '')+`
                </div>
                `;
            }).join('');
            listShowEl.classList.add('active');
            const btnHidden = itemEl.querySelector('.hidden-listRep');
            listShowEl.innerHTML = htmls;
            btnHidden.classList.add('active');
            btnHidden.onclick = () => {
                btnHidden.classList.remove('active');
                listShowEl.classList.remove('active');
            }
        }
    });
}

// tính số like của đánh giá
function checkNumberLike (likeStr) {
    let numberLike;
    if (likeStr) {
        numberLike = likeStr.trim().split(' ').length;
    }else {
        numberLike = 0;
    }

    return numberLike;
}

// tính khoảng cách giữa 2 ngày
function time_distance_current (time,toCount) {
    const current = new Date();
    const time_count = new Date(time);
    
    const get_day_of_time = (d1, d2) => {
        let ms1 = d1.getTime();
        let ms2 = d2.getTime();
        return Math.ceil((ms2 - ms1) / (1000*60));
    };

    const late = get_day_of_time(time_count,current);

    let thoiGian;
    if (late <= 1) {
       thoiGian = 'Vừa xong';
    }else if (late > 1 && late < 60) {
       thoiGian = Math.floor(late)+' phút trước';
    }else if (late >= 60 && late< 1440) {
       thoiGian = Math.floor(late/60)+' giờ trước';
    }else if (late >= 1440 && late<43200) {
       thoiGian = Math.floor(late/1440)+' ngày trước';
    }else if (late >= 43200 && late<518400) {
       thoiGian = Math.floor(late/43200)+' tháng trước';
    }else if (late>=518400) {
       thoiGian = Math.floor(late/518400)+' năm trước';
    }
    return thoiGian;
}

//show list đánh giá và bình luận
function showListDanhGia (type,options,pagi = 'off',viTriPagi) {
    const listEl = document.querySelector(options.selectorList);
    const itemEl = listEl.querySelectorAll(options.selectorItem);

    let arrShow = [];
    if (pagi == 'on') {
        // lọc ra mảng để show        
        for (let i = viTriPagi*options.numberPagi; i < viTriPagi*options.numberPagi + options.numberPagi;i++) {
            if (options.mainArr[i]) {
                arrShow.push(options.mainArr[i]);
            }
        }
    }else {
        arrShow = options.mainArr;
    }

    let htmls = options.mainArr.map((item,key) => {
        //Lấy ra thông tin của user đánh giá
        let idUserDanhGia = item['idUser'];
        let userDanhGia = {};
        // thông tin user đang đăng nhập
        let userLogin;
        options.subArr.forEach (itemUser => {
            if (idUserDanhGia == itemUser['idUser']) {
                userDanhGia = itemUser;                
            }
            if (!userLogin && options.idUser == itemUser['idUser']) {
                userLogin = itemUser;
            }
        });
        //Lấy ra số lượt like của đánh giá
        let numberLike = checkNumberLike(item['like']);
        // kiểm tra xem user đang đăng nhập đã like đánh giá chưa
        let checkUserLike = false;
        if (item['like']) {
            checkUserLike = item['like'].indexOf(options.idUser) != -1; // true đã like
        }

        // Kiểm tra số lượng trả lời của đánh giá
        let repList = options.subArr2.map(repItem => {
            if (type == 'danhGia') {
                return repItem['idDanhGia'] == item['idDanhGia'] ? repItem : undefined;
            }
            if (type == 'comment') {
                return repItem['idComment'] == item['idComment'] ? repItem : undefined;
            }
        });
        let numberRep = 0;
        for (let i = 0; i < repList.length;i++) {
            if (repList[i]) {
                numberRep += 1;
            }
        }
        // Lấy ra truyện comment
        let truyenComment = [];
        if (options.userManager) {
            options.subArr3.forEach(itemTruyen => {
                if (item['idTruyen'] == itemTruyen['idTruyen']) {
                    truyenComment.push(itemTruyen);
                }
            });
        }
        
        return `
            <div class="product__navbar-item-comment-item" data-id="`+(type == 'danhGia' ? item['idDanhGia'] : item['idComment'])+`">
                <a href="${options.userUrl}/user_profile/index.php?idUser=1" class="product__navbar-item-comment-item-img">
                    <img src="${options.contentUrl}/IMG/${userDanhGia['imgUser']}" alt="">
                    <span>Cấp ${userDanhGia['quyenHan']}</span>
                </a>
                <div class="product__navbar-item-comment-item-right">
                    <a href="${options.userUrl}/user_profile/index.php?idUser=${item['idUser']}" class="product__navbar-item-comment-item-name text limit1">`+(userDanhGia['trangThaiComment'] == 1 ? userDanhGia['userName'] : 'Một bạn đọc ngại ngùng')+`
                    `+(!options.userManager ? `
                        <span>`+(type == 'danhGia'? 'đã đánh giá' : 'đã bình luận')+`</span>
                    ` : '')+`
                    </a>
                    `+(options.userManager ? `
                    <style>
                        .product__navbar-item-comment-item:nth-child(${key + 1}) .product__navbar-item-comment-item-name::after {
                            content: "`+(type == 'danhGia' ? time_distance_current(item['dateDanhGia']) : time_distance_current(item['dateComment']))+`";
                        }
                    </style>
                    ` : '')+`
                    <div class="d-flex my-2 align-items-center">
                        `+(type == 'danhGia' ? `
                        <div class="product__navbar-item-danhGia-item-start">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>${item['tongHop']}</span>
                        </div>
                        ` : '')+`
                        `+(options.userManager ? `
                        <a href="${options.userUrl}/truyen/index.php?idTruyen=${truyenComment[0]['idTruyen']}" class="product__navbar-item-comment-item-icon">
                            ${truyenComment[0].tenTruyen}
                        </a>
                        ` : '')+`
                        `+(!options.userManager ? `
                            <div class="product__navbar-item-comment-item-icon">
                                <i class="fas fa-clock"></i>
                                `+(type == 'danhGia' ? time_distance_current(item['dateDanhGia']) : time_distance_current(item['dateComment']))+`
                            </div>
                        ` : '')+`
                    </div>
                    <div class="product__navbar-item-comment-item-content">
                        ${item['noiDung']}
                    </div>
                    <div id="scroll-close-listRep`+(type == 'danhGia' ? item['idDanhGia'] : item['idComment'])+`"></div>
                    <!-- like ,trả lời,...  -->
                    <div class="product__navbar-item-comment-item-bottom">
                    `+(numberRep > 0 ? `
                        <a href="#scroll-listRep`+(type == 'danhGia' ? item['idDanhGia'] : item['idComment'])+`" class="product__navbar-item-comment-item-bottom-item showListRep">
                            Xem trả lời
                        </a>
                    ` : '')+`
                        <a `+(options.idUser ? '' : `onclick="showModifier('.modifier.modifier-err','Bạn cần đăng nhập để thực hiện chức năng này','');return false;"`)+` href="${options.userUrl}/truyen/like.php?idTruyen=${item['idTruyen']}&idUser=${options.idUser}&type=`+(type == 'danhGia' ? 'danhGia' : 'comment')+`&link=${options.linkPage}&`+(type == 'danhGia' ? `idDanhGia=${item['idDanhGia']}` : `idComment=${item['idComment']}`)+`&idUserMain=${item['idUser']}" class="product__navbar-item-comment-item-bottom-item`+(checkUserLike ? ' like ' : '')+`">
                            <i class="fas fa-thumbs-up"></i>
                            <span>${numberLike}</span>
                        </a>
                        `+(!options.userManager ? `
                        <div class="product__navbar-item-comment-item-bottom-item btn-commentRep">
                            <i class="fas fa-share"></i>
                            <span>Trả lời</span>
                        </div>
                            ` : '')+`
                        <div class="listRep w-100">

                        </div> 
                        <div id="scroll-listRep`+(type == 'danhGia' ? item['idDanhGia'] : item['idComment'])+`"></div>                   
                        <a href="#scroll-close-listRep`+(type == 'danhGia' ? item['idDanhGia'] : item['idComment'])+`" class="hidden-listRep mr-3">
                            Ẩn trả lời
                        </a>
                        `+(options.idUser && !options.userManager ? `
                            <!-- trả lời input  -->
                            <div class="product__navbar-item-comment-item product__navbar-item-comment-item-commentRep border-0">
                                <div class="product__navbar-item-comment-item-img">
                                    <img src="${options.contentUrl}/IMG/${userLogin['imgUser']}" alt="">
                                </div>
                                <form method="post" action="${options.userUrl}/truyen/repComment.php" class="product__navbar-item-comment-item-right product__navbar-item-comment-item-input">
                                    <input type="submit" id="check__submit-comment" hidden>
                                    <input type="text" name="type" value="`+(type == 'danhGia' ? 'repDanhGia' : 'repComment')+`" hidden>
                                    <input type="text" hidden name="idUser" value="${userLogin['idUser']}">
                                    <input type="text" hidden name="idTruyen" value="${item['idTruyen']}">
                                    <input type="text" hidden name="link" value="${options.userUrl}/truyen/index.php?idTruyen=${item['idTruyen']}">
                                    <input type="text" hidden name="idUserDanhGia" value="${item['idUser']}">
                                    <input type="text" hidden name="`+(type == 'danhGia' ? 'idDanhGia': 'idComment')+`" value="`+(type=='danhGia' ? item['idDanhGia'] : item['idComment'])+`">

                                    <textarea cols="30" name="noiDung" rows="3" placeholder="Trả lời `+(userDanhGia['trangThaiComment'] == 1 ? userDanhGia['userName'] : '')+`"></textarea>
                                    <label for="check__submit-comment">
                                        <i class="fas fa-paper-plane"></i>
                                    </label>
                                </form>
                            </div>
                        ` : '')+`
                    </div>
                </div>
                `+(userLogin && +userLogin['quyenHan'] >= 3 && !options.userManager ? `
                    <a href="${options.userUrl}/truyen/deleteComment.php?type=`+(type =='danhGia' ? 'danhGia' : 'comment')+`&link=${options.userUrl}/truyen/index.php?idTruyen=${item['idTruyen']}&`+(type== 'danhGia' ? `idDanhGia=${item['idDanhGia']}` : `idComment=${item['idComment']}`)+`" class="admin-right-item-comment-delete text"><i class="fas fa-trash"></i></a>
                `: '')+`
                `+(options.userManager ? `
                    <input type="checkbox" name="`+(type == 'danhGia' ? 'danhGiaCheckBox[]' : 'commentCheckBox[]')+`" value="`+(type == 'danhGia' ? item['idDanhGia'] : item['idComment'])+`" class="chonCheckBox ml-2">
                ` : '')+`
        </div>
        `;
    }).join('');

    listEl.innerHTML = htmls;
    //chạy function hiện màu sao
    if (options.showColorStart) {
        options.showColorStart();
    }

    if (!options.userManager) {
        //show form trả lời
        options.showRepFrom();
    }
    if (options.userManager) {
        options.checkAllCallback();
    }
    //show list rep
    showListRep(type,options);
}