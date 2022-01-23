const h = document.getElementById('h')
const changeNameBtn = document.getElementById('changeNameBtn')
const ChangeName = document.getElementById('name')
const Actual_Name = document.getElementById('Actual_Name')

window.onload = ()=> {
    let Actname = localStorage.getItem('Name')
    Actual_Name.textContent = Actname

    let rmClicked = localStorage.getItem('clicks');        
    
    removedProductsCount.textContent = rmClicked
    
}

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

