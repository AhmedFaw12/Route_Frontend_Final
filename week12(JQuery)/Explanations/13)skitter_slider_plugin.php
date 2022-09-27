<!-- 
Skitter Slider Plugin:
    -it slides the sections/images as if it is cutting them into pieces
    -good slider

    how to install:
        -download from github
        -open documentation
        -copy skitter js and css files and link them in html
        -copy html documentation code
        -adjust it

        -fire the plugin in our js file

    Example:
        html:
            //head
            <link rel="stylesheet" href="css/skitter.css">

            
            //body
            <section class="py-5">
                <div class="container">
                    <div class="skitter skitter-large with-dots mx-auto">
                        <ul>
                            <li>
                                <a href="#cut">
                                    <img src="images/1.jpg" class="cut" />
                                </a>
                                <div class="label_text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        <a href="#see-more" class="btn btn-xs btn-warning">See more</a>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <a href="#swapBlocks">
                                    <img src="images/2.jpg"
                                        class="swapBlocks" />
                                </a>
                                <div class="label_text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        <a href="#see-more" class="btn btn-xs btn-warning">See more</a>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <a href="#swapBarsBack">
                                    <img src="images/3.jpg"
                                        class="swapBarsBack" />
                                </a>
                                <div class="label_text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        <a href="#see-more" class="btn btn-xs btn-warning">See more</a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <script src="js/jquery.easing.1.3.js"></script>
            <script src="js/jquery.skitter.min.js"></script>
        js:
            $(function() {
                $('.skitter-large').skitter();
            });

-->