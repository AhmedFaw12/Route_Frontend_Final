<!-- 
Where to write javascript:
    1)internal (using script tag):
        Example:
            <body>
                <script>
                    window.alert("ahmed");
                </script>

                <script src="js/main.js"></script>
                <script src="js/popper.js"></script>
                <script src="js/bootstrap.min.js"></script>
            </body>
        -script tag can be written in head tag or body tag
        -best place to write script tag(below our code) at the end of body tag(before closing tag of body)

    2)inline (using events):
        Example:
            <h1 onclick='window.alert("hello")'>Web design</h1>
    3)external:
        in a seperate (.js) file and link to it using script tag
        example:
            index.html:
                <script src="js/main.js"></script>
            main.js:
                window.alert("Hello JS");

        -We should put script tag at the end of body tag :
            -as web depend on sequence
            -so that all document(html code) has been read

            -also to increase performance:
                (js takes time to load )
                -so if we put script tag in head , it will take 2sec to load , and web page will be empty this time until js code is loaded
            -seo
        
        -we will learn later how to put script tag in the head and js code won't be applied untill document (html code) is loaded(using window.load event)
        
        
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Output :
    -to produce output we have 3 ways:
        1)using alert :
            Example:
                window.alert("Hello js");
            -window = browser
            -it produces alert box

        2)produce output in an html element:
            -example:
                document == html code(we talk to html code)
                main.js:
                    var demo = document.getElementById("demo");
                    demo.innerHTML = "Hello js";
                index.html:
                    <h1 id="demo"></h1>
                
        3)using console:
            -not used for client
            -used for developers

            example:
                console.log("AHmed Fawzy");
            
            -The console object provides access to the browser's debugging console.

            -The console object is a property of the window object.

            -The console object is accessed with:
                -window.console or just console
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                
Comments in js:
    // single line
    /* */ multiple lines

-innerHTML:
    -The innerHTML property sets or returns the HTML content (inner HTML) of an element.
    example:

------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Best practices to speed  up your website:
    an article made by yahoo to tell us how to speed websites
        
-->
