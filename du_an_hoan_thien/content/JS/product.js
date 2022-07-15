
// chuyển item
const btn = document.querySelectorAll(".product__navbar-btn");
const btnItem = document.querySelectorAll(".product__navbar-item");
for (let i = 0;i<btn.length;i++) {
    btn[i].addEventListener('click',()=>{
        for (let j = 0;j<btnItem.length;j++) {
            btnItem[j].setAttribute('class','product__navbar-item');
            btn[j].setAttribute('class','product__navbar-btn');
        }
        const cl = btnItem[i].getAttribute('class');
        const dk = cl.includes('active');
        const cl1 = btn[i].getAttribute('class');
        const dk1 = cl1.includes('active');
        if (!dk && !dk1) {
            btnItem[i].classList.toggle('active');
            btn[i].classList.toggle('active');
        }
    });
}

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
            btnRep.onclick = () => {
                btnRep.classList.toggle('active');
            }
        });
    }
    // chú ý khi dùng function thì btn và inputForm phải là các element ngang cấp (btn ~ form)
    function showRep (selectorShowListBtn,selectorHiddenListBtn,selectorList) {
        const showListBtns = document.querySelectorAll(selectorShowListBtn);

        showListBtns.forEach((showListBtn) => {
            showListBtn.onclick = () => {
                const listRep = showListBtn.parentElement.querySelector(selectorList);
                const hiddenListBtn = showListBtn.parentElement.querySelector(selectorHiddenListBtn);
                listRep.classList.add('active');
                hiddenListBtn.style.display = 'block';

                hiddenListBtn.onclick = () => {
                    listRep.classList.remove('active');
                    hiddenListBtn.style.display = 'none';
                }
            }
        });
    }
