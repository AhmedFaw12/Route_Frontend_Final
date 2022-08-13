<!--  
position example:
    -we want to display 4 divs beside each other
    -each div has a div makes a layer above it
    -the upper div has heading and paragraph  
    -the lower div has an image:
        -this image can be done by background image or we can use image tag
        -image tag is better for SEO
        -search engine don't see css(background-image:url("image"))
        -image tag gives better flexability (scale, zoom, ..)


    Example:
        index.html:
            <div class="member">
                <img src="images/two.png" alt="Abdo">
                <div class="caption">
                    <h2>Ahmed Saber</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis tempora nesciunt doloremque fugit neque voluptatem unde, laborum adipisci rem iure.</p>
                    
                </div>
            </div>
            <div class="member">
                <img src="images/two.png" alt="Abdo">
                <div class="caption">
                    <h2>Ahmed Saber</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis tempora nesciunt doloremque fugit neque voluptatem unde, laborum adipisci rem iure.</p>

                </div>
            </div>
            <div class="member">
                <img src="images/two.png" alt="Abdo">
                <div class="caption">
                    <h2>Ahmed Saber</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis tempora nesciunt doloremque fugit neque voluptatem unde, laborum adipisci rem iure.</p>

                </div>
            </div>
            <div class="member">
                <img src="images/two.png" alt="Abdo">
                <div class="caption">
                    <h2>Ahmed Saber</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis tempora nesciunt doloremque fugit neque voluptatem unde, laborum adipisci rem iure.</p>

                </div>
            </div>
            
            <div class="clearfix"></div>
        style.css:
            body{
                background-color: #313131;
            }

            .clearfix{
                clear: both;
            }

            .member{
                width: 25%;
                float: left;
                border: 4px solid white;
                position: relative;
                text-align: center;
                color: #fff;
            }


            .caption{
                background-color: rgba(42,63,85 ,0.7);
                position: absolute;
                top:0;
                left: 0;
                width: 100%;
                height: 100%;
            }
            -to make upper div on top we gave it position absolute and gave its parent position relative
            -we also gave it top:0, left:0
            -to cover full div height , we gave it height:100%
            -width :100% not required , since div default width is 100%

            .member img{
                width: 100%;
            }

 

----------------------------------------------------------------------------------------------------------------------------------------------------------------------

-rgb:
    rgb(red, green, blue)

    Each parameter (red, green, and blue) defines the intensity of the color between 0 and 255.

    For example, rgb(255, 0, 0) is displayed as red, because red is set to its highest value (255) and the others are set to 0.

    To display black, set all color parameters to 0, like this: rgb(0, 0, 0).

    To display white, set all color parameters to 255, like this: rgb(255, 255, 255).

-rgba:
    RGBA color values are an extension of RGB color values with an alpha channel - which specifies the opacity for a color.

    opacity :
        -opacity(عتامة)
        -the condition of lacking transparency or translucence; opaqueness.

        -An RGBA color value is specified with:

        -rgba(red, green, blue, alpha)

        -The alpha parameter is a number between 0.0 (fully transparent) and 1.0 (not transparent at all)

        

-->