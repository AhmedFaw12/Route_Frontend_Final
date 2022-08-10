<!-- 
Radio buttons:
    -he <input type="radio"> defines a radio button.

    -Radio buttons are normally presented in radio groups (a collection of radio buttons describing a set of related options). Only one radio button in a group can be selected at the same time.

    -Note: The radio group must have share the same name (the value of the name attribute) to be treated as a group. Once the radio group is created, selecting any radio button in that group automatically deselects any other selected radio button in the same group. You can have as many radio groups on a page as you want, as long as each group has its own name.

    -Note: The value attribute defines the unique value associated with each radio button. The value is not shown to the user, but is the value that is sent to the server on "submit" to identify which radio button that was selected.
    
    -since radio button has no value, we will set the value in the code
    
    -Tip: Always add the <label> tag for best accessibility practices!
   
    -conclusion:

        -radio button to choose one option from multiple options

        -radio button needs 3 attributes:
            -type = "radio"
            -name:
                -common name for multiple radio button
            -value:
                -value for each radio button
                -to be sent to the backend

    Example:
        <label>male</label>
        <input type="radio" name="gender" value="male">
            
        <label>female</label>
        <input type="radio" name="gender" value="female" >

    Example:
        <label>Student: </label>
        <input type="radio" name="case" value="student">
        
        <label>Graduated</label>
        <input type="radio" name="case" value="graduated" >
        
    Example:
        <label>10-4</label>
        <input type="radio" name="time" value="">

        <label>4-10</label>
        <input type="radio" name="time" value="">
        
        <label>7-4</label>
        <input type="radio" name="time" value="">
        
        <label>3-10</label>
        <input type="radio" name="time" value="">
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


checkbox :
    The <input type="checkbox"> defines a checkbox.

    The checkbox is shown as a square box that is ticked (checked) when activated.

    Checkboxes are used to let a user select one or more options of a limited number of choices.

    -each checkbox should have same name(we will put them in an array)
    -each checkbox should have a different value


    Example:
        <label>Margin</label>
        <input type="checkbox" name="cssskills[]" value="margin">
        <label>Padding</label>
        <input type="checkbox" name="cssskills[]" value="padding">
        <label>Position</label>
        <input type="checkbox" name="cssskills[]" value="position">

    Example:
        <label>Java</label>
        <input type="checkbox" name="proglang[]" value="java">
        
        <label>Php</label>
        <input type="checkbox" name="proglang[]" value="php">
        
        <label>Python</label>
        <input type="checkbox" name="proglang[]" value="python">
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Select option
    The <select> element is used to create a drop-down list.

    The <select> element is most often used in a form, to collect user input.

    The name attribute is needed to reference the form data after the form is submitted (if you omit the name attribute, no data from the drop-down list will be submitted).

    -each option will have different value
    -option will have no names
    -select only will have name

    Attributes:
        -disabled :
            -Specifies that a drop-down list should be disabled
            -we can disable whole select :
                <select name="country" disabled>
                    <option value="egypt" >Egypt</option>
                    <option value="india">India</option>
                    <option value="sudan">Sudan</option>
                    <option value="indonsia">Indonsia</option>
                </select>

            -or we can disable certain option:
                <option value="sudan" disabled>Sudan</option>

        -name:
            -Defines a name for the drop-down list
            -we only give name to the select
            
        selected:
            -The selected attribute is a boolean attribute.

            -When present, it specifies that an option should be pre-selected when the page loads.

            -The pre-selected option will be displayed first in the drop-down list.

            example:
                <select name="country">
                    <option value="egypt">Egypt</option>
                    <option value="india" disabled>India</option>
                    <option value="sudan" selected>Sudan</option>
                    <option value="indonsia">Indonsia</option>
                </select>


    Example:
        <select name="country">
            <option value="egypt">Egypt</option>
            <option value="india" disabled>India</option>
            <option value="sudan" selected>Sudan</option>
            <option value="indonsia">Indonsia</option>
        </select>
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

select optgroup:
    -The <optgroup> tag is used to group related options in a <select> element (drop-down list).

    If you have a long list of options, groups of related options are easier to handle for a user.

    -we can disabled whole select or whole group, or certain option

    -optgroup tag don't take name or value , it only takes label

    Example:

        <select name="cars" >
            <optgroup label="Swedish Cars" >
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
            </optgroup>
            <optgroup label="German Cars">
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
            </optgroup>
        </select>
-->