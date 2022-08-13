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
    
-->