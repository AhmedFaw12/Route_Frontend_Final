<!-- 
Components:
    buttons:
        example:
            <button class="btn btn-danger">hello</button>
        example:
            we want button with transparent background width red border
            <button class="btn btn-outline-danger">hello</button>
            
            <button class="btn btn-outline-info">hello</button>

        block buttons:
            -make button full width of its parent
            example:
                <div class=" border border-danger w-75 p-5 mx-auto rounded">
                    <button class="btn btn-info w-100">hello</button>
                </div>
        
        -to make button bigger:
            btn-lg
        -to make button smaller:
            btn-sm

        -to make a link to appear as a button:
            <a href="" class="btn btn-info">hello</a>
        
        -to make input type submit to appear as a button:
            <input type="submit" class="btn btn-info">
        
        -to make disabled button:
            -we will use attribute disabled
            <button disabled class="btn btn-info">hello</button>
    ----------------------------------------------------------------------------------------------------------------------------------------------------------
    navbar:
        -we will use bootstrap navbar

        -navbar-dark : matches text color for dark backgrounds(make text -light)
        -navbar-white : matches text color for white backgrounds(make text -dark)

        ms-auto : left is empty (similar to float:right , but it is not float)
        me-auto : right is empty (similar to float:left , but it is not float)

        -we put our links inside nav-item (li)

        index.html:
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-uppercase">
                    <li class="nav-item">
                        <a class="nav-link" href="#">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#profile">profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">testimonial</a>
                    </li>    
                    </ul>
                </div>
                </div>
            </nav>
    ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    Carousel(slider):
        -there are multiple tpyes of sliders:
            - with controls(left and right arrows)
            - with indicators (dots)
            - with both(controls and indicators)
            - with caption
            - with none
        -the indicators are put inside buttons , and we can add more indicators
        -carousel-indicators class has position absolute so it makes a layer above the content , to cancel the position-absolute , use position-static in the class:
            <div class="carousel-indicators position-static bg-info">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
        
        -to replace indicators with images:
            -replace buttons and div with li ol
            -give li width and height and border-radius:50%
            -write img tag inside li, and give image w-100 and rounded-circle
            -images will not display , because li has text-indent:-99999
            -to display images , make text-indent:0

            example:
                index.html:
                    <ol class="carousel-indicators position-static">
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"><img src="images/client-1.png" class="w-100 rounded-circle" alt=""></li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"><img src="images/client-2.png" class="w-100 rounded-circle" alt=""></li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"><img src="images/client-3.png" class="w-100 rounded-circle" alt=""></li>
                    </ol>
                style.css:
                    .carousel .carousel-indicators li{
                        width: 45px;
                        height: 45px;
                        border-radius: 50%;
                        background-color: teal;
                        text-indent: 0;
                    }
        -to change indicators style:
            -for example we want indicator which is active has bigger width and has full red color while inactive indicators have less width and opacity:0.5

            -if we want to make rounded corners for indicators , it won't work , we have to make border for the indicators first(special case)

            .carousel-indicators [data-bs-target]{
                background-color: #e65f78;
                opacity: 0.5;
                width: 12px;
                height: 6px;
                border: 1px solid transparent;
                border-radius: 20px;
            }  

            .carousel-indicators .active{
                background-color:#e65f78;
                width: 20px;
                opacity: 1;
            }


        -to change position of controls(left and right) and replace arrows with fontawesome icons:
            -we can give left and top, bottom, right to .carousel-control-prev or .carousel-control-next because they have position :absolute
            
            example:
                index.html:
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <i class=" fas fa-3x fa-arrow-circle-left"></i>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <i class=" fas fa-3x fa-arrow-circle-right"></i>
                    </button>
                style.css:
                    .carousel-control-prev{
                        left:200px;
                    }

                    .carousel-control-next{
                        left:100px;
                    }        
    
        -we can put inside carousel-item :
            -images
            -text(h2, p ,..)
            -divs
            -anything
        
    ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    Navs and tabs:
        -we can make nav menu/list vertical or horizontal when we click on list-item , a div or text or .... will appear 
        -it uses js 

        Example on simple navs with js(default):    
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" disabled>Disabled</button>
                </li>
            </ul>
        
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">...</div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">...</div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
                <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
            </div>
        
        -to add new list-items:
            -we have to change these attribute in the li tags and put our item-list name:
                data-bs-target="#pills-home, 
                aria-controls="pills-home",
                id="pills-home-tab"

            -we also have to chage these attributes in the tab-pane divs and put our names:
                pills-home
                pills-home-tab
            

            Example:
                <ul class="nav nav-pills mb-3 d-flex justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">all</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-seo-tab" data-bs-toggle="pill" data-bs-target="#pills-seo" type="button" role="tab" aria-controls="pills-seo" aria-selected="false">seo</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-webdesign-tab" data-bs-toggle="pill" data-bs-target="#pills-webdesign" type="button" role="tab" aria-controls="pills-webdesign" aria-selected="false">webdesign</button>
                    </li>
                    
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-work-tab" data-bs-toggle="pill" data-bs-target="#pills-work" type="button" role="tab" aria-controls="pills-work" aria-selected="false">work</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-wordpress-tab" data-bs-toggle="pill" data-bs-target="#pills-wordpress" type="button" role="tab" aria-controls="pills-wordpress" aria-selected="false">wordpress</button>
                    </li>
                
                </ul>
    

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">.1.</div>
                    <div class="tab-pane fade" id="pills-seo" role="tabpanel" aria-labelledby="pills-seo-tab" tabindex="0">.2.</div>
                    <div class="tab-pane fade" id="pills-webdesign" role="tabpanel" aria-labelledby="pills-webdesign-tab" tabindex="0">.3.</div>
                    <div class="tab-pane fade" id="pills-work" role="tabpanel" aria-labelledby="pills-work-tab" tabindex="0">.4.</div>
                    <div class="tab-pane fade" id="pills-wordpress" role="tabpanel" aria-labelledby="pills-wordpress-tab" tabindex="0">.5.</div>
                </div>
        
        to change list items styles:
            css:
                .nav-pills .nav-link{
                    text-transform: uppercase;
                    color: black;
                    margin-right: 13px;
                    transition: background-color 0.5s , color 0.5s, border-radius 0.5s;
                }

                .nav-pills .nav-link.active{
                    background-color: #e65f78;
                    border-radius: 30px;
                }


                .nav-pills .nav-link:hover{
                    background-color: #e65f78;
                    border-radius: 30px;
                    color: white;
                }
        -to center list items in the middle of ul, use display-flex, justify-content-center:
            html:
                <ul class="nav nav-pills mb-3 d-flex justify-content-center" id="pills-tab" role="tablist">
                    ...
                </ul>
        
        -to add divs so that when we click on nav link, div(which may contain other divs) will appear:
            Example:
            index.html:
            
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <div class="works-item position-relative">
                                    <img src="images/1.jpg" class="w-100 rounded" alt="">
                                    <div class="layer position-absolute d-flex justify-content-center align-items-center text-center text-white rounded">
                                        <div class="layer-content">
                                            <p>Category</p>
                                            <h4>Project Title</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="works-item position-relative">
                                    <img src="images/2.jpg" class="w-100 rounded" alt="">
                                    <div class="layer position-absolute d-flex justify-content-center align-items-center text-center text-white rounded">
                                        <div class="layer-content">
                                            <p>Category</p>
                                            <h4>Project Title</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="works-item  position-relative">
                                    <img src="images/3.jpg" class="w-100 rounded" alt="">
                                    <div class="layer position-absolute d-flex justify-content-center align-items-center text-center text-white rounded">
                                        <div class="layer-content">
                                            <p>Category</p>
                                            <h4>Project Title</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                        --code --
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                        --code--
                    </div>
                    <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">
                        ---code --- 
                    </div>
                </div>
            style.css:
                add any style we want
            

    ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    element triggered Modal:
        -when we click on element(can be div, img, button, ....) , modal will appear
        -modal has position fixed
        
        -to make modal appear when click on element, give element two attributes:
            data-bs-toggle="modal" 
            data-bs-target="#exampleModal":
                -we will put our modal id

            -to center modal vertically , give child div inside modal div two classes:
                modal-dialog 
                modal-dialog-centered 


        Example:
            -we want when click on certain element , we want modal appear to display image


            //element to click on
             <div class="works-item position-relative" data-bs-toggle="modal" data-bs-target="#myModal">
                <img src="images/1.jpg" class="w-100 rounded" alt="">
                <div class="layer position-absolute d-flex justify-content-center align-items-center text-center text-white rounded">
                    <div class="layer-content">
                        <p>Category</p>
                        <h4>Project Title</h4>
                    </div>
                </div>
            </div>

            //Modal
            <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content ">
                        <img src="images/1.jpg" class="w-100" alt="">
                    </div>
                </div>
            </div>
    
-->

<div>

</div>