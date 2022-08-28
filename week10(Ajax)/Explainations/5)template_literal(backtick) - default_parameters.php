<!-- 
template_literal(backtick):
    js Quotes types:
        '' single quotes
        "" double quotes
        `` back-tick

        back-tick:
            -we can have multiple string lines
            
            -Template literals provide an easy way to interpolate variables and     expressions into strings.
            
            -Automatic replacing of variables with real values is called string interpolation.

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
------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Default Parameters:
    -If a function in JavaScript is called with missing arguments (less than declared), the missing values are set to undefined:
        Example:
            function welcome(userName, age, salary){
                console.log(`hello ${userName} your age is ${age} your salary is ${salary}` );
            }

            welcome("ahmed", 25);//hello ahmed your age is 25 your salary is undefined

            welcome();//hello undefined your age is undefined your salary is undefined

    -before default parameters , we had to solve this using:
        Example:
            function welcome(userName, age, salary){
                if(userName == undefined){
                    userName = "system user";
                }
                if(age == undefined){
                    age = 25;
                }
                if(salary == undefined){
                    salary = 3000;
                }
                console.log(`hello ${userName} your age is ${age} your salary is ${salary}` );
            }

            welcome();//hello system user your age is 25 your salary is 3000

    using default parameters:
        Example:   
            function welcome(userName = "system user", age = 25, salary = 3000){
    
                console.log(`hello ${userName} your age is ${age} your salary is ${salary}` );
            }

            welcome(); //hello system user your age is 25 your salary is 3000
            
            welcome('ali', 28, 9000);//hello ali your age is 28 your salary is 9000

        Example:
            
            
            function welcome(userName = "system user", age = 25){
    
                console.log(`hello ${userName} your age is ${age} your salary is ${salary}` );
            }

            function welcome(userName = "system user", age = 25, salary = 3000){
                console.log("welcome2");
                console.log(`hello ${userName} your age is ${age} your salary is ${salary}` );
            }

            welcome('ali', 28, 9000);

            -js make welcome 2 override welcome 1

        Example:
            function welcome(userName = "system user", age = 25){    
                console.log(`hello ${userName} your age is ${age} your salary is ${salary}` );
            }

            welcome('ali', 28, 9000); //error 





-->

