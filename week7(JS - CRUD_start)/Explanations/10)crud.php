<!-- 
Crud continue:
    Example:
        index.html:
            <div class="w-75 m-auto py-5">
                <div class="mb-3">
                    <label for="productName" class="mb-2">Product Name</label>
                    <input class="form-control" type="text" name="productName" id="productName">
                </div>
                <div class="mb-3">
                    <label  for="productPrice" class="mb-2">Product Price</label>
                    <input class="form-control" type="text" name="productPrice" id="productPrice">
                </div>
                <div class="mb-3">
                    <label for="productCategory" class="mb-2">Product Category</label>
                    <input class="form-control" type="number" name="productCategory" id="productCategory">
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

            //console.log(productName, productPrice, productCategory, productDesc);

            function addProduct(){
                var product = {
                    name: productName.value,
                    price: productPrice.value,
                    category: productCategory.value,
                    desc: productDesc.value
                }
                console.log(product);
            }

            -we want to get products
            -first we get whole inputs:
                var productName = document.getElementById("productName");

                -if we get the value at first before the function, it will get empty value

            -then we made a function to save product data in an object
            
            -this function will be called when we click on the button


-->