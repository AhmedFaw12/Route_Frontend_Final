<!--  
media query:
    -RWD(Responsive Web Design)(تصميم موقع متجاوب)
    
    -we want to make responsive design to match all kinds of screen(pc, mobile,tablet, laptop, ....)

    Media query is a CSS technique introduced in CSS3.

    It uses the @media rule to include a block of CSS properties only if a certain condition is true.

    @media:
        syntax:
            @media [media-type] ([media-feature]) {
            /* Styles! */
            }

            -The first ingredient in a media query recipe is the @media rule itself, which is one of many CSS at-rules. Why does @media get all the attention? Because it’s geared to the type of media that a site is viewed with, what features that media type supports, and operators that can be combined to mix and match simple and complex conditions alike.

    -media types:
        -all: Matches all devices
        -print: Matches documents that are viewed in a print preview or any media that breaks the content up into pages intended to print.
        -screen: Matches devices with a screen
        -speech: Matches devices that read the content audibly, such as a -screenreader.
    
    -media features:
        -Once we define the type of media we’re trying to match, we can start defining what features we are trying to match it to. We’ve looked at a lot of examples that match screens to width, where screen is the type and both min-width and max-width are features with specific values.
        
        -But there are many, many (many!) more “features” we can match

    -operators:
        Media queries support logical operators like many programming languages so that we can match media types based on certain conditions. The @media rule is itself a logical operator that is basically stating that “if” the following types and features are matches, then do some stuff.


        -and :
            we can use the and operator if we want to target screens within a range of widths:

        -or (or comma-separated):
            -We can also comma-separate features as a way of using an or operator to match different ones

            example:
                @media screen (prefers-color-scheme: dark), (min-width 1200px) {
                    .element {
                        /* Styles! */
                    }
                }
        
    range of devices sizes (breakpoints) of bootstrap:
        -  <576px =>extra small(xs)  ==>phones
        -  >=576px  <768px => small(sm) ==>portrait tablets and large phones
        -  >=768px  <992px => medium(md) ==>landscape tablets 
        -  >=992px  <1200px => large(lg)  ==>laptops/desktops
        -  >=1200px  <1400px => extra large(xl) =>large laptops and desktops
        -  >=1400px => extra extra large(xxl) =>large laptops and desktops
    --------------------------------------------------------------------------------------------------------------------------------------------------------------

    -responsive web design tester extenstion:
        -install this extension on chrome
        -it will give you the shape of your website on certain device

    --------------------------------------------------------------------------------------------------------------------------------------------------------------
    Note:
        -we can put media query code in a seperate (.css) file
        -but we need to link this file in html file after our main css file

    --------------------------------------------------------------------------------------------------------------------------------------------------------------
    example:
        css:
            @media screen and (min-width:600px) and (max-width:800px){
                body{
                    background-color: green;
                }
            }
    

    example:
        index.html:
            <head>
                <link rel="stylesheet" href="css/style.css">
                <link rel="stylesheet" href="css/responsive.css">
            </head>
            <div class="parent">
                <div class="inner">
                    <img src="images/two.png" alt="">
                    <div class="caption">
                        <h2>Ahmed Saber</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque sapiente reprehenderit velit quae ipsa nobis assumenda et ullam vel illo, ab nostrum quisquam enim odit nesciunt. Necessitatibus neque corrupti dolore.</p>
                    </div>
                </div>
            </div>
            <div class="parent">
                <div class="inner">
                    <img src="images/two.png" alt="">
                    <div class="caption">
                        <h2>Ahmed Saber</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque sapiente reprehenderit velit quae ipsa nobis assumenda et ullam vel illo, ab nostrum quisquam enim odit nesciunt. Necessitatibus neque corrupti dolore.</p>
                    </div>
                </div>
            </div>
            <div class="parent">
                <div class="inner">
                    <img src="images/two.png" alt="">
                    <div class="caption">
                        <h2>Ahmed Saber</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque sapiente reprehenderit velit quae ipsa nobis assumenda et ullam vel illo, ab nostrum quisquam enim odit nesciunt. Necessitatibus neque corrupti dolore.</p>
                    </div>
                </div>
            </div>
            <div class="parent">
                <div class="inner">
                    <img src="images/two.png" alt="">
                    <div class="caption">
                        <h2>Ahmed Saber</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque sapiente reprehenderit velit quae ipsa nobis assumenda et ullam vel illo, ab nostrum quisquam enim odit nesciunt. Necessitatibus neque corrupti dolore.</p>
                    </div>
                </div>
            </div>
            <div class="parent">
                <div class="inner">
                    <img src="images/two.png" alt="">
                    <div class="caption">
                        <h2>Ahmed Saber</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque sapiente reprehenderit velit quae ipsa nobis assumenda et ullam vel illo, ab nostrum quisquam enim odit nesciunt. Necessitatibus neque corrupti dolore.</p>
                    </div>
                </div>
            </div>
            <div class="parent">
                <div class="inner">
                    <img src="images/two.png" alt="">
                    <div class="caption">
                        <h2>Ahmed Saber</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque sapiente reprehenderit velit quae ipsa nobis assumenda et ullam vel illo, ab nostrum quisquam enim odit nesciunt. Necessitatibus neque corrupti dolore.</p>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
        style.css:
            *{
                box-sizing: border-box;
            }

            body{
                background-color: #313131;
                font-family: 'Poiret One', cursive;
            }

            .clearfix{
                clear: both;
            }

            .parent{
                width: 16.6666%;
                padding: 10px;
                float: left;
            }

            .inner{
                position: relative;
                border: 5px solid #fff;
                overflow: hidden;

            }

            .parent img{
                width: 100%;
            }

            .caption{
                background-color: rgba(42,63,85 ,0.7);
                position: absolute;
                top: 120%;
                left: 0;
                height: 100%;
                text-align: center;
                color: #fff;
                transition: top 1s;
            }

            .parent:hover .caption{
                top: 0%;
            }
            
        responsive.css:
                
            @media screen and (max-width:575px){
                .parent{
                    width: 100%;
                }
            }
            @media screen and (min-width:576px) and (max-width:767px){
                .parent{
                    width: 50%;
                }
            }
            @media screen and (min-width:768px) and (max-width:991px){
                .parent{
                    width: 33.333%;
                }
            }
            @media screen and (min-width:992px) and (max-width:1200px){
                .parent{
                    width: 25%;
                }
            }

-->
