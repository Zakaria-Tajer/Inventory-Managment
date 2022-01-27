const menu = document.getElementById('menu-bars')
const sidebar_showed = document.getElementById('sidebar-showed')

menu.addEventListener('click', ()=> {
    sidebar_showed.classList.toggle('active')
})


// const removedProductsCount = document.getElementById('removedProductsCount')




// logout.onclick = ()=> {
//     location.assign('../index.php')
// }

const dashboard = document.getElementById('dashboard')
const products = document.getElementById('products')
const messages = document.getElementById('messages')
const manageEmployees = document.getElementById('manage-employee')

// dashboard.onclick = ()=> {
//     location.assign('./admin-pages/dashboard.php')
// }
// products.onclick = ()=> {
//     location.assign('./admin-pages/admin-products/products.php')
// }
// messages.onclick = ()=> {
//     location.assign('/messages/message.php')
// }
// manageEmployees.onclick = ()=> {
//     location.assign('/admin-manage/manage.php')
// }

// setInterval(()=> {
//     const req = new XMLHttpRequest()
//         req.onreadystatechange = ()=> {
//             if(req.readyState === XMLHttpRequest.DONE && req.status === 200){
//                 let data = req.responseText
//                 console.log(data);
                
//             }
//         }
//         req.open('GET', '../employee-page/actionAdd.php', true)
//         // let fromAdded = new FormData(fromAdd)
//         req.send()
   
// },10000)
            
