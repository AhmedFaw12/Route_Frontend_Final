<!--  
JS Datatypes:
    1)primitive datatypes:
        -numbers:
            -it can deal with all numbers (float, integer, double, ...)
            example:   
                var userAge = 25;
                var userAge = 25.5;
                var userAge = 25.2323235;
                var userAge = 5095951;


                window.alert(typeof(userAge)); //number
        -string:
            -A string (or a text string) is a series of characters like "John Doe".
            -Strings are written with quotes. You can use single or double quotes

            example:
                var userName = "Ahmed";
                window.alert(typeof(userName)); //string
                
                var userName = "123232";
                window.alert(typeof(userName)); //string

        -boolean:
            -Booleans can only have two values: true or false.
            -Booleans are often used in conditional testing.            

            example:
                var isAdmin = false;
                console.log(tpyeof(isAdmin)); //boolean
        -undefined:
            -In JavaScript, a variable without a value, has the value undefined. The type is also undefined.
            -undefined in js = unassigned variable

            example:
                var car;   // Value is undefined, type is undefined

                console.log(typeof(car)); //undefined
        -null(structural root):
            - absence of a value
            - null is called structural root
            - null return false
            example:
                var car = null;
                
                console.log(car); // value is null
                console.log(typeof(car)); //type is object

        -bigInt:
        -symbol:


    2)Structural(non primitive) datatypes:
        -object
        -function

------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

typeof operator:
    In JavaScript there are 5 different data types that can contain values:

        string
        number
        boolean
        object
        function
    There are 6 types of objects:
        Object
        Date
        Array
        String
        Number
        Boolean
    And 2 data types that cannot contain values:
        null
        undefined
    
    The typeof Operator:
        -You can use the typeof operator to find the data type of a JavaScript variable.

    Example:
        var isAdmin = false;
        console.log(tpyeof(isAdmin)); //boolean        
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Loosly typed and Dynamic typing:
    -loosly typed and strongly typed:
        -loosly typed language:
            -A loosely typed language is a programming language that does not require a variable to be defined. 
            
            -you can declare a variable, but it doesn't require you to classify the type of variable 

            -like : -javascript , pearl
            -examples:
                var userName; 
        
        -strongly typed language:
            - strongly typed language on the contrary wants types specified.
            int x;
            string y;
    ----------------------------------------------------------------------------------------------------------------------------------------------------------------------


    -dynamically typed and static typed:
        -dynamically typed language:
            -Dynamically-typed languages are those (like JavaScript, php) where the interpreter assigns variables a type at runtime based on the variable's value at the time

            -We can change variable type many times before runtime.
            example:
                var useName = "ahmed"; //string
                userName = 23;      //number
                userName = false;  //boolean
        statically typed language:
            -A language is statically typed if the type of a variable is known at compile time.     
            -like c++, c , java
            -We can change variable type many times before runtime.

            example:
                int x = 3;
                x = "ahmed";  //error 


-->