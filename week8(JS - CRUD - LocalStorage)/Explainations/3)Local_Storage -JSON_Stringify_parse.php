<!-- 
Local Storage:
    -local storage appeared in 2010-2012
    -local storage is a small database in the browser
    -it will not remove by refresh or closing computer or no internet
    -local storage is so limited (max:5 MB)

    localStorage object:
        -The localStorage object allows you to save key/value pairs in the browser.
        -The localStorage object stores data with no expiration date.
        -The data is not deleted when the browser is closed

        localStorage Methods:
            -Save Data to Local Storage:
                localStorage.setItem(key, value);
                
                -key must be string
                -value must be string

            -Read Data from Local Storage:
                let lastname = localStorage.getItem(key);

                -return string
                -Returns the current value associated with the given key, or null if the given key does not exist.

            -Remove Data from Local Storage:
                localStorage.removeItem(key);
            -Remove All (Clear Local Storage):
                localStorage.clear();
            -get length of localStorage
                localStorage.length

                
        -How to open localstorage in the browser:
            -right click 
            -inspect
            -application
            -localStorage: file://

        Note:
            -data in localStorage is specific to the browser
            -if we saved item in chrome localStorage
            -we will not find it in firefox/anybrowser localStorge
            -data exists in the browser not on computer


        Note:
            -array of objects in programming is called json
            -JSON(JavaScript Object Notation)
            -Notation(means way of writing)
            -JSON can be object or array of objects

            -to convert JSON(object/array of object) to string:
                JSON.stringify(productsContainer)
            
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Add & display Products using LocalStorage:
    Example:
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
                    // clearForm();
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


            function checkInputs(){
                if(productName.value != "" && productPrice.value != ""
                && productCategory.value != "" && productDesc.value != "" ){
                    return true;
                }
                return false;
            }


        Explaination:
            -we want to add products and save it in local Storage , so when we refresh browser/close it , data is displayed normally
            
            -we will modify addProduct()
            -after saving product data in productsContainer(array of objects)
            -we will save productsContainer in local Storage
            -but setItem takes string values only , so we will convert array of objects to string using JSON.stringify(our array of objects)

            -but when user refresh page,we initialized productsContainer = [] , when we add new product ,it will empty previous localStorage data a
            -so we need to modify productsContainer initialization
            
            -we will check if  localStorage contain our item or not
            
            -if localStorage doesnot contain our item, this means that it is the first time for the user to open our page/website
            -so we will initialize productsContainer to empty array
            
            -if localStorage contain our item, then we initialize our productContainer to have this item value, but data coming from localStorage is string , so we need to convert it to object/array of objects by using JSON.parse()
            
            -also we need to call displayProducts if localSorage contain our item, so that when user closes browser/page and reopen it, data is displayed for him



----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
JSON :
    -JSON stands for JavaScript Object Notation

    -JSON is a text format for storing and transporting data

    -JSON is "self-describing" and easy to understand

    -JSON is plain text written in JavaScript object notation

    -JSON is used to send data between computers
    -JSON is language independent *

    -The JSON syntax is derived from JavaScript object notation, but the JSON format is text only.

    -Code for reading and generating JSON exists in many programming languages.

    -Why Use JSON?
        -The JSON format is syntactically similar to the code for creating JavaScript objects. Because of this, a JavaScript program can easily convert JSON data into JavaScript objects.

        -Since the format is text only, JSON data can easily be sent between computers, and used by any programming language.

        -JavaScript has a built in function for converting JSON strings into JavaScript objects:
            JSON.parse()

        -JavaScript also has a built in function for converting an object/array of objects into a JSON string:
            JSON.stringify()
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


-->