<!-- 
Variable Scope:
    -JavaScript has 3 types of scope:
        Global scope
        Function(local) scope
        Block scope

    Global scope:
        -Variables declared Globally (outside any function) have Global Scope.

        -Global variables can be accessed from anywhere in a JavaScript program.

        -Variables declared with var, let and const are quite similar when declared outside a block.

        -A global variable has Global Scope:
            -All scripts and functions on a web page can access it. 

        Example:
            var x = 10; //global

        Note:
            -many global variables consume the ram (slower the code)

        Example:
            -if we used var keyword inside a block , it will be treated as a global variable
            
            var isAdmin = true;
            if(isAdmin == true){
                var page =0;
            }

            console.log(page); //0
            -page variable can be accessed anywhere because of var keyword
            
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    Function(local) scope:
        -JavaScript has function scope: Each function creates a new scope.

        -Variables defined inside a function are not accessible (visible) from outside the function.

        -Variables declared with var, let and const are quite similar when declared inside a function.
        
        example:            
            var x = 10;

            function test(){
                var y = 20;// local scope
                console.log(x); //10 global variable can be accessed any where 
            }

            console.log(y);// gives error (y cannot be accessed outside function)
        
        -note:
            after function is finised , local variables are deleted
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    Block scope:
        
        -Before ES6 (2015), JavaScript had only Global Scope and Function Scope.

        -ES6 introduced two important new JavaScript keywords: let and const.

        -These two keywords provide Block Scope in JavaScript.

        -Variables declared inside a { } block cannot be accessed from outside the block


        -Variables declared with the var keyword can NOT have block scope:
            -Variables declared inside a { } block can be accessed from outside the block.
        
        Example:
            {
                let x = 2;
            }
            // x can NOT be used here
            
        Example:
            {
                var x = 2;
            }
            // x CAN be used here
            -variables declared with the var keyword can NOT have block scope.

            -Variables declared inside a { } block can be accessed from outside the block.
-->