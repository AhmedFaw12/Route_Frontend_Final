<!-- 
    jQuery plugins :
        -owl carousel : make draggable slider
        -particle js : بتعمل شكل شبكة العنكبوت فى الخلفية
        -slick slider : contain multiple types of sliders 
        -skitter slider : good slider shapes
        -mixitup : 
            -if  we have multiple navs tabs , each tab opens multiple divs 
            -mixitup makes  good animations when pressing on the tab and makes divs moves in  a good shape
        -wow.js: make animation when scroll
        -typed.js : to make automatic typing(do animated typing)
        -three.js
        
    How to install jQuery plugin:
        -open its github
        -download all files
        -go to its documentation(docs) to see how it works
        
    Owl Carousel plugin:
        -it is a plugin to make draggable slider
        
        how to install:
            -download all files from github
            -open docs
            -we need 2 css files and jquery file and another js file
            -copy these files from (dist) folder
            -inclide css and js 
            -set html
            -call the plugin(fire function)(trigger) in the js file
            
            -options:
                -we can add some options to our plugin
                -these options are sent in an object containing properties
                -this object is sent as a parameter to the call function(trigger function)

                options like:
                    -items : The number of items you want to see on the screen.
                    -margin: margin-right(px) on item.
                    -loop: 
                        -Infinity loop. Duplicate last and first items to get loop illusion.
                        -it takes true or false
                    -autoplay: autoplay slider used user drag(true/false)
                    -autoplayTimeout:Autoplay interval timeout.(in ms)
                    -dots: to Show dots navigation.(true/false)
                    -dotsEach: Show dots each x item.(number/false)
                
                class like:
                    -classes will be put inside html

                    owl-theme : to show the dots



        Example:
            html:
                <link rel="stylesheet" href="css/owl.carousel.min.css">
                <link rel="stylesheet" href="css/owl.theme.default.css">


                <section class="py-5">
                    <div class="container">
                        // Set up your HTML
                        <div class="owl-carousel">
                            <img src="images/1.jpg" class="w-100" alt="">
                            <img src="images/2.jpg" class="w-100" alt="">
                            <img src="images/3.jpg" class="w-100" alt="">
                            <img src="images/4.jpg" class="w-100" alt="">
                            <img src="images/5.jpg" class="w-100" alt="">
                        </div>
                    </div>
                </section>


                <script src="js/jquery-3.5.1.min.js"></script>
                <script src="js/owl.carousel.min.js"></script>
            js:
                //fire owl carousel
                $(".owl-carousel").owlCarousel({
                    items: 3,
                    margin: 30,
                    loop:true,
                    dots: true,
                    dotsEach:1,
                    autoplay:true,
                    autoplayTimeout:4000
                });
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    particles.js plugin:
        -بتعمل شكل شبكة العنكبوت فى الخلفية
        how to install:
            -copy particles.js file to our js fodler then link to it in html
            -in html : give our element id="particles-js"
            -then call the plugin fire function in our js file
            -the fire function needs to load (particles.json) file which contain number of particles , their shapes, ...
            -so we will copy particles.json file to our js folder

            -there is a problem:
                -google chrome prevent js file to include another file
                -we will solve this error later using (modules)
                -we can solve this problem temporary by running our project on live server(as if it is running on server)

                -install (live server) extension and click on go live on the bottom right
                
            -we can control these particles from particles.json file:
                -we can control number , shape , color of particles
                Example:
                    "number": {
                        "value": 150,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#09c"
                    },
                    "shape": {
                        "type": "triangle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                    },

        Example:
            html:
                <section id="particles-js" class="vh-100 bg-danger"></section>
                

                <script src="js/particles.js"></script>

            js:
                particlesJS.load('particles-js', 'js/particles.json', function() {
                    console.log('callback - particles.js config loaded');
                });

            particles.json:
                "number": {
                    "value": 150,
                    "density": {
                        "enable": true,
                        "value_area": 800
                    }
                },
                "color": {
                    "value": "#09c"
                },
                "shape": {
                   "type": "triangle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                },

    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
-->
