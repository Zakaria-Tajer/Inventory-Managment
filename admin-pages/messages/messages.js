const hoverEffect = document.querySelectorAll('#hoverEffect')
const nav_elements = document.querySelectorAll('#nav-elements')
const container_users = document.getElementById('container_users')
const send = document.getElementById('send')
const input = document.getElementById('input')
const messages_senter_form = document.getElementById('messages_senter_form')
const act_msg = document.getElementById('act-msg')
// const user_wrapper = document.getElementById('user_wrapper')
const messages_container = document.getElementById('messages_container')
const wrapperF = document.getElementById('wrapperF')
const loaded = document.getElementById('onload')
const username = document.getElementById('username')




for (let i = 0; i < hoverEffect.length; i++) {
    hoverEffect[i].onmouseover = ()=> {
        console.log(2);
        nav_elements[i].classList.toggle('active')
        
    }
    hoverEffect[i].onmouseout = ()=> {
        console.log(2);
        nav_elements[i].classList.remove('active')
        
    }
    
}


// setInterval(()=> {

    const req = new XMLHttpRequest()
    req.onreadystatechange = ()=> {
        if(req.readyState === XMLHttpRequest.DONE && req.status === 200){
            let data = req.responseText
            // console.log(data);
            container_users.innerHTML = data
        }
    }
    req.open('GET', './php/employee.php', true)
    // let formData = new FormData(form)
    req.send()
// },500)



send.addEventListener('click', ()=> {
    // let k = 'h';
    const req = new XMLHttpRequest()
    req.onreadystatechange = ()=> {
    if(req.readyState === XMLHttpRequest.DONE && req.status === 200){
        let data = req.responseText
        console.log(data);
    }
}
    req.open('POST', './php/sendMsg.php', true)
    let messageForm = new FormData(messages_senter_form)
    req.send(messageForm)

    input.value = ' '
})




 

function clicked(name,id){
    wrapperF.style.display = 'block'
    loaded.style.display = 'none'
    console.log(name,id);
    // let profileId = id;
    // window.location.href=`message.php?uid=${id}`
    username.textContent = name;
    document.cookie = `profileid = ${id}`;
   

}


