<!-- 
Bootstrap _ fontawesome Example:
    -we want to make home/header section    
    -always gives sections id

Home/Header section:
    how to make circle around icon:
        -if we give icon border-radius :50% , it will not make it correct circle (but oval) because width not equal height

        -we need to put icon inside a div 
        -give the div small fixed width and height (it will not affect responsive performance) such that width = height
        
        -then give the div d-flex and align-items-center and justify-content-center
        -then give div m-3 , incase we want to make other icons beside our div

        then repeat div multiple times for other icons
        -then put these divs in another div and give d-flex , so that icons get beside each other
    
    Example:
        index.html:
            <header class="vh-100 d-flex align-items-center">
                <div class="header-content text-white ps-md-5">
                    <h1 class="fw-bolder">Web design and Development</h1>
                    <p>Developer Graphics & Web Design</p>
                    
                    <div class="social-panel d-flex mb-2">
                        <div class="icon m-2 ms-0 d-flex align-items-center justify-content-center rounded-circle">
                            <i class="fab fa-facebook-f"></i>
                        </div>
                        <div class="icon m-2 d-flex align-items-center justify-content-center rounded-circle">
                            <i class="fab fa-twitter"></i>
                        </div>
                        <div class="icon m-2 d-flex align-items-center justify-content-center rounded-circle">
                            <i class="fab fa-instagram"></i>
                        </div>
                        <div class="icon m-2 d-flex align-items-center justify-content-center rounded-circle">
                            <i class="fab fa-spotify"></i>
                        </div>
                    </div>

                    <a href="#" class="text-uppercase color-main text-decoration-none">view portfolio</a>
                </div>

            </header>
        style.css:
            header{
                background-image: url("../images/intro-bg.jpg");
                background-size: cover;
                background-position: center center;
            }

            .icon{
                width: 32px;
                height: 32px;
                border: 1px solid rgba(255,255,255,0.5);
                transition: border-color 1s;
            }

            .color-main{
                color: #ff206e !important;
            }

            .icon:hover{
                border-color: #ff206e;
            }

            -when we give border 1px color white and 0.5 opacity , it will appear as if it has less than 1px border:
                border: 1px solid rgba(255,255,255,0.5);
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
profile section:
    example:
        index.html:
                <section id="profile">
                    <div class="container py-5 text-center">
                        <div class="row">
                            <div class="col-md-3">
                                <div>
                                    <img src="images/two.png" class="w-100 rounded-circle mb-4" alt="">
                                    <h3>Name:</h2>
                                    <p>Ahmed Fawzy</p>
                
                                    <h3>Phone:</h2>
                                    <p>01001132311</p>

                                    <h3>Address:</h3>
                                    <p>Ahmed Zweil st.</p>
                                </div>
                            </div>
                            <div class="col-md-9 ">
                                <div>
                                    <h2>I am Ahmed Fawzy Creative UI Developer</h2>
                                    <p class="lead text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur numquam incidunt exercitationem, voluptatum aliquam id voluptas accusantium sapiente natus in recusandae maiores</p>
                                </div>

                                <div class="row pt-4">
                                    <div class="col-md-4">
                                        <div>
                                            <i class="fab fa-grav fa-3x mb-2"></i>
                                            <h3>Graduation</h3>
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat aliquid consequuntur eos impedit neque ipsum.</p>
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat aliquid consequuntur eos impedit neque ipsum.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div>
                                            <i class="fab fa-grav fa-3x mb-2"></i>
                                            <h3>Graduation</h3>
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat aliquid consequuntur eos impedit neque ipsum.</p>
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat aliquid consequuntur eos impedit neque ipsum.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div>
                                            <i class="fab fa-grav fa-3x mb-2"></i>
                                            <h3>Graduation</h3>
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat aliquid consequuntur eos impedit neque ipsum.</p>
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat aliquid consequuntur eos impedit neque ipsum.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


-->