const h = document.getElementById('h')
const changeNameBtn = document.getElementById('changeNameBtn')
const ChangeName = document.getElementById('name')
const Actual_Name = document.getElementById('Actual_Name')

const logouts = document.getElementById('logout')

logouts.addEventListener('click', ()=> {
    const req = new XMLHttpRequest()
    req.onreadystatechange = ()=> {
        if(req.readyState === XMLHttpRequest.DONE && req.status === 200){
            let data = req.responseText
            console.log(data)
            if(data == 'redirectAdmin'){
                location.href = '../index.php'
            }
        }
    }
    req.open('POST', './logAdmin.php', true)
    // let formed_formed = new FormData(button_form)
    req.send()
})
    


changeNameBtn.addEventListener('click', ()=> {
    console.log(ChangeName.value);
    localStorage.setItem('Name',ChangeName.value)
    let Actname = localStorage.getItem('Name')
    Actual_Name.textContent = Actname
})

const edit_name = document.getElementById('edit_name')
const popup_edit = document.getElementById('popup_edit')

edit_name.addEventListener('click', ()=> {
    popup_edit.classList.toggle('active')
})

