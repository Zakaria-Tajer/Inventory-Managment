const menu = document.getElementById('menu-bars')
const sidebar_showed = document.getElementById('sidebar-showed')

menu.addEventListener('click', ()=> {
    sidebar_showed.classList.toggle('active')
})


const removedProductsCount = document.getElementById('removedProductsCount')




const logout = document.getElementById('logout')

logout.onclick = ()=> {
    location.assign('../index.php')
}

const dashboard = document.getElementById('dashboard')
const products = document.getElementById('products')
const messages = document.getElementById('messages')
const manageEmployees = document.getElementById('manage-employee')

dashboard.onclick = ()=> {
    location.assign('./admin-pages/dashboard.php')
}
products.onclick = ()=> {
    location.assign('./admin-pages/admin-products/products.php')
}
messages.onclick = ()=> {
    location.assign('/messages/message.php')
}
manageEmployees.onclick = ()=> {
    location.assign('/admin-manage/manage.php')
}

