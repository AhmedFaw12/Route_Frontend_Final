<!-- 
Css:
    Table uses:
        -don't ever use table to divide/design our page theme
        -table is only used to display data/products/ ...

    Div Tag:
        syntax:
            <div>

            </div>
        it isMost frequent/used Tag

        -Intro:
            -The <div> tag defines a division or a section in an HTML document.

            -The <div> tag is used as a container for HTML elements - which is then styled with CSS or manipulated with JavaScript.

            -The <div> tag is easily styled by using the class or id attribute.

            -Any sort of content can be put inside the <div> tag! 

            Example:
                style.css:
                    .one{
                        background-color: gray;
                        width: 400px;
                        height: 400px;
                        text-align: center;
                        color: #fff;
                    }

                    .two{
                        background-color: tomato;
                        width: 600px;
                        height: 400px;
                        text-align: center;
                        color: #fff;
                    }
                index.html:
                    <div class="one">
                        <h2>web design</h2>

                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto eius eveniet neque. Enim, quaerat atque. Odio aut ducimus amet officiis magnam, consectetur ab ut temporibus porro cumque nisi nemo quis.</p>
                    </div>

                    <div class="two">
                        <h2>web design</h2>

                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto eius eveniet neque. Enim, quaerat atque. Odio aut ducimus amet officiis magnam, consectetur ab ut temporibus porro cumque nisi nemo quis.</p>
                    </div>
        ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

        -dev properties default values:
            width:
                width:100%;
                full width
            height:
                height:auto;
                -automatic to its content

                -so if div has no content , height will be 0 and div will not appear
                    

                example:
                    style.css:
                        .parent{
                            color: red;
                            background-color: gray;
                            width: 100%;
                        }
                    index.html:
                        <div class="parent">
                            
                        </div> 
                    
                    -parent div will not appear , because it has no content and its height is auto so height will be 0

            background-color:
                background-color:transparent;
                -has no color
            color:
                color:black;
                -text will be black
            text-align:
                text-align:left;
                -text will start from left
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    
    Nested Divs:
        Example:
            style.css:
                .parent{
                    width: 400px;
                    height: 400px;
                    background-color: tomato;
                }

                .child{
                    width: 150px;
                    height: 100px;
                    background-color: gray;
                }
            index.html:
                
                <div class="parent">
                    <div class="child">
                        
                    </div>
                </div>
    -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------   
    -css percentages :
        
        - It is often used to define a size as relative to an element's parent object. Numerous properties can use percentages, such as width, height, margin, padding, and font-size.

        Example:
            style.css:
                .parent{
                    width: 50%;
                    height: 400px;
                    background-color: tomato;
                }

                .child{
                    width: 50%;
                    height: 100px;
                    background-color: gray;
                }
            
            index.html:            
                <div class="parent">
                    <div class="child">
                        
                    </div>
                </div>
            -parent div will be 50% of its parent(body) width
            -child div will be 50% of its parent(parent div) width

            -parent of body is html
            -html is the root 


-->

