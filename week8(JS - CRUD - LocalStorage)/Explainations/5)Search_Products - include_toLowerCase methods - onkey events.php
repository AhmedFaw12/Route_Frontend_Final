<!--  
Search Products:
    -we want when user write letter or word to display all products that name contain this letter/word 

    -we want to make real time search , every letter user enters a letter, search function is called

    Example:
        index.html:
            <input onkeyup="searchProduct(this.value);" type="text" placeholder="Search..." class="form-control w-75 mx-auto" name="searchInput" id="searchInput">

        main.js:
            function searchProduct(searchTerm){
                var trs = ``;
                for(var i = 0; i < productsContainer.length; i++){
                    if(productsContainer[i].name.toLowerCase().includes(searchTerm.toLowerCase()) == true || productsContainer[i].category.toLowerCase().includes(searchTerm.toLowerCase()) == true){
                        trs += `
                        <tr>
                            <td>${i+1}</td>
                            <td>${productsContainer[i].name}</td>
                            <td>${productsContainer[i].price}</td>
                            <td>${productsContainer[i].category}</td>
                            <td>${productsContainer[i].desc}</td>
                            <td><button class="btn btn-outline-info">update</button></td>
                            <td><button onclick="deleteProduct(${i});" class="btn btn-outline-danger">delete</button></td>
                        </tr>`;
                    }else{
                        console.log("m4 mawgood");           
                    }

                    document.getElementById("tableBody").innerHTML = trs;
                }
            }

            Explaination:
                -when the user enter a key/letter and removes his hand , we will call searchProducts(), so we will use onkeyup event
                -we will pass to it value written in the input using :this.value
                -this ==> refers to the input which has event fired 
                -value returns to the value of the input the user has entered

                -searchProdcuts():
                    -we will loop through all products
                    -if productName or productCategory has this letter/word(searchTerm)
                    -add the product to the trs string

                    -then at the end , put the rows in the table body tag
        
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

includes():
    -it is a string method
    -The includes() method returns true if a string contains a specified string.

    -Otherwise it returns false.

    -The includes() method is case sensitive.


    -searchString — search string

    -position — If position is undefined, 0 is assumed, so as to search all of the String.

    example:
        var myname = "Ahmed Fawzy";
        var searchString = "ahm"; 
        var result = myname.includes(searchString);//returns true

----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

toLowerCase():
    -The toLowerCase() method converts a string to lowercase letters.

    -The toLowerCase() method does not change the original string.


----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
onkey events:
    -onkeyup:
        -The onkeyup event occurs when the user releases a key (on the keyboard).
        (المستخدم يرفع ايديه من على الزرار)
        Example:
            <input type="text" onkeyup="myFunction()">
        
        
    -onkeydown:
        -The onkeydown event occurs when the user is pressing a key (on the keyboard).
        (المستخدم بيلمس\بيدوس على الزرار ,مش بيلحق يرفع ايديه)

        Example:
            <input type="text" onkeydown="myFunction()">

    -onkeypress:

-->