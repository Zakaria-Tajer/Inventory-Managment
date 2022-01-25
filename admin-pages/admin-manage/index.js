const logout = document.getElementById('logout')
const menu = document.getElementById('menu-bars')
const sidebar_showed = document.getElementById('sidebar-showed')
const dashboard = document.getElementById('dashboard')
const products = document.getElementById('products')
const messages = document.getElementById('messages')
const manageEmployees = document.getElementById('manage-employee')




////////ajax variables///

const addEmployee = document.querySelectorAll('#addEmployee')
const popupEmployeeAdded = document.getElementById('popupEmployeeAdded')
const addFromAdmin = document.getElementById('addFromAdmin')
const warpperForm = document.getElementById('warpperForm')
const errorDisplayer = document.getElementById('errorDisplayer')
const textError = document.getElementById('textError')
// let session_on = document.querySelectorAll('#session')
// let session_oof = document.querySelectorAll('#session_off')

warpperForm.addEventListener('submit', (e)=> {
    e.preventDefault()
})

for (let i = 0; i < addEmployee.length; i++) {
    addEmployee[i].addEventListener('click', ()=> {
        popupEmployeeAdded.classList.toggle('active')
        addFromAdmin.classList.toggle('active')
    })
    
    
}







addFromAdmin.addEventListener('click', ()=> {
    const req = new XMLHttpRequest()
    req.onreadystatechange = ()=> {
        if(req.readyState === XMLHttpRequest.DONE && req.status === 200){
            let data = req.responseText
            console.log(data);
            if(data == 'Success'){
                // console.log(1);
            }else {
                errorDisplayer.style.display = 'block';
                textError.innerHTML = data;
            }
    
        }
}
req.open('POST', './addEmployee.php', true)
let warppered = new FormData(warpperForm)
req.send(warppered)
})
   
    






dashboard.onclick = ()=> {
    location.assign('../dashboard.php')
}
products.addEventListener('click', (e)=> {
    e.preventDefault()
    location.assign('../admin-products/products.php')
})

messages.onclick = ()=> {
    location.assign('../messages/message.php')
}
manageEmployees.onclick = ()=> {
    location.assign('/manage.php')
}
menu.addEventListener('click', ()=> {
    sidebar_showed.classList.toggle('active')
})

logout.onclick = ()=> {
    location.assign('/index.php')
}

