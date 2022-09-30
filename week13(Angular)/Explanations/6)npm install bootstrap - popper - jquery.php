<!-- 
npm install bootstrap - popper - jquery:
    -to install any library , we will use npm

    -install jquery:
        npm install jquery

    -install popper:
        npm install popper.js

    -install bootstrap:
        npm install bootstrap

        -to install certain version of any library , just add @4.6.x 
        npm install bootstrap@4.6.x

    -to install multiple libraries in one command:
        npm install jquery popper.js bootstrap@4.6.x

    -to install fontawesome:
        -we go to fontawesome website and get npm command

        npm install --save @fortawesome/fontawesome-free

        --save is not important, (it puts library name in dependancy array)



    -these libraries are downloaded inside node_modules folder
    -during production , many on node_modules files will be removed, keeping only libraries we used
--------------------------------------------------------------------------------------------------------------------------------------------------------------
linking libraries with our project:
    -we need to link our libraries that we downloaded with our project

    -angular.json:
        -it has configurations of my project
        -it has two arrays: (styles, scripts ) ,we will link css and js in these 2 arrays globally, styles and scripts arrays are seen by all components
        
        
        Example:
            Angular.json:
                "styles": [
                    "./node_modules/bootstrap/dist/css/bootstrap.min.css",
                    "./node_modules/@fortawesome/fontawesome-free/css/all.min.css",
                    "src/styles.css"
                ],
                "scripts": [
                    "./node_modules/jquery/dist/jquery.min.js",
                    "./node_modules/popper.js/dist/umd/popper.min.js",
                    "./node_modules/bootstrap/dist/js/bootstrap.min.js"
                ]
                    
                -order is important

        -we linked our js and css files ,but it won't work
        -angular server don't recognise changes in angular.json
        -we need to stop server and start it again
        -to stop server: ctrl + c
        -to start server again: ng serve --open


    -node_modules folder is large
    -we can delete node_modules folder and transfer project from place to another 
    
    -we can install node_modules again: npm install
    -it will go to package.json and see its dependancies and install it again 

-->