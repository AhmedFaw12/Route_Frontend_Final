<!--

-test() method:
        -The test() method tests for a match in a string.

        -If it finds a match, it returns true, otherwise it returns false.

        -Syntax:
            RegExpObject.test(string)
        -Parameter Values
            -string:	Required. The string to be searched
        -Return Value
            -Boolean:	Returns true if it finds a match, otherwise false

        Example:
            -naming convention of regular expression variable is regex
            
            var regex = /^[A-Z][a-z]{3,8}$/;
            var str = "ahmed";

            console.log(regex.test(str)); //false because it didn't start with capital letter
----------------------------------------------------------------------------------------------------------------------------------------------------------------------
Regular Expression with inputs:
    Example:
        -we want to validate our productName, productPrice, productCategory, productDesc

        -we will make productName regular expression:
            -it will start with capital letter
            -then from 3-8 small letters
            -and prevent user from adding product , unless he matches our regular expression
        -we will make rest of product fields validationss

        -then if inputs not valid, error message will appear 
        
        
        index.html:
            <div class="w-75 mx-auto py-5 rounded shadow px-3 my-3">
                <h1 class="pb-2">CRUD SYSTEM</h1>

                <div class="mb-3">
                    <label class="mb-2" for="productName">productName:</label>
                    <input class=" my-1 form-control" type="text" name="productName" id="productName">

                    <div id="productNameAlert" class="d-none alert alert-danger">
                        <strong>productName must start with Capital and then 3 to 8</strong>
                    </div>

                </div>
                <div class="mb-3">
                    <label class="mb-2" for="productPrice">productPrice:</label>
                    <input class="my-1 form-control" type="number" name="productPrice" id="productPrice">

                    <div id="productPriceAlert" class="d-none alert alert-danger">
                        <strong>productPrice must in range between (100 - 8000)</strong>
                    </div>

                </div>
                <div class="mb-3">
                    <label class="mb-2" for="productCategory">productCategory:</label>
                    <input class="my-1 form-control" type="text" name="productCategory" id="productCategory">

                    <div id="productCategoryAlert" class="d-none alert alert-danger">
                        <strong>productCategory must be from 3 to 8 small letters</strong>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="mb-2" for="productDesc">productDesc:</label>
                    <textarea class="form-control" type="text" name="productDesc" id="productDesc"></textarea>

                    <div id="productDescAlert" class="d-none alert alert-danger">
                        <strong>productDescription must be from 3 to 3000 small or capital letters</strong>
                    </div>

                </div>
                <button onclick="addProduct();" class="btn btn-outline-info" id="mainBtn">add Product</button>
            </div>

        main.js:
            const productNameAlert = document.getElementById("productNameAlert");
            const productPriceAlert = document.getElementById("productPriceAlert");
            const productCategoryAlert = document.getElementById("productCategoryAlert");
            const productDescAlert = document.getElementById("productDescAlert");

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
                    clearForm();
                }
            }

            function validateProductName(){
                var regex = /^[A-Z][a-z]{3,8}$/;
                if(regex.test(productNameInput.value) == true){
                    productNameInput.classList.add("is-valid");     
                    productNameInput.classList.remove("is-invalid");     
                    productNameAlert.classList.replace("d-block", "d-none");

                    return true;
                }else{
                    productNameInput.classList.add("is-invalid");
                    productNameInput.classList.remove("is-valid");
                    productNameAlert.classList.replace("d-none", "d-block");

                    return false;
                }
            }
            function validateProductPrice(){
                //from 100 to 8000
                var regex = /^(([1-9][0-9]{2})|([1-7][0-9]{3})|8000)$/;
                if(regex.test(productPriceInput.value) == true){
                    productPriceInput.classList.add("is-valid");     
                    productPriceInput.classList.remove("is-invalid");     
                    productPriceAlert.classList.replace("d-block", "d-none");
                    return true;
                }else{
                    productPriceInput.classList.add("is-invalid");
                    productPriceInput.classList.remove("is-valid");
                    productPriceAlert.classList.replace("d-none", "d-block");
                    return false;
                }
                
            }
            function validateProductCategory(){
                var regex = /^[a-z]{3,8}$/;
                if(regex.test(productCategoryInput.value) == true){
                    productCategoryInput.classList.add("is-valid");     
                    productCategoryInput.classList.remove("is-invalid");     
                    productCategoryAlert.classList.replace("d-block", "d-none");
                    return true;
                }else{
                    productCategoryInput.classList.add("is-invalid");
                    productCategoryInput.classList.remove("is-valid");
                    productCategoryAlert.classList.replace("d-none", "d-block");
                    return false;
                }
            }
            function validateProductDesc(){
                var regex = /^[A-Za-z]{3,3000}$/;
                if(regex.test(productDescInput.value) == true){
                    productDescInput.classList.add("is-valid");     
                    productDescInput.classList.remove("is-invalid");     
                    productDescAlert.classList.replace("d-block", "d-none");
                    return true;
                }else{
                    productDescInput.classList.add("is-invalid");
                    productDescInput.classList.remove("is-valid");
                    productDescAlert.classList.replace("d-none", "d-block");
                    return false;
                }
            }


            productNameInput.addEventListener("keyup", validateProductName);
            productPriceInput.addEventListener("keyup", validateProductPrice);
            productCategoryInput.addEventListener("keyup", validateProductCategory);
            productDescInput.addEventListener("keyup", validateProductDesc);

------------------------------------------------------------------------------------------------------------------------------------------------------------------------
-blur:
    -The onblur event occurs when an object loses focus.

    -The onblur event is most often used with form validation code (e.g. when the user leaves a form field).

    -Tip: The onblur event is the opposite of the onfocus event.

-->