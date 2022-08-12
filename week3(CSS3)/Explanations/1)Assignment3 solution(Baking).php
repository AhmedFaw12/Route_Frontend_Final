<!--  
Assignment3 solution Part1:
    -assignment3 link:http://www.engage.veented.com/bakery/?fbclid=IwAR1vzk6H8IIRt5JxaEyhPzrn94CfvthyqSAP6fDDQd4N-ilPioD8YYLmd_c
    
    -we want to make baking section

    -Notes :
        -don't ever give fixed height, because in small screens (text may be large for div , so text will get out of the div)

        -always give images width
        

    Example:
        index.html:
            <head>
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Alegreya&family=Alegreya+Sans:wght@300&display=swap" rel="stylesheet">
                
                <link rel="stylesheet" href="css/style.css">
            </head>
            <body>
                <section class="baking">
                    <div class="container">
                        <h2>Our Baking</h2>
                        <p>Learn more about them. We have worked truly hard to make them perfect for every use.</p>
            
                        <div class="baking-item">
                            <img src="images/ben-garratt-134774-600x500.jpg" alt="ben-garratt">
                            <h3>Superior Breads</h3>
                            <p>Proin interdum, ante ut sollicitudin commodo, tellus quam sagittis libero, at semper mauris velit a velit. Phasellus commodo turpis et lacinia posuere.</p>
                        </div>
                        <div class="baking-item">
                            <img src="images/ben-garratt-134774-600x500.jpg" alt="ben-garratt">
                            <h3>Superior Breads</h3>
                            <p>Proin interdum, ante ut sollicitudin commodo, tellus quam sagittis libero, at semper mauris velit a velit. Phasellus commodo turpis et lacinia posuere.</p>
                        </div>
                        <div class="baking-item">
                            <img src="images/ben-garratt-134774-600x500.jpg" alt="ben-garratt">
                            <h3>Superior Breads</h3>
                            <p>Proin interdum, ante ut sollicitudin commodo, tellus quam sagittis libero, at semper mauris velit a velit. Phasellus commodo turpis et lacinia posuere.</p>
                        </div>
            
                        <div class="clearfix"></div>
                    </div>
                </section>
            </body>

            -we made a div for our baking section and gave it class baking
            -we made div inside baking and gave it class container
            -we made 3 divs inside container for the the baking-items

        
        style.css:
            *{
                margin: 0;
                padding: 0;
            }

            body{
                font-family: 'Alegreya', serif;
            }

            p{
                font-family: 'Alegreya Sans', sans-serif;
                color:#888;
            }

            .container{
                width: 90%;
                margin: auto;
            }

            -we want to leave space on the right and on the left
            -so we gave container width:90%
            -and centered it using margin:auto

            /* baking section */
            .baking{
                padding: 40px 0;
                text-align: center;
            }
            

            -we want to center image,text so we made text-align:center


            .baking h2{
                margin-bottom: 20px;
            }


            .baking-item{
                width: 33.33%;
                float: left;
                margin-top: 40px;
            }

            -we want 3 divs to get besides each other so we made float:left and gave each div width:33.33%


            .baking-item img{
                width: 90%;
            }

            -we want to control image width , so we gave it width:90%
            -also to leave some space between divs to appear as margin between divs

            .baking-item h3{
                margin: 20px 0;
            }


            .baking-item p{
                padding: 10px 30px;
            }

            -we want to leave some space between divs , so we made padding left and right
            -we also made padding top , bottom , to enhance the theme

            .clearfix{
                clear:both;
            }

            -we cleared float


-->

