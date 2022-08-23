<!-- 
Concatination operator (+):
    + operator can be used to join two strings
    + operator can be used as arithmatic operator(sum)    

    Example:
        var x = "Ahmed " + "Fawzy";
        var y = 20 + 30;
        console.log(x); //Ahmed Fawzy
        console.log(y); //50

    
    -when the output in console is blue: console sees this output as a number
    -when the output in console is black: console sees this output as a string 

    Note:
        -When adding a number(or any other type) and a string, JavaScript will treat the number as a string.

        example:
            var z = "5" + 5 ;
            console.log(z); //55 (string)

            -it will appear in console in black color
            -string + number = string
        example:
            console.log(null + "5"); //null5 (string)
    
        Example:
            var x = "5"+ 5 + 5 + 5 ;
            console.log(x); //5555 (string)
            
            explanation:
                -we start from left
                -"5" + 5 + 5 + 5
                -"55" + 5 + 5
                -"555" + 5
                -"5555"

        example:
            var x = 5+ 5 + 5 + "5" ;
            console.log(x); //155 (string)
            
            explanation:
                -we start from left
                -5 + 5 + 5 + "5"
                -10 + 5 + "5"
                -15 + "5"
                -"155"

------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Implicit type conversion:
    -automatic(implicit) type conversion

    -All arithmatic operators (except +) when come between two strings, it first converts these strings to numbers

    Example:
        var x = "5" * "5";
        console.log(x); //25 (number)

        25 appears in console in blue (because it is number)
 
    Example:
        var x = "5" / "5";
        console.log(x); //1 (number)
        
        var x = "5" - "5";
        console.log(x); //0 (number)
        
        var x = 5 - "5";
        console.log(x); //0 (number)


        
    Example:
        var x = "5" > "5";
        console.log(x); //false 

        -also > , < convert to numbers 
        ("5")  will be treated as a number  because of (>, <)
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Prompt:
    -one of the ways to take input from user
    -The prompt() method displays a dialog box that prompts the user for input.

    -The prompt() method returns the input value if the user clicks "OK", 
    -if i click on ok without entering any input , it will return empty string


    Example:
        var name =  window.prompt();
        console.log(name);
    
    syntax:
        prompt(text, defaultText)
    
    parameters:
        text:
            The text to display in the dialog box.
        defaultText	Optional:
            The default input text

    Return value:
        A string:
            -If the user clicks "OK", the input value is returned.        
    
    Example:
        var userName = window.prompt("Enter your name");
        console.log(userName);

    example:
        var userName = window.prompt("Enter your name", "ahmed"); 
        console.log(userName);

        -putting a default input value (user can change it)

    Example:
        -take two numbers from user and add them and print the result
        -but prompt return strings
        -so we need to convert to number
        -we will use Number() method

        js:
            var num1 = window.prompt("Enter your first number");
            var num2 = window.prompt("Enter your second number");

            var result = Number(num1) +Number(num2);
            window.alert(result);

--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Number():
    -The Number() method converts a value to a number.

    -If the value cannot be converted, NaN is returned.

    Notes:
        -For booleans, Number() returns 0 or 1. (true ==> 1) ,(false ==> 0)

        -For dates, Number() returns milliseconds since January 1, 1970 00:00:00.

        -For strings, Number() returns a number or NaN:
            - (empty string return 0 even if it has space)
            
    
    Example:
        var result = Number("22") + Number("10"); //32 (number)
        
    Example:
        var result = Number("22" + "10"); //2210 (number)
       
        -explanation:
            -it concatenated two strings and then converted them to number

    Example:
        var result = Number(true); //1
        var result = Number(false); //0
        
    Example:
        var result = Number(""); //0
        -empty string return 0
    Example:
        var result = Number(" "); //0
        -empty string return 0 even if it has space

    Example:
        var result = Number("Ahmed"); //NaN
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
NaN:
    -In JavaScript, NaN is short for "Not-a-Number".
    -In JavaScript, NaN is a number that is not a legal number.

    -NaN is a property of the global object. In other words, it is a variable in global scope.
    -the type of NaN is number

    Example:
        var result = Number("Ahmed"); //NaN
        console.log(result); //NaN

        console.log(typeof(result)); //number

    Example:
        var x = "5" * "Ahmed";
        console.log(x); //NaN

-->