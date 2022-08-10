<!-- 
input date and Color:
    Attribute:
        -type = "date"
            -Defines a date picker
            - The resulting value includes the year, month, and day.
        -type = "month"
            -define month picker
        
        -type = "year"
            -define month picker

        -type = "color":
            Defines a color picker

            -Note:
                some browser don't support color, date as they appeared in new versions of html 

                -browser like("Internet Explorer") : converts date, color to input type="text"
    Example:
        <label>Your date</label>
        <input type="date" name="userDate">
        
        <label>Your color</label>
        <input type="color" name="userColor">
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Caniuse:
    -CanIUse is an extremely useful tool for quickly visualizing which frontend technologies are compatible with which browsers.

    -caniuse is a website

    -red : means don't support
    -brown: support partially
    -green :support it
-->