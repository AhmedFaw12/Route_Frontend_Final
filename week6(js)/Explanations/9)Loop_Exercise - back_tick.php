<!-- 
Loop Exercises:
    -Example:
        -we want to make 100 h2 inside a div using js

        index.html:
            <div id="demo">
            </div>
        main.js:            
            var cartoona = "";

            for(var i=0 ; i< 100; i++){
                cartoona += `
                <div id="demo">
                    <h2>Web design</h2>
                </div>`;
            }

            document.getElementById("demo").innerHTML = cartoona;

    -Example2:
        -we want to add 100 div which contain img, h2, p
        -we want to add 100 div in row div 
        index.html:
            <div class="container">
                <div class="row" id="demo">
                    
                </div>
            </div>
        main.js:
            var cartoona = "";

            for(var i=0 ; i< 100; i++){
                cartoona += `
                        <div class="col-md-3">
                            <img src="images/1.jpg" class="w-100" alt="">
                            <h2>web design</h2>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem, accusamus?</p>
                        </div>`;
            }

            document.getElementById("demo").innerHTML = cartoona;
    
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

js Quotes types:
    '' single quotes
    "" double quotes
    `` back-tick

    back-tick:
        -we can have multiple string lines

        example:
            cartoona += `
                <div class="col-md-3">
                    <img src="images/1.jpg" class="w-100" alt="">
                    <h2>web design</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem, accusamus?</p>
                </div>`;
            
        -in double, single quotes:
            -string can not consists of multiple lines(\n)

    -how to write variable inside strings:
        using single/double quotes:
            var age = 10;
            var name = "Ahmed" + age + "Fawzy";
        using backtick:
            var age = 10;
            var name = `Ahmed ${age} Fawzy`;

    
-->