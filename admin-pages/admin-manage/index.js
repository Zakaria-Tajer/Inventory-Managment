const logout = document.getElementById('logout')




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