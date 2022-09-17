<!-- 
jQuery Animations - The animate() Method:
    -The jQuery animate() method is used to create custom animations/effect.
    
    Syntax:
        $(selector).animate({params},speed,callback);

        -The required params parameter defines the CSS properties to be animated.
        -it take effects in an js object 

        -The optional speed parameter specifies the duration of the effect. It can take the following values: "slow", "fast", or milliseconds.

        -The optional callback parameter is a function to be executed after the animation completes.

    Example:
        html:
            <button id="myBtn" class="btn btn-danger">click</button>
            <div class="test"></div>
        css:
            .test{
                width: 100px;
                height: 100px;
                background-color: #09c;
                /* display:none; */
            }
        js:
            $("#myBtn").click(function(){
                $(".test").animate({width:"100%" , borderRadius:"50%" ,height:"300px"}, 2000);
            });
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------

    Important Note:
        -color/backgroundColor animation is not included in the core jQuery library.
        -color animation will not work

    --------------------------------------------------------------------------------------------------------------------------------------------------------------------

    -jQuery animate() - Using Relative Values:
        -It is also possible to define relative values (the value is then relative to the element's current value). This is done by putting += or -= in front of the value

        -we can add value to the current value

        Example:
            html:
                <button id="myBtn" class="btn btn-danger">click</button>
                <div class="test"></div>
            css:
                .test{
                    width: 100px;
                    height: 100px;
                    background-color: #09c;
                    /* display:none; */
                }
            js:
                $("#myBtn").click(function(){
                    $(".test").animate({width:"+=50px", height:"-=50px"}, 2000);
                });
    
                note:
                    -make sure not to leave spaces in between +=50px
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------
    -jQuery animate() - Uses Queue Functionality:
        -if we want to apply multiple animations on the same element (one after the other)

        -By default, jQuery comes with queue functionality for animations.

        -This means that if you write multiple animate() calls after each other, jQuery creates an "internal" queue with these method calls. Then it runs the animate calls ONE by ONE.
         
        -So, if you want to perform different animations after each other, we take advantage of the queue functionality

        Example:
            -we want to make width:50% , then height:500px , then borderRadius:50%
            html:
                <button id="myBtn" class="btn btn-danger">click</button>
                <div class="test"></div>
            css:
                .test{
                    width: 100px;
                    height: 100px;
                    background-color: #09c;
                    /* display:none; */
                }
            js:
                $("#myBtn").click(function(){
                    $(".test").animate({width:"50%"}, 2000);
                    $(".test").animate({height:"500px"}, 2000);
                    $(".test").animate({borderRadius:"50%"}, 2000);
                });

----------------------------------------------------------------------------------------------------------------------------------------------------------------------------

jQuery stop() Method:
    -The jQuery stop() method is used to stop an animation or effect before it is finished.

    -The stop() method works for all jQuery effect functions, including sliding, fading and custom animations.

    Syntax:
        -$(selector).stop(stopAll,goToEnd);
        
        -The optional stopAll parameter specifies whether also the animation queue should be cleared or not. Default is false, which means that only the active animation will be stopped, allowing any queued animations to be performed afterwards.

        -The optional goToEnd parameter specifies whether or not to complete the current animation immediately. Default is false.

        -So, by default, the stop() method kills the current animation being performed on the selected element. but the rest of animations will continue

    Example:
        -with no parameters
        html:
            <button id="myBtn" class="btn btn-danger">click</button>
            <button id="stopBtn" class="btn btn-danger">stop</button>
            <div class="test"></div>
        css:
            .test{
                width: 100px;
                height: 100px;
                background-color: #09c;
            }
        js:
            $("#myBtn").click(function(){
                $(".test").animate({width:"100%"}, 2000);
                $(".test").animate({height:"500px"}, 2000);
                $(".test").animate({borderRadius:"50%"}, 2000);
            });

            $("#stopBtn").click(function(){
                $(".test").stop();
            });

            -only current animation will be stopped, but rest of animations will continue
            
    Example with stopAll:
        html:
            <button id="myBtn" class="btn btn-danger">click</button>
            <button id="stopBtn" class="btn btn-danger">stop</button>
            <div class="test"></div>
        css:
            .test{
                width: 100px;
                height: 100px;
                background-color: #09c;
            }
        js:
            $("#myBtn").click(function(){
                $(".test").animate({width:"100%"}, 2000);
                $(".test").animate({height:"500px"}, 2000);
                $(".test").animate({borderRadius:"50%"}, 2000);
            });

            $("#stopBtn").click(function(){
                $(".test").stop(true);
            });
        -it stops all animations for test divs

    Example with goToEnd:
        html:
            <button id="myBtn" class="btn btn-danger">click</button>
            <button id="stopBtn" class="btn btn-danger">stop</button>
            <div class="test"></div>
        css:
            .test{
                width: 100px;
                height: 100px;
                background-color: #09c;
            }
        js:
            $("#myBtn").click(function(){
                $(".test").animate({width:"100%"}, 2000);
                $(".test").animate({height:"500px"}, 2000);
                $(".test").animate({borderRadius:"50%"}, 2000);
            });

            $("#stopBtn").click(function(){
                $(".test").stop(true, true);
            });
        -it stops all animations for test divs
        -but current animation only will go to its end immediately
        -if i clicked stop while changing the height , it will go to height end(500px in example) immediately ,but other animations will be stopped (because of stopAll)
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Example on all effects:
    html:
        <section id="services" class="text-center">
            <h2>Our Services</h2>
            <p>Lorem ipsum dolor sit amet consectetur.</p>

            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="item">
                            <img src="images/portfolio-1.jpg" class="w-100" alt="">
                            <h3>Lorem, ipsum dolor.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum dignissimos quia nam, reiciendis expedita esse odio, est sint error, laboriosam delectus velit aliquid voluptates ea? Illum corporis exercitationem aliquam magni?</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item">
                            <img src="images/portfolio-2.jpg" class="w-100" alt="">
                            <h3>Lorem, ipsum dolor.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum dignissimos quia nam, reiciendis expedita esse odio, est sint error, laboriosam delectus velit aliquid voluptates ea? Illum corporis exercitationem aliquam magni?</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item">
                            <img src="images/portfolio-3.jpg" class="w-100" alt="">
                            <h3>Lorem, ipsum dolor.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum dignissimos quia nam, reiciendis expedita esse odio, est sint error, laboriosam delectus velit aliquid voluptates ea? Illum corporis exercitationem aliquam magni?</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
    css:
        #services{
            background-color: #09c;
            width: 10px;
            height: 5px;
        }

        #services h2{
            display: none;
        }

        #services > p{
            display: none;
        }

        #services .item{
            display: none;
        }
    js:
        $("#services").animate({width:"100%"}, 1000);
        $("#services").animate({height:"100vh"}, 1000, function(){
            $("#services h2").fadeIn(1000, function(){
                $("#services > p").fadeIn(1000, function(){
                    $("#services .item").slideDown(1000);
                });
            });
        });

    
-->