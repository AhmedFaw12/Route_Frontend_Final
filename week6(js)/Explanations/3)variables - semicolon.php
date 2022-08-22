<!-- 
Variables:
    Variables are containers for storing data (storing data values).

    Ways to Declare a JavaScript Variable:
        Using var
        Using let
        Using const
    
    Variables naming conventions:
        -can start variable with number or special characters except underscore(_) and dollar sign($)

        -variable name can't be reserved keywords in js(like: function, var, ...)

        -variable name can't contain space

        -if variable name consists of multiple parts ,we can use camelCase naming style
    
    Example:
        var x = 20;
        var x = "ahmed";
        var userComment = "I love learning";
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Semicolon in js:
    -after we write js code and it goes to parsing 
    
    Automatic colon insertion(ACI):
        -In C-like languages, the semicolon denotes the end of a statement. Unlike other C-like languages, JavaScript does not enforce the use of a semicolon at the end of a statement. 
        
        -Instead, the semicolon is optional, and the JavaScript interpreter will "intelligently" add them when it runs the code.

        -semicolon is put automatically at the end of each line

        -but if there are 2 statemnts at the same line  and we didn't put any semicolon, it will give error:
            -before ACI :  
                var x = 20 var x = "ahmed"
            
            -after ACI:
                var x = 20 var x = "ahmed";
            
            -it will give error

        -NOTE:
            -we need to add semicolon after each statement , and not to depend on ACI
            -because when we minify our js code , many statments  will be on same line and it will give errors
-->

<script>
    var x = 20;
    var x = "ahmed";
    var userComment = "I love learning";
</script>