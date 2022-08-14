<!-- 
box-sizing:
    The CSS box-sizing property allows us to include the padding and border in an element's total width and height.

    Without the CSS box-sizing Property:
        -By default, the width and height of an element is calculated like this:

        -width + padding + border = actual width of an element
        -height + padding + border = actual height of an element

        -This means: When you set the width/height of an element, the element often appears bigger than you have set (because the element's border and padding are added to the element's specified width/height).

    With the CSS box-sizing Property:
        -The box-sizing property allows us to include the padding and border in an element's total width and height.


    values:
        content-box:	
            -Default. The width and height properties (and min/max properties) includes only the content. Border and padding are not included	
        border-box:
        	-The width and height properties (and min/max properties) includes content, padding and border 

    
    Important trick:
        1)-when we have two nested divs 
        -and we give parent div padding 
        -it will be margin to the child

        2)we will give box-sizing :border-box to all elements:
            *{
                box-sizing: border-box;
            }

    
    Example:
        
        -we want to make 4 divs besides eachother
        -each div will have class item, and contain image, h2,p, button
        -give item width:25%, also give item float:left
        -don't forget to make clear:both
        -we want to make margins between each div
        -so we will use box-sizing:border-box(so when we give padding, don't increase width )
        -and make div with class inner inside item div
        -give item a padding so that it will appear margin to inner div
        -we could make item and give it padding without the need of inner div
        -the use of inner div :
            -that we want to give background-color for each inner div


        index.html:
            <body>
                <div class="services">
                    <div class="item">
                        <div class="inner">
                            <img src="images/two.png" alt="">
                            <h2>Lorem ipsum dolor sit.</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, sapiente!</p>
                            <button>see More</button>
                        </div>
                    </div>
                    <div class="item">
                        <div class="inner">
                            <img src="images/two.png" alt="">
                            <h2>Lorem ipsum dolor sit.</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, sapiente!</p>
                            <button>see More</button>
                        </div>
                    </div>
                    <div class="item">
                        <div class="inner">
                            <img src="images/two.png" alt="">
                            <h2>Lorem ipsum dolor sit.</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, sapiente!</p>
                            <button>see More</button>
                        </div>
                    </div>
                    <div class="item">
                        <div class="inner">
                            <img src="images/two.png" alt="">
                            <h2>Lorem ipsum dolor sit.</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, sapiente!</p>
                            <button>see More</button>
                        </div>
                    </div>
                
                    <div class="clearfix"></div>
                </div>
            </body>

        style.css:
            *{
                box-sizing: border-box;
            }


            .clearfix{
                clear: both;
            }

            .services{
                text-align: center;
                color:#fff;
            }

            .item{
                width: 25%;
                float: left;
                padding: 10px;
            }

            .inner{
                background-color: #09c;
                padding: 10px;
            }

            .item img{
                width: 100%;
            }


-->


