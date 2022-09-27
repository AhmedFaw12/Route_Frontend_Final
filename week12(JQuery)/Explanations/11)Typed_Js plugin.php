<!-- 
Typed.js plugin:
    how to install:
        -download typed.js from github
        -copy typed.js file to our js folder and link to it

        -call the trigger class constructor :
            -pass to it (element class html) (element should be inline like span)
            -also pass to it array of strings to be displayed
            
        -we can pass options/customizations to the constructor:
            -typespeed: (speed of typing in ms)
            -backSpeed: (backSpeed of the backspacing in ms)
            -smartBackspace: (smartBackspace only backspace what doesn't match the previous string) (true/false)
            -loop :loop strings (true/false)
            -showCursor: show cursor or not(true/false)
            -cursorChar: '|' (shape of the cursor)

    Example:
        html:
            <span class="lead element py-2"></span>

            <script src="js/typed.min.js"></script>
        js:
            var typed = new Typed('.element', {
                strings: ['This is a JavaScript library', 'This is an ES6 module'],
                typeSpeed: 30,
                backSpeed: 30,
                loop: true,
                smartBackspace: true // Default value
            });
            
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
-->