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