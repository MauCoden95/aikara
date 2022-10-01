/*HEADER*/
const btnLogin = document.querySelector('.login');
const formLogin = document.querySelector('.form-login');

btnLogin.addEventListener('click', () => {
    if (formLogin.classList.contains('no-active')) {
        formLogin.classList.remove('no-active');
        formLogin.classList.add('active');    
    }else{
        formLogin.classList.remove('active');
        formLogin.classList.add('no-active');
    }

    if (btnLogin.classList.contains('login-no-active')) {
        btnLogin.classList.remove('login-no-active');
        btnLogin.classList.add('login-active');    
    }else{
        btnLogin.classList.remove('login-active');
        btnLogin.classList.add('login-no-active');
    }
});