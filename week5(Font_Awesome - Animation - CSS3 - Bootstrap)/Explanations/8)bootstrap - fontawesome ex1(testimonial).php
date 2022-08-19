<!-- 
Testimonial section:
    -testimonial : clients reviews

    -to change image position to be in center of the div in this example:
        -give parent text-center
        -give image width 85px
        -give image border 
        -then give image translateY(50%)

    Example:
        index.html:
             <section id="testimonial" class="py-5  bg-danger">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    
                    <div class="carousel-inner">
                        <div class="carousel-item text-center active">
                            <img src="images/client-1.png" class="rounded-circle shadow" alt="...">

                            <div class="client-feedback w-75 mx-auto mt-3">
                                <h4 class="mt-5">Adrian Hassoon</h4>
                                <span class="text-muted">Senior Designer</span>
                                <div class="brdr"></div>
                                <p class="lead py-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed cumque sunt corrupti commodi nobis id, laborum provident nam nesciunt molestias?</p>
                            </div>
        
                        </div>
                        <div class="carousel-item text-center">
                            <img src="images/client-2.png" class="rounded-circle shadow" alt="...">

                            <div class="client-feedback w-75 mx-auto mt-3">
                                <h4 class="mt-5">Adrian Hassoon</h4>
                                <span class="text-muted">Senior Designer</span>
                                <div class="brdr"></div>
                                <p class="lead py-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed cumque sunt corrupti commodi nobis id, laborum provident nam nesciunt molestias?</p>
                            </div>
                            
                        </div>
                        <div class="carousel-item text-center">
                            <img src="images/client-3.png" class="rounded-circle shadow" alt="...">

                            <div class="client-feedback w-75 mx-auto mt-3">
                                <h4 class="mt-5">Adrian Hassoon</h4>
                                <span class="text-muted">Senior Designer</span>
                                <div class="brdr"></div>
                                <p class="lead py-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed cumque sunt corrupti commodi nobis id, laborum provident nam nesciunt molestias?</p>
                            </div>
            
                        </div>
                    </div>

                    <ol class="carousel-indicators position-static">
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"><img src="images/client-1.png" class="w-100 rounded-circle" alt=""></li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"><img src="images/client-2.png" class="w-100 rounded-circle" alt=""></li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"><img src="images/client-3.png" class="w-100 rounded-circle" alt=""></li>
                    </ol>
                    
                </div>
            </section>
        style.css:
            .carousel-item img{
                width: 85px;
                border: solid 2px  #fff;
                transform: translateY(50%);
            }

            .client-feedback{
                border: 2px solid #f1f1f1;
            }

            #testimonial{
                font-family: 'Segoe UI light', Tahoma, Geneva, Verdana, sans-serif;
            }

            .carousel .carousel-indicators li{
                width: 45px;
                height: 45px;
                border-radius: 50%;
                background-color: teal;
                text-indent: 0;
            }
            
-->