<!-- 
Conditional Statements:
    -Very often when you write code, you want to perform different actions for different decisions.

    -You can use conditional statements in your code to do this.

    -In JavaScript we have the following conditional statements:

    -Use if to specify a block of code to be executed, if a specified condition is true
    -Use else to specify a block of code to be executed, if the same condition is false
    -Use else if to specify a new condition to test, if the first condition is false
    -Use switch to specify many alternative blocks of code to be executed

    Example:
        var userAge = 14;
        if(userAge > 16){
            console.log("welcome you can register");
        }else{
            console.log("Sorry you can't register");
        }
    Example:
        var userAge = window.prompt("Enter your Age "); //"20"

        if(userAge > 16){
            console.log("welcome you can register");
        }else{
            console.log("Sorry you can't register");
        }

        Explanation:
            -if user entered 20 , it will be treated as string
            - > , < implicitly converts "20" to a number
            -so  if("20" > 16) will return true
    
    Example:
        if(undefined == null){
            console.log("Equal");
        }else{
            console.log("Not Equal");
        }

        Explanation:
            -undefined has value undefined (which means empty value)
            -null (means empty value)
            -so both are equal in value(undefined == null)
            -so it will print Equal as == checks for value equality only
    Example:
        if(undefined === null){
            console.log("Equal");
        }else{
            console.log("Not Equal");
        }

        Explanation:
            -undefined has value undefined (which means empty value) but its type is undefined
            -null (means empty value) but its type is object 
            -so both are equal in value , but not equal in type

            -so it will print Not Equal as === checks for value and type equality

    Example:
        if(NaN == NaN){
            console.log("Equal");
        }else{
            console.log("Not Equal");
        }

        Explanation:
            -NaN values are not equal
            -NaN type (number) , they are equal in type

            -so it will print Not Equal
            
        
    Example:
        var x = Number("abdo"); //NaN
        var y = Number("ashraf"); //NaN

        -so they are not equal in values
    
    Example:
        var x = Number("abdo"); //NaN
        var y = Number("abdo"); //NaN

        -they are also not equal in values , as javascript compare NaN with NaN , not comparing the original values
    
    Example on if else if , else:
        var role = window.prompt("Enter your role "); //moderator

        if(role == "admin"){
            console.log("you can edit, add, delete , update");
        }
        else if(role == "moderator"){
            console.log("you can edit, add");
        }
        else if(role == "editor"){
            console.log("you can edit");
        }
        else{
            console.log("you can't do anything");
        }

----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Operators:
    -Comparison operators:
        x = 5;

        ==	equal to	x == 8	false	
                        x == 5	true	
                        x == "5"	true	
        
        ===	equal value and equal type	x === 5	    true	
                                        x === "5"	false	
        !=	not equal	x != 8	true	
        
        !==	not equal value or not equal type	x !== 5	false	
                                                x !== "5"	true	
        x   !== 8	true	
        >	greater than	x > 8	false	
        <	less than	x < 8	true	
        >=	greater than or equal to	x >= 8	false	
        <=	less than or equal to	x <= 8	true

    -Logical Operators
        Logical operators are used to determine the logic between variables or values.
        
        &&	and	(x < 10 && y > 1) is true	
        ||	or	(x == 5 || y == 5) is false	
        !	not	!(x == y) is true

-->