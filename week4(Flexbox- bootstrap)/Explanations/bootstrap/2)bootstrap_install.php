<!-- 
Bootstrap Install offline:
    -first we need to download bootstrap files to our project:
        -go to getbootstrap.com and download
    -unzip/Extract
    -we will find 2 folders:
        -css:
            -contain many files (.css)
            -we will take bootstrap.min.css
        -js:    
            -contain many files (.js)
            -we will take bootstrap.min.js

    
    -then link the files in my project:
        css:
            <head>  
                <link rel="stylesheet" href="css/bootstrap.min.css">
            </head>
        js:
             <body>
                //code 
                <script src="js/bootstrap.min.js"></script>
            </body>

            -we should link our js files at the end of the body tag

    -components that work with js , will not work
    -bootstrap js need/depend on 2 other files/libraries in order to work(jquery, popper)
    -jquery is a library for js

    -Bootstrap 5 is designed to be used without jQuery
    -so we don't need to download jQuery
    -we will only download popper
    -then link to it 

    -we need to put pooper link above bootstrap js link , because bootstrap js depend on popper:
        <body>
            <script src="js/popper.js"></script>
            <script src="js/bootstrap.min.js"></script>
        </body>

    

--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
how to download and install jquery:
    -go to jquery.com
    -download
    -download compressed production version

    -put it in my project
    -then link to it

    -we will put jquery link above popper (because popper depends on it):
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
-bootstrap downloads files:
    -css:
        (.map) files:
            -bootstrap is made by sass 
            -sass is converted to css files
            -when sass is converted to css , (.map) files are created besides the css files
            -(.map) to map between sass and css
            -(.map) files are not important(we can delete them)


        (.min) files:
            -when we finish our project, we take our css code and compress it before upload our project to the server

            -compress :means removes all extra spaces
            -we compress:
                -reduce file size to increase performance and the browser reads the code faster

                -when we compress file , we call it production mode

                -how to compress css:
                    -go to cssminifier
                    -copy our css and select minify
                    -copy this minified css to a file and give it a name
                    -this file will be called/named (myname.min.css)
                    -so that other developers know that this file is minified

                -when we download bootstrap files:
                    -both production(.min.css/js) and development files(.css/js) are downloaded

        -bootstrap.grid.css:
            -bootstrap has a grid system for page layout
            -so if i want the bootstrap grid system only, we should include bootstrap.grid.min.css

        -bootstrap.reboot.css:
            -html give default margin and padding for elements 
            -so we used *{ margin:0; padding:0} , but this wasn't always good

            -bootstrap didn't remove padding and margin
            -but it normalized(adjusted) margin and padding for the elements
            -and put all the adjusted values in a separate file(reboot.css)
            
        -bootstrap.css:
            -contain all bootstrap codes(grid+reboot + ...)
            -so we will only include boostrap.min.css
            -we took the minified css , because we will not modify it
            -we will make another css file and link to it in the html file
            -but we will put our css file link after bootstrap.min.css link
            -so that our css file override the bootstrap css




--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
difference between framework and library:
    -library consists of one file
    -framework consists of multiple files



        
-->

