
    const allBinhLuan = document.querySelectorAll('.binhLuanAll');
    const checkBoxComment = document.querySelectorAll('.checkBoxComment');
    allBinhLuan[0].addEventListener('click',()=> {
        for (let i=0;i< checkBoxComment.length;i++) {
            checkBoxComment[i].checked = true;
        }
    });
    allBinhLuan[1].addEventListener('click',()=> {
        for (let i=0;i< checkBoxComment.length;i++) {
            checkBoxComment[i].checked = false;
        }
    });
