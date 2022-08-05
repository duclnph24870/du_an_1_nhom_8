function showDaDangProfile(numberPagination,options) {
    const listEl = document.querySelector(options.selectorList);
    if (options.arrange) {
        options.arrange();
    }
    if (!numberPagination) {
        numberPagination = 0;
    }
    
    // vòng lặp lọc ra các truyện hiển thị
    let htmls = '';
    let nameCate = '';
    for (let i = numberPagination*options.numberPagi;i < numberPagination*options.numberPagi + options.numberPagi; i++) {
        if (options.mainArr[i]) {
            options.subArr.forEach(cateItem => {
                if (cateItem['idDanhMuc'] == options.mainArr[i]['nhom1']) {
                    return nameCate = cateItem['tenDanhMuc'];
                }
            }); 
            htmls += `
            <div class="content__section1-main-item">
                <a href="${options.userUrl}/truyen/index.php?idTruyen=${options.mainArr[i]['idTruyen']}" class="content__section1-main-item-img">
                    <img src="${options.contentUrl}/IMG/${options.mainArr[i]['imgTruyen']}" alt="" class="w-100 h-100" style="border-radius: 3px;">
                </a>
                <div class="content__section1-main-item-content">
                    <a href="${options.userUrl}/truyen/index.php?idTruyen=${options.mainArr[i]['idTruyen']}" class="content__section1-main-item-title text">Tu Luyện Theo Đấu Phá Thương Khung Bắt Đầu</a>
                    <div class="content__section1-main-item-demo">
                        ${options.mainArr[i]['gioiThieu']}
                    </div>
                    <div class="content__section1-main-item-footer">
                        <div class="content__section1-main-item-master">
                            <i class="fas fa-user-edit"></i>
                            ${options.mainArr[i]['tacGia']}
                        </div>
                        <div class="content__section1-main-item-chap d-flex">
                            <i class="fas fa-book"></i>
                            ${options.mainArr[i]['soChuong']} chương
                        </div>
                        <div class="content__section1-main-item-category btn">${nameCate}</div>
                        <div class="content__section1-main-item-master userProfile__product-view">
                            <i class="fas fa-glasses" aria-hidden="true"></i>
                            ${options.mainArr[i]['viewTruyen']}
                        </div>
                        <div class="content__section1-main-item-master userProfile__product-danhDau">
                            <i class="far fa-leaf" aria-hidden="true"></i>
                            ${options.mainArr[i]['deCu']}
                        </div>
                    </div>
                </div>
            </div>
            `;
        }else {
            continue;
        }
    }
    listEl.innerHTML = htmls;
}