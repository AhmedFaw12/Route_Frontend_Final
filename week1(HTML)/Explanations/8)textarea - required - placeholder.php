<!-- 
textarea tag:
    -The <textarea> tag defines a multi-line text input control.
    
    -The <textarea> element is often used in a form, to collect user inputs like comments or reviews.
    
    syntax:
        <textarea>myText</textarea>
    
    -textarea tag doesn't need type="text" attribute
    Attributes:
        name:
            The name attribute is needed to reference the form data after the form is submitted (if you omit the name attribute, no data from the text area will be submitted).

        rows:
            Specifies the visible number of lines in a text area
        
        cols:
            Specifies the visible width of a text area

        Example:
            <textarea name="userComment"  cols="40" rows="10" placeholder="ahmed"></textarea>

            -we can use placeholder , or write inside textarea:
                <textarea>
                    Ahmed
                </textarea>
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

required attribute:
    -The required attribute is a boolean attribute.

    -When present, it specifies that an input field must be filled out before submitting the form.

    -Note: The required attribute works with the following input types: text, search, url, tel, email, password, date pickers, number, checkbox, radio, and file.

    Example:
        required = "required" or required

        <input type="text" name="fName" required>
        
        <textarea name="userComment"  cols="40" rows="10" placeholder="ahmed" required></textarea>

----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

placeholder attribute:
    -The placeholder attribute specifies a short hint that describes the expected value of an input field (e.g. a sample value or a short description of the expected format).

    -The short hint is displayed in the input field before the user enters a value.

    -Note: The placeholder attribute works with the following input types: text, search, url, tel, email, and password.

    example:
        <input type="text" name="fName" required placeholder="enter your firstname">

    example:
        <textarea name="userComment"  cols="40" rows="10" placeholder="ahmed"></textarea>

        -we can use placeholder , or write inside textarea:
            <textarea>
                Ahmed
            </textarea>



-->

