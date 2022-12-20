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

if (inputRange) {
    inputRange.addEventListener('change', () => {
        if (inputRange.value == 1) {
            textRange.innerHTML = '<i class="fas fa-star"></i>';     
        }else if (inputRange.value == 2) {
            textRange.innerHTML = '<i class="fas fa-star"></i>'+'<i class="fas fa-star"></i>';     
        }else if (inputRange.value == 3) {
            textRange.innerHTML = '<i class="fas fa-star"></i>'+'<i class="fas fa-star"></i>'+'<i class="fas fa-star"></i>';     
        }else if (inputRange.value == 4) {
            textRange.innerHTML = '<i class="fas fa-star"></i>'+'<i class="fas fa-star"></i>'+'<i class="fas fa-star"></i>'+'<i class="fas fa-star"></i>';     
        }else{
            textRange.innerHTML = '<i class="fas fa-star"></i>'+'<i class="fas fa-star"></i>'+'<i class="fas fa-star"></i>'+'<i class="fas fa-star"></i>'+'<i class="fas fa-star"></i>';     
        }
       
    })    
}







/*SLIDES TESTIMONY*/
let slides = document.querySelectorAll('.slider-container');
let nextBtn = document.querySelector('#next');
let prevBtn = document.querySelector('#prev');
let index = 0;


nextBtn.addEventListener('click', () => {
    next();
});

prevBtn.addEventListener('click', () => {
    prev();
})

function next() {
    slides[index].classList.remove('active');
    index = (index + 1) % slides.length;
    slides[index].classList.add('active');
}

function prev() {
    slides[index].classList.remove('active');
    index = (index - 1 + slides.length) % slides.length;
    slides[index].classList.add('active');
}







/*CART*/
// const checkCash = document.getElementById('cash_radio');
// const checkCard = document.getElementById('card_radio');
// const cashPay = document.querySelector('#cash_pay');
// const cardPay = document.querySelector('#card_pay');


// if (checkCash.checked) {
//     console.log('cash');
//     cashPay.style.display = 'block';
//     cardPay.style.display = 'none';
// }

// if (checkCard.checked) {
//     console.log('card');
//     cardPay.style.display = 'block';
//     cashPay.style.display = 'none';
// }