<!-- 
Self invoked function:
    -Function expressions can be made "self-invoking".

    -A self-invoking expression is invoked (started) automatically, without being called.

    -Function expressions will execute automatically if the expression is followed by ().

    -You cannot self-invoke a function declaration.

    -You have to add parentheses around the function to indicate that it is a function expression

    -anonymous self-invoking function(function without name)

    -to make self invoke function:
        -make function without name 
        -wrap function with (function(){body})
        -follow by another brackets (function(){body})();

    Example:
        (function(){
            console.log("welcome back");
        })();

        output : welcome back
    
    -any variables defined inside self invoked function are local functions that cannot be accessed outside the function

    -When to use self invoked functions:
        - if multiple developer working on the same file
        - so each developer should put his code in a self invoked function
        - so variables used by each developer would not be overriden by other developer variables(since developers may use same variable names)

        Example:
            //developer 1
            (function(){
                var count = 10;
                var index = 0;

                ////// 
                ////
            })();

            //developer 2
            (function(){
                var count = 0;


                function test(params){
                    //....
                }
                ////// 
                ////
            })();
            
            -count 1 is local to its self invoked function
            -count 2 is local to its self invoked function

        -so we should put our code in a self invoked function after we finish the code

-->