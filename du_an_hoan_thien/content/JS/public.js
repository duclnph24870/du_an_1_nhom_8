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
//modifyer

function showModifier (selectorModifier,titleText,contentText) {
    const modifier = document.querySelector(selectorModifier);
    const titleElment = modifier.querySelector('.modifier-title');
    const content = modifier.querySelector('.modifier-content');

    modifier.style.right = '10px';  
    titleElment.innerText = titleText;
    content.innerText = contentText;
    setTimeout(function(){
        modifier.style.right = '-500px';   
    },2000);
}

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

function nextPage (selectorBtn,selectorContent) {
    const btnElements = document.querySelectorAll(selectorBtn);
    const contents = document.querySelectorAll(selectorContent);
    for (let i = 0; i< btnElements.length;i++) {

        btnElements[i].onclick = () => {

            if (btnElements[i].matches('.active')) {

                btnElements[i].classList.remove('active');
                contents[i].classList.remove('active');

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

function nextPageAdmin (selectorBtn,selectorContent,selectorBtnChild = '',selectorContentChild = '') {
    const btnElements = document.querySelectorAll(selectorBtn);
    const contents = document.querySelectorAll(selectorContent);
    for (let i = 0; i< btnElements.length;i++) {

        btnElements[i].onclick = () => {

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

function showExp () {
    const havingEl = document.querySelector('.expUser__content-having'); 
    const requiredEl = document.querySelector('.expUser__content-required'); 
    const expEl = document.querySelector('.expUser__content');

    const longExp = Math.floor((+havingEl.innerText / +requiredEl.innerText)*100);
    expEl.style.width = `${longExp}%`;
}

function previewUpImg (selectorForm,selectorImg,selectorInput,selectorImgErr,submitOn) {
    const formEl = document.querySelector(selectorForm);
    const imgEl = formEl.querySelector(selectorImg);
    const inputEl = formEl.querySelector(selectorInput);
    const errMess = formEl.querySelector(selectorImgErr);
    
    function validateImg (inputType) {
        const validImageTypes = ['image/gif', 'image/jpeg', 'image/png']
        
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

function showEvent (nameEvent,timeShow = 600000) {
    setTimeout (function () {
        const eventEl = document.querySelector('.event');
        eventEl.classList.add(nameEvent);
        eventEl.classList.add('active');
    },timeShow); 
}

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



