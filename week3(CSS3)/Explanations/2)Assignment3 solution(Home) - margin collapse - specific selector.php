<!--
Margin Collapse:
    -Sometimes two margins collapse into a single margin.

    -Top and bottom margins of elements are sometimes collapsed into a single margin that is equal to the largest of the two margins.

    -This does not happen on left and right margins! Only top and bottom margins!
    
    -when there is a child div inside parent div and we give child a margin-top , the margin-top will be applied to the parent not the child

    -this problem happen when (parent and child) has common edge on top or bottom
    -the browser couldn't recognize between edge of parent and edge of child, so browser will apply space on both of them

    -Example on problem:
        index.html:
            <div class="parent">
                <div class="child">

                </div>
            </div>

        style.css:
            .parent{
                width: 400px;
                height: 400px;
                background-color: gray;
            }

            .child{
                width: 200px;
                height: 200px;
                background-color: green;
                margin-top: 50px;
            }
        -both parent and child will go down 50px

    there are 3 solutions :
        1)Add 1px padding to the parent:
            index.html:
                <div class="parent">
                    <div class="child">

                    </div>
                </div>

            style.css:
                .parent{
                    width: 400px;
                    height: 400px;
                    background-color: gray;
                    padding:1px;
                }

                .child{
                    width: 200px;
                    height: 200px;
                    background-color: green;
                    margin-top: 50px;
                }
        --------------------------------------------------------------------------------------------------------------------------------------------------------------
        2)add 1px border to the parent with same color of parent:
                index.html:
                    <div class="parent">
                        <div class="child">

                        </div>
                    </div>

                style.css:
                    .parent{
                        width: 400px;
                        height: 400px;
                        background-color: gray;
                        border:1px solid gray;
                    }

                    .child{
                        width: 200px;
                        height: 200px;
                        background-color: green;
                        margin-top: 50px;
                    }
        3)overflow:auto  or overflow:hidden:
            -this is the best solution
            -overflow will be explained later
            index.html:
                <div class="parent">
                    <div class="child">

                    </div>
                </div>

            style.css:
                .parent{
                    width: 400px;
                    height: 400px;
                    background-color: gray;
                    overflow:auto
                }

                .child{
                    width: 200px;
                    height: 200px;
                    background-color: green;
                    margin-top: 50px;
                }
-background Note:
    -always in background-image use: 
        background-size: cover;
        background-position: center center;

        -to fit the image
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


Assignment3 solution part2(Home section):
    -Assignment link:http://www.engage.veented.com/bakery/?fbclid=IwAR1vzk6H8IIRt5JxaEyhPzrn94CfvthyqSAP6fDDQd4N-ilPioD8YYLmd_c


    Example:
        index.html:
            <section class="home">
                <div class="home-content">
                    <p>Welcome to</p>
                    <h1>Family Bakery</h1>
                    <p>We're the biggest, best equipped and most advanced Bakery in the greater <br> Los Angeles area.</p>
        
                    <button class="btn btn1">Learn More</button>
                    <button class="btn btn2">Contact us</button>
                </div>

            </section>
        style.css:
            /* home section */
            
            p{
                font-family: 'Alegreya Sans', sans-serif;
                color:#888;
                margin: 10px 0;
            }


            .home{
                overflow: auto;
                background-image: url("../images/bg.jpg");
                /* background-size: 100% 100%; */
                background-size: cover;
                background-position: center center;
                text-align: center;
                height: 100vh;
                color: #fff;
            }

            -always in background-image use: 
                background-size: cover;
                background-position: center center;

                -to fit the image

            -to solve margin collapse , use overflow:auto


            .home .home-content{
                margin-top: 50px;
            }

            .home h1{
                font-size: 86px;
                margin-bottom: 30px;
            }

            .home p{
                color: #fff;
                font-size: 22px;
                line-height: 200%;
            }



            .home .btn{
                padding: 15px 27px;
                color: #fff;
                border: none;
                border-radius: 5px;
                margin-top: 30px;
            }

            .home .btn1{
                background-color: #8e7754;
                margin-right: 5px;
            }
            .home .btn2{
                border: 2px solid white;
                background-color: transparent ;
            }

------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Notes Specific selector:
   Example:
    style.css:
        .home p{
            color: #fff;
            font-size: 22px;
            line-height: 200%;
        }

        p{
            font-family: 'Alegreya Sans', sans-serif;
            color:#888;
            margin: 10px 0;
        }

    index.html:
        <div class="home">
            <p>Ahmed</p>
        </div>
    
    -color of text of p in home section will be #fff(white)
    -because .home p{} selector is more specific than p{} select

    Example:
        style.css:
            p{
                font-family: 'Alegreya Sans', sans-serif;
                color:#888;
                margin: 10px 0;
            }
            .home{
                color: #fff;
            }

        index.html:
            <div class="home">
                <p>Ahmed</p>
            </div>
        -text color will be #888 
        -because p{} select is more specific than .home{} selector
        -because .home{} selector can contains multiple things (h1, p, ....)
        -while p{} is more specific

-->
