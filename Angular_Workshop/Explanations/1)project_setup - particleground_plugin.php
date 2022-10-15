<!--
What we will make in this project:
    
    -make registeration/login form, and validations on this form
    -after successfull registeration, we will send form data to virtual api
    -then redirect user to a Home page

    CRUD:
        -how to add/update/delete notes


-project_setup:
    APIs:
        -we receive file from backend developer containing all apis
        -we will test our apis using (POSTMAN)

        Purpose of tokens:
            -after we login, server sends response containing a token
            -we need this token , so that when we add/update/delete note using api , we will send token to backend so that we make sure that the user who logged in , is the one who will add/update/delete note
            -also this token contain user information(name, ....) ,we can save this token ,so that if user has logged in and close browser or website , and reopened the website again, he don't need to login again

            -when user logout , this token is destroyed
            -everytime user login, a new token is sent from server as a response

            -so token is used in authentication 

    
    ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    -generate components :
        -we will generate navbar, signin, signUp, profile, notfound 

        -we will make folder for components inside app folder
        -this components folder will hold all components that we will make
        -open terminal inside this(components) folder , and write generation commands

        ng g c profile --skip-tests
        ng g c signIn --skip-tests
        ng g c signUp --skip-tests
        ng g c navbar --skip-tests
        ng g c notFound --skip-tests

        -note:
            -when we write signUp in camelcase , sign-up component name is produced

    ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    -install bootstrap , jquery, fontawesome , popper.js:
        -npm install bootstrap jquery popper.js --save
        -npm install @fortawesome/fontawesome-free --save

        note:
            As of npm 5.0.0, installed modules are added as a dependency by default, so the --save option is no longer needed

        -go to angular.json and add styles, scripts file paths :
            "styles": [
              "./node_modules/bootstrap/scss/bootstrap.scss",
              "./node_modules/@fortawesome/fontawesome-free/css/all.min.css",
              "src/styles.scss"
            ],
            "scripts": [
              "./node_modules/jquery/dist/jquery.min.js",
              "./node_modules/popper.js/dist/umd/popper.min.js",
              "./node_modules/bootstrap/dist/js/bootstrap.min.js"
            ]
        
        -since we modified in angular.json, we need to restart our server so that application is updated:
            ctrl+c  => to end project
            ng serve --open

        -Note:
            -if we want to use cdn links , we will not add them in angular.json styles and scripts
            -we will add these links inside index.html

            -the only problem is:
                -when we make production , all files will be bundled/minified into 3 or 4 files
                -but anything/links in index.html will not be bundled/minified  
                -files inside cdn will make more requests and hence size increase , performance decrease
    ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    
    
    -npmjs.com:
        -(npmjs.com) is important website has any package(bootstrap, jquery, ...) that support npm
        -we can search for any package , and it will get me its installation command


    ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    -add navbar:
        navbar.components.html:
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                    <a class="navbar-brand" href="#"><i class="far fa-note-sticky"></i> Notes</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                SignIn
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">SignUp</a></li>
                                <li><a class="dropdown-item" href="#">SignIn</a></li>
                            </ul>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
    
    ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    -use particleground jquery plugin:
        -in signUp, signIn forms we used a plugin like particlejs in the background to make (web)(شبكة عنكبوت) 

        -when library has no npm install command:
            -go to its github, download its files
            -go to node_modules ,make folder assets , make another folder inside assets called js
            -put "jquery.particleground.min.js" inside js folder
            -put its path inside scripts inside angular.json

            -when we upload project on github without node_modules folder 
            -and we download it again, we need to make folders for assets/js/jquery.particleground.min.js 

            example:
                angular.json:
                   'scripts':[
                        "./node_modules/assets/js/jquery.particleground.min.js"
                    ]
        
        -particleground has now npm:
            npm i nodecloud-particleground

            -so we don't need to make above steps

            angular.json:
                'scripts':[
                    "./node_modules/nodecloud-particleground/jquery.particleground.min.js"
                ]
            
        
        -then put fire function of plugin inside component.ts:
            sign-up.component.ts:
                import { Component, OnInit } from '@angular/core';
                declare var $:any;

                @Component({
                selector: 'app-sign-up',
                templateUrl: './sign-up.component.html',
                styleUrls: ['./sign-up.component.scss']
                })
                export class SignUpComponent implements OnInit {

                constructor() { }

                ngOnInit(): void {
                    $('#signUp').particleground();
                }
                
                -fire function must to refer to html element that has certain id
            
            sign-up.component.html:
                <section id="signUp">
  
                </section>    
            
            sign-up.component.scss:
                #signUp{
                    min-height: 100vh;
                }
            
            app.component.html:
                <app-navbar></app-navbar>
                <app-sign-up></app-sign-up>



        -how to write jquery inside angular:
            -we put jquery code inside a function
            -angular can't determine what is $ (dollar sign)
            -so we put  declare var $:any; below imports

            -declare is used to tell the compiler "this thing (usually a variable) exists already, and therefore can be referenced by other code, also there is no need to compile this statement into any JavaScript".

            -The declare keyword in TypeScript is used for the Ambient(المحيط ب) declaration of variables or for methods. Ambient Declarations is like an import keyword. Which tells the compiler that the source exists in another file. We use Ambient declarations in TypeScript for using the third party libraries of JavaScript, jQuery, Node, etc. declare keyword directly integrate these libraries in our code and decrease the chance of error in our TypeScript code.
-->