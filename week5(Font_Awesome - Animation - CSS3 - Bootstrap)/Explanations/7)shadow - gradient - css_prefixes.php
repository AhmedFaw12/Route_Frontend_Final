<!-- 
Shadow:
    box-shadow:
        -The CSS box-shadow property is used to apply one or more shadows to an element.
        -Specify a Horizontal and a Vertical Shadow:
            -In its simplest use, you only specify a horizontal and a vertical shadow. 
            -The default color of the shadow is the current text-color.
            

        -Specify a Color for the Shadow:
            The color parameter defines the color of the shadow.
        -Add a Blur Effect to the Shadow:
            -The blur parameter defines the blur radius. The higher the number, the more blurred the shadow will be
        -we can have negative horizontal and vertical shadow
            -it will go the opposite direction
        example:
            index.html:
                <div class="test"></div>            
            style.css:
                .test{
                    width: 300px;
                    height: 300px;
                    margin: auto;
                    margin-top: 40px;
                    background-color: #09c;
                    box-shadow: 20px 20px 4px #ccc; //go to right 20px and bottom 20px
                }
            
        example:
            -giving multiple shadows
            index.html:
                <div class="test"></div>
            style.css:
                .test{
                    width: 300px;
                    height: 300px;
                    margin: auto;
                    margin-top: 40px;
                    background-color: #09c;
                    box-shadow: 20px 20px 4px #ccc, -20px -20px 4px red;
                }
            
        bootstrap box shadow:
            Add or remove shadows to elements with box-shadow utilities.
            classes:
                shadow-none :No shadow
                shadow-sm   :small shadow
                shadow      :regular shadow
                shadow-lg   :Larger shadow
            example:
                <div class="shadow-lg">hello</div>                
    ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    text-shadow:
        -The text-shadow property adds shadow to text.

        -This property accepts a comma-separated list of shadows to be applied to the text.

        example:
            index.html:
                <h1>hello</h1>
            style.css:
                h1{
                    text-shadow: 4px 3px 4px red;
                }
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Gradiant:
    CSS gradients let you display smooth transitions between two or more specified colors.

    CSS defines three types of gradients:
        -Linear Gradients (goes down/up/left/right/diagonally):
            -To create a linear gradient you must define at least two color stops. Color stops are the colors you want to render smooth transitions among. 
            
            -You can also set a starting point and a direction (or an angle) along with the gradient effect.

            Syntax:
                background: linear-gradient(direction, color-stop1, color-stop2, ...);

            -Direction - Top to Bottom (this is default)
            example:
                index.html:
                    <div class="test"></div>
                style.css:
                    .test{
                        width: 100%;
                        height: 100vh;
                        margin: auto;
                        background: linear-gradient(red, blue);//from top to bottom
                    }
            Example :
                using direction
                background: linear-gradient(to right ,red, blue); //from left to right
                background: linear-gradient(bottom right ,red, blue); //from top left to bottom right
            Example:
                using angle:
                0 deg ==>to top(bottom->top)
                90deg ==>to right (left->right)
                180deg ==>to bottom(top -> bottom)
                background: linear-gradient(45,deg, red, blue, yellow);

            Example:
                -using same color but different opacities

                background: linear-gradient(rgba(0,150,220, 1), rgba(0,150,220, 0.2));

            Example:
                background: linear-gradient(red 50%, blue 50%);
        -------------------------------------------------------------------------------------------------------------------------------------------------------------------   
        -Radial Gradients (defined by their center):
            -A radial gradient is defined by its center.
            -To create a radial gradient you must also define at least two color stops.

            example:
                background: radial-gradient(red, rgba(0,150, 220, 0.2));
                
                
        -Conic Gradients (rotated around a center point)
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
css prefixes:
    -background-size: ; 
    background-attachment: ; 
    background-position: ;
    background-repeat: ;
    border-radius: ;
    box-sizing: ;
    transition: ;
    transform: ;
    animation: ;
    display:flex;
    box-shadow: ;
    text-shadow: ;
    background: linear-gradient();
     /*CSS3 */

    -all the above properties are from CSS3
    -but old versions of browsers don't support CSS3
    -some versions of browsers support CSS3 , but we need to write a prefix before the property
    -new/modern versions of browsers support CSS3

    -For Example:
        transition property
        chrome

        chrome 2-9 => not support
        chrome 9-15 => support with prefix
        chrome 15-current => support

        -so we need to write the property twice :
            transition ==> for modern versions
            -webkit-transition ==> for versions that support property with prefix

    -we will do this for all browsers 
    
    Solution:
        -finish your css code with normal css (transition , ....)
        -write css3 prefixer 
        -copy your code and go
        -copy your css code with prefixes and replace my code

    what are the prefixes of the browsers:
        webkit ==> chrom, safari(mac, ..) , new opera
        moz ==>firefox
        ms ==>IE ,Edge
        o ==>old opera

-->

<div class="test"></div>


