<!-- 
Forms:
    -Form is to take input from user
    -form will be received by the server to process these inputs
    -in forms we need :
        -type :type of input(text, number, ...)
        -variable: variable to carry the input value
        -value : the value of input that will be saved in variable
        

    -input tag:
        -we put input tag inside form tag to take inputs from user

        Attributes:
            -name:
                -the value sent will be saved in this name
                -in backend , we will reveive the value sent through this name
                -this name must be unique, shouldn't be repeated
                example:
                    <input name="firstName">
                    <input name="lastName">

            -type:
                -type of the input
                types:
                    -text:
                        -text means letter , number ,and symbols(@, _, ...)
                        type= "text"
                    -number:
                        type = "number"
                    -email:
                        type = "email"
                    -password:
                        type = "password"
                        -password is same as text but it is written in dots(.....)
                    -file:
                        type ="file"
                        -it will accept all file types

                    -date:
                        type = "date"
                        - defines a date picker
                        - The resulting value includes the year, month, and day.
                    -color:
                        type = "color"
                        Defines a color picker


                    -submit :
                        -to submit form
                        type = "submit"
                        Example:
                            <button type="submit">submit</button>

                            -button tag must be inside form tag

                            or we can make input tag with submit type and value = "register"
                            -but button is better

                            <input type="submit" value="Register">
                    -reset:
                        -to reset values written in the inputs of form
                        type ="reset"
                        Example:
                            <button type="reset">reset</button>

            ----------------------------------------------------------------------------------------------------------------------------------------------------------------------
            required attribute:
                -The required attribute is a boolean attribute.

                -When present, it specifies that an input field must be filled out before submitting the form.

                -Note: The required attribute works with the following input types: text, search, url, tel, email, password, date pickers, number, checkbox, radio, and file.

                Example:
                    required = "required" or required

                    <input type="text" name="fName" required>
                    
                    <textarea name="userComment"  cols="40" rows="10" placeholder="ahmed" required></textarea>

            ----------------------------------------------------------------------------------------------------------------------------------------------------------------------

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
            ----------------------------------------------------------------------------------------------------------------------------------------------------------------------
            minlength:
                The minlength attribute specifies the minimum number of characters required in an input field.

                 The minlength attribute can be used with input type: text, search, url, tel, email, and password.

            maxlength:
                The minlength attribute specifies the maximum number of characters required in an input field.

                example:
                    <input type="text" name="lName" minlength="3" maxlength="10">

            min:
                -The min attribute specifies the minimum value for an <input> element.
               
                - Use the min attribute together with the max attribute to create a range of legal values.

                The max and min attributes works with the following input types: number, range, date, datetime-local, month, time and week.
            max:
                The max attribute specifies the maximum value for an <input> element.
                example:
                    <input type="number" min="10" max="80" name="userAge">

                -min , max , minlength, maxlength are not supported in all browsers so we shouldn't use them
            
                
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    Example on Form:
        <form action="">
            <label>FirstName:</label>
            <input type="text" name="fName">

            <br>
            <br>

            <label>LastName:</label>
            <input type="text" name="lName">

            <br>
            <br>

            <label>Age:</label>
            <input type="number" name="userAge">

            <br>
            <br>

            <label>Password:</label>
            <input type="password" name="password">
            
            <br>
            <br>

            <label>Email:</label>
            <input type="email" name="password">

            <br>
            <br>

            <button type="submit">Register</button>
            <button type="reset">reset</button>
        </form>
        

    Example 2 on Form:    
        <form action="">
            <table border="4" width="600" height="400">
                <tbody>
                    <tr>
                        <td> <label>FirstName:</label></td>
                        <td><input type="text" name="fName"></td>
                    </tr>
                    <tr>
                        <td><label>LastName:</label></td>
                        <td><input type="text" name="lName"></td>
                    </tr>
                    <tr>
                        <td><label>Age:</label></td>
                        <td><input type="number" name="userAge"></td>
                    </tr>
                    <tr>
                        <td><label>Password:</label></td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td><label>Email:</label></td>
                        <td><input type="email" name="password"></td>
                    </tr>
                    <tr>
                        <td> <button type="submit">Register</button></td>
                        <td><button type="reset">reset</button></td>
                    </tr>
                </tbody>
            </table>           
        </form>

--> 