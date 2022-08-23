<!-- 
Loops:
    Loops are handy, if you want to run the same code over and over again, each time with a different value.

    Different Kinds of Loops:
    JavaScript supports different kinds of loops:

        for : loops through a block of code a number of times
        for/in : loops through the properties of an object
        for/of : loops through the values of an iterable object
        while :loops through a block of code while a specified condition is true
        do/while : also loops through a block of code while a specified condition is true
    
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
For Loop:
    syntax:
        for (expression 1; expression 2; expression 3) {
        // code block to be executed
        }
        Expression 1 is executed (one time) before the execution of the code block.

        Expression 2 defines the condition for executing the code block.

        Expression 3 is executed (every time) after the code block has been executed.
    
    Example:
        for(var x = 5; x < 10; x++){
            console.log("hello");
        }
        
        Explanation:
            x = 5 check => console.log("Hello"); => x = 6
            x = 6 check => console.log("Hello"); => x = 7
            x = 7 check => console.log("Hello"); => x = 8
            x = 8 check => console.log("Hello"); => x = 9
            x = 9 check => console.log("Hello"); => x = 10
            x = 10 stop
               
    Example:
        for(var i = 0 ; ; i++){
            console.log("hello");
        }

        -if there is no condition, it will be infinite loop
        
        basic syntax of for loop:
        
            for( ; ; ){

            }
            -this is infinite loop
            -so Expressions 1, 2, 3 are not required
            -Expression 2 default condition is true

            -if we removed ; of for loop , it will give syntax error
-->