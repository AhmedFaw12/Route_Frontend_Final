<!-- 
Nested Selectors:
        -selector inside selector
        Example:
            css:
                .member img{
                    width:100%;
                }
            html:
                <div class="member">
                    <h2>hello</h2>
                    <img src="images/one.png" alt="">
                </div>
            -select images inside member 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------            

Grouping Selectors:
    -to group multiple selectors with common styles

    example:
        h3,h4{
            color: red;
        }
    example:
        .x,.y{
            color: red;
        }
    example:
        h2, .y{
            color:blue;
        }
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------


-->

Comments:
    -comments in html:
        <!--  -->
    -comments in css:
        /*  */
        