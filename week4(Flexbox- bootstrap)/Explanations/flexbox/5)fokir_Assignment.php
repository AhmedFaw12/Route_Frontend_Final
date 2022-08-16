<!-- 
Fokir_Assignment(Home section + navbar):

    -we want to make header + nav sections

    Example:
        index.html:
            <html>
                <head>
                    <link rel="preconnect" href="https://fonts.googleapis.com">
                    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
                    
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                    
                    <link rel="stylesheet" href="css/style.css">
                </head>
                <body>

                    <nav class="fixed-top d-flex justify-content-around py-3">
                        <div class="logo w-25  d-flex align-items-center">
                            <h2 class="fw-bolder mb-0 ">Fokir</h2>
                        </div>
                        <div class="nav-menu w-50 ">
                            <ul class="list-unstyled h-100 d-flex justify-content-around align-items-center">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Portfolio</a></li>
                                <li><a href="#">Testimonial</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                    <header class="vh-100">
                        <div class="layer h-100 w-100 d-flex justify-content-center align-items-center">
                            <div class="header-content text-center">
                                <h4 class="text-white ">Hello i'm</h4>
                                <h1 class="fw-bolder">ALEX SMITH</h1>
                                <p class="text-white fw-lighter">Professional Web Developer</p>
                            </div>
                        </div>
                    </header>        
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                </body>
            </html>
        style.css:
            body{
                font-family: 'Source Sans Pro', sans-serif;
            }

            /* navbar */
            .logo h2{
                font-size: 24px;
                color: #ff305b;
            }


            .nav-menu ul li a{
                color: #fff;
                text-decoration: none;
                font-size: 18px;
            }

            .nav-menu ul li a:hover{
                color: #ff305b;
            }

            /* home/header section */
            header{
                background-image: url(../images/slider-01.jpg);
                background-size: cover;
                background-position: center center;
            }

            .layer{
                background-color: rgba(0,0,0,0.7);
            }


            .header-content h1{
                color: #ff305b;
                font-size: 70px;
            }

            .header-content p{
                font-size: 22px;
            }



            /* media query */
            @media screen and (max-width:800px){
                

                nav{
                    background-color: rgba(0,0,0,0.7);
                    flex-direction: column;
                    padding-right: 40px;
                    padding-left: 40px;
                }

                .nav-menu{
                    width: 100% !important;
                }

                .nav-menu ul{
                    flex-direction: column;
                    align-items: flex-start !important;
                }
                .nav-menu ul li{
                    padding: 20px 0;
                }
                
            }

        Explanation:
            home/header section:
                -we made header div and gave it 100 vh (since it is home section)
                -we gave header a background-image , with size:cover and position:center center
                -we want to make a layer div above the header div and give it a background-color black semi transparent:
                    -we can make it by using position , but we will just give it width:100%, height:100% , background-color:rgba(0,0,0,0.7)
                -we want to make header-content div inside layer div and center it(vertically, horizontally) in the middle of the layer div
                -so we will give layer div display:flex, justify-content:center, align-items:center

                -we added red color and font-size to h1
                -we added font-size to p
                -we added white color to p and h4

                -we added font-family from google fonts
            
            --------------------------------------------------------------------------------------------------------------------------------------------------------------

            navbar section:
                -we made nav div 
                -we added logo div that contain h2 logo to nav div,and make logo div width:25% of nav div
                -and we added nav-menu div that contain ul list to nav div and make nav-menu width:50%

                -ul adds some padding and dots , so we gave ul list-style-type:none and made padding:0; , or we can just use list-unstyled bootstrap class that can do both

                -ul li(list items) are above each other, we want to get them beside eachother, so we will give ul display:flex, justify-content:space-around

                -we want to get li items in the center vertically:
                    method1:
                        we can give ul :height:100% of nav-menu and 
                        -and give ul align-items center
                    -method2:
                        -we can give nav-menu display:flex
                        -then give ul width:100%
                        -then give nav-menu align-items:center
                        -but it won't work correctly , because bootstrap gives ul some margin-bottom by default
                        -so we need to give ul mb-0(margin-bottom:0)

                -we need to change li a text color from blue to white , but when we give it to ul or li or nav , a text color won't change to white
                -so we need to use a selector itself to change the color:
                    .nav-menu ul li a{
                        color: #fff;
                        text-decoration: none;
                        font-size: 18px;
                    }

                -also we want when we hover on a  to change text color to red

                -we want to get logo div h2 in the center vertically , so we will give logo div display flex and align-items:center
                -but h2 won't position won't change , because bootstrap gives h2 margin-bottom by default
                -so we need to give h2 margin-bottom :0
                

                
                -we need to get logo div and nav-menu div beside eachother , so we will give nav div display:flex and justify-content-between
                -we will give nav div some padding top and bottom and right and left

            -media query:
                -we want to get nav-menu and logo divs below eachother , so we will give nav div flex-direction:column
                -we want nav-menu div width = 100% and make it !important , because we need to override w-50 in the bootstrap

                -we want to make nav-menu items to get below eachother
                -so we will give ul flex-direction:column

                -we need ul items to get at start horizontally , so we will give ul align-items:flex-start as we will working with flex-direction:column

                -we want to make some spacing between each item, so we will give li padding top and bottom
-->