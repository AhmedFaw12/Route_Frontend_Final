<!--
What are css Animations:
    An animation lets an element gradually change from one style to another.

    You can change as many CSS properties you want, as many times as you want.

    To use CSS animation, you must first specify some keyframes for the animation.

    Keyframes hold what styles the element will have at certain times.

    

Keyframes Animation:
    The @keyframes Rule:
        When you specify CSS styles inside the @keyframes rule, the animation will gradually change from the current style to the new style at certain times.

        example:
            @keyframes changeColor {
                from{background-color: tomato;}
                to {background-color: greenyellow;}
            }
            -In the example above we have specified when the style will change by using the keywords "from" and "to" (which represents 0% (start) and 100% (complete)).
        example:
            @keyframes changeColor {
                0%{background-color: tomato;}
                50% {background-color: greenyellow;}
                100% {background-color: blue;}
            }

            It is also possible to use percent. By using percent, you can add as many style changes as you like.

        example:
            @keyframes changeColor {
                0%{background-color: tomato; width:100%}
                50% {background-color: greenyellow; width:50%}
                100% {background-color: blue; width:10%}
            }

        -To get an animation to work, you must bind the animation to an element.

Animation properties:
    -animation-name:
        -The animation-name property specifies a name for the @keyframes animation.
    -animation-duration:
        -The animation-duration property defines how long an animation should take to complete one cycle.

    -animation-iteration-count:
        -The animation-iteration-count property specifies the number of times an animation should be played.
        values:
            number:	A number that defines how many times an animation should be played. Default value is 1	
            infinite:	Specifies that the animation should be played infinite times (for ever)
    -animation-direction:
        -The animation-direction property defines whether an animation should be played forwards, backwards or in alternate cycles

        values:
            normal:	Default value. The animation is played as normal (forwards)	
            reverse:	The animation is played in reverse direction (backwards)	
            alternate:	The animation is played forwards first, then backwards	
            alternate-reverse:	The animation is played backwards first, then forwards


            -if alternate or alternate-reverse : forward is an iteration, backward is an another iteration
        
    -animation-delay:
        -The animation-delay property specifies a delay for the start of an animation.

        -The animation-delay value is defined in seconds (s) or milliseconds (ms).


    -animation-timing-function:
        -The animation-timing-function specifies the speed curve of an animation.
        -he speed curve is used to make the changes smoothly.

        values:
            -linear:	The animation has the same speed from start to end	
            -ease:	Default value. The animation has a slow start, then fast, before it ends slowly	
            -ease-in:	The animation has a slow start	
            -ease-out:	The animation has a slow end	
            -ease-in-out:	The animation has both a slow start and a slow end

Example:
    index.html:
        <div class="test"></div>
    style.css:
        .test{
            background-color: teal;
            width: 100%;
            height: 200px;
            animation-name: changeColor;
            animation-duration: 10s;
            animation-iteration-count: infinite;
            animation-direction: alternate;
            transition: width 1s;         
        }

        @keyframes changeColor {
            0%{background-color: tomato; width:100%}
            43%{background-color: blue; width: 50%;}
            100% {background-color: greenyellow; width: 0%;}
        }

Example:
    we want to make background image slider
    index.html:
        <header class="vh-100"></header>
    style.css:
        header{
            background-image: url("../images/bg.jpg");
            background-size: 100% 100%;
            animation-name: slider;
            animation-duration: 10s;
            animation-iteration-count: infinite;
            animation-direction: alternate;
        }

        @keyframes slider{
            0%{background-image: url("../images/intro-bg.jpg");}
            25%{background-image: url("../images/bg2.jpg");}
            50%{background-image: url("../images/bgs.jpg");}
            75%{background-image: url("../images/post-1.jpg");}
            100%{background-image: url("../images/work-2.jpeg");}
        }

        -all images must be of same dimensions

Example:
    -we want taxi image to move  forwards and backwards
    index.html:
        <img src="images/taxi.png" class="taxi" alt="">
    style.css:
        .taxi{
            width: 200px;
            transform: rotateY(180deg);
            animation-name: move;
            animation-duration: 4s;
            animation-iteration-count: infinite;
            position: relative;
        }

        @keyframes move {
            0%{left: 0; transform: rotateY(180deg);}
            50%{left: 900px; transform: rotateY(180deg);}
            51%{left:900px;transform: rotateY(360deg);}
            100%{left:0; transform: rotateY(360deg);}
        }

        -the original image of taxi is looking opposite direction, so we will use  rotateY(180deg) to look straight at first

        -to move the image we will use position 
        -we usually use position:relative with animation
        -animation uses transition internally , so when we rotate image again at the end , it will rotate slowly make image bad
        -so we will make at 50% (left:900%; and rotateY(180deg))
        -and suddenly at 51% we will rotateY(360deg), so no smoothing happen at rotate

-->

