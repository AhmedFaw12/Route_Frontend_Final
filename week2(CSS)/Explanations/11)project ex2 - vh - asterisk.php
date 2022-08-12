<!-- 
vh:
    - vh(Viewport height)
    - viewport (الجزء المرئى من الشاشة)
    - Viewport = the browser window size. If the viewport is 100cm height, 1vh = 1cm.(1% of screen height)

    - vh is from relative units
    -it is used in the first section of the page

    example:
        height: 100vh;
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
asterisk(*):
    -html gives some elements and body some padding and margin by default
    -so to select all elements and body and remove this spaces:
        Example:
            *{
                margin: 0;
                padding: 0;
            }
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Project ex2:
    -we want to make a home section with background image and some elements inside it(in the center) and the home section will have 100 vh

    index.html:
        <head>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

            <link rel="stylesheet" href="css/style.css">
        </head>
        <body>
            <section class="home">
                <img src="images/restaurant.png" alt="">
                <h1>French Restaurant</h1>
                <p>We're the best restaurant in town</p>
                <button class="btn btn1">Learn More</button>
                <button class="btn btn2">Book a Visit</button>

            </section>
        </body>
    
    style.css:
        *{
            margin: 0;
            padding: 0;
        }

        body{
            font-family: 'segoe ui light';
        }

        /* home section */
        .home{
            background-image: url("../images/bg2.jpg");
            background-size: 100% 100%;
            height: 100vh;
            color: #fff;
            text-align: center;
        }

        -we have home background image
        -we made the image fit the home section(background-size: 100% 100%;)
        -we gave home (height: 100vh;)
        -we centered images/button/text using text-align:center

        .home p{
            font-family: 'Dancing Script', cursive;
            font-size: 230%;   
        }
        -p has special font, so we will get it from google
        -it has big font-size 

        .home .btn{
            padding: 15px 25px;
            border: none;
            margin-top: 20px;
        }

        -we enlarged button by giving them padding not(width or height)


        .home .btn1{
            background-color: #c1ab84;
        }

        


-->