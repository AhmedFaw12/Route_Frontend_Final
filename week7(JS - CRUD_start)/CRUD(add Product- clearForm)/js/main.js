//get whole inputs tags
var productName = document.getElementById("productName");
var productPrice = document.getElementById("productPrice");
var productCategory = document.getElementById("productCategory");
var productDesc = document.getElementById("productDesc");

// console.log(productName, productPrice, productCategory, productDesc);

//Array
var productsContainer = [];

function addProduct(){
    var product = {
        name: productName.value,
        price: productPrice.value,
        category: productCategory.value,
        desc: productDesc.value
    }

    productsContainer.push(product);
    // console.log(productsContainer);

    clearForm();
}


function clearForm(){
    productName.value = "";
    productPrice.value = "";
    productCategory.value = "";
    productDesc.value = "";
}


