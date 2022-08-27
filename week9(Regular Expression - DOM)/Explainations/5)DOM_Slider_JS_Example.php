<!-- 
DOM Slider Js Example:
    -we want to make a slider using only js
    -we will make 6 divs using bootstrap grid (3 in a row)
    -each div has an image 
    -when we click on image , image will appear in the middle of the body and body background-color become semi black
    -then the opened image will have right and left arrows , when we slide to next/previous images
    -also we have x button to exit slider

    first we finish our html and css code:
        -we will make 6 divs using bootstrap grid (3 in a row)
        -each div has an image 
        -when we click on image , lightBoxContainer(our div) will appear 
        -lightBoxContainer will cover the whole body and has fixed position and semi black transparent background color
        
        -we will make a lightBoxItem inside lightBoxContainer 
        -lightBoxItem will have width:50% and background image according to the image clicked
        -we will give lightBoxContainer display flex , align-items center and justify content center , so that lightBoxItem will get in the center
        
        -then lightBoxItem will have 3 icons(prev, next, close)
        -we will give lightBoxItem d-flex and align-items center and justify-content-between 
        -then we will give close icon position absolute , right:0 , top: 0 and give its parent(lightBoxItem) position relative

        -we will give display:none in css not by bootstrap , so that we can change it in js  to display:flex

    second we do the js code:
        -we hold all images , which will return nodeList, to convert it to array, we will use Array.from(ourNodeList)

        -we will hold lightBoxContainer, lightBoxItem, closeBtn, prevBtn, nextBtn

        -we will add eventListener to the imgs, so that when we click on it , lightBoxContainer will apear
        
        hold this image clicked using event.target , then get its src using getAttribute()
        -change backgroundImage of lightBoxItem

        -to get the img index to be used in nextSlide(), we will use indexOf on our nodelist, but we can't use array methods on nodeList, so we convert nodeList to array using Array.from()

        
        -we want when we click nextBtn to get next img in the array
        -we made global variable currentIndex which hold the current index of the image displayed
        -then we made nextSlide()
        -in nextSlide we will increment current index, and change backgroundImage of the lightBoxItem
        -when we reach imgs.length , ==> make currentIndex = 0


        -then we made the opposite of this idea in the prevBtn

        -we want when click on close btn , lightBoxContainer disappears (display:none)

        -we also want when we click outside backgroundImage(outside lightBoxItem), to close lightBoxContainer, so we will add event click on document(or document.body) and get event.target
        -if event.target == lightBoxContainer , then close/disappear lightBoxContainer

        -we also want when we press arrow right and arrow left and escape on keyboard we will do nextSlide(), prevSlide() and close()
        -so we will add eventListener on document(whole html) with pressdown event
        if key == "ArrowRight" ==> nextSlide()
        if key == "Arrowleft" ==> prevSlide()
        if key == "Escape" ==> close()
        
    Example:
        index.html:
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="item position-relative">
                            <img src="images/portfolio-1.jpg" class="w-100" alt="">
                            <div class="img-caption position-absolute text-center">
                                <h4>item title</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, iste?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item position-relative">
                            <img src="images/portfolio-2.jpg" class="w-100" alt="">
                            <div class="img-caption position-absolute text-center">
                                <h4>item title</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, iste?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item position-relative">
                            <img src="images/portfolio-3.jpg" class="w-100" alt="">
                            <div class="img-caption position-absolute text-center">
                                <h4>item title</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, iste?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item position-relative">
                            <img src="images/portfolio-1.jpg" class="w-100" alt="">
                            <div class="img-caption position-absolute text-center">
                                <h4>item title</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, iste?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item position-relative">
                            <img src="images/portfolio-2.jpg" class="w-100" alt="">
                            <div class="img-caption position-absolute text-center">
                                <h4>item title</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, iste?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item position-relative">
                            <img src="images/portfolio-3.jpg" class="w-100" alt="">
                            <div class="img-caption position-absolute text-center">
                                <h4>item title</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, iste?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="lightBoxContainer" class="justify-content-center align-items-center">
                <div id="lightBoxItem" class="d-flex align-items-center justify-content-between position-relative">
                    <i id="prev" class="far fa-arrow-alt-circle-left"></i>
                    <i id="close" class="far fa-times-circle"></i>
                    <i id="next" class="far fa-arrow-alt-circle-right"></i>
                </div>
            </div>

        style.css:
            body{
                font-family: 'Segoe ui light', Tahoma, Geneva, Verdana, sans-serif;
            }

            .img-caption{
                background-color: #fff;
                width: 80%;
                bottom: 30px;
                left: 50%;
                transform: translateX(-50%);
                padding: 10px;
            }

            .item{
                margin-bottom: 30px;
                cursor: pointer;
            }

            #lightBoxContainer{
                display: none;
                position: fixed;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                background-color: rgba(0,0,0,0.5);
            }

            #lightBoxItem{
                width: 50%;
                height: 80vh;
                background-size: cover;
                background-position: center center;
            }

            #close{
                position:absolute;
                top: 0;
                right: 0;
            }

            #lightBoxItem i{
                font-size: 20px;
                margin: 10px;
                cursor: pointer;
            }

        main.js:
            const imgs =Array.from(document.querySelectorAll(".item img")) ;//nodeList==>array
            const lightBoxContainer = document.getElementById("lightBoxContainer");
            const lightBoxItem = document.getElementById("lightBoxItem");
            const nextBtn = document.getElementById("next");
            const prevBtn = document.getElementById("prev");
            const closeBtn = document.getElementById("close");


            var currentIndex = 0;

            for(var i = 0; i < imgs.length; i++){
                imgs[i].addEventListener("click", function(eventInfo){
                    var imgSrc = eventInfo.target.getAttribute("src");
                    currentIndex = imgs.indexOf(eventInfo.target); 
                    
                    lightBoxItem.style.backgroundImage = `url(${imgSrc})`;
                    lightBoxContainer.style.display = "flex";
                });
            }

            function nextSlide(){
                currentIndex++;
                if(currentIndex == imgs.length){
                    currentIndex = 0;
                }
                var imgSrc = imgs[currentIndex].getAttribute("src");

                lightBoxItem.style.backgroundImage = `url(${imgSrc})`;
            }


            function prevSlide(){
                currentIndex--;
                if(currentIndex < 0){
                    currentIndex = imgs.length - 1;
                }
                var imgSrc = imgs[currentIndex].getAttribute("src");
                lightBoxItem.style.backgroundImage = `url(${imgSrc})`;
            }


            function close(){
                lightBoxContainer.style.display = "none";
            }

            nextBtn.addEventListener("click", nextSlide);
            prevBtn.addEventListener("click", prevSlide);
            closeBtn.addEventListener("click", close);

            document.body.addEventListener("click", function(eventInfo){
                if(eventInfo.target == lightBoxContainer){
                    close();
                }
            });


            document.addEventListener("keydown", function(eventInfo){    
                if(eventInfo.key == "ArrowRight"){
                    nextSlide();
                }else if(eventInfo.key == "ArrowLeft"){
                    prevSlide();
                }else if(eventInfo.key == "Escape"){
                    close();
                }
            });


------------------------------------------------------------------------------------------------------------------------------------------------------------------------
How to add Multiple events on same element:
    Example:
        var events = ["click", "mouseenter", "mousemove"];
        for(var i = 0; i < events.length; i++){
            nextBtn.addEventListener(events[i], nextSlide);
        }

------------------------------------------------------------------------------------------------------------------------------------------------------------------------
key event Properties:
    keyCode:
        -Get the Unicode value of the pressed keyboard key
        -every keyboard key has a value:
            ArrowRight ==> 39
            ArrowLeft ==>37
            Enter ==>13
            Esc ==>27

        -this property is depricated
        -we should use key property
    --------------------------------------------------------------------------------------------------------------------------------------------------------
    key:
        -The key property returns the identifier(name) of the key that was pressed when a key event occured.

        -Key identifiers are strings that identify keyboard buttons. The return value of this property can be a string of:

            -A single character (like "a", "W", "4", "+" or "$")
            -A multicharacter (like "F1", "Enter", "HOME" or "CAPS LOCK")
        
        -it doesn't get the "shift" , "Alt", "Ctrl" , "meta"

        -Tip: If you want to find out whether the "ALT", "CTRL", "META" or "SHIFT" key was pressed when a key event occured, use the altKey, ctrlKey, metaKey or shiftKey property.
        
        Note: This property is read-only.
------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Example on detecting multiple keydown pressed at once:
    
    -detecting if multiple keys are pressed at once
    -we made a boolean that has boolean values for the keys 
    -if keys pressed down then value will be true
    -we must make sure that first keys are not pressed up and still pressed down
    -so we made event listener for keyup , if any key is pressed up(removed my hand)
    -then make its value false
    -if all keys pressed down, then print hello

    var keys = {
        a:false,
        shift:false,
        control:false,
        c: false
    };

    document.addEventListener("keydown", function(eventInfo){
        
        console.log(eventInfo.key);
        if(eventInfo.key == "Control"){
            keys.control = true;
        }
        if(eventInfo.key == "Shift"){
            keys.shift = true;
        }
        if(eventInfo.key.toLowerCase() == "c"){
            keys.c = true;
        }

        if(keys.shift && keys.c && keys.control){
            console.log("hello");
        }    
    });

    document.addEventListener("keyup", function(eventInfo){
        if(eventInfo.key == "Control"){
            
            keys.control = false;
        }
        if(eventInfo.key == "Shift"){
            keys.shift = false;
        }
        if(eventInfo.key == "c"){
            keys.c = false;
        }
    });


    
-->