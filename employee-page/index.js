const menu = document.getElementById('menu-bars')
const sidebar_showed = document.getElementById('sidebar-showed')

const addBtnAction = document.getElementById('add_btn')
const remBtnAction = document.querySelectorAll('#rem-btn')
const fromAdd = document.getElementById('from_added')

// addBtnAction.addEventListener('click', ()=> {
//     const req = new XMLHttpRequest()
//     req.onreadystatechange = ()=> {
//         if(req.readyState === XMLHttpRequest.DONE && req.status === 200){
//             let data = req.responseText
//             console.log(data);
            
//         }
//     }
//     req.open('POST', './actionAdd.php', true)
//     let fromAdded = new FormData(fromAdd)
//     req.send(fromAdded)
            
// })


// for (let i = 0; i < remBtnAction.length; i++) {
//     remBtnAction[i].addEventListener('click', ()=> {
//         const req = new XMLHttpRequest()
//         req.onreadystatechange = ()=> {
//             if(req.readyState === XMLHttpRequest.DONE && req.status === 200){
//                 let data = req.responseText
//                 console.log(data);
                
//             }
//         }
//         req.open('POST', './actionRm.php', true)
//         // let fromAdded = new FormData(fromAdd)
//         req.send()
                
//     })
    
// }
        


menu.addEventListener('click', ()=> {
    sidebar_showed.classList.toggle('active')
})



