const Signwrapper2 = document.getElementById('Sign')
const login = document.getElementById('login')
const link = document.getElementById('link')
const form = document.getElementById('form')


form.addEventListener('submit', (e)=> {
    e.preventDefault()
})



const login_btn = document.getElementById('login-btn')
const SignUp_btn = document.getElementById('SignUp-btn')



const errorText = document.getElementById('errorText')
const ErrorHandler = document.getElementById('ErrorText')


SignUp_btn.addEventListener('click', ()=> {
    const req = new XMLHttpRequest()
    req.onreadystatechange = ()=> {
        if(req.readyState === XMLHttpRequest.DONE && req.status === 200){
            let data = req.responseText
            console.log(data);
            if(data == "Success"){
                console.log('i');
            }else {
                ErrorHandler.textContent = data
                errorText.style.display = 'flex'
            }
        }
    }
    req.open('POST', './signupValidation/php/signup.php', true)
    let formData = new FormData(form)
    req.send(formData)
})


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


// const errorText = document.getElementById('errorText')
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




const dashboard = document.getElementById('dashboard')
const products = document.getElementById('products')
const messages = document.getElementById('messages')
const manageEmployees = document.getElementById('manage-employee')



// dashboard.onclick = ()=> {
//     location.assign('./admin-pages/dashboard.php')
// }
// products.onclick = ()=> {
//     location.assign('./admin-products/products.php')
// }
// messages.onclick = ()=> {
//     location.assign('../admin-pages/messages/message.php')
// }
// manageEmployees.onclick = ()=> {
//     location.assign('../admin-pages/admin-manage/manage.php')
// }



