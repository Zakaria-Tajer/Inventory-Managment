const menu = document.getElementById('menu-bars')
const sidebar_showed = document.getElementById('sidebar-showed')

const addBtnAction = document.getElementById('add_btn')
const remBtnAction = document.querySelectorAll('#rem-btn')
const fromAdd = document.getElementById('from_added')
const bells = document.querySelector('#bell')

const popup = document.getElementById('popup')
const msgContainer = document.getElementById('msgContainer')
const adminNames = document.getElementById('adminNames')


menu.addEventListener('click', ()=> {
    sidebar_showed.classList.toggle('active')
})

bells.onclick = ()=> {
    console.log(1);
     
    const req = new XMLHttpRequest()
    req.onreadystatechange = ()=> {
        if(req.readyState === XMLHttpRequest.DONE && req.status === 200){
            let data = req.responseText
            console.log(data);
            msgContainer.innerHTML = data
        }    
    }    
    req.open('GET', './php/getMsg.php', true)
    // let fromAdded = new FormData(fromAdd)
    req.send()
    popup.classList.toggle('active');

console.log(document.cookie.value);
    // adminNames.textContent = document.cookie = ''
}



        

