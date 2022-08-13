<!--  
z-index:
    -The z-index property specifies the stack order of an element.

    -An element with greater stack order is always in front of an element with a lower stack order.

    -Note: z-index only works on positioned elements (position: absolute, position: relative, position: fixed, or position: sticky) and flex items (elements that are direct children of display:flex elements).

    -Note: If two positioned elements overlap without a z-index specified, the element positioned last in the HTML code will be shown on top. 

    -each positioned element creates a new layer
   
    Example on positioned elements overlap without a z-index specified:
        index.html:
            <h2>Lorem ipsum dolor sit amet.</h2>
            <h2>Lorem ipsum dolor sit amet.</h2>
            <h2>Lorem ipsum dolor sit amet.</h2>
            <h2>Lorem ipsum dolor sit amet.</h2>
            <h2>Lorem ipsum dolor sit amet.</h2>

            <div class="one">one</div>
            <div class="two">two</div>
            <div class="three">three</div>


            -div one create a layer above normal content of website
            -div two create a layer above div one
            -div three create a layer above div two
            -so we have 4 layers(normal content + div one + div two + div three)

            -If two or more positioned elements overlap without a z-index specified, the element positioned last in the HTML code will be shown on top. 

            -so div three will appear on top

        style.css:
                .one{
                    width: 100px;
                    height: 100px;
                    background-color: orange;
                    position: absolute;
                    top: 0;
                    left: 0;
                }
                .two{
                    width: 100px;
                    height: 100px;
                    background-color: #09c;
                    position: absolute;
                    top: 20px;
                    left: 20px;

                }
                .three{
                    width: 100px;
                    height: 100px;
                    background-color: teal;

                    position: absolute;
                    top: 40px;
                    left: 40px;

                }
    --------------------------------------------------------------------------------------------------------------------------------------------------------------

    -every layer created has a z-index
    -by default z-index = 0 for elements (even if they are positioned)
    -so when z-index = 0 (default),  If two or more positioned elements overlap without a z-index specified, the element positioned last in the HTML code will be shown on top. 


    -we can give values to z-index to control what appear on top, and what appear on bottom 

    -The z-index CSS property sets the z-order of a positioned element and its descendants or flex items. Overlapping elements with a larger z-index cover those with a smaller one. 

    z-index can have negative values.
    
    Example:
        index.html:
            <h2>Lorem ipsum dolor sit amet.</h2>
            <h2>Lorem ipsum dolor sit amet.</h2>
            <h2>Lorem ipsum dolor sit amet.</h2>
            <h2>Lorem ipsum dolor sit amet.</h2>
            <h2>Lorem ipsum dolor sit amet.</h2>

            <div class="one">one</div>
            <div class="two">two</div>
            <div class="three">three</div>
            

            -order of the elements :
                -div one is the last because its z-index = -1
                -all normal elements that don't have position(h2) ,because its z-index = 0 by default

                -div three is above h2 because its z-index = 7;
                -div two is on the top because its z-index = 9999999999;
        style.css:
            .one{
                width: 100px;
                height: 100px;
                background-color: orange;
                position: absolute;
                top: 0;
                left: 0;
                z-index: -1;
            }
            .two{
                width: 100px;
                height: 100px;
                background-color: #09c;
                position: absolute;
                top: 20px;
                left: 20px;

                z-index: 99999999;

            }
            .three{
                width: 100px;
                height: 100px;
                background-color: teal;

                position: absolute;
                top: 40px;
                left: 40px;

                z-index: 7;
            }


-->