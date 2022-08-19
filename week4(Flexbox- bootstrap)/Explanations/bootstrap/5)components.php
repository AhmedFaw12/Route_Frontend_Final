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
        


-->