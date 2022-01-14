const sidebarMobile = document.getElementById('hidden')
const close_icon = document.getElementById('close-icon')
const menu_icon = document.getElementById('menu-icon')


close_icon.addEventListener('click', ()=> {
    console.log(1);
    sidebarMobile.classList.toggle('active')
})

menu_icon.addEventListener('click', ()=> {
    sidebarMobile.classList.toggle('active')
})

const logout = document.getElementById('logout')

logout.onclick = ()=> {
    location.assign('../index.php')
}

const dashboard = document.getElementById('dashboard')
const products = document.getElementById('products')
const messages = document.getElementById('messages')
const manageEmployees = document.getElementById('manage-employee')

dashboard.onclick() = ()=> {
    location.assign('./admin-pages/dashboard.php')
}
products.onclick() = ()=> {
    location.assign('./admin-pages/admin-products/products.php')
}
messages.onclick() = ()=> {
    location.assign('/messages/message.php')
}
manageEmployees.onclick() = ()=> {
    location.assign('/admin-manage/manage.php')
}