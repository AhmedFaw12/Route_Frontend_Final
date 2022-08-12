<!-- 
background:
    The CSS background properties are used to add background effects for elements.

    properties:
        -background-color
        -background-image:
            -background-image property specifies an image to use as the background of an element.
            -By default, the image is repeated so it covers the entire element.

            -if the image dimensions (width , height) bigger than element , then parts of background-image will be displayed not all of it , so we need to adjust its size using: background-size: 100% 100%;

            -if image dimensions (width , height) smaller than element,so the image is repeated so it covers the entire element.

            example:
                index.html:
                    <div class="test">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eaque quam exercitationem impedit quibusdam error, recusandae a beatae voluptates quasi, quod quia nisi atque, sunt incidunt. Eos magni quia quam!</p>
                    </div>
                style.css:
                    .test{
                        width: 700px;
                        height: 500px;
                        color: tomato;
                        border: solid 5px red;
                        background-image: url("../images/intro-bg.jpg");
                    }
        --------------------------------------------------------------------------------------------------------------------------------------------------------------

        background-size:
            The background-size property specifies the size of the background images.
            values

            values:
                auto:	Default value. The background image is displayed in its 
                        original size	
                
                length:	Sets the width and height of the background image. The first 
                        value sets the width, the second value sets the height. If only one value is given, the second is set to "auto". Read about length units	
                
                percentage:	Sets the width and height of the background image in 
                            percent of the parent element. The first value sets the width, the second value sets the height. If only one value is given, the second is set to "auto"	
                
                cover:	Resize the background image to cover the entire container, 
                        even if it has to stretch the image or cut a little bit off one of the edges	
                
                contain(not frequently used):	always show the whole image, even if 
                                                that leaves a little space to the sides or bottom.
           
            Example on background-size in percentage:
                index.html:
                    <div class="test">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eaque quam exercitationem impedit quibusdam error, recusandae a beatae voluptates quasi, quod quia nisi atque, sunt incidunt. Eos magni quia quam!</p>
                    </div>
                style.css:
                    .test{
                        width: 700px;
                        height: 500px;
                        color: tomato;
                        border: solid 5px red;
                        background-image: url("../images/intro-bg.jpg");
                        background-size: 100% 100%;
                    }
                
                -if the image dimensions (width , height) bigger than element , then parts of background-image will be displayed not all of it , so we need to adjust its size using: background-size: 100% 100%;

                -this means image width = div width , image height = div height

                Note:
                    -if we used background-size: 100% 100%; , its resolution we be reduced

        --------------------------------------------------------------------------------------------------------------------------------------------------------------
        -background-repeat:
            By default, the background-image property repeats an image both horizontally and vertically only if (image dimension is smaller than its element)

            values:
                repeat:	The background image is repeated both vertically and horizontally.  The last image will be clipped if it does not fit. This is default	
                repeat-x:	The background image is repeated only horizontally	
                repeat-y:	The background image is repeated only vertically	
                no-repeat:	The background-image is not repeated. The image will only be shown once
            
            example:
                background-repeat : no-repeat
        --------------------------------------------------------------------------------------------------------------------------------------------------------------

        -background-position:
            -the background-position property sets the starting position of a background image.

            -By default, a background-image is placed at the top-left corner of an element, and repeated both vertically and horizontally.

            values:
                left top
                left center      
                left bottom     
                right top           
                right center
                right bottom
                center top
                center center
                center bottom	
                -If you only specify one keyword, the other value will be "center"

                -xpos ypos: The first value is the horizontal position and the second value is the vertical. The top left corner is 0 0. Units can be pixels (0px 0px) or any other CSS units.
                    example:
                        background-position:100px 100px
                        -100px from left
                        -100px from top
        --------------------------------------------------------------------------------------------------------------------------------------------------------------
        -background-attachment:
            -The background-attachment property sets whether a background image scrolls with the rest of the page, or is fixed.
            
            values:
                scroll: The background image will scroll with the page. This is default
                fixed:  The background image will not scroll with the page

            -note:
                -when we use background-attachment:fixed with a div
                -and there is a section above it and section below it, it gives special/beautiful effect
            Example:
                index.html:
                    <body>
                        <h1>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum.</h1>   
                        <h1>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum.</h1>   
                        <h1>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum.</h1>   
                        <h1>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum.</h1>   
                        <h1>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum.</h1>   
                        <h1>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum.</h1>   
                        <h1>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum.</h1>   
                        <h1>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum.</h1>   
                        <h1>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum.</h1>   
                        <h1>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum.</h1>   
                        <h1>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum.</h1>   
                        <h1>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum.</h1>   
                        <h1>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum.</h1>   
                        <h1>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum.</h1>   
                        <h1>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum.</h1>   
                        <h1>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum.</h1>   
                        <h1>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum.</h1>   
                            
                    </body>
                style.css:
                    body{
                        background-image: url("../images/full-2-800x640.jpg");
                        background-size: 100% 100%;
                        color: white;
                        background-attachment: fixed;
                    }
                
    ----------------------------------------------------------------------------------------------------------------------------------------------------------------------

    Example:
        index.html:
            <div class="test">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eaque quam exercitationem impedit quibusdam error, recusandae a beatae voluptates quasi, quod quia nisi atque, sunt incidunt. Eos magni quia quam!</p>
            </div>
            
        style.css:
            .test{
                width: 700px;
                height: 500px;
                color: tomato;
                border: solid 5px red;
                background-color: gray;
                background-image: url("../images/restaurant.png");
                background-repeat: no-repeat;
                background-position: center center;
            }
            -we can make background-color with background-image
            -in this example, this image is smaller than container
            -and we dont't want to repeat it
            -we position the image in the center of the container
            -background-image is white/transparent, so we give background-color:gray
    ----------------------------------------------------------------------------------------------------------------------------------------------------------------------

    Example:
        -we can make multiple background images but it is rarely used
        index.html:
            <div class="test">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eaque quam exercitationem impedit quibusdam error, recusandae a beatae voluptates quasi, quod quia nisi atque, sunt incidunt. Eos magni quia quam!</p>
           </div>

        style.css:
            .test{
                width: 700px;
                height: 500px;
                color: tomato;
                border: solid 5px red;
                background-color: tomato;
                background-image: url("../images/flower1.jpg"), url("../images/flower2.jpg");
                background-repeat: no-repeat;
                background-size: 50% 50%, 50% 50%;
                background-position: top left, center;
            }

            -we put 2 images
            -we made both no-repeat
            -we gave them size 50% 50% to both images
            -but the images will be above each other , so we need to position them
            -so we give them different positions 
-->