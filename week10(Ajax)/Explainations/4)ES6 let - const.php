<!-- 
ES6 appeared in 2015

-let:
    -The let keyword was introduced in ES6 (2015).

    -Variables defined with let cannot be Redeclared:
        -Variables defined with let cannot be redeclared.

        -You cannot accidentally redeclare a variable.
        Example with let:
            -let x = "John Doe";

            let x = 0; //// SyntaxError: 'x' has already been declared
        Example with var:
            var x = "John Doe";

            var x = 0;

            -with var no error

    -Variables defined with let have Block Scope:
        -Before ES6 (2015), JavaScript had only Global Scope and Function Scope.

        -ES6 introduced two important new JavaScript keywords: let and const.

        -These two keywords provide Block Scope in JavaScript.

        -Variables declared inside a { } block(like if , for,...) cannot be accessed from outside the block

        Example with let:
            {
              let x = 2;
            }
            // x can NOT be used here

            if(true){
                let y = 3;
            }
            // y can NOT be used here

            for(let i = 0; i < 10; i++){//i here has block scope

            }   
            // i can not be used here

        Example with var:
            -Variables declared with the var keyword can NOT have block scope.

            Variables declared inside a { } block can be accessed from outside the block.

        
            {
            var x = 2; //global variable
            }
            // x CAN be used here

            if(true){
                var y = 3; //global variable
            }
            // y can be used here

            for(var i = 0; i < 10; i++){//i here has global variable scope

            }   
            // i can not used here

------------------------------------------------------------------------------------------------------------------------------------------------------------------------

const:
    -The const keyword was introduced in ES6 (2015).

    -Variables defined with const cannot be Redeclared.(same as let)

    -Variables defined with const cannot be Reassigned:
        Example:
            -const PI = 3.141592653589793;
            PI = 3.14;      // This will give an error
            PI = PI + 10;   // This will also give an error

        -Must be Assigned:
            -JavaScript const variables must be assigned a value when they are declared:
                Example:
                    const PI = 3.14159265359;

                incorrect example:
                    const PI;
                    PI = 3.14159265359; //error

    -Variables defined with const have Block Scope. (same as let)


    When to use JavaScript const?
        As a general rule, always declare a variable with const unless you know that the value will change.

        Use const when you declare:
            A new Array (we can change in array values , but we can not refer to another array)
            A new Object
            A new Function
            A new RegExp
------------------------------------------------------------------------------------------------------------------------------------------------------------------------

-from now on we will use only const and let
-let and const are not hoisted


-->