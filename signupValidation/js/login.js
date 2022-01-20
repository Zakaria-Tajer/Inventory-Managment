const login_form = document.getElementById('login-form')
const login_button = document.getElementById('login-btn')
const errorTextlogin = document.getElementById('errorTextlogin')
const LoginText = document.getElementById('LoginText')



login_form.addEventListener('submit', (e)=> {
    e.preventDefault()
})
login_button.addEventListener('click', ()=> {
    const req = new XMLHttpRequest()
    req.onreadystatechange = ()=> {
        if(req.readyState === XMLHttpRequest.DONE && req.status === 200){
            let data = req.response
            console.log(data);
            if(data == "admin"){
                location.href = './admin-pages/dashboard.php'
            }else if(data == 'Success'){
                location.href = '/employee-page/dashboard.php'
            }else {
                LoginText.textContent = data
                errorTextlogin.style.display = 'flex'
            }
            // if(data == "admin"){
            // }
        }
    }
    req.open('POST', './signupValidation/php/login.php', true)
    let formData = new FormData(login_form)
    req.send(formData)
})