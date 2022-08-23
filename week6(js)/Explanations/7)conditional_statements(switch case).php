<!--  
Switch:
    -The switch expression is evaluated once.
    -If there is a match, the associated block of code is executed.
    -The value of the expression is compared with the values of each case.
    If there is no match, the default code block is executed.

    Example:
        var role = window.prompt("Enter your role "); //moderator
        switch(role){
            case "admin":
                console.log("you can edit, add, delete , update");
                break;
            case "moderator":
                console.log("you can edit, add");
                break;
            case "editor":
                console.log("you can edit");
                break;
            default:
                console.log("you can't do anything");    
        }
    
    
    Example:
        var role = window.prompt("Enter your role "); //admin
        switch(role){
            case "admin":
                console.log("you can edit, add, delete , update");
            case "moderator":
                console.log("you can edit, add");
            case "editor":
                console.log("you can edit");
            default:
                console.log("you can't do anything");    
        }
        
        -if we matched on condition and didn't put break , it will perform the next condition code
        output:
            you can edit, add, delete , update
            you can edit, add
            you can edit
            you can't do anything
    
    Example:
        -we can put comparison operators in the case , but we should not do it, as switch is not designed for that
        switch (true) {
            case (count == 2):
                console.log("hi");
                break;
            case (count >= 4):
                console.log("bye");
                break;
            case (count < 2):
                console.log("lol");
                break;
        }

----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Comparison between switch and if statements:
    -performance:
        -in most programming languages , switch is faster than if 
        -but in javascript , it is different
        -it depends on the browser type (chrome, firefox ,... )
        -so overall in javascript , both are same

    -in if we can use any comparison operators (> , < , ==, ...)
    -but in switch , we should only use (===), it checks for equality(value and type)

    -Readability:
        -switch is better in readability

        
Conclusion :  
    -we will use if statements
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Ternary operator:
    JavaScript also contains a conditional operator that assigns a value to a variable based on some condition.
    Syntax:
        variablename = (condition) ? value1:value2;
        
    Example:
        var age = 16;
        var voteable = (age < 18) ? "Too young":"Old enough";

        console.log(voteable); // Too young
-->