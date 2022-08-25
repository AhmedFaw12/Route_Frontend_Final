<!-- 
replace():
    -The replace() method searches a string for a value or a regular expression.

    -The replace() method returns a new string with the value(s) replaced.

    -The replace() method does not change the original string.

    -If you replace a value, only the first instance will be replaced. To replace all instances, use a regular expression with the g modifier set.

    syntax:
        -string.replace(searchValue, newValue)
    
    Parameters:
        searchValue:
        	-Required.
            -The value, or regular expression, to search for.
        newValue:
        	-Required.
            -The new value (to replace with).
    
    Return: it returns string
    
    Example:
        let text = "Visit Microsoft!";
        let result = text.replace("Microsoft", "W3Schools");
        console.log(result); //Visit W3Schools
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Highlight search :
    -we want when user write letters in search input, products that include these letters will be displayed and letters that user entered will be highlighted

    Example:
        main.js:
            
-->