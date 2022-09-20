<!-- 
Loading Screen:
    Example:
        -when we upload our website on server 
        -website sometimes opens and loads slow on clients pc
        -so we make loading screen to be displayed untill , website is loaded

        -we made a section loading first thing in the body , so that it will be first thing to be loaded
        -we gave it position fixed and high z-index 

        -we searched in the internet for spinners  code because font-awesome spinner is not good in shape
        -we copied spinner html and css code


        -there is an event in jQuery called ready() , it is used with document 
        -there is similar event in javascript called onload , it is used with window
        -difference between ready() and onload:
            -onload takes more time than ready()
            -ready() waits until images are loaded , but don't wait untill images are fully complete resolution

            -onload waits untill images are fully complete resolution

            -we will use ready() event , because we want our website to be displayed faster

        -we should put all jQuery code inside callback function of ready() event
        -so that we won't execute any jQuery code untill website is ready

        -there is a class in js  called Date , that gets me the date

        html:
            <body>
                <section id="loading" class="">
                    <div class="spinner">
                        <div class="rect1"></div>
                        <div class="rect2"></div>
                        <div class="rect3"></div>
                        <div class="rect4"></div>
                        <div class="rect5"></div>
                    </div>
                </section>

                //code
            </body>
        css:
            #loading{
                position: fixed;
                left: 0;
                right: 0;
                top: 0;
                bottom: 0;
                z-index: 999999999999;
                background-color: #333;

                display: flex;
                justify-content: center;
                align-items: center;
            }

            .spinner {
                /* margin: 100px auto; */
                width: 50px;
                height: 40px;
                text-align: center;
                font-size: 10px;
            }

            .spinner>div {
                background-color: #fff;
                height: 100%;
                width: 6px;
                display: inline-block;

                -webkit-animation: sk-stretchdelay 1.2s infinite ease-in-out;
                animation: sk-stretchdelay 1.2s infinite ease-in-out;
            }

            .spinner .rect2 {
                -webkit-animation-delay: -1.1s;
                animation-delay: -1.1s;
            }

            .spinner .rect3 {
                -webkit-animation-delay: -1.0s;
                animation-delay: -1.0s;
            }

            .spinner .rect4 {
                -webkit-animation-delay: -0.9s;
                animation-delay: -0.9s;
            }

            .spinner .rect5 {
                -webkit-animation-delay: -0.8s;
                animation-delay: -0.8s;
            }

            @-webkit-keyframes sk-stretchdelay {

                0%,
                40%,
                100% {
                    -webkit-transform: scaleY(0.4)
                }

                20% {
                    -webkit-transform: scaleY(1.0)
                }
            }

            @keyframes sk-stretchdelay {

                0%,
                40%,
                100% {
                    transform: scaleY(0.4);
                    -webkit-transform: scaleY(0.4);
                }

                20% {
                    transform: scaleY(1.0);
                    -webkit-transform: scaleY(1.0);
                }
            }

        
        js:
            //loading screen
            $(document).ready(function () {
                $("#loading").fadeOut(1000, function () {
                    $("body").css("overflow", "auto");
                });

                //let myDate = new Date();
                //console.log(myDate);
            });

            ................OR..............................

            window.onload = function(){
                $("#loading").fadeOut(1000, function () {
                    $("body").css("overflow", "auto");
                });

                //let myDate = new Date();
                //console.log(myDate);
            };

-->

