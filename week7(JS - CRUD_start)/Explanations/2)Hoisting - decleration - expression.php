<!-- 
Hoisting:
    -hoisting (رفع)
    -js hoist some code parts to the up
    -Hoisting is JavaScript's default behavior of moving declarations to the top.

    variable hoisting:
        Example:
            var x = 10;

            -browser consider this statement consists of two parts:
                -var x; ===> is called declare
                -x = 10; ===> is called assignment
        
        -variables should be declare at the top of our code , then we use them 

        Example:
            our code before hoisting:
                console.log("hello");
                
                var x = 10;
                
                console.log("welcome");
            
            our code after hoisting:
                var x;
                console.log("hello");
                
                x = 10;
                
                console.log("welcome");
                
                x declaration is hoisted

        Example(interview):
            console.log(x);

            var x = 10;

            -it will not give error
            -as var x will be hoisted at the top of code
            -and output will be undefined

            our code after hoisting:
                var x;
                console.log(x);
                x = 10;
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------    
    Decleration(statement) function hoisting:

        Example:
            before hoisting:
                function sum(x, y){
                    return x + y;
                }

            browser point of view:
                var sum;
                sum = function(x,y){
                    return x + y;
                }
            
            -both of declaration(var sum) and  body(sum=function(x,y){return x + y}) are hoisted at the top of code
        
        Example:
            my code:
                sum(10, 20);
                    
                function sum(x, y){
                    console.log(x+y);
                }

            browser point of view:
                sum(10, 20);

                var sum;
                sum = function(x,y){
                    console.log( x + y);
                }
                
            after hoisting:
                var sum;
                sum = function(x,y){
                    console.log( x + y);
                }

                sum(10, 20);//30

                
    
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    Expression(Anonymous function) hoisting:
        Example:
            my code:
                var sum = function(x, y){
                    return x + y;
                }

            browser point of view(before hoisting):
                var sum;
                sum = function(x,y){
                    return x + y;
                }
                
            -only declaration(var sum;) will be hoisted at the top of the code
            -but body: sum = function(x,y){return x + y;} remain in its original places
        
        Example:
            my code:
                sum(10, 20);
                    
                var sum = function(x, y){
                    console.log(x+y);
                }

            browser point of view:
                sum(10, 20);

                var sum;
                sum = function(x,y){
                    console.log( x + y);
                }
                
            after hoisting:
                var sum;
                
                sum(10, 20);//30
                
                sum = function(x,y){
                    console.log( x + y);
                }

                -it will give error


            
        -hoisting is not applied on expression function    
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Expression Function(anonymous function):
    -A JavaScript function can also be defined using an expression.

    -A function expression can be stored in a variable:
    -anonymous function (a function without a name).
    -Functions stored in variables do not need function names. They are always invoked (called) using the variable name.

    Example:
        var sum = function(x , y){
            var result = x + y;
            console.log(result);
        }

        sum(2,3);
        
        -sum is just the name of the function

    Example:
        var sum = function(x , y){
            var result = x + y;
            return result;
        }
        
        var x = sum(2,3);

        -sum is just the name of the function

    -anything that doesn't start with word function is called expression function
    in jquery:
        !function(){} ==> not a function
        (function(){})() ==> also expression function because it started with (

    how browser see expression function:
        Example:
            my code:
                function sum(x, y){
                    return x + y;
                }

            browser point of view:
                var sum;
                sum = function(x,y){
                    return x + y;
                }
            
    -hoisting is not applied on the body of expression function

----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
decleration function(statement function):
    syntax:
        function functionName(parameters) {
            // code to be executed
        }
    Example:
        function sum(a, b) {
           return a + b;
        }

        var x = sum(12, 2);
    
    how browser see expression function:
        Example:
            my code:
                var sum = function(x, y){
                    return x + y;
                }

            browser point of view:
                var sum;
                sum = function(x,y){
                    return x + y;
                }
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Examples(Interview) on decleration and expression functions and :
    Example:
        function foo(){
            function bar(){return 3;} //decleration function
            return bar();
            function bar(){return 8;} //decleration function
        }

        window.alert(foo()); //8

        Explaination:
            after hoisting:
                function foo(){
                    function bar(){return 3;} 
                    function bar(){return 8;}
                    return bar();
                }

                window.alert(foo()); //8
            -the first bar() function is already on the top
            -the second bar() function will hoisted and became below first bar()
            -then second bar() function will override the first one 
            -so the answer is 8
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    Example:
        function foo(){
            var bar = function(){return 3;}//expression function
            return bar();
            var bar = function(){return 8;}//expression function
        }

        window.alert(foo()); //3

        Explanation:
            -expression functions are not hoisted
            -so they will remain in their places
            -code end after return
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    Example:
        function foo(){
            return bar();
            function bar(){return 3;} //decleration function
            var bar = function(){return 8;} //expression function
        }

        window.alert(foo());

        -Explaination:
            -first bar() is hoisted as it is decleration
            -second bar() is not hoisted as it is expression
            function foo(){
                function bar(){return 3;} //decleration function
                return bar();
                var bar = function(){return 8;} //expression function
            } 
            -so result will be 3
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    Example:
        console.log(foo());
        var foo = function(){
            return bar();
            function bar(){return 3;}
            var bar = function(){return 8;}
        }

        -foo is an expression function , so it will not be hoisted
        -so it will give error 
        after hoisting:
            var foo;    
            console.log(foo());
            foo = function(){
                function bar(){return 3;}
                return bar();
                var bar = function(){return 8;}
            } 
-->
