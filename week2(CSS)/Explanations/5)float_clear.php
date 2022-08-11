<!-- 
float property:
    -float allows elements to float/get besides each other 
    -float is better than display:inline-block :
        -because float don't make margins/spaces between elements

    -float:left:
        Example:
            style.css:
                .test{
                    width: 200px;
                    height: 200px;
                    background-color: #09c;

                    float: left;
                }
            index.html:
                <div class="test">
                    <p>One.</p>
                </div>
                
                <div class="test">
                    <p>two.</p>
                </div>
                
                <div class="test">
                    <p>three.</p>
                </div>
            -elements will float left: one=> two =>three
    -float:right:
            style.css:
                .test{
                    width: 200px;
                    height: 200px;
                    background-color: #09c;

                    float: right;
                }
            index.html:
                <div class="test">
                    <p>One.</p>
                </div>
                
                <div class="test">
                    <p>two.</p>
                </div>
                
                <div class="test">
                    <p>three.</p>
                </div>
            -elements will float right:                     three<=two<=one

    -float:left & float:right
            style.css:
                .one{
                    width: 200px;
                    height: 200px;
                    background-color: #09c;

                    float: left;
                }

                .two{
                    width: 200px;
                    height: 200px;
                    background-color: #09c;

                    float: right;
                }
            index.html:
                <div class="one">
                    <p>One.</p>
                </div>
                
                <div class="two">
                    <p>two.</p>
                </div>
            -one will float left and two will float right: one           two
    
    ------------------------------------------------------------------------------------------------------------------------------------------------------------------
    -disadvantages of float:
        -last element that takes float , makes following elements float besides them even though they are block 

        Example:
            style.css:
                .one{
                    width: 25%;
                    height: 200px;
                    background-color: #09c;
                    float: left;
                }

            index.html:
                <div class="one">
                    <p>One.</p>
                </div>
                
                <div class="one">
                    <p>two.</p>
                </div>
                
                <div class="one">
                    <p>three.</p>
                </div>
                
                <h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste, molestiae?</h1>
                <h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste, molestiae?</h1>
                <h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste, molestiae?</h1>
            
            -all h1 will float beside divs that have floated
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------

clear property:
    -solves the float problem
    
    -When we use the float property, and we want the next element below (not on right or left), we will have to use the clear property.

    -The clear property specifies what should happen with the element that is next to a floating element.

    -The clear property can have one of the following values:
        none : The element is not pushed below left or right floated elements. This is default
        left : The element is pushed below left floated elements
        right : The element is pushed below right floated elements
        both : The element is pushed below both left and right floated elements

    -When clearing floats, you should match the clear to the float: If an element is floated to the left, then you should clear to the left. Your floated element will continue to float, but the cleared element will appear below it on the web page.

--------------------------------------------------------------------------------------------------------------------------------------------------------------------------

-Example on float & clear:
    style.css:
        .item{
            width: 25%;
            height: 200px;
            background-color: tomato;
            text-align: center;
            float: left;
        }

        .clearfix{
            clear: both;
        }
    index.html:
        <div class="item">
            <h2>one</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, laborum?</p>

        </div>
        
        <div class="item">
            <h2>two</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum, dolor.</p>
        </div>
        
        <div class="item">
            <h2>three</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, consequatur.</p>
        </div>
        
        <div class="clearfix"></div>

        <h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste, molestiae?</h1>
        <h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste, molestiae?</h1>
        <h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste, molestiae?</h1>

        -h1 will not appear besides floated elements , as we cleared float
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Example2 on div example using float and clear:
    style.css:
        .clearfix{
            clear: both;
        }

        h1,.member{
            text-align: center;
        }

        .o-letter{
            color: #09c;
            font-size: 80px;
            display: inline;
        }

        .member{
            width: 33.3333%;
            float: left;
        }

        .member img{
            width: 100%;
        }
    index.html:
        <h1><span class="o-letter">O</span>ur Team</h1>

        <div class="member">
            <img src="images/member-1.jpg" alt="Dr Ahmed Ali">
            <h2>Ahmed Ali</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, perspiciatis provident aperiam quo minima reprehenderit exercitationem reiciendis ex accusantium beatae, illum porro omnis rem laboriosam accusamus, in repellendus cumque deserunt?</p>

            <button>See More</button>
        </div>
        <div class="member">
            <img src="images/member-2.jpg" alt="Dr Ahmed Ali">
            <h2>Ahmed Ali</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, perspiciatis provident aperiam quo minima reprehenderit exercitationem reiciendis ex accusantium beatae, illum porro omnis rem laboriosam accusamus, in repellendus cumque deserunt?</p>

            <button>See More</button>
        </div>
        <div class="member">
            <img src="images/member-3.jpg" alt="Dr Ahmed Ali">
            <h2>Ahmed Ali</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, perspiciatis provident aperiam quo minima reprehenderit exercitationem reiciendis ex accusantium beatae, illum porro omnis rem laboriosam accusamus, in repellendus cumque deserunt?</p>

            <button>See More</button>
        </div>

        <div class="clearfix"></div>



-->