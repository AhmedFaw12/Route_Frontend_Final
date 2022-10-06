<!-- 
Project setup:
    -we need to learn how to start a project from A to Z
    -first we need to have 2 things before we start:
        1)we need to have APIs made by backend developer:
            -we can have api that gets something
            -we can send something to api

            -we will receive a pdf file containing all apis
            -this pdf file has something called BASE_URL:
                -it is the url that all apis depend on it
                -every api will start with this url

            -our BASE_URL : https://route-egypt-api.herokuapp.com/
            -what is written after base url is called (end point)
            -for example:
                https://route-egypt-api.herokuapp.com/signup  : to go to sign up page

                -endPoint is a page in the backend
                
        2)we need to have design of our website from UX/UI designer:
            -UX/UI designer make the design using AdobeXd:
                -adobeXd is a program to make designs for mobile/desktop/web
                -design includes color, font sizes
                -UX/UI designer also use Sigma program
    
    -then make new angular project:
        -ng new final_project
        
        -then say yes to routing
        -then choose SCSS

    -our BASE_URL : https://route-egypt-api.herokuapp.com/
    ------------------------------------------------------------------------------------------------------------------------------------------------------------
    -POSTMAN:
        -one of important tools to test and see what returns from APIs
        -tester do this job

        -it has 2 versions:free and not free
        Example:
            -we want to signup
            -make a new request
            -write url/signup , and choose post method
            -go to body , choose raw and choose json
            -write your json code:
                {
                    "first_name": "Ahmed",
                    "last_name": "Fawzy",
                    "email": "ahmedFaw@gmail.com",
                    "password": "A123456",
                    "age": "25"
                }
            -then press send
            -this will actually send a real request and save data in the database

            -if request is success, it will send me status:200 ok and send me a json reply containing message:success  :
                {
                    "message": "success"
                }
            
            -if we registered with same email twice , it will give me error json reply :
                {
                    "errors": {
                        "email": {
                            "message": "email already registered",
                            "name": "ValidatorError",
                            "properties": {
                                "message": "email already registered",
                                "type": "unique",
                                "path": "email",
                                "value": "ahmedfaw@gmail.com"
                            },
                            "kind": "unique",
                            "path": "email",
                            "value": "ahmedfaw@gmail.com"
                        }
                    },
                    "_message": "citizen validation failed",
                    "message": "citizen validation failed: email: email already registered",
                    "name": "ValidationError"
                }

                -status:200 ok means that our url is good

                -this error in database registeration

    ------------------------------------------------------------------------------------------------------------------------------------------------------------

    -so we should study apis and try them ourselves using postman
    -then create all components and install every required library:
        -components needed:
            login
            register
            home component
            movies component
            Tvshows
            about
            network
            movieDetails component
            navbar
            notfound component
            people component
        -we also install required libraries:
            -jquery
            -popper
            -bootstrap
            -fontawesome

        Example:
            npm install jquery popper.js bootstrap
            npm install @fortawesome/fontawesome-free
        
            ng g c home --skip-tests
            ng g c about --skip-tests
            ng g c movies --skip-tests
            ng g c tv --skip-tests
            ng g c network --skip-tests
            ng g c login --skip-tests
            ng g c register --skip-tests
            ng g c people --skip-tests
            ng g c navbar --skip-tests
            ng g c notfound --skip-tests
    ------------------------------------------------------------------------------------------------------------------------------------------------------------
    -then go to angular.json to link our libraries and styles:
        "styles": [
            "./node_modules/bootstrap/scss/bootstrap.scss",
            "./node_modules/@fortawesome/fontawesome-free/scss/fontawesome.scss",
            "src/styles.scss"
        ],
        "scripts": [
            "./node_modules/jquery/dist/jquery.min.js",
            "./node_modules/popper.js/dist/umd/popper.min.js",
            "./node_modules/bootstrap/dist/js/bootstrap.min.js"
        ]

        -since we choose scss , we need to link bootstrap.scss and fontawesome.scss and our main styleSheet (styles.scss)

        -we will use old fontawesome css file for now until we learn scss
        -with any changes in angular.json we need to run project again using:
            ng serve --open

    ------------------------------------------------------------------------------------------------------------------------------------------------------------
    -we need to make all global styles of our project:
        -every website has somethings global
        -for example:
            -all pages have same background color, same font-family, same color
            -all buttons have same style
            -all links are same in style

        -we receive styles file from designer written in scss
        -in scss we can make variables 

        -we will put our global styles in styles.scss:
            styles.scss:
                /* You can add global styles to this file, and also import other style files */
                @import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@300&display=swap');

                $bgColor:#131722;
                $lightBgColor:#24baef;
                $bgTransparent:rgba(36,186,239,.6) ;
                $fontColor:#fff;
                $borderColor:#a8a8a83d;
                $borderHeight:1px;
                $secondFontColor:#949cb0;


                body{
                font-family: 'Montserrat Alternates', sans-serif;
                background-color: $bgColor;
                color: $fontColor;
                }

                a,.navlink{
                font-size: 18px !important;
                color: $fontColor !important;
                text-decoration: none !important;
                }

                a:hover{
                font-size: 18px;
                color: $fontColor;
                text-decoration: none;
                }


    ------------------------------------------------------------------------------------------------------------------------------------------------------------
    -go to assets:
        -make images folder and put images inside it
        webp images:
            -it is a modern image format
            -it is an image extension
            -webp is one of the best extensions that works with web
            -it makes small sized images and good resolution
            -so we should convert our images to (.webp)

            -Using .webp, webmasters and web developers can create smaller, richer images that make the web faster
            -.webp is one of the best image extension that work in web

    ------------------------------------------------------------------------------------------------------------------------------------------------------------
    -then we need to make routing:
        app-routing.module.ts:
            import { AboutComponent } from './about/about.component';
            import { HomeComponent } from './home/home.component';
            import { LoginComponent } from './login/login.component';
            import { MoviesComponent } from './movies/movies.component';
            import { NetworkComponent } from './network/network.component';
            import { NotfoundComponent } from './notfound/notfound.component';
            import { PeopleComponent } from './people/people.component';
            import { RegisterComponent } from './register/register.component';
            import { TvComponent } from './tv/tv.component';

            const routes: Routes = [

            {path:"", redirectTo:"home", pathMatch:"full"},
            {path:"home", component:HomeComponent},
            {path:"about", component:AboutComponent},
            {path:"movies", component:MoviesComponent},
            {path:"tv", component:TvComponent},
            {path:"network", component:NetworkComponent},
            {path:"people", component:PeopleComponent},
            {path:"login", component:LoginComponent},
            {path:"register", component:RegisterComponent},
            {path:"**", component:NotfoundComponent},
            ];

    
        -go to navbar component and adjust links :
            -replace all href with routerLink 

            navbar.component.html:
                <nav class="navbar navbar-expand-lg ">
                    <div class="container-fluid">
                        <a class="navbar-brand" routerLink="home">Noxe</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                <a class="nav-link" routerLink="home">Home</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" routerLink="about">About</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" routerLink="movies">Movies</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" routerLink="tv">Tv shows</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" routerLink="network">Network</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" routerLink="people">people</a>
                                </li>

                            </ul>
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            </form>
                            <div class="social-media me-4">
                                <i class="fab mx-2 fa-facebook"></i>
                                <i class="fab mx-2 fa-spotify"></i>
                                <i class="fab mx-2 fa-instagram"></i>
                                <i class="fab mx-2 fa-youtube"></i>
                            </div>

                            <ul class="navbar-nav  mb-2 mb-lg-0">
                                <li class="nav-item">
                                <a class="nav-link" routerLink="login">Login</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" routerLink="register">Register</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

    ------------------------------------------------------------------------------------------------------------------------------------------------------------
    
    -go to app.component.html:
        -we put fixed components: navbar , footer if we have footer
        -and we put router-outlet tag
        
        app.component.html:
            <app-navbar></app-navbar>
            <router-outlet></router-outlet>

        

-->