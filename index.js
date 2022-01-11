const Signwrapper2 = document.getElementById('Sign')
const login = document.getElementById('login')
const link = document.getElementById('link')

const login_btn = document.getElementById('login-btn')
const SignUp_btn = document.getElementById('SignUp-btn')

// loadedElement
const Sign = document.getElementById('SignUps')
const login_loaded = document.getElementById('login-loaded')
// div
const login_wrapper = document.getElementById('login-wrapper')
const sign_wrapper = document.getElementById('sign-wrapper')

const loginEmail = document.getElementById('loginEmail')
const pswLogin = document.getElementById('pswLogin')

const SignupEmail = document.getElementById('SignupEmail')
const passwordSign = document.getElementById('passwordSign')
const passwordSign1 = document.getElementById('passwordSign1')


const errorText = document.getElementById('errorText')
const hideTextError = document.getElementById('hideTextError')


window.onload = ()=> {
    Sign.classList.add('loaded-sign')
    login_loaded.classList.add('login-loaded-btn')
}

login.addEventListener('click', ()=> {
    login_wrapper.style.display = 'block'
    sign_wrapper.style.display = 'none'    
})

Signwrapper2.addEventListener('click', ()=> {
    login_wrapper.style.display = 'none'
    sign_wrapper.style.display = 'block'
})

link.addEventListener('click', ()=> {
    login_wrapper.style.display = 'none'
    sign_wrapper.style.display = 'block'
})

function animate(email){
    email.style.border = '1px solid #66DE93'
    email.style.animation = 'shakeX'
    email.style.animationDuration = '2s'
}
const regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
login_btn.addEventListener('click', ()=> {
    if(loginEmail.value.match(regexEmail)){
        console.log('valid');
        animate(loginEmail)
    }else {
        loginEmail.classList.toggle('active')
        console.log('invalid');
    }
    if(pswLogin.value === ''){
        pswLogin.classList.toggle('active')
    }
})

SignUp_btn.addEventListener('click',()=> {
    if(SignupEmail.value.match(regexEmail)){
        animate(SignupEmail)
    }else {
        SignupEmail.classList.toggle('active')
        console.log('invalid');
    }

    if(passwordSign.value === '' && passwordSign1.value === ''){
        passwordSign.classList.toggle('active')
        passwordSign1.classList.toggle('active')
    }else {
        animate(passwordSign,passwordSign1)
    }
})