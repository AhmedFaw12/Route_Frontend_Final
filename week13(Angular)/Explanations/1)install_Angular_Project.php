<!-- 
Angular Intro:
    -google in 2010 started to make angularJS: library to make validation,regular expression , form handling, ....

    -we have 2 jobs:
        -UI developer : focus on html, css, bootstrap
        -Frontend developer : focus on js, jquery, angular, ES6, apis, ..
    
    -so in 2010 , google made angularJS :
        -which was big library
        -it was one big file made by js
        -bootstrap mainly focus on the UI (navbar, button, alert , ...)
        -angularJS is made for form validation, receiving apis, ....
        -focus on building single page application(SPA)
    SPA:
        -SPA(Single Page Application)
        -SPA is to make full website without reloading
        -move from one page to another without reloading
        -SPA gives better user experiance
    
    -in 2015,2016 google made Angular2:
        -google totally removed angularJS, and made a new version called Angular2
        -Angular2 is completely different from AngularJS
        
        -Angular2 is a Framework/Platform
        -Angular is an application-design framework and development platform
        -platform is bigger than framework
        
        -Angular2 is made by TypeScript
        -TypeScript = javascript + 2 things 
    
    Advantages of Angular2:
        -Angular2 performance is much better than angularJS   :
            -if application takes 5 seconds in angularJS
            -it will take only 1 second in angular2
        
        -Angular2 can make cross-platform-mobile-application:
            -we can make application by angular that will work on android, ios, web
            -cross platform (means عبر البيئات) , platforms are android, ios, web

    -later new versions of angular are made: angular4, angular5, 6, 7,8 ,9 10, 11, 12
    -every 6months new version of angular is made
    -we will learn Angular12
             
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

install Angular Project:
    -inorder to work with angular , we need to use npm (node package manager)
    -we will install nodejs , inorder to use npm

    install Angular CLI:    
        -angular has many details, so they made (angular CLI)
        -(angular CLI) is an assistant, that will work as a developer with me
        -we will tell angular CLI some commands to do , and angular CLI will make these commands for me instead of doing these commands myself

        -for example: 
            -angular has something called component , 
            -so inorder to make component, we will make folder, and make some files inside the folder, 
            -each file has certain code, this will take time  if we did this manually
            -so instead of doing this manually,  we will just write commands to the angular CLI, and it will make this component for me
            
            -also angular has something called service , so we will write commands to angular CLI to make service for me

        -we need to install (Angular CLI)
        -Angular CLI is a library, this library is made by JS
        -npm can see all libraries that is made by JS
        -since we installed npm, we will tell npm to install Angular CLI using this command:
            npm install @angular/cli

            -if we write this command in certain folder , angular cli library will be installed only in this folder
            -so if we want to work in another folder , we need to write this command again to install angular cli in this folder

            -luckily, if we write -g before library name, g means global, this library will be installed on the system (windows) , so library will be shared on all windows folders

            -so final command to install angular cli is:
                npm install -g @angular/cli
            
            -so this line will be only written once in a lifetime, unless we installed new windows

        
    -install angular project:
        -inorder to install angular project, we will tell angular cli to install new angular project

        -when we write (ng) in any command, this means we are talking to (angular CLI)

        -we write this command to install new angular project:
            -ng new myProjectName

        -then it will ask me some questions:
            -Would you like to add Angular Routing? (y/n):
                -we will take routing later
                -routing is when our website consists of multiple pages, and we want to go from page to another without reload
                -we will say Y

                -if our project has 1 page or 2 , we don't need routing
            -Which stylesheet format would you like to use? (css, SCSS, Sass, Less)
                -we will choose css now
                SCSS, Sass are similar that we will learn later
                -Less , no one uses less now
    
    -every time we need to install angular project ,we need good internet connection
    -because angular project needs many many many libraries to be installed

    -we can download it once and copy it , but this is not recommended
    
    
        


    
-->