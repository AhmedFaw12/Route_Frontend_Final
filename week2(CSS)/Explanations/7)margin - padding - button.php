<!-- 

Margin(هامش خارجى):
    -The CSS margin properties are used to create space around elements, outside of any defined borders.

    -With CSS, you have full control over the margins. There are properties for setting the margin for each side of an element (top, right, bottom, and left).

    -we shouldn't exceed 50-60 px margin for better design

    -margin don't change dimensions of the elements(don't add width or height)
    -It is possible to give margins a negative value.

    Margin - Individual Sides
        CSS has properties for specifying the margin for each side of an element:
            margin-top
            margin-right
            margin-bottom
            margin-left
        
        Example:
            margin-right:50px;
            margin-top:50px;
    
    -Margin - Shorthand Property
        To shorten the code, it is possible to specify all the margin properties in one property.

        The margin property is a shorthand property for the following individual margin properties:
            margin-top
            margin-right
            margin-bottom
            margin-left
        
        -If the margin property has four values:
            margin: 25px 50px   75px    100px;
                    top  right  bottom  left    

            -follow clockwise direction:top right bottom left

        -If the margin property has three values:
            margin: 25px 50px   75px;
                    top  right  bottom  left
            -since there is no left => then it will take its opposite side value(left=right=50px)

        If the margin property has two values:
            margin: 25px 50px;
                    top  right bottom left
            
            -since there is no left => then it will take its opposite side value
            (left=right=50px)
            
            -since there is no bottom => then it will take its opposite side value(bottom=top=25px)

        If the margin property has one value:
            margin: 25px;
            all four margins are 25px
    
        Example:
            style.css:
                .clearfix{
                    clear: both;
                }

                .item{
                    width: 20%;
                    height: 200px;
                    background-color: #09c;
                    float: left;
                    margin-right: 50px;
                    margin-top: 50px;
                }
            index.html:
                <div class="item"><p>Lorem ipsum dolor sit amet consectetur.</p></div>
                <div class="item"><p>Lorem ipsum dolor sit amet consectetur.</p></div>
                <div class="item"><p>Lorem ipsum dolor sit amet consectetur.</p></div>
                <div class="item"><p>Lorem ipsum dolor sit amet consectetur.</p></div>
                <div class="item"><p>Lorem ipsum dolor sit amet consectetur.</p></div>
                <div class="item"><p>Lorem ipsum dolor sit amet consectetur.</p></div>
                <div class="item"><p>Lorem ipsum dolor sit amet consectetur.</p></div>

                <div class="clearfix"></div>
    ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    
    margin:auto:
        -You can set the margin property to auto to (horizontally center the element within its container).

        -The element will then take up the specified width, and the remaining space will be split equally between the left and right margins.
    
        Example:
            style.css:
                .item{
                    width: 75%;
                    height: 200px;
                    background-color: #09c;
                    margin : 50px auto;
                    text-align:center
                }
                -we will center item horizontally reletive to its parent(body)
                -margin:auto => means margin-right:auto , margin-left:auto, it doesn't change in the top or bottom

                -margin:50px auto :
                    means margin-right:auto , margin-left:auto
                    -margin-top=margin-bottom=50px
            
            index.html:
                <div class="item"><p>Lorem ipsum dolor sit amet consectetur.</p></div>
        
        -Notes:
            -margin :auto will work only if width of element < 100% its parent width
            difference between margin:auto & text-align:center:
                -margin:auto centers element/div(block) itself relative to its parent
                -text-align:center  centers text/images/buttons(inline, inline-block) inside the element (makes text in the center of the element)
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Padding(هامش داخلى) :
    -The CSS padding properties are used to generate space around an element's content, inside of any defined borders.

    -padding change dimensions of the elements(add width or height or both) 
    
    -With CSS, you have full control over the padding. There are properties for setting the padding for each side of an element (top, right, bottom, and left).
    
    -Padding only takes positive values

    Padding - Individual Sides
        CSS has properties for specifying the padding for each side of an element:
            padding-top
            padding-right
            padding-bottom
            padding-left
    
    -padding:auto is the same as text-align:center

    Example:
        html:
            <button>say Hello</button>
        css:
            button{
                padding: 10px 30px;
                border-radius: 20px;
                border: none;
                background-color: black;
                color: #fff;
            }

        -buttons comes with solid black border by default
        -to remove border: border: none;
        -to enlarge buttons don't use width and height
        -to enlarge buttons use padding     

------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Example on Margin and Padding:
    index.html:
        <div class="profile">
            <img src="images/client-1.png" alt="Dr Ahmed Ali">

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum quaerat vel dicta a inventore consequatur suscipit nulla id mollitia facere harum, optio in labore ab eligendi quos eveniet expedita ducimus.</p>

            <button>say Hello</button>
        </div>
    style.css:
        .profile{
            width: 75%;
            margin: auto;
            text-align: center;
        }

        .profile img{
            width: 200px;
            border-radius: 50%;
        }

        .profile button{
            padding: 10px 30px;
            border-radius: 20px;
            border: none;
            background-color: black;
            color: #fff;
        }

        -buttons comes with solid black border by default
        -to remove border: border: none;
        -to enlarge buttons don't use width and height
        -to enlarge buttons use padding 
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

button tag:
    syntax:
        <button>say Hello</button>
        
    Example:
        html:
            <button>say Hello</button>
        css:
            button{
                padding: 10px 30px;
                border-radius: 20px;
                border: none;
                background-color: black;
                color: #fff;
            }

        -buttons comes with solid black border by default
        -to remove border: border: none;
        -to enlarge buttons don't use width and height
        -to enlarge buttons use padding      
-->