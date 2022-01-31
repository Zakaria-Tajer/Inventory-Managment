const messagesform = document.getElementById('messages_senter_form')
const messages_containers = document.getElementById('messages_container')
const sendicon = document.getElementById('send')



// sendicon.addEventListener('click', ()=> {
//     const req = new XMLHttpRequest()
//     req.onreadystatechange = ()=> {
//     if(req.readyState === XMLHttpRequest.DONE && req.status === 200){
//         let data = req.responseText
//         console.log(data);
//         messages_containers.innerHTML = data
//     }
// }
//     req.open('GET', './php/get-chat.php', true)
//     // let messageForm = new FormData(messagesform)
//     req.send()

    
// })

setInterval(()=> {
    // sendicon.addEventListener('click', ()=> {
        const req = new XMLHttpRequest()
        req.onreadystatechange = ()=> {
        if(req.readyState === XMLHttpRequest.DONE && req.status === 200){
            let data = req.responseText
            console.log(data);
            messages_containers.innerHTML = data
        }
    }
        req.open('GET', './php/get-chat.php', true)
        // let messageForm = new FormData(messagesform)
        req.send()
    
        
    // })
},1000)
