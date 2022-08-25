//get whole inputs tags
var productName = document.getElementById("productName");
var productPrice = document.getElementById("productPrice");
var productCategory = document.getElementById("productCategory");
var productDesc = document.getElementById("productDesc");
var mainBtn = document.getElementById("mainBtn");

//Array
var productsContainer;

//checking if local Storage is empty or not
if(localStorage.getItem("productsList") == null){
    productsContainer = [];
}else{
    productsContainer = JSON.parse(localStorage.getItem("productsList"));
    displayProducts();
}


function addProduct(){
    if(checkInputs() == true){
        var product = {
            name: productName.value,
            price: productPrice.value,
            category: productCategory.value,
            desc: productDesc.value
        }
    
        productsContainer.push(product);
        localStorage.setItem("productsList", JSON.stringify(productsContainer));

        displayProducts();
        clearForm();
    }else{
        window.alert("all fields are required");
    }
}


function clearForm(){
    productName.value = "";
    productPrice.value = "";
    productCategory.value = "";
    productDesc.value = "";
}


function displayProducts(){
    var trs = ``;
    for(var i = 0; i < productsContainer.length; i++){
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
    document.getElementById("tableBody").innerHTML = trs;
};


function checkInputs(){
    if(productName.value != "" && productPrice.value != ""
     && productCategory.value != "" && productDesc.value != "" ){
        return true;
    }
    return false;
}


function deleteProduct(productIndex){
    productsContainer.splice(productIndex,1);
    localStorage.setItem("productsList",JSON.stringify(productsContainer));
    displayProducts();
}


function searchProduct(searchTerm){
    var trs = ``;
    var searchTermLower = searchTerm.toLowerCase();
    for(var i = 0; i < productsContainer.length; i++){
        if(productsContainer[i].name.toLowerCase().includes(searchTerm.toLowerCase()) == true || productsContainer[i].category.toLowerCase().includes(searchTerm.toLowerCase()) == true){          
            var higlightSpan = `<span class="bg-danger">${searchTermLower}</span>`;
            trs += `
            <tr>
                <td>${i+1}</td>
                <td>${productsContainer[i].name.toLowerCase().replace(searchTermLower, higlightSpan)}</td>
                <td>${productsContainer[i].price}</td>
                <td>${productsContainer[i].category.toLowerCase().replace(searchTermLower, higlightSpan)}</td>
                <td>${productsContainer[i].desc}</td>
                <td><button onclick="editProduct(${i});" class="btn btn-outline-info">update</button></td>
                <td><button onclick="deleteProduct(${i});" class="btn btn-outline-danger">delete</button></td>
            </tr>`;
        }
        document.getElementById("tableBody").innerHTML = trs;
    }
}


function editProduct(productIndex){
    productName.value = productsContainer[productIndex].name;
    productPrice.value = productsContainer[productIndex].price;
    productCategory.value =  productsContainer[productIndex].category;
    productDesc.value = productsContainer[productIndex].desc;

    mainBtn.innerHTML ="update product";

    mainBtn.onclick = function(){
        updateProduct(productIndex);
    }
}

function updateProduct(productIndex){
    if(checkInputs() == true){
        productsContainer[productIndex].name = productName.value;
        productsContainer[productIndex].price = productPrice.value;
        productsContainer[productIndex].category = productCategory.value;
        productsContainer[productIndex].desc = productDesc.value;

        localStorage.setItem("productsList", JSON.stringify(productsContainer));
        displayProducts();
        
        clearForm();

        mainBtn.innerHTML = "add Product";
        mainBtn.onclick = addProduct;

    }else{
        alert("All fields are required");
    }
}




