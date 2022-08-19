<!-- 
Pseudo elements:
    -after & before:
        -The ::before and ::after pseudo-elements in CSS allows you to insert content onto a page without it needing to be in the HTML. While the end result is not actually in the DOM, it appears on the page as if it is

        after:
            -In CSS, ::after creates a pseudo-element that is the last child of the selected element. It is often used to add cosmetic content to an element with the content property. It is inline by default.
            
            syntax:
                div::after {
                    content: "after";
                }
        before:
            -In CSS, ::before creates a pseudo-element that is the first child of the selected element. It is often used to add cosmetic content to an element with the content property. It is inline by default.

            syntax:
                div::before {
                    content: "before";
                }
        
        Note:
            -always use these lines of code with after & before and change the values:
                content: "";
                background-color: #ccc;
                position:absolute;
                top: 50%;
                left: 0;
                width: 40%;
                height: 1px;

        Example:
            -we want output to be like this:
                _____________________web design____________________
            index.html:
                <h1>Web Design</h1>
            style.css:
                h1{
                    text-align: center;
                    position: relative;
                }

                h1::after{
                    content: "";
                    background-color: #ccc;
                    position:absolute;
                    top: 50%;
                    right: 0;
                    width: 40%;
                    height: 1px;
                }
                h1::before{
                    content: "";
                    background-color: #ccc;
                    position:absolute;
                    top: 50%;
                    left: 0;
                    width: 40%;
                    height: 1px;
                }
            -we made an h1 
            -we gave it text-align:center

            -we made after:
                -we gave give empty content
                -we gave it background color 
                -we gave it position absolute
                -and we have its parent(h1) position relative
                -we gave after top:50% and right:0
                -we gave it width in % and very small height
            -we made before:
                -we gave give empty content
                -we gave it background color 
                -we gave it position absolute
                -and we have its parent(h1) position relative
                -we gave before top:50% and left:0
                -we gave it width in % and very small height
            -notes:
                -content in after and before is required even if it is empty

                -after layer is above before layer (when given position)
                -so we will before higher z-index

        ----------------------------------------------------------------------------------------------------------------------------------
        Example:
            -we want the output to be like this:
                -------------------
                -                 -
                -   Contacts      -
                -                 -
                ---- | ------------           
                     |  
                     
            index.html:
                <h2>CONTACTS</h2>
            style.css:
                h2{
                    width: 200px;
                    text-align: center;
                    padding: 10px;
                    border: 5px solid teal;
                    margin:50px;
                    position: relative;
                }

                h2::after{
                    content: "";
                    background-color: #fff;
                    position:absolute;
                    top: 80%;
                    left: 10px;
                    width: 35px;
                    height: 35px;
                }
                h2::before{
                    content: "";
                    background-color: teal;
                    position:absolute;
                    top: 80%;
                    left: 22px;
                    width: 5px;
                    height: 35px;
                    z-index: 1;
                }
            -we made h2
            -we gave h2 width , height, padding, text-align:center
            -we made after:
                -we gave its parent(h2) position-relative
                -we gave after position:absolute
                -we gave it top and left
                -we gave it width and height (width=height) to appear as a box
                -we gave it background-color:white to appear as if border is cut
            -we made before:
                -we gave its parent(h2) position-relative
                -we gave before position:absolute
                -we gave it top and left
                -we gave it small width(5px like parent border) and height to appear as a vertical line
                -we gave it background-color:teal (like parent border color)
                -before will not appear because after layer is above before layer
                -so we will before higher z-index
        ----------------------------------------------------------------------------------------------------------------------------------

        Example:
            output:
                Client feedback
                    ______
                _____________
                    ______
                
            index.html:
                <div class="test w-50 mx-auto mt-5 text-center" >
                    <h2 class="pb-2">Client's Feedback</h2>
                </div>
            style.css:
                h2{
                    position: relative;
                }

                h2::before{
                    content: "";
                    width: 300px;
                    height:4px;
                    background-color: green;
                    position:absolute;
                    top: 100%;
                    left: 50%;
                    transform: translateX(-50%);
                }

                h2::after{
                    content: "";
                    width: 100px;
                    height:15px;
                    /* background-color: tomato; */
                    position:absolute;
                    top: 87%;
                    left: 50%;
                    transform: translateX(-50%);
                    border-top: 2px solid red; 
                    border-bottom: 2px solid red; 
                }
        
    ------------------------------------------------------------------------------------------------------------------------------------------
    ::first-letter:
        The ::first-line pseudo-element is used to add a special style to the first line of a text.

        Note: The ::first-letter pseudo-element can only be applied to block-level elements.

        example:
            index.html:
                <p class="p-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam earum molestias dolores repellat, id praesentium cupiditate, ut perspiciatis tempora quo deserunt illum laudantium, iusto at! Error fugit dolores possimus non.</p>

            style.css:
                p::first-letter{
                    background-color: greenyellow;
                    color: red;
                    font-size: 30px;
                }
    ------------------------------------------------------------------------------------------------------------------------------------------

    ::first-line:
        -The ::first-line pseudo-element is used to add a special style to the first line of a text.    

        Note: The ::first-line pseudo-element can only be applied to block-level elements.
        
        example:
            index.html:
                <p class="p-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam earum molestias dolores repellat, id praesentium cupiditate, ut perspiciatis tempora quo deserunt illum laudantium, iusto at! Error fugit dolores possimus non.</p>

            style.css:
                p::first-line{
                    background-color: greenyellow;
                    color: red;
                    font-size: 30px;
                }
    ------------------------------------------------------------------------------------------------------------------------------------------

    ::selection:
        The ::selection pseudo-element matches the portion of an element that is selected by a user(using mouse).

        The following CSS properties can be applied to ::selection: color, background, cursor, and outline.

        example:
            index.html:
                <p class="p-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam earum molestias dolores repellat, id praesentium cupiditate, ut perspiciatis tempora quo deserunt illum laudantium, iusto at! Error fugit dolores possimus non.</p>

            style.css:
                p::selection{
                    background-color: greenyellow;
                    color: red;
                    font-size: 30px;
                }
            -font-size will not be applied (only color, background, cursor and outline)
--------------------------------------------------------------------------------------------------------------------------------------------------

Pseudo classes:

    -difference between pseudo elements and pseudo classes:
        -pseudo elements start with ::
        -pseudo classes start with :
    
    -Anchor Pseudo-classes:
        -Note: a:hover MUST come after a:link and a:visited in the CSS definition in order to be effective! a:active MUST come after a:hover in the CSS definition in order to be effective! Pseudo-class names are not case-sensitive.

        Tip: Use the :link selector to style links to unvisited pages, the :hover selector to style links when you mouse over them, and the :active selector to style links when you click on them.

        :link   :
            -style links to unvisited pages(before we click on link)
        :hover  :
            -style links when you mouse over them
        :active  :
            -style links when you click on them

        :visited :
            -The :visited selector is used to select visited links.
    

        example:
            index.html:
                <a href="#new" >hello</a>
            style.css:
                /* unvisited link  */
                a:link {
                    color: #f00 ;
                }

                /* visited link */
                a:visited {
                color: #00FF00;
                }

                /* mouse over link */
                a:hover {
                color: #FF00FF;
                }

                /* selected link */
                a:active {
                color: #0000FF;
                }
            
    - :focus :
        -The :focus selector is used to select the element that has focus.
        
        -The :focus selector is allowed on elements that accept keyboard events or other user inputs.

        example:
            index.html:
                <form action="">
                    <input type="text" name="FirstName">
                </form>
            style.css:
                input:focus{
                    background-color: #0000FF;
                    color: red;
                    padding-left: 20px;
                }

    it can be used to:
        Style an element when a user mouses over it
        Style visited and unvisited links differently
        Style an element when it gets focus

--> 
