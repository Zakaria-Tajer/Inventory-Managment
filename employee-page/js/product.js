const form = document.getElementById('from_added')
const add = document.getElementById('add_btn')
const add_products = document.getElementById('add_products')
const showed_up = document.getElementById('showed_up')
const product_name = document.getElementById('product_name')
const con = document.getElementById('containers')


const closeIcon = document.getElementById('close')
const update = document.getElementById('update')////btn
const rem_btn = document.getElementById('rem-btn')////btn
const button_form = document.getElementById('button_form')

button_form.onclick = (e)=> {
    // e.preventDefault()
}



const md = document.querySelectorAll('#modifier_btns')
const formed = document.getElementById('formed')
const container_all = document.querySelectorAll('#container_all')
console.log(md);


for (let i = 0; i < md.length; i++) {
    md[i].addEventListener('click', ()=> {
       formed.classList.toggle('active')
       container_all[i].classList.toggle('active')
   })
   
}
// formed.addEventListener('click', (e)=> {
//     e.preventDefault()
// })



closeIcon.addEventListener('click', ()=> {
    showed_up.classList.toggle('active')

})

add_products.onclick = ()=> {
    showed_up.classList.toggle('active')
}

form.addEventListener('submit', (e)=> {
    e.preventDefault()
})



add.addEventListener('click', ()=> {
    const req = new XMLHttpRequest()
    req.onreadystatechange = ()=> {
        if(req.readyState === XMLHttpRequest.DONE && req.status === 200){
            let data = req.responseText
            console.log(data);
            if(data == "sucess"){
                // }else {
                    //     ErrorHandler.textContent = data
                    //     errorText.style.display = 'flex'
                }
        }
    }
    req.open('POST', './php/product.php', true)
    let productForm = new FormData(form)
    req.send(productForm)
})



    


update.addEventListener('click', ()=> {
    const req = new XMLHttpRequest()
    req.onreadystatechange = ()=> {
        if(req.readyState === XMLHttpRequest.DONE && req.status === 200){
            let data = req.responseText
            console.log(data)
            
        }
    }
    req.open('POST', './php/update.php', true)
    let formed_form = new FormData(formed)
    req.send(formed_form)
})

    
// rem_btn.addEventListener('click', ()=> {
//     const req = new XMLHttpRequest()
//     req.onreadystatechange = ()=> {
//         if(req.readyState === XMLHttpRequest.DONE && req.status === 200){
//             let data = req.responseText
//             console.log(data)
            
//         }
//     }
//     req.open('POST', './php/removeProd.php', true)
//     let formed_form = new FormData(button_form)
//     req.send()
// })
