const rem = document.querySelectorAll('#rem')

let clicks = 0
for (let i = 0; i < rem.length; i++) {
    rem[i].addEventListener('click', ()=> {
        clicks += 1;
        localStorage.setItem('clicks', clicks);
        console.log(clicks);
        
    })
    
    
}