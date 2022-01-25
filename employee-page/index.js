const menu = document.getElementById('menu-bars')
const sidebar_showed = document.getElementById('sidebar-showed')

menu.addEventListener('click', ()=> {
    sidebar_showed.classList.toggle('active')
})

