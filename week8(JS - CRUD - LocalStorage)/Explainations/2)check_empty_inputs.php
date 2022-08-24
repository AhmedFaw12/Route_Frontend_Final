<!-- 
Check empty Inputs:
    Example:
        index.html:
            <div class="w-75 m-auto py-5" >
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

    
            <div class="w-75 mx-auto overflow-auto">
                <input type="text" placeholder="Search..." class="form-control w-75 mx-auto" name="searchInput" id="searchInput">

                <table class="table table-bordered table-dark my-5 text-center">
                    <thead>
                        <th>Index</th>
                        <th>ProductName</th>
                        <th>ProductPrice</th>
                        <th>ProductCategory</th>
                        <th>ProductDescription</th>
                        <th>update</th>
                        <th>delete</th>
                    </thead>
                    <tbody id="tableBody">

                    </tbody>
                </table>
            </div>
        main.js:
            //get whole inputs tags
            var productName = document.getElementById("productName");
            var productPrice = document.getElementById("productPrice");
            var productCategory = document.getElementById("productCategory");
            var productDesc = document.getElementById("productDesc");


            //Array
            var productsContainer = [];

            function addProduct(){
                if(checkInputs() == true){
                    var product = {
                        name: productName.value,
                        price: productPrice.value,
                        category: productCategory.value,
                        desc: productDesc.value
                    }
                
                    productsContainer.push(product);
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
                            <td><button class="btn btn-outline-info">update</button></td>
                            <td><button class="btn btn-outline-danger">delete</button></td>
                        </tr>`;
                }
                document.getElementById("tableBody").innerHTML = trs;
            };

            displayProducts();


            function checkInputs(){
                if(productName.value != "" && productPrice.value != ""
                && productCategory.value != "" && productDesc.value != "" ){
                    return true;
                }
                return false;
            }

            -we will check for empty inputs
            -so that when user press addProdcut and there are some fields/inputs are empty , then he can not add the product
            -we made a seperate function that check that all inputs are empty or not
            -then in addProduct() , we will use this function
            -if all inputs are not empty, then add the product to the products container and do all the job
            -if any of the inputs are empty, it will not add product , and display an error message to the user
            

        
            

-->