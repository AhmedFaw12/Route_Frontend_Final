<!-- 
4)@extend:
    -sass has extend method like inheritance

    -class can inherit from another class
    -if child class has @extend parentName, it will inherih all properties in parent class

    Example:
        .all{
            color: black;
            text-decoration: none;
            padding: 0;
            margin: 0;
        }

        .test{
            background-color: $mainColor;
            width: $mainWidth;
            @extend .all;
        }

        -so test has all properties in all  + its own properties

------------------------------------------------------------------------------------------------------------------------------------------------------------------------

5)import:
    -when scss code become very big, code will be complex 
    -it will complicated to put all my styles in one file

    -we can make styles in other files then import these files in my main file.scss

    Example:
        -make _colors.scss file
        _colors.scss:
            $lightColor:#ccc;
            $mainColor:#09c;
            $secondColor:tomato;

        styles.scss:
            @import 'colors';
            $mainWidth:50px;
            $height:200px;

            h1{
                color: $mainColor;
            }
    
    -some notes:
        -to import another file:
            @import 'colors';
        -we can remove extension of the file(.scss)
        -also we can remove underscore(_)

        -(live sass compiler) convert any scss file to css
        -so we want to tell extension not to convert certain scss files
        -we want extension to convert my main scss file only
        -so when we name our secondary scss files , we will put underscore_ before name   (_colors.scss)
        - _ means that this file is secondary file that will be imported in another file
            
        -angular doesn't need live sass compiler , it has its own compiler 
    
        -bootstrap put every component style code in a seperate scss and put _ before component name
        -then it made (bootstrap.scss) that imports all these components
        -so after we finish our project , we should remove components imports that we didn't use from(bootstrap.scss)   


------------------------------------------------------------------------------------------------------------------------------------------------------------------------
6)Auto_Prefixer:
 
    -in css3 there are some properties ,so when we use them we should use css prefixs to be supported in all browsers
    -after we finish our css code , we go to websites that add css3 prefixes

    -in sass we don't need to worry about adding css3 prefixes
    -live sass compiler has autoprefixer 
    -to activate its autoprefixer go to extension settings.json:
        "liveSassCompile.settings.autoprefix": [
            "> 1%",
            "last 2 versions"
        ]
        
        -just add this setting and autoprefixer will work

    example:
        styles.scss:
            h1{
                color: $mainColor;
                transition: all 1s;
            }
            
        styles.css:
            h1 {
                color: #09c;
                -webkit-transition: all 1s;
                transition: all 1s;
            }


------------------------------------------------------------------------------------------------------------------------------------------------------------------------

7)@mixin:
    -something similar to function , can be called multiple times to reuse code
    syntax:
        @mixin ourName(parameters){
            //properties 
        }

    -to call @mixin :
        @include ourMixinName

    Example:
        scss:
            @mixin animat($property, $duration){
                transition: $property $duration;
                animation-duration: $duration;
            }


            h1{
                color: $mainColor;
                @include animat(all, 2s);
            }
------------------------------------------------------------------------------------
------------------------------------------------------------------------------------

8)functions:
    difference between functions and @mixin:
        -we can make logic inside functions
        -while @mixin , we write only fixed properties(color, ...) , it doesn't take logic

    syntax:
        @function ourName($size){
            @return ....;
        }
    
    -to call function:
        
    Example:
       -we want to make function that takes code in px and convert it into rem

        scss:
            @mixin animat($property, $duration){
                transition: $property $duration;
                animation-duration: $duration;
            }

            @function calcRem($size){
                @return $size/16;
            }

            h1{      
                font-size:calcRem(32)rem; 
                color: $mainColor;
                @include animat(all, 2s);
            }

            -this function returns a string with space
            -so it won't work
            -we should search for a substitution
------------------------------------------------------------------------------------------------------------------------------------------------------------------------

9)@if conditions:
    syntax:
        @if(){

        }
        @else if(){

        }
        @else{

        }
    
    

    -if we want website with arabic and english
    -we should make website 2 times in two folders
    (one with english , one with arabic)
    -after finishing project , we will make another folder  for project called that has styles.scss with direction:rtl
    -make a link between two projects 

    Example:

        html:
            <div class="one"></div>
            <div class="two"></div>
            <div class="clearfix"></div>

            
            
        scss:
            $mainWidth:200px;
            $height:200px;

            $floatLeft:left;
            $floatRight:right;
            $direction:ltr;

            @if($direction =="rtl"){
                $floatLeft:right;
                $floatRight:left;
            }
            //@else if(){}
            @else{
                $floatLeft:left;
                $floatRight:right;
            }

            html{
                direction: $direction;
            }

            .one{
                width: $mainWidth;
                height: $height;
                background-color: tomato;
                float: $floatLeft;
            }

            .two{
                width: $mainWidth;
                height: $height;
                background-color: #09c;
                float: $floatRight;
            }

            .clearfix{
                clear:both;
            }

        -arabic/index.html:
            <a class="btn" href="../index.html">english</a>

        -arabic/styles.scss:
            $direction:rlt
            /////

    -so we will have styles_en.css with direction:ltr for english
    -and styles_ar.css with direction:rtl for arabic
    -and switch between two files
------------------------------------------------------------------------------------------------------------------------------------------------------------------------
difference between sass and scss:
    -sass(syntically awesome styleSheet)
    -in sass we didn't make curly brackets :
        h1
            background-color:red

    -if we didn't put space it will produce error
    -we just uses indentation(spaces)

    -scss uses curly brackets {}:
        h1{
            background-color:red
        }
------------------------------------------------------------------------------------------------------------------------------------------------------------------------
How to learn sass:
    -go to sass-lang.com 

How to produce css file if we don't have vscode and live sass compiler:
    -npm has package that compiles/translate sass to csss
    steps:
        1)npm init
        2)npm install node-sass :
            -(node-sass) is the package that compiles sass to css

        3)package.json:
            -command that run node-sass package is :
                node-sass --watch inputfileName.scss outfileName.css

                -we give it 2parameters: our file.scss and the output file.css 
            -instead of writing this whole command every time

            -go to package.json , go to scripts
            -add this line: 
                "scss":"node-sass --watch styles.scss styles.css"
                Example:
                    package.json:
                        "scripts": {
                            "test": "echo \"Error: no test specified\" && exit 1",
                            "scss":"node-sass --watch styles.scss styles.css"
                        },

            -we can name this command with any name : scss , ahmed , ....

        4)open terminal and write:
            npm run scss

            -we only wrote 3 words instead of whole line 
        

-->