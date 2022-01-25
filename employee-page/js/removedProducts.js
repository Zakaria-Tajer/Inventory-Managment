function clickCounter(){
    const rem = document.querySelectorAll('#rem-btn')
    for (let i = 0; i < rem.length; i++) {
        rem[i].addEventListener('click', ()=> {
           fetch('../php/rm.php');
            // console.log(1);
        })
        
        
    }
}
clickCounter()