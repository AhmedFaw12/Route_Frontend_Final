<!-- 
About section:
    -how to get two headings about each other in the center:
        -make a div with class title
        -make 2 headings(h2, h3) inside div
        -give title (text-center) to get h2,h3 in the middle

        -give h3 position-absolute and give title div position-relative to get h3 on the top layer

        h3 will get on the top:0 and left : 0
        -to center h3 position-absolute in the middle:
            -give title d-flex justify-content-center and they will give on the center(horizontally) above each other(h3 will get above h2 because it has a new layer)
            -give title align-items center to center h2 , h3 vertically
            -they will not get centered vertically correct because bootstrap gives h2, h3 margin-bottom by default 
            -so we will give h2, h3 mb-0

    -to give margin between two col divs :
        -give the right col-md-7 and 1 column left
        -give it offset-md-1

    Example:
        index.html:
            <section id="about" class="py-5">
        
                <div class="title text-center">
                    <div class="title-head position-relative text-center d-flex justify-content-center align-items-center">
                        <h2 class="mb-0">ABOUT</h2>
                        <h3 class="position-absolute mb-0">ABOUT</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                </div>

                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="figure">
                                <img src="images/me.jpg" class="w-100" alt="">
                            </div>
                        </div>

                        <div class="col-md-7 offset-md-1 d-flex align-items-center mt-3">
                            <div class="content">
                                <h4>Robin Steel</h4>
                                <p class="lead color-main">Creative UI/UX Designer, Developer</p>
                                <p class="lead text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem odit placeat harum suscipit necessitatibus qui? Autem incidunt deserunt velit? Laboriosam, assumenda illum est reprehenderit doloribus vero placeat quaerat quod praesentium?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        style.css:
            .title h2{
                font-size: 80px;
                font-weight: 900;
                color: #f1f1f1;
            }
            .title h3{
                font-size: 40px;
                font-weight: 900;
            }


            #about{
                background-image: url(../images/light_dot.jpg);
            }
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


navbar:
    -we will use bootstrap navbar

    -navbar-dark : matches text color for dark backgrounds(make text -light)
    -navbar-white : matches text color for white backgrounds(make text -dark)

    ms-auto : left is empty (similar to float:right , but it is not float)
    me-auto : right is empty (similar to float:left , but it is not float)

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




-->