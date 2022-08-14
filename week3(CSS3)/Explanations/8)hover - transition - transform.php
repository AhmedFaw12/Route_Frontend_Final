<!--  
HTML Events:
    An HTML event can be something the browser does, or something a user does.

    Here are some examples of HTML events:

    An HTML web page has finished loading
    An HTML input field was changed
    An HTML button was clicked
    Often, when events happen, you may want to do something.

    JavaScript lets you execute code when events are detected.

    -hover is the only event in the css 
hover:
    -hover is when mouse move over element

    -The :hover selector is used to select elements when you mouse over them.

    -Tip: The :hover selector can be used on all elements

    Example:
        index.html:
            <body>
                <div class="test"></div>
            </body>
        style.css:
            .test{
                width: 200px;
                height: 200px;
                background-color: tomato;
            }

            .test:hover{
                width: 100%;
                background-color: #09c;
            }

            -when hover happens , make width:100% , background-color:#09c

    -note :
        -we want when we hover on element , to affect another element
        -we can do that only if our element is the parent of the other element
            example:
                .parent:hover .child{
                    width: 100%;
                }
                -when hover on parent , affect its child

    Example on affecting child when hovering on parent:
        index.html:
            <div class="parent">
                <div class="child">
                    
                </div>
            </div>
        style.css:
            .parent{
                width: 500px;
                height: 500px;
                background-color: gray;
            }

            .parent:hover .child{
                width: 100%;
            }
            -when hover on parent , affect its child

            .child{
                width: 200px;
                height: 200px;
                background-color: tomato;
            }


----------------------------------------------------------------------------------------------------------------------------------------------------------------------

transition:
    -hover effects happens in no time 
    -CSS transitions allows you to change property values smoothly, over a given duration.

    -transition property is written in the element selector , not in hover selector
    -why didn't we put transition in hover selector?
        
        -because if we put it in hover select and mouse move over the element, transition will work fine
        
        -but if the mouse moved away from element ,our transition will not be applied and transition will happen in no time


    properties:
        transition-property:
            -Specifies the name of the CSS property the transition effect is for
            (which css property , transition will be applied on)

            - Always specify the transition-duration property, otherwise the duration is 0, and the transition will have no effect.
            
            -values:
                none:
                    -No property will get a transition effect
                all:
                    -Default value. All properties will get a transition effect
                propertyName:	
                    -Defines a comma separated list of CSS property names the transition effect is for

            Example:
                transition-property: width;
                transition-duration: 2s;
            
        transition-duration:	
            -Specifies how many seconds or milliseconds the transition effect takes to complete

            example:
                transition-duration: 2s;//second
            example:
                transition-duration: 2ms;//millisecond


        -transition-timing-function	:
            -Specifies the speed curve of the transition effect
            -This property allows a transition effect to change speed over its duration.

            -it is not used alot

            values:
                ease:
                    -Default value. Specifies a transition effect with a slow start, then fast, then end slowly

                -linear:	
                    -Specifies a transition effect with the same speed from start to end 
                -ease-in:
                    -Specifies a transition effect with a slow start 
                -ease-out:
                    -Specifies a transition effect with a slow end

        -transition-delay:
            -Defines when the transition effect will start

            example:
                transition-property: width;
                transition-duration: 2s;
                transition-delay: 1s;
    
    transition shorthand:
        -The transition-property property specifies the name of the CSS property the transition effect is for (the transition effect will start when the specified CSS property changes).

        -Tip: A transition effect could typically occur when a user hover over an element.

        -Note: Always specify the transition-duration property, otherwise the duration is 0, and the transition will have no effect.
         
        example:
            transition: duration(required) delay timing-function property

    
    Example on transition:
        index.html:
            <body>
                <div class="test"></div>
            </body>

        style.css:
            .test{
                width: 200px;
                height: 200px;
                background-color: tomato;
                /* transition-property: width;
                transition-duration: 2s;
                transition-delay: 1s;
                transition-timing-function: ease-in; */
                transition: 4s 1s ease-in width;
            }

            .test:hover{
                width: 100%;
            }
    --------------------------------------------------------------------------------------------------------------------------------------------------------------

    Example on transition on multiple properties:
        index.html:
            <body>
                <div class="test"></div>
            </body>
        style.css:
            .test{
                width: 200px;
                height: 200px;
                background-color: tomato;
                transition: 3s width, 3s height;
            }

            .test:hover{
                width: 100%;
                height: 100vh;
            }
        
    

    Note on transition:
        -don't use transition-property:all
        -because it will make transitions on other properties that we didn't want
        -it makes default transition on margin , background-color for example
----------------------------------------------------------------------------------------------------------------------------------------------------------------------

transform:
   -The transform property applies a 2D or 3D transformation to an element. This property allows you to rotate, scale, move, skew, etc., elements.
   
   -The transform property allows you to visually manipulate an element by skewing, rotating, translating, or scaling

    values:
        rotate(myDegree):
            -The rotate() method rotates an element clockwise or counter-clockwise according to a given degree.

            -Rotates the element clockwise(if degree is positive) from its current position.

            The following example rotates the <div> element clockwise with 20 degrees:
                transform: rotate(20deg);

            -Using negative values will rotate the element counter-clockwise.
            -example:
                transform: rotate(-20deg);
            

            Example on hover, transition and transform rotate:
                index.html:
                    <div class="test"></div>
                style.css:
                    .test{
                        width: 200px;
                        height: 200px;
                        background-color: tomato;
                        margin: 50px;
                        transition:transform 2s ; 
                    }

                    .test:hover{
                        transform: rotate(45deg);
                    }
        ------------------------------------------------------------------------------------------------------------------------------------------------------

        rotateX(degree):
            -The rotateX() method rotates an element around its X-axis at a given degree

            example:
                index.html:
                    <div class="test"></div>
                style.css:
                    .test{
                        width: 200px;
                        height: 200px;
                        background-color: tomato;
                        margin: 50px;
                        transition:transform 2s ; 
                    }

                    .test:hover{
                        transform: rotateX(45deg);
                    } 
        ------------------------------------------------------------------------------------------------------------------------------------------------------

        -rotateY(degree):
            -The rotateX() method rotates an element around its X-axis at a given degree

            example:
                transform: rotateY(45deg);

        ------------------------------------------------------------------------------------------------------------------------------------------------------

        -rotateZ(degree):
            -The rotateZ() method rotates an element around its Z-axis at a given degree
                    
            example:
                transform: rotateZ(450deg);
        ------------------------------------------------------------------------------------------------------------------------------------------------------
        
        scale():
            -The scale() method increases or decreases the size of an element (according to the parameters given for the width and height).


            example:
                transform:scale(2);
                    -new width = 2 old width
                    -new height = 2 old height
                    -we are zooming in
            example:
                transform:scale(2,1);
                    -new width = 2 old width
                    -new height = 1 old height(no change)
                    -we are zooming in
            example:
                transform:scale(0.5,0.5);
                    -new width = 0.5 old width
                    -new height = 0.5 old height
                    -we are zooming out

            example:
                index.html:
                    <div class="test"></div>
                style.css:
                    .test{
                        width: 200px;
                        height: 200px;
                        background-color: tomato;
                        margin: 50px;
                        transition:transform 3s ; 
                    }

                    .test:hover{
                        transform: scale(2);
                    }
        ------------------------------------------------------------------------------------------------------------------------------------------------------
        -scaleX():
            The scaleX() method increases or decreases the width of an element.
            example:
                transform:scaleX(2);
        ------------------------------------------------------------------------------------------------------------------------------------------------------

        -scaleY():
            -The scaleX() method increases or decreases the height of an element.
            example:
                transform:scaleY(2);
        ------------------------------------------------------------------------------------------------------------------------------------------------------
        -translate():
            -The translate() method moves an element from its current position (according to the parameters given for the X-axis and the Y-axis).

            example:
                transform: translate(50px, 100px);
                
                -moves the element 50 pixels to the right, and 100 pixels down from its current position

            example:
                transform: translate(-50px, -100px);

                --moves the element 50 pixels to the left, and 100 pixels up from its current position
        ------------------------------------------------------------------------------------------------------------------------------------------------------
        -translateX():
            -The translate() method moves an element along x-axis from its current position 

            example:
                -transform: translateX(50px);
        ------------------------------------------------------------------------------------------------------------------------------------------------------
        -translateY():
            -The translate() method moves an element along y-axis from its current position 

            example:
                -transform: translateY(50px);
        ------------------------------------------------------------------------------------------------------------------------------------------------------
        
        -skew():
            -skews an element along the X-axis and Y-axis by the given angle.
            -when to use skew:
                -in web design , there are some div that are skewed a little , they are made by skew without any transition
        ------------------------------------------------------------------------------------------------------------------------------------------------------
        -skewX():
            -skew(مائل/انحراف)
            -skews an element along the X-axis by the given angle.
            -transform: skewX(20deg);
        
        ------------------------------------------------------------------------------------------------------------------------------------------------------
        -skewY():
            -skew(مائل/انحراف)
            -skews an element along the Y-axis by the given angle.
            -transform: skewY(20deg);
    --------------------------------------------------------------------------------------------------------------------------------------------------------------                       
    difference between scaling and changing width or height themselves:
        example 1 on changing width height or both on hovering:
            index.html:
                <img src="images/mandala-1808239_960_720.png" alt="">
                <img src="images/mandala-1808239_960_720.png" alt="">
                <img src="images/mandala-1808239_960_720.png" alt="">
                <img src="images/mandala-1808239_960_720.png" alt="">
                <img src="images/mandala-1808239_960_720.png" alt="">
            style.css:
                img{
                    width: 200px;
                    transition:width 3s, height 3s ; 
                }

                img:hover{
                    width: 400px;
                    height: 400px;
                }
            
            -width and height works on the same layer on the other elements
            -so when changing width and/or height ,it will affects elements/image beside it (move them away) and affects their location/position

        example2 on changing scaling(width and height) on hovering:
            index.html:
                <img src="images/mandala-1808239_960_720.png" alt="">
                <img src="images/mandala-1808239_960_720.png" alt="">
                <img src="images/mandala-1808239_960_720.png" alt="">
                <img src="images/mandala-1808239_960_720.png" alt="">
                <img src="images/mandala-1808239_960_720.png" alt="">
            style.css:
                img{
                    width: 200px;
                    transition:transform 3s;
                }

                img:hover{
                    transform:scale(2,2)
                }
            
            -scale make a new layer
            -so when changing scaling (width and/or height) ,it will not affect elements/images beside it

            -elements beside it , will remain in the same position/location
            -scale acts as zooming
    --------------------------------------------------------------------------------------------------------------------------------------------------------------

    -applying multiple transforms:
        -Example:
            -we want to scale and rotate image on hovering

            index.html:
                <img src="images/mandala-1808239_960_720.png" alt="">
                <img src="images/mandala-1808239_960_720.png" alt="">
                <img src="images/mandala-1808239_960_720.png" alt="">
                <img src="images/mandala-1808239_960_720.png" alt="">
                <img src="images/mandala-1808239_960_720.png" alt="">
            style.html:
                img{
                    width: 200px;
                    transition:transform 3s; 
                }

                img:hover{
                    transform: scale(2,2) rotate(360deg);
                }

    --------------------------------------------------------------------------------------------------------------------------------------------------------------

    -when to use skew:
        -in web design , there are some div that are skewed a little , they are made by skew without any transition





-->