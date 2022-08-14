<!-- 
-css main sections:
    1)how to build layout (display:inline-block, display:float)
    2)spacing(margin, padding)
    3)position
    4)...
    5)...

position:
    -The position CSS property sets how an element is positioned in a document. The top, right, bottom, and left properties determine the final location of positioned elements.

    -The position property specifies the type of positioning method used for an element (static, relative, fixed, absolute or sticky).

    Values:
        static: 
            -The element is positioned according to the normal flow of the document. The top, right, bottom, left, and z-index properties have no effect. This is the default value.

        absolute:
            -The element is removed from the normal document flow, and no space is created for the element in the page layout. 
            
            -It is positioned relative to its closest positioned(non static) ancestor, if any; otherwise, it is placed relative to the viewport/(first top part of the body)
            
            -Its final position is determined by the values of top, right, bottom, and left.


        fixed:  The element is positioned relative to the browser window	
        relative:	The element is positioned relative to its normal position, so "left:20px" adds 20 pixels to the element's LEFT position
    
    -some properties used with position property:
        -top
        -bottom
        -left
        -right

        -Elements are then positioned using the top, bottom, left, and right properties. However, these properties will not work unless the position property is set first. They also work differently depending on the position value.
----------------------------------------------------------------------------------------------------------------------------------------------------------------------
position:absolute  :
    -absolute(مطلق)

    -The element is removed from the normal document flow, and no space is created for the element in the page layout. 
            
    -It is positioned relative to its closest positioned(non static) ancestor, if any; otherwise, it is placed relative to the first part of viewport/(first top part of the body)
    
    -Its final position is determined by the values of top, right, bottom, and left.

    -absolute is calculated relative to (viewport)/body(viewport) if it has no position ancestor(like relative or another absolute)

    example:
        index.html:
            <body>
                <div class="test">

                </div>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
            </body>

        style.css:
            .test{
                width: 200px;
                height: 200px;
                background-color: #09c;
                position:absolute;
                bottom: 20px;
                right: 20px;
            }

            -test div has no closest positioned ancestor , so it is positioned relative to the viewport()

            -bottom:20px ==> means leave 20 px from the bottom
            -right:20px ==> means leave 20 px from the right

   ----------------------------------------------------------------------------------------------------------------------------------------------------------------
   
   -position:fixed  :
        -An element with position: fixed; is positioned relative to the whole viewport, which means it always stays in the same place even if the page is scrolled. The top, right, bottom, and left properties are used to position the element.

        Example:
            -we will make setting fixed bar to the right

            index.html:
                <div class="test">

                </div>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
                <h2>Lorem ipsum dolor sit.</h2>
            
            -style.css:
                .test{
                    width: 50px;
                    height: 70px;
                    background-color: #09c;
                    
                    position:fixed;
                    top: 150px;
                    right: 0;

                    border-top-left-radius: 5px;
                    border-bottom-left-radius: 5px;

                }
        ------------------------------------------------------------------------------------------------------------------------------------------------------

        -Example on making navigation bar:
            index.html:
                <div class="test">

                </div>
            style.css:
                .test{
                    width: 100%;
                    height: 70px;
                    background-color: #09c;
                    
                    position:fixed;
                    top: 0;
                }
                -give div width:100%
                -give position:fixed, top:0;
----------------------------------------------------------------------------------------------------------------------------------------------------------------------
-position:relative:
    -The element is positioned according to the normal flow of the document ny default

    An element with position: relative; is positioned relative to its normal position.

    example:
        index.html:
            <div class="test">

            </div>
        style.css:
            .test{
                width: 100px;
                height: 100px;
                background-color: tomato;
                position:relative;

                left: 100px;
                top: 100px;
            }

                

----------------------------------------------------------------------------------------------------------------------------------------------------------------------
relative and absolute:
    -position:absolute =>It is positioned relative to its closest positioned(non static) ancestor, if any; otherwise, it is placed relative to the first part of viewport/(first top part of the body)

    
    example:
        -if both grandparent and parent have relative position
        -and child have absolute position, child will move relative to parent(closest positioned parent)

        index.html:
            <div class="container">
                <div class="parent">
                    <div class="child">
                        
                    </div>
                </div>
            </div>
        style.css:
            .container{
                width: 700px;
                height: 500px;
                background-color: teal;
                position:relative;
            }

            .parent{
                width: 600px;
                height: 400px;
                background-color: tomato;
                position:relative;
            }

            .child{
                width: 100px;
                height: 100px;
                background-color: #09c;
                position:absolute;
                bottom: 0;
                right: 0;
            }

    Example2:
        -if parent doesn't have relative position
        -but grandparent has relative position
        -child which has absolute position , will move relative to grandparent
        index.html:
            <div class="container">
                <div class="parent">
                    <div class="child">
                        
                    </div>
                </div>
            </div>
        style.css:
            .container{
                width: 700px;
                height: 500px;
                background-color: teal;
                position:relative;
            }

            .parent{
                width: 600px;
                height: 400px;
                background-color: tomato;
            }

            .child{
                width: 100px;
                height: 100px;
                background-color: #09c;
                position:absolute;
                bottom: 0;
                right: 0;
            }

        

----------------------------------------------------------------------------------------------------------------------------------------------------------------------
Position layer:
    -position :absolute and position: fixed =>make a new layer
    -position :static and position: relative =>don't make a new layer
    -position:relative  make a new layer ,when we use (left,top, right, bottom) properties.

    -so in css we have x(horizontal), y(vertical), z(layer)
-----------------------------------------------------------------------------------
-----------------------------------------------------------------------------------

-When to use Position:
    -to make something fixed
    -to make layer above layer 

-->