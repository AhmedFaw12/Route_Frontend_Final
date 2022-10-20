<!-- 

checkboxes/radiobuttons bootstrap classes:
    form-check class:
        -Use a wrapper element with class="form-check" to ensure proper margins for labels and checkboxes.
        - form-check : gives padding-left 
    form-check-label class:
        -labels have default margin-bottom
        -so form-check-label makes this margin = 0
        margin-bottom: 0;

        -we give this class to labels
        -previously we made label then input below it, and to bind label to input, we gave input id and gave label for: input_id
        -so when we click on label, input will be focused

        -now with form-check-label in radiobuttons and checkboxes , we don't need to make this
        -we wil make a label and give it form-check-label class 
        -and put radiobutton/checkbox input inside label tag
        -now when we click on label , checkbox/radio button will be selected automatically

        -inorder to use form-check-label , we must give form-check to the parent
    
    form-check-input:
        .form-check-input {
            position: absolute;
            margin-top: 0.3rem;
            margin-left: -1.25rem;
        }

    conclusion:
        Add the .form-check-label class to label elements, and .form-check-input to style checkboxes properly inside the .form-check container.

    Example:
        <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">Option 1
            </label>
            </div>
            <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">Option 2
            </label>
            </div>
            <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="" disabled>Option 3
            </label>
        </div>
 -->