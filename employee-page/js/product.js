const form = document.getElementById('from_added')
const add = document.getElementById('add_btn')
const add_products = document.getElementById('add_products')
const showed_up = document.getElementById('showed_up')
const product_name = document.getElementById('product_name')
const con = document.getElementById('containers')
const logout = document.getElementById('logout')
// const logout_form = document.getElementById('logout_form')


logout_form.addEventListener('click', (e)=>{
    e.preventDefault()
})

const closeIcon = document.getElementById('close')
const update = document.getElementById('update')////btn
const rem_btn = document.querySelectorAll('#rem-btn')////btn
const button_form = document.getElementById('button_form')

button_form.addEventListener('click', (e)=>{
    e.preventDefault()
})



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
formed.addEventListener('click', (e)=> {
    e.preventDefault()
})



closeIcon.addEventListener('click', ()=> {
    showed_up.classList.toggle('active')

})

add_products.onclick = ()=> {
    showed_up.classList.toggle('active')
}


add.addEventListener('click', ()=> {
    const req = new XMLHttpRequest()
    req.onreadystatechange = ()=> {
        if(req.readyState === XMLHttpRequest.DONE && req.status === 200){
            let data = req.responseText
            console.log(data);
            if(data == "sucess"){
                location.assign('./dashboard.php')
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

// for (let i = 0; i < logout.length; i++) {
//     console.log(logout.length);
    logout.addEventListener('click', ()=> {
        const req = new XMLHttpRequest()
        req.onreadystatechange = ()=> {
            if(req.readyState === XMLHttpRequest.DONE && req.status === 200){
                let data = req.responseText
                console.log(data)
                if(data == 'header'){
                    location.href = '../index.php'
                }
            }
        }
        req.open('POST', '../logout.php', true)
        // let formed_formed = new FormData(button_form)
        req.send()
    })
    
// }


for (let i = 0; i < rem_btn.length; i++) {
    rem_btn[i].addEventListener('click', ()=> {
        const req = new XMLHttpRequest()
        req.onreadystatechange = ()=> {
            if(req.readyState === XMLHttpRequest.DONE && req.status === 200){
                let data = req.responseText
                console.log(data)
                if(data == 'good'){
                    // location.assign('./dashboard.php')
                }
            }
        }
        req.open('POST', './php/rm.php', true)
        let formed_formed = new FormData(button_form)
        req.send(formed_formed)
    })
    
    
}

