<!-- 
how to write variable inside strings:
    using single/double quotes:
        var age = 10;
        var name = "Ahmed" + age + "Fawzy";
    using backtick:
        var age = 10;
        var name = `Ahmed ${age} Fawzy`;
    
Display data:
    Example:
        index.html:
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
                var product = {
                    name: productName.value,
                    price: productPrice.value,
                    category: productCategory.value,
                    desc: productDesc.value
                }

                productsContainer.push(product);
                displayProducts();
                clearForm();
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
        
            
            -we will make empty string
            -we will loop through productsContainer array
            -then add html rows containing products data in a string
            -after the loop ends , display string inside body tag using innerHTML
            -Where to call function:
                -we will call the function after we add new product at the end of addProduct function(when user click on addProduct button)

                -and we will also call displayProducts() in main.js(for the user when first open the web page) 

-->