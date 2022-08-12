<!-- 
    Example:
        -we wamt tp display 4 divs beside each other 
        index.html:
            <body>
                <section class="meals">
                    <div class="meal">
                        <img src="images/rigel-food-sec-2-img1-200x200.jpg" alt="CHICKEN DRUMSTICKS">
        
                        <h4>CHICKEN DRUMSTICKS</h4>
        
                        <div class="brdr"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, eveniet?</p>
                    </div>
                    <div class="meal">
                        <img src="images/rigel-food-sec-2-img5-200x200.jpg" alt="CHICKEN DRUMSTICKS">
        
                        <h4>CHICKEN DRUMSTICKS</h4>
        
                        <div class="brdr"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, eveniet?</p>
                    </div>
                    <div class="meal">
                        <img src="images/rigel-food-sec-2-img3-200x200.jpg" alt="CHICKEN DRUMSTICKS">
        
                        <h4>CHICKEN DRUMSTICKS</h4>
        
                        <div class="brdr"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, eveniet?</p>
                    </div>
                    <div class="meal">
                        <img src="images/rigel-food-sec-2-img4-200x200.jpg" alt="CHICKEN DRUMSTICKS">
        
                        <h4>CHICKEN DRUMSTICKS</h4>
        
                        <div class="brdr"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, eveniet?</p>
                    </div>

                    <div class="clearfix"></div>
                </section>        
            </body>       
        style.css:
            body{
                font-family: 'segoe ui light';
            }

            .meals{
                width: 90%;
                margin: auto;
            }
            -we will put 4 divs in a container div, and give it width:90% relative to body
            -and center this container relative to body

            .meal{
                width: 25%;
                float: left;
                text-align: center;
            }

            -to give the divs beside each other , give them float:left
            -and give them width:25% because they are 4 divs
            -and center the images and text inside each div


            .meal p{
                padding: 0px 20px;
            }
            -paragraph inside 4 divs are really close to each other 
            -so we will give each p a padding left and right , to make spaces between paragraphs

            .meal img{
                width: 90%;
                border-radius: 50%;
            }
            -we want images to be circle , so give them border-radius:50%
            -and give them width:90% ,so when we enlarge/reduce window size, they will be responsive


            .meal .brdr{
                width: 25%;
                height: 2px;
                background-color: #ccc;
                margin: auto;
            }

            -we want to make a line using div
            -we will give it width for example: width:25%
            -and give them height:2px (very small height to appear as a line)
            -and we want to center this line div inside the meal div

            .clearfix{
                clear: both;
            } 

            -clear the float
            
-->