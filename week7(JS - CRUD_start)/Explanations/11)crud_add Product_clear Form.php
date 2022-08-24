<!-- 
CRUD Add Product and Clear Form:
    Example:
        -we want to add product 
        -we will make an array objects like this:
            -var productsContainer = [
                {name:'nokia', price:9000, category:'mobile', desc:'good'},
                {name:'nokia', price:9000, category:'mobile', desc:'good'},
                {name:'nokia', price:9000, category:'mobile', desc:'good'},
                {name:'nokia', price:9000, category:'mobile', desc:'good'}
            ];

        -so we will make empty array and after getting each product data , we will push product data into the array

        -then we will make another function to clear form inputs :
            -we will set the values of all inputs to empty strings
            -then call clearForm() at the end of addProduct function

        index.html:
            <div class="w-75 m-auto py-5">
                <div class="mb-3">
                    <label for="productName" class="mb-2">Product Name</label>
                    <input class="form-control" type="text" name="productName" id="productName">
                </div>
                <div class="mb-3">
                    <label  for="productPrice" class="mb-2">Product Price</label>
                    <input class="form-control" type="number" name="productPrice" id="productPrice">
                </div>
                <div class="mb-3">
                    <label for="productCategory" class="mb-2">Product Category</label>
                    <input class="form-control" type="text" name="productCategory" id="productCategory">
                </div>            
                <div class="mb-3">
                    <label for="productDesc" class="mb-2">Product Description</label>
                    <textarea class="form-control" type="text" name="productDesc" id="productDesc"></textarea>
                </div>          
                <button onclick="addProduct();" class="btn btn-outline-info">add Product</button>
            </div>

        main.js:
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

                clearForm();
            }


            function clearForm(){
                productName.value = "";
                productPrice.value = "";
                productCategory.value = "";
                productDesc.value = "";
            }

            


-->