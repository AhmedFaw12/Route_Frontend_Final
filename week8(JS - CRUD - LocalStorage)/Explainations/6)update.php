<!--  
Update Solution1:

    Example:
        main.js:
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
                            <td><button onclick="updateProduct(${i});" class="btn btn-outline-info">update</button></td>
                            <td><button onclick="deleteProduct(${i});" class="btn btn-outline-danger">delete</button></td>
                        </tr>`;
                }
                document.getElementById("tableBody").innerHTML = trs;
            };


            function updateProduct(productIndex){
                productName.value = productsContainer[productIndex].name;
                productPrice.value = productsContainer[productIndex].price;
                productCategory.value =  productsContainer[productIndex].category;
                productDesc.value = productsContainer[productIndex].desc;

                mainBtn.innerHTML ="update product";

                mainBtn.onclick = function(){
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
            }


            Explanaition:
                -we will first add onclick to call updateProduct and pass productIndex to it (while displaying products data)

                -updateProduct:
                    -we will catch addButton and give it name mainBtn
                    -fill inputs with old product data that we want to update
                    -change mainBtn button html name to update Product
                    -change the onclick function of mainBtn button (from addProduct() to our anonymous function)
                    
                    -our anonymous function:
                        -update product data in productsContainer array with the new product data
                        -update localStorage
                        -display all products
                        -clear form
                        -change mainBtn button html name back to add Product
                        change the onclick function of mainBtn button (from anonymous function to addProduct):
                            mainBtn.onclick = addProduct;
                            -we only write the name of function without bracket()

                        -note:
                            -if we write function name with brackets , it will be called
                            -mainBtn.onclick = addProduct(); ///wrong wrong
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Another solution:
    main.js:
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


        -Explaination:
            -we just split our function into two functions:
                -editProduct():
                    -which fill form with old product data
                    -then change name of button to update product
                    -then change onclick function to call updateProduct function and pass to it product index:
                        mainBtn.onclick = function(){
                            updateProduct(productIndex);
                        }
                    -note:
                        mainBtn.onlick = updateProduct(productIndex); //wrong wrong wrong
                        -we must put it inside anonymous function
                    
                -updateProduct():
                    -it will update productContainer array
                    -update localStorage
                    -clear form
                    -display products
                    -change button name back to add product
                    -change onclick function back to addProduct
                            

-->

