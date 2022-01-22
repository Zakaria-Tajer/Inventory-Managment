function addWarppers(){
    
const wrapperAll = document.createElement('div')
const img_container = document.createElement('div')
const product_info = document.createElement('div')
const color_container = document.createElement('div')
const remove_btn = document.createElement('button')
const modifier_btn = document.createElement('button')
const buttons = document.createElement('div')
const img_created = document.createElement('img')

container.classList.add('container')
wrapperAll.classList.add('wrapperAll')
// wrapperAll.classList.toggle('active')
img_container.classList.add('img_container')
product_info.classList.add('product_info')
color_container.classList.add('color_container')
buttons.classList.add('buttons')

img_created.src = '/';
remove_btn.textContent = 'Remove'
modifier_btn.textContent = 'Modifier'

remove_btn.classList.add('rm')
remove_btn.style.backgroundColor = '#D9534F'
modifier_btn.classList.add('rm')
modifier_btn.classList.add('modi')

// modifier_btn.classList.toggle('active')
modifier_btn.classList.toggle('active')
modifier_btn.style.backgroundColor = '#f4c430'
/////section 2

const pr_name = document.createElement('h1')
const pr_id = document.createElement('h3')
const pr_price = document.createElement('h1')
const pr_color = document.createElement('h1')
const color_boxes = document.createElement('div')
const text = document.createElement('div')
text.classList.add('text')
////colors
const colors = document.createElement('div')
const colors1 = document.createElement('div')
const colors2 = document.createElement('div')
const colors3 = document.createElement('div')
colors.style.backgroundColor  = 'yellow'
colors1.style.backgroundColor  = 'teal'
colors2.style.backgroundColor  = 'steelblue'
colors3.style.backgroundColor  = 'slateblue'
colors.classList.add('colors')
colors1.classList.add('colors')
colors2.classList.add('colors')
colors3.classList.add('colors')


color_boxes.classList.add('color_boxes')
pr_name.textContent = 'Product Name'

pr_id.textContent = '#Product Id'
pr_price.textContent = 'Product Price'
pr_color.textContent = 'Product Color:'


/////input
const productNameInput = document.createElement('input')
const productIdInput = document.createElement('input')
const productPriceInput = document.createElement('input')
const btnInput = document.createElement('button')

productNameInput.classList.add('btns-interaction')
productIdInput.classList.add('btns-interaction')
productPriceInput.classList.add('btns-interaction')
btnInput.classList.add('modifier_btn')
btnInput.textContent = 'Modifier Product'
productNameInput.setAttribute('placeholder','Product Name')
productIdInput.setAttribute('placeholder','Product id')
productPriceInput.setAttribute('placeholder','product Price')
btnInput.classList.toggle('active')

productNameInput.classList.toggle('active')
productIdInput.classList.toggle('active')
productPriceInput.classList.toggle('active')

modifier_btn.onclick = ()=> {
    wrapperAll.classList.toggle('active')
    buttons.classList.toggle('active')
}
   container.appendChild(wrapperAll)
   wrapperAll.appendChild(img_container)
   img_container.appendChild(img_created)
   wrapperAll.appendChild(product_info)
   wrapperAll.appendChild(color_container)
   wrapperAll.appendChild(buttons)
   color_container.appendChild(remove_btn)
   color_container.appendChild(modifier_btn)

   
   product_info.appendChild(text)
   text.appendChild(pr_name)
   text.appendChild(pr_id)
   text.appendChild(pr_price)
   text.appendChild(pr_color)

   product_info.appendChild(color_boxes)
   color_boxes.appendChild(colors)
   color_boxes.appendChild(colors1)
   color_boxes.appendChild(colors2)
   color_boxes.appendChild(colors3)

    buttons.appendChild(productNameInput)
    buttons.appendChild(productIdInput)
    buttons.appendChild(productPriceInput)
    buttons.appendChild(btnInput)
}


                    
        <!-- <div class="wrapper" id="wrapper">
            <div class="img-container">
                <img src="#">
            </div>
            <div class="info-product">
                <h1>Product Name</h1>
                <h3>#Product Id</h3>
                <h1>Product Price</h1>
                <div class="product-color">
                    <h1>Product Color: </h1>
                    <div class="color-container">
                        <div class="color" style="background-color:yellow;"></div>
                        <div class="color" style="background-color:teal;"></div>
                        <div class="color" style="background-color:steelblue;"></div>
                        <div class="color" style="background-color:slateblue ;"></div>
                    </div>
                </div>
            </div>
            <div class="btns">
                <button style="background-color: #357EBD;" id="addProduct">Add</button>
                <button style="background-color: #D9534F;" id="removeProduct">Remove</button>
                <button style="background-color: #f4c430" id="modifierProduct">Reduction</button>
            </div>
            <div class="interactionsBtns" id="interaction">
                <input type="text" placeholder="Product Name">
                <input type="text" placeholder="Product id">
                <input type="text" placeholder="Product price">
                <div class="btn-type">
                    <button style="background-color: #357EBD;" id="added">Add Product</button>
                    <button style="background-color: #D9534F;" id="removed">Remove Product</button>
                    <button style="background-color: #f4c430" id="modified">Reduction Product</button>
                </div>
            </div>
        </div>

        <div class="wrapper" id="wrapper">
            <div class="img-container">
                <img src="#">
            </div>
            <div class="info-product">
                <h1>Product Name</h1>
                <h3>#Product Id</h3>
                <h1>Product Price</h1>
                <div class="product-color">
                    <h1>Product Color: </h1>
                    <div class="color-container">
                        <div class="color" style="background-color:yellow;"></div>
                        <div class="color" style="background-color:teal;"></div>
                        <div class="color" style="background-color:steelblue;"></div>
                        <div class="color" style="background-color:slateblue ;"></div>
                    </div>
                </div>
            </div>
            <div class="btns">
                <button style="background-color: #357EBD;" id="addProduct">Add</button>
                <button style="background-color: #D9534F;" id="removeProduct">Remove</button>
                <button style="background-color: #f4c430" id="modifierProduct">Reduction</button>
            </div>
            <div class="interactionsBtns" id="interaction">
                <input type="text" placeholder="Product Name">
                <input type="text" placeholder="Product id">
                <input type="text" placeholder="Product price">
                <div class="btn-type">
                    <button style="background-color: #357EBD;" id="added">Add Product</button>
                    <button style="background-color: #D9534F;" id="removed">Remove Product</button>
                    <button style="background-color: #f4c430" id="modified">Reduction Product</button>
                </div>
            </div>
        </div>

        <div class="wrapper" id="wrapper">
            <div class="img-container">
                <img src="#">
            </div>
            <div class="info-product">
                <h1>Product Name</h1>
                <h3>#Product Id</h3>
                <h1>Product Price</h1>
                <div class="product-color">
                    <h1>Product Color: </h1>
                    <div class="color-container">
                        <div class="color" style="background-color:yellow;"></div>
                        <div class="color" style="background-color:teal;"></div>
                        <div class="color" style="background-color:steelblue;"></div>
                        <div class="color" style="background-color:slateblue ;"></div>
                    </div>
                </div>
            </div>
            <div class="btns">
                <button style="background-color: #357EBD;" id="addProduct">Add</button>
                <button style="background-color: #D9534F;" id="removeProduct">Remove</button>
                <button style="background-color: #f4c430" id="modifierProduct">Reduction</button>
            </div>
            <form class="interactionsBtns" id="interaction" action="#">
                <input type="text" placeholder="Product Name" name="product-name">
                <input type="text" placeholder="Product id" name="product-id">
                <input type="text" placeholder="Product price" name="product-price">
                <div class="btn-type">
                    <button style="background-color: #357EBD;" id="added" type="submit" name="add">Add Product</button>
                    <button style="background-color: #D9534F;" id="removed">Remove Product</button>
                    <button style="background-color: #f4c430" id="modified">Reduction Product</button>
                </div>
            </form>
        </div>

        <div class="wrapper" id="wrapper">
            <div class="img-container">
                <img src="#">
            </div>
            <div class="info-product">
                <h1>Product Name</h1>
                <h3>#Product Id</h3>
                <h1>Product Price</h1>
                <div class="product-color">
                    <h1>Product Color: </h1>
                    <div class="color-container">
                        <div class="color" style="background-color:yellow;"></div>
                        <div class="color" style="background-color:teal;"></div>
                        <div class="color" style="background-color:steelblue;"></div>
                        <div class="color" style="background-color:slateblue ;"></div>
                    </div>
                </div>
            </div>
            <div class="btns">
                <button style="background-color: #357EBD;" id="addProduct">Add</button>
                <button style="background-color: #D9534F;" id="removeProduct">Remove</button>
                <button style="background-color: #f4c430" id="modifierProduct">Reduction</button>
            </div>
            <div class="interactionsBtns" id="interaction">
                <input type="text" placeholder="Product Name">
                <input type="text" placeholder="Product id">
                <input type="text" placeholder="Product price">
                <div class="btn-type">
                    <button style="background-color: #357EBD;" id="added">Add Product</button>
                    <button style="background-color: #D9534F;" id="removed">Remove Product</button>
                    <button style="background-color: #f4c430" id="modified">Reduction Product</button>
                </div>
            </div>
        </div> -->