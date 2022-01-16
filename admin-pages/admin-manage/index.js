const logout = document.getElementById('logout')
const menu = document.getElementById('menu-bars')
const sidebar_showed = document.getElementById('sidebar-showed')

menu.addEventListener('click', ()=> {
    sidebar_showed.classList.toggle('active')
})




logout.onclick = ()=> {
    location.assign('/index.php')
}

const dashboard = document.getElementById('dashboard')
const products = document.getElementById('products')
const messages = document.getElementById('messages')
const manageEmployees = document.getElementById('manage-employee')

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