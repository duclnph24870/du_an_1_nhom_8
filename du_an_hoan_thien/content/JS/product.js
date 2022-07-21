


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
