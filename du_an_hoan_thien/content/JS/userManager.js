// Phân trang usermanager comment và đánh giá
function phanTrangUserManager (type,callback,options) {
    const pagination = document.querySelector(options.selectorPagi);
    let numberPagination = Math.ceil(options.mainArr.length/options.numberPagi);
    if (!pagination.matches('#pagi')) {
        pagination.setAttribute('id','pagi');
    }

    if (numberPagination >= 1) {
        showPagination(0,numberPagination,pagination);
        callback(type,options,'on',0);
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
                    callback(type,options,'on',+itemPagination[i].innerText);
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
                callback(type,options,'on',+itemNextPagination.innerText + 1);
                if (options.checkAllCallback) {
                    options.checkAllCallback();
                }
            }
        }
        if (prePagination) {
            prePagination.onclick = () => {
            const itemPrePagination = pagination.querySelector('.active.pagination__item.numberPagi');
                showPagination(+itemPrePagination.innerText - 1,numberPagination,pagination);
                callback(type,options,'on',+itemPrePagination.innerText - 1);
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
                callback(type,options,'on',+inputPagination.value);
                if (options.checkAllCallback) {
                    options.checkAllCallback();
                }
            }else {
                showModifier('.modifier-err','Bạn nhập số trang không chính xác','');
            }
        }
    }
}