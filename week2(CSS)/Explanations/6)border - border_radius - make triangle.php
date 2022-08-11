<!-- 
Border in css:
    -border in css has 3 properties:
        -border-color:
            set the color of the four borders.
            border-color:red;
        -border-width:
            -specifies the width of the four borders.
            border-width:15px;
        -border-style:
            specifies what kind of border to display.
            styles:
                dotted : Defines a dotted border
                dashed : Defines a dashed border
                solid : Defines a solid border
                none : Defines no border
    ------------------------------------------------------------------------------------------------------------------------------------------------------------------
    -border shorthand property:
        -instead of write many properties in multiple lines
        -we will write them in just one line using border property
        Example:
            border: solid 5px red;
            -they can be written in any order
            -style is required 

            style.css:
                .test{
                    width: 200px;
                    height: 200px;
                    background-color: #09c;
                    /* border-color:orange;
                    border-width: 15px;
                    border-style:solid;
                    */
                    border: solid 5px red;
                }

            index.html:    
                <div class="test">

                </div>
    ------------------------------------------------------------------------------------------------------------------------------------------------------------------

    -border sides:
        -we can make border for specific sides and not all of them
        example:
            border-right: solid 5px red;
            border-left: solid 5px red;
            border-top: solid 5px red;
            border-bottom: solid 5px red;
    ------------------------------------------------------------------------------------------------------------------------------------------------------------------

    -border-radius:
        -The border-radius property is used to add rounded borders to an element
        -border-radius does not relate to border

        -we can make border-radius with/without border property
        border-radius :40px;

        -to make a perfect circle(element:div, img, ...):
            -make border-radius:50% (relative to width and height)
            -width = height
            example:
                style.css:
                    .test{
                        width: 200px;
                        height: 200px;
                        background-color: #09c;

                        border: solid 5px red;
                        border-radius: 50%;
                    }
                index.html:        
                    <div class="test">

                    </div>
        to make specific rounded corners:
            -border-top-left-radius
            example:

                .test{
                    width: 200px;
                    height: 200px;
                    background-color: #09c;

                    border: solid 5px red;
                    border-top-left-radius: 50%;
                    border-bottom-right-radius: 50%;
                }
    
                <div class="test">

                </div>
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Making triangle using border:
    index.html:
        <div class="test">

        </div>
    style.css:
        .test{
            width: 0px;
            height: 0px;

            border-top: solid 50px red;
            border-left: solid 50px transparent;
            border-right: solid 50px transparent;
            border-bottom: solid 50px transparent;
        }

        steps:
            -we have div
            -make its width = 0 and height = 0
            -give it borders with large width
            -make all borders transparent , except one side give it color
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
-->