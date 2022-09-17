<!-- 
JQuery:
    -jquery is a js library
    -jQuery is a lightweight, "write less, do more", JavaScript library.
    -library consists of 1 file (small code), framework consists of multiple files
    -jQuery takes a lot of common tasks that require many lines of JavaScript code to accomplish, and wraps them into methods that you can call with a single line of code.

    -jQuery also simplifies a lot of the complicated things from JavaScript, like AJAX calls and DOM manipulation.

    -The jQuery library contains the following features:

        -HTML/DOM manipulation
        -CSS manipulation
        -Effects and animations
        -HTML event methods
        -AJAX
        -Utilities
 
    -Many of the biggest companies on the Web use jQuery, such as:
        Google
        Microsoft
        IBM
        Netflix

    -How to download Jquery:
        -go to jquery.com
        -press on Download jQuery
        -There are two versions of jQuery:
            -slim build version:
                -don't contain all jquery modules
                -excludes the ajax and effects modules
            -general version:
                -Download the compressed, production jQuery 3.6.1
        -we will download the general version
        -then link to jQuery in html:
            <body class="">
                //code


                <script src="js/jquery-3.6.1.min.js"></script>
                <script src="js/main.js"></script>
            </body>

        -always put jquery link first link of js (because rest/most of js links depend on jquery)
    ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    jQuery Syntax:
        -The jQuery syntax is tailor-made for selecting HTML elements and performing some action on the element(s).

        -Basic syntax is: $(selector).action()    
        -A $ sign to define/access jQuery
        -A (selector) to "query (or find)" HTML elements (works same as css selectors)
        -A jQuery action() to be performed on the element(s)     

        -$ is just a shortcut for jQuery. The idea is that everything is done with the one global symbol
        -all jquery methods exists inside $
        -$ is like object that contains all jquery methods

        -$ is same as jQuery
        Example:
            <div class="test"></div>
            js:
                $(".test").hide(3000);
                
                -hide() is called effect
                -3000 milleseconds (duration of the efect)
        Example:
            <div class="test"></div>
            js:
                jQuery(".test").hide(3000);
        
        Example:
            <div class="test"></div>
            <div class="test"></div>
            js:
                jQuery(".test").hide(3000);

            -it will selects all divs that have test class

        Example of hide using js only:
            <div class="test"></div>
            js:
                let test = document.querySelector(".test");
                function hide(element, duration){
                    element.style.width = 0;
                    element.style.height = 0;
                    element.style.margin = 0;
                    element.style.padding = 0;
                    element.style.opacity = 0;
                    element.style.transition = `all ${duration}s`;
                }

                hide(test, 3);
    
-->