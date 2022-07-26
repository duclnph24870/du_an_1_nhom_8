window.onload = () => {
    const chatIcon = document.querySelector('.admin-chat-icon');
    const chatIcon2 = document.querySelector('.admin-heald-2');
    const chatContent = document.querySelector('.admin-held');
    chatIcon.addEventListener('click',()=>{
        chatContent.classList.toggle('active');
    });

    if (chatIcon2) {
        chatIcon2.onclick = () => {
            chatContent.classList.add('active');
        }
    }
}
//modifyer show
function showModifier (selectorModifier,titleText,contentText) {
    const modifier = document.querySelector(selectorModifier);
    const titleElment = modifier.querySelector('.modifier-title');
    const contentEl = modifier.querySelector('.modifier-content');

    modifier.style.right = '10px';  
    titleElment.innerText = titleText;
    contentEl.innerText = contentText;
    setTimeout(function(){
        modifier.style.right = '-500px';   
    },2000);
}

// hiệu ứng lọc category
function filterCategory(selecter) {
    const categoryElement = document.querySelector(selecter);
    const categoryItem = categoryElement.querySelectorAll('.btn-category');
    const categoryCheck = categoryElement.querySelectorAll('input[type="radio"]');

    for (let i = 0;i<categoryItem.length;i++) { 
        if (categoryCheck[i].checked) {
            categoryItem[i].classList.toggle('active');
        }
        categoryItem[i].onclick = () => {
            for (let j = 0;j < categoryItem.length;j++) {
                categoryItem[j].classList.remove('active');
            }
            categoryItem[i].classList.toggle('active');
        }
    }
}

// next page không có page con
function nextPage (selectorBtn,selectorContent,type,variab,status='on') {
    const btnElements = document.querySelectorAll(selectorBtn);
    const contents = document.querySelectorAll(selectorContent);

    if (type == 'page') {
        let variabNum = sessionStorage.getItem(variab)
        if (variabNum) {
            btnElements[variabNum].classList.add('active');
            contents[variabNum].classList.add('active');
        }else if (!variabNum) {
            btnElements[0].classList.add('active');
            contents[0].classList.add('active'); 
        }
    }

    for (let i = 0; i< btnElements.length;i++) {

        btnElements[i].onclick = () => {
            if (type == 'page') {sessionStorage.setItem(variab,i)}

            if (btnElements[i].matches('.active')) {

                if (status == 'on') {
                    btnElements[i].classList.remove('active');
                    contents[i].classList.remove('active');
                }

            }else {

                for (let j = 0; j < btnElements.length;j++) {
                    btnElements[j].classList.remove('active');
                    contents[j].classList.remove('active');
                }

                btnElements[i].classList.add('active');
                contents[i].classList.add('active');
            }
        }
    }
}

//chỉnh sửa chương
function editChuong (selectorPlus,selectorMinus,selectorValue,step,selectorObjEdit,style,max,min) {
    const objEdit = document.querySelector(selectorObjEdit);
    const valueElement= document.querySelector(selectorValue);
    function hienThi(value) {
        if (style == 'line-height') {
            valueElement.innerText = value.toFixed(1);
        }else {
            valueElement.innerText = Math.floor(value);
        }
        if (style == 'font-size') {
            // objEdit.innerHTML = `<div class="chuong-content__noiDung" style="${style}:${value}px;">${objEdit.innerText}</div>`;
            objEdit.style.fontSize =  `${value}px`;
        }else if (style == 'max-width') {
            objEdit.style.maxWidth = `${value}px`;
        }else if (style == 'line-height') {
            objEdit.style.lineHeight = `${value}`;
        }
    }
    const plusElement = document.querySelector(selectorPlus);
    const minusElement = document.querySelector(selectorMinus);

    plusElement.onclick = () => {
        if (+valueElement.innerText < max) {
            hienThi(+valueElement.innerText + step);
        }
    }
    minusElement.onclick = () => {
        if (+valueElement.innerText > min) {
            hienThi(+valueElement.innerText - step);
        }
    }
// dùng function nhớ dùng các class của các nút khác nhau
}

// next page có page con
function nextPageAdmin (selectorBtn,selectorContent,selectorBtnChild = '',selectorContentChild = '') {
    const btnElements = document.querySelectorAll(selectorBtn);
    const contents = document.querySelectorAll(selectorContent);

    const viTriI = sessionStorage.getItem('i');
    const viTriJ = sessionStorage.getItem('j');

    if (viTriI && viTriJ) {
        //page cha
        btnElements[viTriI].classList.add('active');
        contents[viTriI].classList.add('active');
        //page con
        contents[viTriI].querySelectorAll(selectorBtnChild)[viTriJ].classList.add('active');
        contents[viTriI].querySelectorAll(selectorContentChild)[viTriJ].classList.add('active');
    }else if (viTriI && !viTriJ) {
        //page cha
        btnElements[viTriI].classList.add('active');
        contents[viTriI].classList.add('active');
        //page con
        contents[viTriI].querySelectorAll(selectorBtnChild)[0].classList.add('active');
        contents[viTriI].querySelectorAll(selectorContentChild)[0].classList.add('active');
    }else if (!viTriI && viTriJ) {
        //page cha
        btnElements[0].classList.add('active');
        contents[0].classList.add('active');
        //page con
        contents[0].querySelectorAll(selectorBtnChild)[viTriJ].classList.add('active');
        contents[0].querySelectorAll(selectorContentChild)[viTriJ].classList.add('active');
    }else if (!viTriI && !viTriJ) {
        //page cha
        btnElements[0].classList.add('active');
        contents[0].classList.add('active');
        //page con
        contents[0].querySelectorAll(selectorBtnChild)[0].classList.add('active');
        contents[0].querySelectorAll(selectorContentChild)[0].classList.add('active');
    }else {
        console.log('thiếu')
    }

    for (let i = 0; i< btnElements.length;i++) {

        btnElements[i].onclick = () => {
            sessionStorage.setItem('i',i); // lưu lại vị trí của page cha

                for (let j = 0; j < btnElements.length;j++) {
                    btnElements[j].classList.remove('active');
                    contents[j].classList.remove('active');
                }

                btnElements[i].classList.add('active');
                contents[i].classList.add('active');
                if (selectorBtnChild.length > 0) {
                    const btnChild = contents[i].querySelectorAll(selectorBtnChild);
                    const contentChild = contents[i].querySelectorAll(selectorContentChild);
                    for (let k = 0; k < btnChild.length;k++) {
                        btnChild[k].classList.remove('active');
                        contentChild[k].classList.remove('active');
                    }
                    btnChild[0].classList.add('active');
                    contentChild[0].classList.add('active');
                }
        }

        if (selectorBtnChild.length > 0) {
            const btnChilds = contents[i].querySelectorAll(selectorBtnChild);
            const contentChilds = contents[i].querySelectorAll(selectorContentChild);

            for (let j = 0; j < btnChilds.length;j++) {
                btnChilds[j].onclick = () => {
                    sessionStorage.setItem('j',j); // lưu lại vị trí của page con
                    for (let k = 0; k < btnChilds.length;k++) {
                        btnChilds[k].classList.remove('active');
                        contentChilds[k].classList.remove('active');
                    }
    
                    btnChilds[j].classList.add('active');
                    contentChilds[j].classList.add('active');
                }
            }
        }
    }
}

// btn chọn tất cả
function checkAll (selectorCheckBlock,selectorCheckChon,selectorCheckAll,selectorCheckBox,selectorDelete) {
    const checkBlockElement = document.querySelector(selectorCheckBlock);
    const checkChonBtn = checkBlockElement.querySelector(selectorCheckChon);
    const deleteBtn = checkBlockElement.querySelector(selectorDelete);
    const checkAllBtn = checkBlockElement.querySelector(selectorCheckAll);
    const checkBoxs = checkBlockElement.querySelectorAll(selectorCheckBox);
    checkChonBtn.onclick = () => {
        if (checkChonBtn.matches('.active')) {
            checkChonBtn.classList.remove('active');
            for (let i = 0; i < checkBoxs.length; i++) {
                checkBoxs[i].classList.remove('active');
            }
        }else {
            checkChonBtn.classList.add('active');
            for (let i = 0; i < checkBoxs.length; i++) {
                checkBoxs[i].classList.add('active');
            }
        }

        checkAllBtn.onclick = () => {
            checkAllBtn.classList.toggle('active');
            if (checkAllBtn.matches('.active')) {
                for (let i = 0; i < checkBoxs.length; i++) {
                    checkBoxs[i].checked = true;
                }
            }else {
                for (let i = 0; i < checkBoxs.length; i++) {
                    checkBoxs[i].checked = false;
                }
            }
        }
    }

    deleteBtn.onclick = (e) => {
        let checkBoxDk = false;
        for (let i = 0;i < checkBoxs.length;i++) {
            if (checkBoxs[i].checked) {
                checkBoxDk = true;
            }
        }
        if (!checkBoxDk) {
            e.preventDefault();
            showModifier('.modifier-err','Thao tác không thành công','Bạn chưa chọn mục cần xóa!');
        }
    }


}

// show exp user
function showExp () {
    const havingEl = document.querySelector('.expUser__content-having'); 
    const requiredEl = document.querySelector('.expUser__content-required'); 
    const expEl = document.querySelector('.expUser__content');

    const longExp = Math.floor((+havingEl.innerText / +requiredEl.innerText)*100);
    expEl.style.width = `${longExp}%`;
}

// xem trước ảnh
function previewUpImg (selectorForm,selectorImg,selectorInput,selectorImgErr,submitOn) {
    const formEl = document.querySelector(selectorForm);
    const imgEl = formEl.querySelector(selectorImg);
    const inputEl = formEl.querySelector(selectorInput);
    const errMess = formEl.querySelector(selectorImgErr);
    
    function validateImg (inputType) {
        const validImageTypes = ['image/gif', 'image/jpeg', 'image/png','image/webp']
        
        let checkValidInput;
        if (!validImageTypes.includes(inputType)) {
            checkValidInput = false;
        }else {
            checkValidInput = true;
        }
        return checkValidInput;

    }

    inputEl.onchange = (e) => {
        const file = e.target.files;
        const fileReader = new FileReader();
        fileReader.readAsDataURL(file[0]);
        
        fileReader.onload = () => {
            if (validateImg (file[0]['type'])) {
                formEl.querySelector('input[type="submit"]').classList.add('active');
                if (!submitOn) {
                    formEl.onsubmit = (e) => {
                        e.submit();
                    }
                }
                
                errMess.innerText = `${file[0]['name']}`;
                errMess.classList.remove('active');
                const htmlImg = imgEl.innerHTML.replace(`src="${imgEl.querySelector('img').attributes[0].nodeValue}"`,`src="${fileReader.result}"`);
                imgEl.innerHTML = htmlImg;
    
            }else {
                if (!submitOn) {
                    formEl.onsubmit = (e) => {
                        e.preventDefault();
                    }
                }
                errMess.innerText = 'Định dạng file không hợp lệ';
                errMess.classList.add('active');
                const htmlImg = imgEl.innerHTML.replace(`src="${imgEl.querySelector('img').attributes[0].nodeValue}"`,'src=""');
                imgEl.innerHTML = htmlImg;
                formEl.querySelector('input[type="submit"]').classList.remove('active');
            }
        }
    }

}

//show event sự kiện
function showEvent (nameEvent,timeShow = 600000) {
    setTimeout (function () {
        const eventEl = document.querySelector('.event');
        eventEl.classList.add(nameEvent);
        eventEl.classList.add('active');
    },timeShow); 
}

//Kiểm lỗi thêm category
function kiemLoi (selectorMessErr) {
    const errMessEl = document.querySelectorAll(selectorMessErr);
    for (let i = 0;i < errMessEl.length;i++) {
        if (errMessEl[i].matches('.err')) {
            errMessEl[i].parentElement.querySelector('input').style.borderColor = '#9b1d2c';
        }else {
            errMessEl[i].parentElement.querySelector('input').style.borderColor = '#e6e6e6';
        }
        errMessEl[i].parentElement.querySelector('input').oninput = () => {
            errMessEl[i].parentElement.querySelector('input').style.borderColor = '#e6e6e6';
            errMessEl[i].style.display = 'none';
        }
    }
}

// chuyển array json php thành mảng js
function phpArrayJs(obj) {
    const truyen1Arr = Object.entries(obj);
    const newTruyen = truyen1Arr.map((truyenItem) => {
        return truyenItem[1];
    });

    return newTruyen;
}

//chuyển văn tự có dấu thành không dấu
function removeVietnameseTones(str) {
    str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a"); 
    str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e"); 
    str = str.replace(/ì|í|ị|ỉ|ĩ/g,"i"); 
    str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o"); 
    str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u"); 
    str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y"); 
    str = str.replace(/đ/g,"d");
    str = str.replace(/À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ/g, "A");
    str = str.replace(/È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ/g, "E");
    str = str.replace(/Ì|Í|Ị|Ỉ|Ĩ/g, "I");
    str = str.replace(/Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ/g, "O");
    str = str.replace(/Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ/g, "U");
    str = str.replace(/Ỳ|Ý|Ỵ|Ỷ|Ỹ/g, "Y");
    str = str.replace(/Đ/g, "D");
    // Some system encode vietnamese combining accent as individual utf-8 characters
    // Một vài bộ encode coi các dấu mũ, dấu chữ như một kí tự riêng biệt nên thêm hai dòng này
    str = str.replace(/\u0300|\u0301|\u0303|\u0309|\u0323/g, ""); // ̀ ́ ̃ ̉ ̣  huyền, sắc, ngã, hỏi, nặng
    str = str.replace(/\u02C6|\u0306|\u031B/g, ""); // ˆ ̆ ̛  Â, Ê, Ă, Ơ, Ư
    // Remove extra spaces
    // Bỏ các khoảng trắng liền nhau
    str = str.replace(/ + /g," ");
    str = str.trim();
    // Remove punctuations
    // Bỏ dấu câu, kí tự đặc biệt
    str = str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'|\"|\&|\#|\[|\]|~|\$|_|`|-|{|}|\||\\/g," ");
    return str.toLowerCase();
}

// search truyện, chú ý có thể sai tên thực thể trong bảng (nếu lỗi thì sửa lại id_truyen)
function search (productListArr,selectorForm,selectorInputChild,link) {
    const formEl = document.querySelector(selectorForm);
    const inputEl = formEl.querySelector('input')
    const itemList = formEl.querySelector(selectorInputChild);

    function searchRule (searchVl,arr) {
        const truyenTextSearch = removeVietnameseTones(arr['tenTruyen']);
        const tacGiaText = removeVietnameseTones(arr['tacGia']);
        let check;
        if (truyenTextSearch.indexOf(searchVl) != -1 || tacGiaText.indexOf(searchVl) != -1) {
            check = true;
        }else {
            check = false;
        }
        return check;
    }

    inputEl.oninput = () => {
        const inputValue = inputEl.value;
        if (inputValue) {
            const searchList= [];
            for (let i = 0; i < productListArr.length; i++) {
                if (searchRule(removeVietnameseTones(inputValue),productListArr[i])) {
                    searchList.push(productListArr[i]);
                }else {
                    continue;
                }
            }
            
            // show
            let numberList;
            if (searchList.length > 5) {
                numberList = 5;
            }else {
                numberList = searchList.length;
            }

            let htmls = '';
            for (let i = 0; i < numberList; i++) {
                // itemEl[i].innerText = searchList[i]['tenTruyen'];
                let nameTruyen = searchList[i]['tenTruyen'];
                if (htmls.length < 5) {
                    itemList.style.background = 'var(--white)';
                }
                htmls += `
                    <div class="category-item">
                        <a href="${link}${searchList[i]['idTruyen']}" class="category-item-link">${nameTruyen}</a>
                    </div>
                    `;

                }

                itemList.innerHTML = htmls;
                if (htmls.length < 5) {
                    itemList.style.background = 'none';
                }
            }
    }
}

//show pagination
function showPagination (viTri,numberPagination,pagination) {
    let htmls = '';
    if (numberPagination > 3) {
        if (viTri == 0) {
            htmls = `
                <div class="pagination__item text numberPagi active">${viTri}</div>
                <div class="pagination__item text numberPagi">${viTri+1}</div>
                <div class="pagination__item text numberPagi">${viTri+2}</div>
                <div class="pagination__item text next">></div>
                <input type="text" value="${viTri}" class="pagination__input">
                <input type="submit" value="Go" class="pagination__submit">
            `;
        }else if (viTri == numberPagination - 1) {
            htmls = `
            <div class="pagination__item text pre"><</div>
            <div class="pagination__item text numberPagi">${viTri-2}</div>
            <div class="pagination__item text numberPagi">${viTri-1}</div>
            <div class="pagination__item text numberPagi active">${viTri}</div>
            <input type="text" value="${viTri}" class="pagination__input">
            <input type="submit" value="Go" class="pagination__submit">
            `;
        }else {
            htmls = `
            <div class="pagination__item text pre"><</div>
            <div class="pagination__item text numberPagi">${viTri-1}</div>
            <div class="pagination__item text numberPagi active">${viTri}</div>
            <div class="pagination__item text numberPagi">${viTri+1}</div>
            <div class="pagination__item text next">></div>
            <input type="text" value="${viTri}" class="pagination__input">
            <input type="submit" value="Go" class="pagination__submit">
            `;
        }
    }else if (numberPagination <= 3){
        for (let i = 0; i < numberPagination;i++) {
            if (i == viTri) {
                htmls += `
                <div class="pagination__item text numberPagi active">${i}</div>
            `;
            }else {
                htmls += `
                <div class="pagination__item numberPagi text">${i}</div>
            `;
            }
        }
        htmls+= `
            <input type="text" value="${viTri}" class="pagination__input">
            <input type="submit" value="Go" class="pagination__submit">
        `;
    }
    pagination.innerHTML = htmls;
}

// Thay đổi database nhớ sửa lại key của mảng
// show page dựa trên pagination
function showPagePagi (numberPagination,options) {
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
                    <div class="col-12 col-md-6 col-lg-6 col-xl-6 itemList-item">
                        <div class="content__section1-main-item">
                            <a href="${options.linkTruyen}${options.mainArr[i]['idTruyen']}" class="content__section1-main-item-img">
                                <img src="${options.linkImg}${options.mainArr[i]['imgTruyen']}" alt="${options.mainArr[i]['tenTruyen']}">
                            </a>
                            <div class="content__section1-main-item-content">
                                <a href="${options.linkTruyen}${options.mainArr[i]['idTruyen']}" class="content__section1-main-item-title text">${options.mainArr[i]['tenTruyen']}</a>
                                <div class="content__section1-main-item-demo">
                                    ${options.mainArr[i]['gioiThieu']}
                                </div>
                                <div class="content__section1-main-item-footer">
                                    <div class="content__section1-main-item-master">
                                        <i class="fas fa-user-edit"></i>
                                        ${options.mainArr[i]['tacGia']}
                                    </div>
                                    <div class="content__section1-main-item-category btn">${nameCate}</div>
                                    <div class="content__section1-main-item-chap d-flex">
                                        <i class="fas fa-bars"></i>
                                        ${options.mainArr[i]['soChuong']} chương
                                    </div>
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

// Phân trang
function phanTrang (callback,options) {
    const listEl = document.querySelector(options.selectorList);
    const pagination = document.querySelector(options.selectorPagi);
    let numberPagination = Math.ceil(options.mainArr.length/options.numberPagi);

    if (numberPagination >= 1) {
        showPagination(0,numberPagination,pagination);
        callback(0,options);
        if (options.checkAllCallback) {
            options.checkAllCallback();
        }
    }

    pagination.onmouseover = () => {
        const itemPagination = pagination.querySelectorAll('.pagination__item.numberPagi');
        const nextPagination = pagination.querySelector('.pagination__item.next');
        const prePagination = pagination.querySelector('.pagination__item.pre');
        if (itemPagination) {
            for (let i = 0; i < itemPagination.length; i++) {
                itemPagination[i].onclick = () => {
                    showPagination(+itemPagination[i].innerText,numberPagination,pagination);
                    callback(+itemPagination[i].innerText,options);
                    if (options.checkAllCallback) {
                        options.checkAllCallback();
                    }
                }
            }
        }
        if (nextPagination) {
            nextPagination.onclick = () => {
            const itemNextPagination = pagination.querySelector('.active.pagination__item.numberPagi');
                showPagination(+itemNextPagination.innerText + 1,numberPagination,pagination);
                callback(+itemNextPagination.innerText + 1,options);
                if (options.checkAllCallback) {
                    options.checkAllCallback();
                }
            }
        }
        if (prePagination) {
            prePagination.onclick = () => {
            const itemPrePagination = pagination.querySelector('.active.pagination__item.numberPagi');
                showPagination(+itemPrePagination.innerText - 1,numberPagination,pagination);
                callback(+itemPrePagination.innerText - 1,options);
                if (options.checkAllCallback) {
                    options.checkAllCallback();
                }
            }
        }
        const submitBtn = pagination.querySelector('.pagination__submit');
        const inputPagination = pagination.querySelector('.pagination__input');
        submitBtn.onclick = (e) => {
            e.preventDefault();
            if (+inputPagination.value < numberPagination) {
                showPagination(+inputPagination.value,numberPagination,pagination);
                callback(+inputPagination.value,options);
                if (options.checkAllCallback) {
                    options.checkAllCallback();
                }
            }else {
                showModifier('.modifier-err','Bạn nhập số trang không chính xác','');
            }
        }
    }
}

// click sắp xếp
function clickArrange (selectorBlock,selectorBtns,callback,callbackShow,options) {
    const blockEl = document.querySelector(selectorBlock);
    const btnEls = blockEl.querySelectorAll(selectorBtns);
    var typeBtn = '';
    var nameColumn1 = '';

    let check = true;
    for (let i = 0; i < btnEls.length; i++) {
        for (let z = 0; z < btnEls.length;z++) {
            if (btnEls[z].matches('.active')) {
                check &&= false;
                break;
            }else {
                check &&= true;
            }
        }

        if (check) {
            btnEls[0].classList.add('active');
            typeBtn = btnEls[0].attributes.name.nodeValue;
            nameColumn1 = btnEls[0].dataset.namecolumn;
            // thêm kiểu sắp xếp vào options trường hợp vừa load trang
            options.arrange = function () {
                callback(options.mainArr,typeBtn,nameColumn1);
            }
            
            phanTrang(callbackShow,opitionShow);
        }
        btnEls[i].onclick = () => {
            if (!btnEls[i].matches('.active')) {
                btnEls[i].classList.add('active');
                typeBtn = btnEls[i].attributes.name.nodeValue;
                nameColumn1 = btnEls[i].dataset.namecolumn;
                // thêm kiểu sắp xếp vào options
                options.arrange = function () {
                    callback(options.mainArr,typeBtn,nameColumn1);
                }
                phanTrang(callbackShow,opitionShow);
                for (let j = 0; j < btnEls.length;j++) {
                    if (i == j) {
                        continue;
                    }else {
                        btnEls[j].classList.remove('active');
                    }
                }
            }
        }
    }
}

//hiển thị bảng danh sách danh mục
function showPageCateQlPagi (numberPagination,options) {
    const listEl = document.querySelector(options.selectorList);
    if (options.arrange) {
        options.arrange();
    }
    if (!numberPagination) {
        numberPagination = 0;
    }
    
    // vòng lặp lọc ra các truyện hiển thị
    let htmls = '';
    let nameUser = '';
    let quyenHan = '';
    for (let i = numberPagination*options.numberPagi;i < numberPagination*options.numberPagi + options.numberPagi; i++) {
        if (options.mainArr[i]) {
            options.subArr.forEach(userItem => {
                if (userItem['idUser'] == options.mainArr[i]['idUser']) {
                    nameUser = userItem['userName'];
                    quyenHan = userItem['quyenHan'];
                }
                // valueUser();
            });
            htmls += `
                    <tr>
                        <td>${options.mainArr[i]['idDanhMuc']}</td>
                        <td>${options.mainArr[i]['tenDanhMuc']}</td>
                        <td>${showNamecate(options.mainArr[i]['nhom'])}</td>
                        <td>
                            <a href="" class="text">${nameUser}</a>
                        </td>
                        <td>${showNameBadge(quyenHan)}</td>
                        <td>
                            ${time_distance_current(options.mainArr[i]['ngayThem'])} <span>( ${options.mainArr[i]['ngayThem'].replace('.000000','')} )</span>
                        </td>
                        <td>
                            <input type="checkbox" name="checkList[]" value="${options.mainArr[i]['idDanhMuc']}" class="chonCheckBox categoryCheckBox">
                        </td>
                    </tr>
                `;
        }else {
            continue;
        }
    }
    listEl.innerHTML = htmls;
}

// các phương thức sắp xếp
function arrangeWeb (listProduct,type,nameColumn) {
    if (type == "date") {
        // thời gian đăng truyện mới nhất lên trước
        listProduct.sort((a,b) => {
            let aDate = new Date(a[nameColumn]);
            let bDate = new Date(b[nameColumn]);
            return bDate - aDate;
        });
    }
    if (type == "date2") {
        // date2 sắp xếp theo thời gian cũ nhất lên trước
        listProduct.sort((a,b) => {
            let aDate = new Date(a[nameColumn]);
            let bDate = new Date(b[nameColumn]);
            return aDate - bDate;
        });
    }
    if (type == 'number') {
        console.log(type);
        // sắp xếp lớn nhất lên trước
        listProduct.sort((a,b) => {
            return b[nameColumn] - a[nameColumn];
        });
    }
    if (type == 'number2') {
        // sắp xếp bé nhất lên trước
        listProduct.sort((a,b) => {
            return b[nameColumn] - a[nameColumn];
        });
    }

    if (type == 'string') {
        listProduct.sort((a,b) => {
            if(a[nameColumn] < b[nameColumn]) { return -1; }
            if(a[nameColumn] > b[nameColumn]) { return 1; }
            return 0;
        });
    }
}

// tính khoảng cách thời gian giữa 2 ngày
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

// Tìm kiếm thời gian thực
function searchRealTime (callbackPagi,opitionShowCallback,showListCallback,options) {
    const formEl = document.querySelector(options.searchForm);
    const listEl = document.querySelector(options.selectorList)

    function searchRule (searchVl,arr) {
        let check = false;
        for (let i = 0; i< options.nameColumnSearch.length;i++) {
            let mainKeyword = removeVietnameseTones(arr[options.nameColumnSearch[i]]);

            if (mainKeyword.indexOf(searchVl) != -1) {
                check = true;
                break;
            }
        }
        return check;
    }

    formEl.oninput = () => {
        const inputValue = formEl.value;
        if (inputValue) {
            const searchList= [];
            let opitionShowCallbackNew = Object.assign({}, opitionShowCallback);
            for (let i = 0; i < opitionShowCallback.mainArr.length; i++) {
                if (searchRule(removeVietnameseTones(inputValue),opitionShowCallback.mainArr[i])) {
                    searchList.push(opitionShowCallback.mainArr[i]);
                }else {
                    continue;
                }
            }

            if (searchList.length == 0) {
                showModifier('.modifier.modifier-err','Không tìm thấy keyword','');;
            }

            opitionShowCallbackNew.mainArr = searchList;

            // show
            callbackPagi(showListCallback,opitionShowCallbackNew);
        }
    }
}

//show tên nhóm danh mục
function showNamecate (str) {
    let feedback;
    if (str == 'nhom1') {
        feedback = 'Thể Loại';
    }
    if (str == 'nhom2') {
        feedback = 'Bối Cảnh';
    }
    if (str == 'nhom3') {
        feedback = 'Thuộc Tính';
    }
    if (str == 'nhom4') {
        feedback = 'Tính Cách';
    }
    if (str == 'nhom5') {
        feedback = 'Lưu Phái';
    }
    if (str == 'nhom6') {
        feedback = 'Thị Giác';
    }
    return feedback;
}

// show tên quyền hạn
function showNameBadge (num) {
    let feedback;
    if (num == 1) {
        feedback = 'Người Mới';
    }
    if (num == 2) {
        feedback = 'Người Đăng Truyện';
    }
    if (num == 3) {
        feedback = 'Người Kiểm Duyệt';
    }
    if (num == 4) {
        feedback = 'Quản Trị Web';
    }
    if (num == 5) {
        feedback = 'Boss';
    }
    return feedback;
}


