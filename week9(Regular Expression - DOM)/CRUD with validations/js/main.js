//get whole elements
const productNameInput = document.getElementById("productName");
const productPriceInput = document.getElementById("productPrice");
const productCategoryInput = document.getElementById("productCategory");
const productDescInput = document.getElementById("productDesc");
const mainBtn = document.getElementById("mainBtn");
const tableBody = document.getElementById("tableBody");

// console.log(productNameInput, productPriceInput, productCategoryInput, productDescInput, mainBtn);

var productsContainer;
var errors = ``;

if(localStorage.getItem("productsList") == null){
    productsContainer = [];
}else{
    productsContainer = JSON.parse(localStorage.getItem("productsList"));
    displayProducts();
}


function addProduct(){
    if(checkInputs() == true && validateProductName() == true && validateProductPrice() && validateProductCategory() && validateProductDesc()){
        
        var product = {
            name:productNameInput.value,
            price:productPriceInput.value,
            category:productCategoryInput.value,
            desc:productDescInput.value,
        }
        productsContainer.push(product);
        localStorage.setItem("productsList",JSON.stringify(productsContainer) );
        
        displayProducts();
        // clearForm();
    }else{
        document.getElementById("alert").innerHTML = errors;
        errors = ``;
    }
    
}


function clearForm(){
    productNameInput.value = ""  ;
    productPriceInput.value = ""  ;
    productCategoryInput.value = "";  
    productDescInput.value = ""  ;
}

function checkInputs(){
    if(productNameInput.value != "" && productPriceInput.value != "" 
    && productCategoryInput.value != "" && productDescInput.value != ""){
        return true;
    }
    errors += `<strong>all fields are required</strong>`
    return false;
}

function displayProducts(){
    var trs = ``;
    for(var i = 0 ; i < productsContainer.length; i++){
        trs += `
        <tr>
            <td>${i+1}</td>
            <td>${productsContainer[i].name}</td>
            <td>${productsContainer[i].price}</td>
            <td>${productsContainer[i].category}</td>
            <td>${productsContainer[i].desc}</td>
            
            <td><button onclick="editProduct(${i});" class="btn btn-outline-info">update</button></td>
            
            <td><button onclick="deleteProduct(${i});" class="btn btn-outline-danger">delete</button></td>
        </tr>`;
    }
    tableBody.innerHTML = trs;
}

function deleteProduct(prodcutIndex){
    productsContainer.splice(prodcutIndex, 1);
    localStorage.setItem("productsList",JSON.stringify(productsContainer));
    displayProducts();
}

function searchProducts(searchTerm){
    var searchTermLower = searchTerm.toLowerCase();
    var trs = ``;
    for(var i = 0 ; i < productsContainer.length; i++){
        if(productsContainer[i].name.toLowerCase().includes(searchTermLower) || productsContainer[i].category.toLowerCase().includes(searchTermLower)){
            var highlightSpan = `<span class="bg-danger">${searchTermLower}</span>`
            trs += `
            <tr>
                <td>${i+1}</td>
                <td>${productsContainer[i].name.toLowerCase().replace(searchTermLower, highlightSpan)}</td>
                <td>${productsContainer[i].price}</td>
                <td>${productsContainer[i].category.toLowerCase().replace(searchTermLower, highlightSpan)}</td>
                <td>${productsContainer[i].desc}</td>
                
                <td><button onclick="editProduct(${i});" class="btn btn-outline-info">update</button></td>
                
                <td><button onclick="deleteProduct(${i});" class="btn btn-outline-danger">delete</button></td>
            </tr>`;
        }
    }
    tableBody.innerHTML = trs;
}


function editProduct(productIndex){
    productNameInput.value = productsContainer[productIndex].name;
    productPriceInput.value = productsContainer[productIndex].price;
    productCategoryInput.value = productsContainer[productIndex].category;
    productDescInput.value = productsContainer[productIndex].desc;

    mainBtn.innerHTML = "update Product";

    mainBtn.onclick = function(){
        updateProduct(productIndex);
    }
}

function updateProduct(productIndex){
    if(checkInputs){
        productsContainer[productIndex].name = productNameInput.value;
        productsContainer[productIndex].price = productPriceInput.value;
        productsContainer[productIndex].category = productCategoryInput.value;
        productsContainer[productIndex].desc = productDescInput.value;

        localStorage.setItem("productsList", JSON.stringify(productsContainer));
        clearForm();

        displayProducts();
        mainBtn.innerHTML = "add Product";
        mainBtn.onclick = addProduct;       
    }else{
        alert("All fields are required");
    }
}


function validateProductName(){
    var regex = /^[A-Z][a-z]{3,8}$/;
    if(regex.test(productNameInput.value) == true){
        return true;
    }
    errors += `<strong>Product Name is Invalid</strong>`
    return false;
}
function validateProductPrice(){
    //from 100 to 8000
    var regex = /^(([1-9][0-9]{2})|([1-7][0-9]{3})|8000)$/;
    if(regex.test(productPriceInput.value) == true){
        return true;
    }
    errors += `<strong>Product Price is Invalid</strong>`
    return false;
}
function validateProductCategory(){
    var regex = /^[a-z]{3,8}$/;
    if(regex.test(productCategoryInput.value) == true){
        return true;
    }
    errors += `<strong>Product Category is Invalid</strong>`
    return false;
}
function validateProductDesc(){
    var regex = /^[A-Za-z]{3,3000}$/;
    if(regex.test(productDescInput.value) == true){
        return true;
    }
    errors += `<strong>Product Description is Invalid</strong>`
    return false;
}



