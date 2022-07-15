
const login = document.querySelectorAll(".header__login");
const register = document.querySelectorAll(".header__register");
const modal = document.querySelector(".modal");
const overlay = document.querySelector(".modal__overlay");
const modalForm = document.getElementsByClassName("modal__form");
const nextForm = document.querySelectorAll(".modal__form-header-text");
const nextForm2 = document.querySelectorAll(".modal__form-footer label");
const forgotPass = document.querySelector(".modal__form-forgotPass");
const forgotBtn = document.querySelector(".modal__form-forgotPassBtn")

if (login || register) {
    login[0].addEventListener("click",() => {
            modal.style.display = 'flex';
            modalForm[1].style.display = 'none';
            forgotPass.style.display = 'none';
            modalForm[0].style.display = 'block';
        });
        
        register[0].addEventListener("click",() => {
            modal.style.display = 'flex';
            modalForm[0].style.display = 'none';
            modalForm[1].style.display = 'block';
            forgotPass.style.display = 'none';
        });
        
        login[1].addEventListener("click",() => {
            modal.style.display = 'flex';
            modalForm[1].style.display = 'none';
            modalForm[0].style.display = 'block';
            forgotPass.style.display = 'none';
        });
        
        register[1].addEventListener("click",() => {
            modal.style.display = 'flex';
            modalForm[0].style.display = 'none';
            modalForm[1].style.display = 'block';
            forgotPass.style.display = 'none';
        });
        
        overlay.addEventListener("click",()=> {
            modal.style.display = 'none';
        });
        
        if (login) {
            nextForm[1].addEventListener('click',() => {
                modalForm[0].style.display = 'none';
                modalForm[1].style.display = 'block';
            });
        }
        
        if (register) {
            nextForm[3].addEventListener('click',() => {
                modalForm[1].style.display = 'none';
                modalForm[0].style.display = 'block';
            });
        }
        
        if (login) {
            nextForm2[0].addEventListener('click',() => {
                modalForm[0].style.display = 'none';
                modalForm[1].style.display = 'block';
            });
        }
        
        if (register) {
            nextForm2[1].addEventListener('click',() => {
                modalForm[1].style.display = 'none';
                modalForm[0].style.display = 'block';
            });
        }
    
        if (login) {
            forgotBtn.addEventListener('click',() => {
                forgotPass.style.display = 'block';
                modalForm[0].style.display = 'none';
                modalForm[1].style.display = 'none';
            });
        }
}