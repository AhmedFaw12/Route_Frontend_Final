<!-- 
jQuery Effects:
    jQuery Effects - Hide and Show:
        $().hide():
            -hides the element , and after it hides the element, it gives the element display:none
            Example:
                html:
                    <div class="test"></div>
                css:
                    .test{
                        width: 400px;
                        height: 400px;
                        background-color: #09c;
                    }
                js:
                    $(".test").hide(3000);
            -note:
                -hide,show,toggle works on width , height, opacity, margin, padding
        --------------------------------------------------------------------------------------------------------------------------------------------------------------------
        $().show():
            -it shows the elements ,if it has display:none
            Example:
                html:
                    <div class="test"></div>
                css:
                    .test{
                        width: 400px;
                        height: 400px;
                        background-color: #09c;
                        display:none;
                    }
                js:
                    $(".test").show(3000);
            Example:
                -when click on button, show the div
                html:
                    <button id="myBtn" class="btn btn-danger">click</button>
                    <div class="test"></div>
                css:
                    .test{
                        width: 400px;
                        height: 400px;
                        background-color: #09c;
                        display: none;
                    }

                js:
                    $("#myBtn").click(function(){
                        $(".test").show(3000);
                    });
        --------------------------------------------------------------------------------------------------------------------------------------------------------------------
        $().toggle():
        -You can also toggle between hiding and showing an element with the toggle() method.

        Example:
            -when click on button, show the div if it's hidden(display:none), and hide it if it's shown

            html:
                <button id="myBtn" class="btn btn-danger">click</button>
                <div class="test"></div>
            css:
                .test{
                    width: 400px;
                    height: 400px;
                    background-color: #09c;
                    display: none;
                }

            js:
                $("#myBtn").click(function(){
                    $(".test").show(3000);
                });
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------
    -jQuery Effects - Sliding:
        -works on height only
        -jQuery slideDown():
            -like show but works on height only (if the element has display:none)
                
            Example:
                html:
                    <button id="myBtn" class="btn btn-danger">click</button>
                    <div class="test"></div>
                css:
                    .test{
                        width: 400px;
                        height: 400px;
                        background-color: #09c;
                        display: none;
                    }

                js:
                    $("#myBtn").click(function(){
                        $(".test").slideDown(3000);
                    });
        ------------------------------------------------------------------------------------------------------------------------------------------------------------
        -jQuery slideUp():
            -like hide , but works on height only
            -after it hides element , it gives element display:none
            Example:
                html:
                    <button id="myBtn" class="btn btn-danger">click</button>
                    <div class="test"></div>
                css:
                    .test{
                        width: 400px;
                        height: 400px;
                        background-color: #09c;
                    }

                js:
                    $("#myBtn").click(function(){
                        $(".test").slideUp(3000);
                    });
        ------------------------------------------------------------------------------------------------------------------------------------------------------------
        -jQuery slideToggle():
            -The jQuery slideToggle() method toggles between the slideDown() and slideUp() methods.

            -If the elements have been slid down, slideToggle() will slide them up.

            -If the elements have been slid up, slideToggle() will slide them down.
        
            Example:
                html:
                    <button id="myBtn" class="btn btn-danger">click</button>
                    <div class="test"></div>
                css:
                    .test{
                        width: 400px;
                        height: 400px;
                        background-color: #09c;
                    }

                js:
                    $("#myBtn").click(function(){
                        $(".test").slideToggle(3000);
                    });
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------

    -jQuery Effects - Fading:
        -jQuery fadeOut() Method:
            -hides the element
            -uses opacity , it don't change width or height or ...
            -makes opacity = 0 , and after element is hidden, it gives the element display:none

            Example:
                html:
                    <button id="myBtn" class="btn btn-danger">click</button>
                    <div class="test"></div>
                css:
                    .test{
                        width: 400px;
                        height: 400px;
                        background-color: #09c;
                    }

                js:
                    $("#myBtn").click(function(){
                        $(".test").fadeOut(3000);
                    });
        ------------------------------------------------------------------------------------------------------------------------------------------------------------
        -jQuery fadeIn() Method:
            -it shows the element , if it's hidden(display:none)
            -it gives elements opacity: 1, display:block
            Example:
                html:
                    <button id="myBtn" class="btn btn-danger">click</button>
                    <div class="test"></div>
                css:
                    .test{
                        width: 400px;
                        height: 400px;
                        background-color: #09c;
                        display:none;
                    }

                js:
                    $("#myBtn").click(function(){
                        $(".test").fadeIn(3000);
                    });
        ------------------------------------------------------------------------------------------------------------------------------------------------------------
        -jQuery fadeToggle() Method
            The jQuery fadeToggle() method toggles between the fadeIn() and fadeOut() methods.

            If the elements are faded out, fadeToggle() will fade them in.

            If the elements are faded in, fadeToggle() will fade them out.

            Example:
                html:
                    <button id="myBtn" class="btn btn-danger">click</button>
                    <div class="test"></div>
                css:
                    .test{
                        width: 400px;
                        height: 400px;
                        background-color: #09c;
                        display:none;
                    }

                js:
                    $("#myBtn").click(function(){
                        $(".test").fadeToggle(3000);
                    });
        ------------------------------------------------------------------------------------------------------------------------------------------------------------
        -jQuery fadeTo() Method:
            -The jQuery fadeTo() method allows fading to a given opacity (value between 0 and 1).

            -if the element has display:none, it converts into display:block
            -it only changes opacity

            Syntax:
                $(selector).fadeTo(speed,opacity)
            
            -The required speed parameter specifies the duration of the effect. It can take the following values: "slow", "fast", or milliseconds.

            -The required opacity parameter in the fadeTo() method specifies fading to a given opacity (value between 0 and 1).
        

            Example:
                html:
                    <button id="myBtn" class="btn btn-danger">click</button>
                    <div class="test"></div>
                css:
                    .test{
                        width: 400px;
                        height: 400px;
                        background-color: #09c;
                        display:none;
                    }

                js:
                    $("#myBtn").click(function(){
                        $(".test").fadeTo(1000, 0.7);
                    });
            Example:
                html:
                    <button id="myBtn" class="btn btn-danger">click</button>
                    <div class="test"></div>
                css:
                    .test{
                        width: 400px;
                        height: 400px;
                        background-color: #09c;
                    }

                js:
                    $("#myBtn").click(function(){
                        $(".test").fadeTo(1000, 0.1);
                    });
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------
   
    -jQuery Callback Functions:
        -A callback function is executed after the current effect is 100% finished.
        
        -JavaScript statements are executed line by line. However, with effects, the next line of code can be run even though the effect is not finished. This can create errors.

        -To prevent this, you can create a callback function.
        -A callback function is executed after the current effect is finished.

        -Typical syntax: $(selector).hide(speed,callback);

        Example:
            -we want when click on button, div slideUp and after div slideUp, button slideUp
            html:
                <button id="myBtn" class="btn btn-danger">click</button>
                <div class="test"></div>
            css:
                .test{
                    width: 400px;
                    height: 400px;
                    background-color: #09c;
                }
            js:
                $("#myBtn").click(function(){
                    $(".test").slideUp(1000, function(){
                        $("#myBtn").slideUp(1000);
                    });
                });
    ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    -jQuery - Chaining:
        -With jQuery, you can chain together actions/methods.

        -Chaining allows us to run multiple jQuery methods (on the same element) within a single statement.

        -there is a technique called chaining, that allows us to run multiple jQuery commands, one after the other, on the same element(s).

        -To chain an action, you simply append the action to the previous action.
        -we are making callbacks for the same element but only writing one line


        -chaining is done on same element

        Example:
            -we want to slideUp then show then hide them slideDown the same element
            html:
                <button id="myBtn" class="btn btn-danger">click</button>
                <div class="test"></div>
            css:
                .test{
                    width: 400px;
                    height: 400px;
                    background-color: #09c;
                }
            js:
                $("#myBtn").click(function(){
                    //chain
                    $(".test").slideUp(1000).show(1000).hide(1000).slideDown(1000);
                });
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------

----------------------------------------------------------------------------------------------------------------------------------------------------------------------------

jQuery Events:
    -Here are some common DOM events:
        Mouse Events	Keyboard Events	    Form Events	    Document/Window Events
            click	        keypress	     submit	                 load
            dblclick	    keydown	         change	                 resize
            mouseenter	    keyup	         focus	                 scroll
            mouseleave	 	                 blur	                 unload

    -jQuery Syntax For Event Methods:
        -In jQuery, most DOM events have an equivalent jQuery method.

        Example:
            $("p").click(function(){
                // action goes here!!
            });

    Example:
        -when click on button, show the div
        html:
            <button id="myBtn" class="btn btn-danger">click</button>
            <div class="test"></div>
        css:
            .test{
                width: 400px;
                height: 400px;
                background-color: #09c;
                display: none;
            }

        js:
            $("#myBtn").click(function(){
                $(".test").show(3000);
            });
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------


-->
