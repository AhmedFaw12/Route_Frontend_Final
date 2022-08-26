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
        -we will make an error string variable to hold all errorss
        
        index.html:
            <div class="alert alert-danger" id="alert">
                
            </div>

        main.js:
            var errors = ``;

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

            function checkInputs(){
                if(productNameInput.value != "" && productPriceInput.value != "" 
                && productCategoryInput.value != "" && productDescInput.value != ""){
                    return true;
                }
                errors += `<strong>all fields are required</strong>`
                return false;
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


-->