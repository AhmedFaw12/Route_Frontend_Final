<!-- 
DOM_events:
    intro:
        -HTML DOM events allow JavaScript to register different event handlers on elements in an HTML document.

        -Events are normally used in combination with functions, and the function will not be executed before the event occurs (such as when a user clicks a button).

        -we have seperation of concerns(فصل الاهتمامات):
            -we shouldn't write js code in html file
            -Example:
                main.js:
                    function sayHello(){
                        window.alert("hello");
                    }
                index.html:
                    <h2 onclick="sayHello();" class="bg-danger">ahmed</h2>
                    -we shouldn't do that (writing js in html code)
                
    addEventListener():
        -one of dom methods
        -The addEventListener() method attaches an event handler to a document.
    
    -Syntax:
        document/element.addEventListener(event, function, Capture)
                    
    parameters:
        event:	
            -Required.
            -The event name.
            -Do not use the "on" prefix.
            -Use "click" instead of "onclick".

        function:	
            -Required.
            -The function to run when the event occurs.

            -When the event occurs, an event object is passed to the function as the first parameter. The type of the event object depends on the specified event. For example, the "click" event belongs to the MouseEvent object.
        
            -Note :
               - we passed function name only without ():
               -or we can write the function definition as an anonymous function 
    
    How to apply addEventListener on group of elements(collection or nodeList):
        -AddEventListener cannot be applied on group of elements at one time
        -we must make AddEventListener on element by element
        -so we must loop on elements (element by element) and apply AddEventListener on each one of them

        Example:
            index.html:
                <h2 class="bg-danger">ahmed</h2>
                <h2 class="bg-danger">ahmed</h2>
                <h2 class="bg-danger">ahmed</h2>
                <h2 class="bg-danger">ahmed</h2>
                <h2 class="bg-danger">ahmed</h2>

            main.js:
                var myElements = document.querySelectorAll(".bg-danger"); //NodeList

                for(var i = 0; i < myElements.length; i++){
                    myElements[i].addEventListener("click", function(){
                        window.alert("hello");
                    });
                }
    ----------------------------------------------------------------------------------------------------------------------------------------------------------------
    How to get event Information:
        -In the anonymous function that we passed to addEventLister(), if we put any parameter in this anonymous function
        -javascript put inside this parameter ,all information of the event
        
        -the naming convention of this parameter is: e or eventInfo

        Example:
            index.html:
                <body>
                    <h2>hello</h2>
                    <h2>hello</h2>
                    <h2>hello</h2>
                    <h2>hello</h2>
                    <h2>hello</h2>
                    <h2>hello</h2>
                </body>
            main.js:
                document.body.addEventListener('click', function(e){
                    console.log(e);
                });
    ----------------------------------------------------------------------------------------------------------------------------------------------------------------
    Event Information:
        target Event Property:
            -The target event property returns the element that triggered the event.
            Example:
                index.html:
                    <body>
                        <h1>hello</h1>
                        

                        <h2>hello</h2>
                        <h2>hello</h2>
                        <h2>hello</h2>
                        <h2>hello</h2>
                        <h2>hello</h2>
                        <h2>hello</h2>
                    </body>
                main.js:
                    document.body.addEventListener('click', function(e){
                        console.log(e.target);
                    });
                    
                    -if we clicked on h1 , it will output the h1 element(<h1>hello</h1>) to the console
        --------------------------------------------------------------------------------------------------------------------------------------------------------
        -MouseEvent clientX and clientY Properties:
            clientX:
                -The clientX property returns the horizontal coordinate (according to the client area) of the mouse pointer when a mouse event was triggered.

                -The client area is the current window.

                -Tip: To get the vertical coordinate (according to the client area) of the mouse pointer, use the clientY property.

                -Note: This property is read-only.
            clientY:
                -The clientY property returns the vertical coordinate (according to the client area) of the mouse pointer when a mouse event was triggered.

                -The client area is the current window.

                -Tip: To get the horizontal coordinate (according to the client area) of the mouse pointer, use the clientX property.

                -Note: This property is read-only.
            Example:
                main.js:
                    document.body.addEventListener('click', function(e){
                        console.log(e.clientX, e.clientY);
                    }); 
            -note:
                -window starts below bookmarks bar
        --------------------------------------------------------------------------------------------------------------------------------------------------------
        MouseEvent screenX and screenY Properties:
            screenX:
                -The screenX property returns the horizontal coordinate (according to the users computer screen) of the mouse pointer when an event was triggered.

                Tip: To get the vertical coordinate (according to the screen) of the mouse pointer, use the screenY property.

                Note: This property is read-only.

            screenY:
                -The screenY property returns the vertical coordinate (according to the users computer screen) of the mouse pointer when an event was triggered.

                -Tip: To get the horizontal coordinate (according to the screen) of the mouse pointer, use the screenX property.

                -Note: This property is read-only.
            Example:
                main.js:
                document.body.addEventListener('click', function(e){
                    console.log(e.screenX, e.screenY);
                }); 
            note:
                -screen starts from the top of the tabs of the browser
        --------------------------------------------------------------------------------------------------------------------------------------------------------
        keyCode:
            -Get the Unicode value of the pressed keyboard key
            -every keyboard key has a value:
                ArrowRight ==> 39
                ArrowLeft ==>37
                Enter ==>13
                Esc ==>27

            -this property is depricated
            -we should use key property
        --------------------------------------------------------------------------------------------------------------------------------------------------------
        key:
            -The key property returns the identifier(name) of the key that was pressed when a key event occured.

            -Key identifiers are strings that identify keyboard buttons. The return value of this property can be a string of:

                -A single character (like "a", "W", "4", "+" or "$")
                -A multicharacter (like "F1", "Enter", "HOME" or "CAPS LOCK")
            
            -it doesn't get the "shift" , "Alt", "Ctrl" , "meta"

            -Tip: If you want to find out whether the "ALT", "CTRL", "META" or "SHIFT" key was pressed when a key event occured, use the altKey, ctrlKey, metaKey or shiftKey property.
            
            Note: This property is read-only.


        
    ----------------------------------------------------------------------------------------------------------------------------------------------------------------

    What are the available events:
        -click:
            (لما ادوس و اسيب ايدى من على الماوس)
        -dblclick: 
            -The ondblclick event occurs when the user double-clicks on an element.
        -mousemove:
            -The onmousemove event occurs when the pointer is moving while it is over an element.
        
        -mousedown:
            -The onmousedown event occurs when a user presses a mouse button over an element.

            -(اول ما ادوس على الماوس هيشتغل ,مش هيستنى لما ارفع ايدى)
        -mouseenter:
            -The onmouseenter event occurs when the mouse pointer is moved onto an element.
            -(لما ادوس بره العنصر و ادخل جواه هيشتغل)
            -(طول منا انا جوه مش هيشتغل,هوا بيشتغل اول مره بس لما ادخل)
            -(هيشتغل تانى لما اخرج و اجى ادخل تانى)

            Example:
                index.html:
                    <div class="test">
                    </div>
                style.css:
                    .test{
                        width: 200px;
                        height: 200px;
                        background-color: #09c;
                    }
                main.js:
                    var myElement = document.querySelector(".test"); 
                    myElement.addEventListener('mouseenter', function(){
                        console.log("hello");
                    });
            Example:
                -we want to add multiple events for the same element
                index.html:
                    <div class="test">
                    </div>
                style.css:
                    .test{
                        width: 200px;
                        height: 200px;
                        background-color: #09c;
                    }
                main.js:
                    var myElement = document.querySelector(".test"); 
                    myElement.addEventListener('mouseenter', function(){
                        console.log("hello");
                    });
                    myElement.addEventListener('click', function(){
                        console.log("hello");
                    });
        -mouseleave:
            -The onmouseleave event occurs when the mouse pointer is moved out of an element.

            -it is the inverse of mousemove
            -Note:
                -hover is mousemove + mouseleave
        -blur:
            -The onblur event occurs when an object loses focus.

            -The onblur event is most often used with form validation code (e.g. when the user leaves a form field).

            -Tip: The onblur event is the opposite of the onfocus event.
            
------------------------------------------------------------------------------------------------------------------------------------------------------------------------

DOM_ChangeStyles:
    -when we hold/select element, it is returned as an object
    -and we consider the attributes(style, class, id ,src ,...) of the element as properties of the object

    Example:
        -we want when click on body , change the src of the image
        index.html:
            <img src="images/1.jpg" class="w-25 " alt="">

        main.js:
            var myElement = document.querySelector("img"); //img 

            document.body.addEventListener('click', function(){
                myElement.src = "images/2.jpg";
            }); 
    Example:
        -if the image has no src attribute , we can add it in js
        index.html:
            <img class="w-25 " alt="">

        main.js:
            var myElement = document.querySelector("img"); //img 

            document.body.addEventListener('click', function(){
                myElement.src = "images/2.jpg";
            }); 

    Example:
        -we want to change color and background-color of h1
        -we will go to style property in dom, then write our property(color, ...)
        -we can change/set style even if element has no style attribute in html
        -to change background-color (consists of multiple parts) in js ==> we write it in camelCase (backgroundColor) 


        index.html:
            <h1>Web Design and Development</h1>
        main.js:
            var myElement = document.querySelector("h1"); 

            document.body.addEventListener('click', function(){
                myElement.style.color = "red";
                myElement.style.backgroundColor = "teal";
            }); 
    Example:
        -we want when mouse move anywhere , img move with it
        -and we will remove cursor and make our img as if it is the cursor

        index.html:
            <img class="test rounded" src="images/source.gif" alt="">
        style.css:
            body{
                background-color:black; 
                cursor: none;
            }

            .test{
                width: 50px;
                height: 50px;
                position: absolute;
            }

        main.js:
            const element = document.querySelector(".test");

            document.body.addEventListener("mouseover", function (eventinfo) {                
                element.style.left = eventinfo.clientX + "px";
                element.style.top = eventinfo.clientY + "px";
            });
    
    ----------------------------------------------------------------------------------------------------------------------------------------------------------------
    setAttribute() method:
        -The setAttribute() method sets a new value to an HTML attribute.

        -If the attribute does not exist, it is created first.
        
        Syntax
            element.setAttribute(name, value)
        Parameters
            name :
                -Required.
                -The name of the attribute.
            value:
                -Required.
                -The new attribute value.
            
        Example:
            index.html:
                <img src="images/1.jpg" alt="">
            main.js:
                const img = document.querySelector("img");
                img.addEventListener("click", function (eventinfo) {
                    // img.src = "images/2.jpg";
                    img.setAttribute("src", "images/2.jpg");
                });
        -difference betweem img.src and img.setAttribute():
            img.src:
                -we know that in DOM img is turned into object and its attributes are properties of the object
                var img = {
                    src : "images/2.jpg",
                    id : "",
                    alt: ""
                }
                -we can say img.src, img.id, img.alt
                
                -the problem is that sometimes when attributes converts to object properties , their name change:
                    html:
                        <img src="images/1.jpg" class="w-50" alt="">
                    js:
                        var img = {
                            src : "images/2.jpg",
                            id : "",
                            alt: "",
                            className: "w-50"
                        }
                        class ==> className
                    -these attributes like :class , for 
                    -so img.class ==> gives error
                    -so we should use setAttribute()
                    -setAttribute override the attribute values in the html
                    -so inorder to append new value to attribue and not override it , we will getAttribute() and concat with the new attribute we want
                Example:
                    index.html:
                        <img src="images/1.jpg" class="rounded-circle" alt="">
                    js:
                        const img = document.querySelector("img");
                        img.addEventListener("click", function (eventinfo) {
                            img.setAttribute("class", img.getAttribute("class") + " w-50");
                        });
                    
    ----------------------------------------------------------------------------------------------------------------------------------------------------------------
    getAttribute():
        -The getAttribute() method returns the value of an element's attribute.
        Syntax:
            element.getAttribute(name)
        Parameters:
            name	:
                -Required.
                -The name of the attribute.
        Return:
            String:	The attribute's value.
                    null if the attribute does not exist.

        Example:
            img.getAttribute("class");
    ----------------------------------------------------------------------------------------------------------------------------------------------------------------
    hasAttribute():
        -The hasAttribute() method returns true if the attribute exists, otherwise false.
        Example:
            img.hasAttribute("class");
    ----------------------------------------------------------------------------------------------------------------------------------------------------------------
    removeAttribute():
        -The removeAttribute() method removes an attribute from an element.
                                
------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Passing Function as a parameters:
    -when sending function as parameter to another function, we only write its name without ()
        Example:
            index.html:
                <h2 class="bg-danger">ahmed</h2>
            main.js:
                var myElement = document.querySelector(".bg-danger");

                myElement.addEventListener("click", sayHello);

                function sayHello(){
                    window.alert("hello");
                }
                    
    -if we send function with () , it will be called automatically

    -or we can write function definition as a parameter:
        Example:
            index.html:
                <h2 class="bg-danger">ahmed</h2>
            main.js:
                var myElement = document.querySelector(".bg-danger");

                myElement.addEventListener("click", function(){
                    window.alert("say Hello");
                });
    
    -if we want to send function name as a parameter but it has a parameter:
        -we must make an anonymous function and put inside it ourFunction() call
        Example:
            index.html:
                <h2 class="bg-danger">ahmed</h2>
            main.js:
                var myElement = document.querySelector(".bg-danger");

                var myName = "ahmed";
                myElement.addEventListener("click", function(){
                    sayHello(myName);
                });

                function sayHello(userName){
                    window.alert("hello " + userName);
                }


--> 

