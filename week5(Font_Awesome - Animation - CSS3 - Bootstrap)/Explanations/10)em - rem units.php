<!-- 
rem unit:
    -rem	Relative to font-size of the root element(html tag)
    -html default font-size is 16px (unless i modified this value)
    -we can use this unit with font-size, margin , padding (not width , height)
    
    -rem is better than px because of media query:
        -instead of modifiying margin, padding, font-size in multiple screen widths
        -we will use rem , and just modifiying font-size of html tag in media queries
--------------------------------------------------------------------------------------------------------------------------------------------------------------------

em unit:
    -em	Relative to the font-size of the element (2em means 2 times the size of the current font)

    -if element has no font-size, it will go to nearest parent font-size
    -if parent has no font-size , it will go to nearest parent

    example:
        html:
            <div class="parent">
                <div class="test">

                </div>
            </div>
        css:
            .parent{
                font-size: 25px;
            }
            .test{
                width: 300px;
                height: 300px;
                background-color: tomato;
                margin: 3em;
            }

            margin will be 3*25 = 75px

    example:
        html:
            <div class="parent">
                <div class="test">

                </div>
            </div>
        css:
            .parent{
                font-size: 25px;
            }
            .test{
                font-size:15px;
                width: 300px;
                height: 300px;
                background-color: tomato;
                margin: 3em;
            }

            margin will be 3*15 = 45px
    
-->
