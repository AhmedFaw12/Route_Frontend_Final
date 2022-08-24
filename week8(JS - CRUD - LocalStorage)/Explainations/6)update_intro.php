<!--  
Update Intro:
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
                            <td><button onclick="changeFormForUpdate(${i});" class="btn btn-outline-info">update</button></td>
                            <td><button onclick="deleteProduct(${i});" class="btn btn-outline-danger">delete</button></td>
                        </tr>`;
                }
                document.getElementById("tableBody").innerHTML = trs;
            };


            function changeFormForUpdate(productIndex){
                productName.value = productsContainer[productIndex].name;
                productPrice.value = productsContainer[productIndex].price;
                productCategory.value =  productsContainer[productIndex].category;
                productDesc.value = productsContainer[productIndex].desc;

                mainBtn.innerHTML ="update";
            }

            Explanaition:
                -we will first add onclick to call changeFormForUpdate and pass productIndex to it (while displaying products data)

                -changeFormForUpdate to fill inputs with product data that we want to update
                -to change addProduct button name to update

-->