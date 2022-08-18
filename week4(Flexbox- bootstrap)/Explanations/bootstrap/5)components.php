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

    
-->