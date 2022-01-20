const interaction = document.querySelectorAll('#interaction')
const wrapper = document.querySelectorAll('#wrapper')
const addProduct = document.querySelectorAll('#addProduct')
const removeProduct = document.querySelectorAll('#removeProduct')
const modifierProduct = document.querySelectorAll('#modifierProduct')

const added = document.querySelectorAll('#added')
const removed = document.querySelectorAll('#removed')
const modified = document.querySelectorAll('#modified')
const img = document.getElementById('img')



const menu = document.getElementById('menu-bars')
const sidebar_showed = document.getElementById('sidebar-showed')

menu.addEventListener('click', ()=> {
    sidebar_showed.classList.toggle('active')
})





for (let i = 0; i < wrapper.length; i++) {
    // addProduct[i].addEventListener('click', ()=> {
    //     img.classList.toggle('active')
    //     wrapper[i].classList.toggle('active')
    //     interaction[i].classList.toggle('active')
    //     added[i].classList.toggle('active')
    // })
    removeProduct[i].addEventListener('click', ()=> {
        img.classList.toggle('active')
        wrapper[i].classList.toggle('active')
        interaction[i].classList.toggle('active')
        removed[i].classList.toggle('active')
    })
    modifierProduct[i].addEventListener('click', ()=> {
        img.classList.toggle('active')
        wrapper[i].classList.toggle('active')
        interaction[i].classList.toggle('active')
        modified[i].classList.toggle('active')
    })
}