<!--  
Css total(position, hover, transition, transform, prevoius css) example 1:
    -we want to make a div(with class member) containing an image 
    -we want to make another div above our item(makes a new layer) containing heading and paragraph
    
    -when we hover on member:
        -we want to scale(zoom in) the image
        -also we want heading and paragraph of the upper div to translate on x-axis(from right to left)
        -also we want the upper div to rotate (before we translate elements inside it)

    Example:
        index.html:
            <body>
                <div class="member">
                    <div class="inner">
                        <img src="images/two.png" alt="ahmed saber">
                        <div class="caption">
                            <h2>Ahmed Saber</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque sapiente reprehenderit velit quae ipsa nobis assumenda et ullam vel illo, ab nostrum quisquam enim odit nesciunt. Necessitatibus neque corrupti dolore.</p>
                        </div>
                    </div>
                </div>
                <div class="member">
                    <div class="inner">
                        <img src="images/two.png" alt="ahmed saber">
                        <div class="caption">
                            <h2>Ahmed Saber</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque sapiente reprehenderit velit quae ipsa nobis assumenda et ullam vel illo, ab nostrum quisquam enim odit nesciunt. Necessitatibus neque corrupti dolore.</p>
                        </div>
                    </div>
                </div>
                <div class="member">
                    <div class="inner">
                        <img src="images/two.png" alt="ahmed saber">
                        <div class="caption">
                            <h2>Ahmed Saber</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque sapiente reprehenderit velit quae ipsa nobis assumenda et ullam vel illo, ab nostrum quisquam enim odit nesciunt. Necessitatibus neque corrupti dolore.</p>
                        </div>
                    </div>
                </div>
                <div class="member">
                    <div class="inner">
                        <img src="images/two.png" alt="ahmed saber">
                        <div class="caption">
                            <h2>Ahmed Saber</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque sapiente reprehenderit velit quae ipsa nobis assumenda et ullam vel illo, ab nostrum quisquam enim odit nesciunt. Necessitatibus neque corrupti dolore.</p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </body>

            -we made 4 divs each has class item
            -item contain inner div
            -inner div will have border
            -and we will give item padding, so it will appear margin to inner
            -inner contain img, caption div
            -caption div contain h2, p

        style.css:
            *{
                box-sizing: border-box;
            }

            body{
                background-color: #313131;
                font-family: 'Poiret One', cursive;
            }
            -we used certain font from google fonts

            .clearfix{
                clear: both;
            }

            .member{
                width: 25%;    
                padding: 10px;
                float: left;
            }

            -each member will have width:25%, float:left and some padding for spacing

            .inner{
                border: 5px solid #fff;
                position: relative;
                overflow: hidden;
            }

            .member img{
                width: 100%;
                transition: transform 1s 1s;
            }

            

            .member:hover img{
                transform: scale(1.1,1.1);
            }

            -when hover on member , scale image
            -we will give image transition: transform 1s 1s; to make transition smooth, transition will delay 1s to happen after caption transition

            .caption{
                background-color: rgba(42,63,85 ,0.7);
                position: absolute;
                top: 0;
                left: 0;
                height: 100%;
                text-align: center;
                color: #fff;
                opacity: 0;
                transition:opacity 1s, transform 1s;
            }

            -we want caption to appear above inner , so we will give caption absolute position and give inner relative position
            
            -give caption top:0, left: 0, height:100%, width:100(given by default) to cover full inner div

            -we want caption div to disappear at first and when hovering on member , we will make caption appear again , so we will use opacity:0

            .member:hover .caption{
                transform:rotate(360deg);
                opacity: 1;
            }

            -when hover on member , make caption appear(opacity:1) 
            -and make caption rotate(360deg)

            -we will give caption class transition:opacity 1s, transform 1s to make transition smooth

            -when rotating , some parts of caption get out of inner div , so we will remove excessive parts by giving inner div (overflow:hidden) 

            .caption h2{
                color: crimson;
                background-color: rgba(0,0,0,0.4);
                padding: 10px;
                margin: 0;
                position: relative;
                left: 120%;
                transition: left 1s 2s;
            }

            .member:hover h2{
                left: 0%;
            }

            -to make our h2 move far to the left , we will give it position:relative to move relative to itself
            and give it left:120% from its original position

            -we want to hide the h2 from inner div so we will give inner div (overflow:hidden)

            -and when hovering make h2 return to its original position

            -we need transition happens after image and caption transition, so we will delay 2s : transition: left 1s 2s;

            .caption p{
                font-size: 18px;
                padding: 15px;
                position: relative;
                left: 120%;
                transition: left 1s 2.5s;
            }

            .member:hover p {
                left: 0%;
            }

            -same as h2 transition

            -always give padding to p because it makes it nicer


            @media screen and (min-width:768px) and (max-width:992px){
                .member{
                    width: 50%;
                }
            }
            @media screen and (max-width:600px){
                .member{
                    width: 100%;
                }
            }

            -we made our design responsive
----------------------------------------------------------------------------------------------------------------------------------------------------------------------

Example2:
    -we want when hover on parent , caption move from down to up and cover full parent div

    index.html:
         <div class="parent">
            <img src="images/two.png" alt="">
            <div class="caption">
                <h2>Ahmed Saber</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque sapiente reprehenderit velit quae ipsa nobis assumenda et ullam vel illo, ab nostrum quisquam enim odit nesciunt. Necessitatibus neque corrupti dolore.</p>
            </div>
        </div>
    style.css:
        .parent{
            width: 25%;
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

        -we gave caption position:absolute and left:0, top:0, height:100% and width:100%(given by default) so that caption cover full width and height and make a layer above parent div

        -we gave caption top:120% and give parent overflow:hidden to remove excessive parts outside of parent div

        -then when we hover on parent, we will give caption top:0% to go up and gave caption transition: top 1s; to make transition smooth
-->

