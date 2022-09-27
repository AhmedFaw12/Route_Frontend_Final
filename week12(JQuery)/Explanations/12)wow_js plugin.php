<!-- 
WoW Js plugin:
    -Reveal/make Animations When You Scroll

    how to install:
        -download from github
        -copy wow css and js files to our project
        -call the fire function
        -give our element class (wow)
        -go to animate.css website and search for the animation we want and copy it and add it to the classes of our element
    
    advanced options:
        -wow has made attributes to make advanced options:
            -data-wow-duration: Change the animation duration
            -data-wow-delay: Delay before the animation starts
            -data-wow-offset: 
                -Distance to start the animation (related to the browser bottom)
                - Define the distance between the bottom of browser viewport and the top of hidden box.
                -When the user scrolls and reach this distance the hidden box is revealed.
            -data-wow-iteration: Number of times the animation is repeated


    Example:
        html:
            //head
            <link rel="stylesheet" href="css/animate.css">

            //body
            <h1 class="wow bounceInDown" data-wow-duration="1s" data-wow-delay="0.5s"  data-wow-offset="500">We Are Professional </h1>


            <div class="col-md-4 wow bounceInLeft">
                <div class="about-image">
                    <img  class="img-fluid" src="images/me.jpg" alt="Ahmed Ali Photo">
                </div>
            </div>

            //js links
            <script src="js/wow.min.js"></script>

        js:
            new WOW().init();
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


-->