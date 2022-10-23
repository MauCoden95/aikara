/*HEADER*/
const btnLogin = document.querySelector('.login');
const formLogin = document.querySelector('.form-login');

if (btnLogin) {
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
}







/*HEADER*/
const btnUser = document.querySelector('.user-active');

if (btnUser) {
    btnUser.addEventListener('click', () => {    
        if (formLogin.classList.contains('no-active')) {
            formLogin.classList.remove('no-active');
            formLogin.classList.add('active');    
        }else{
            formLogin.classList.remove('active');
            formLogin.classList.add('no-active');
        }
    
        if (btnUser.classList.contains('login-no-active')) {
            btnUser.classList.remove('login-no-active');
            btnUser.classList.add('login-active');    
        }else{
            btnUser.classList.remove('login-active');
            btnUser.classList.add('login-no-active');
        }
    });    
}



/*SLIDER*/
const videoBtn = document.querySelectorAll('.vid-btn');


videoBtn.forEach(btn => {
    btn.addEventListener('click', () => {
        document.querySelector('.controls .active').classList.remove('active');
        btn.classList.add('active');

        let src = btn.getAttribute('data-src');
        document.querySelector('#video-slider').src = src;
    });
});






/*REVIEWS*/
const inputRange = document.querySelector('.range');
const textRange = document.querySelector('.range-value');



inputRange.addEventListener('change', () => {
    textRange.innerHTML = inputRange.value;
})



