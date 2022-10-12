<!-- 
Sass Intro:
    -in 2006 Carlton wanted to add progamming concepts in css
    -css is not programming language , so we can't make loop/conditions/variables/....
    
    -css is the standard stylesheet in whole world and all browsers support only css

    -carlton made language called Sass, and made a transpiler/compiler that converts Sass to css
    
    -Sass has 2extensions:
        -.sass
        -.scss :better extension
    
    -variables:
        -to make variables in scss use $varName:value
        Example:
            $mainColor:red;

    -how to link our scss with html:
        -we can't link (.scss) file in html
        -so we need to convert (.scss) to (.css)
        -vscode has extension called (live sass compiler)
        -we will install it
        -WatchSass will appear at the bottom of vscode
        -when we click on WatchSass:
            -it will take .scss file, and convert it into (.css file) and (.css.map file)
            -delete (.css.map)

        -then link (.css file) in index.html

    -Sass is called (css preproccesor) (means css before converting)
    -Sass has many features 
    -bootstrap and fontawesome uses Scss

    Example on Sass:
        styles.scss:
            $mainColor:red;

            h1{
                color: $mainColor;
            }
        
        -use watchSass
        
        index.html:
            <html>
                <head>
                    <link rel="stylesheet" href="styles.css">
                </head>
                <body>
                    <h1>Welcome to SCSS</h1>
                </body>
            </html>
------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Sass Features:
    1)variables:
        -to make variables in scss use $varName:value
        -value is any value we used before in csss
        Example:
            $mainColor:red;
            
            h1{
                color: $mainColor;
            }

            button{
                background-color: $mainColor;
            }

            p{
                color: $mainColor;
            }
        
            -h1,button,p uses same color, so if we want to change color, we will just change $mainColor values
    
    2)Nesting:
        -sass has important concept called DRY
        -DRY ( Don't Repeat Your code)

        Example with css:
            html:           
                <div class="parent">
                    <div class="child1">item</div>
                    <div class="child2">item</div>
                    <div class="child3">item</div>
                    <div class="child4">item</div>
                    <div class="child5">item</div>
                </div>

            css:
                .parent .child1{
                    background-color: $secondColor;
                }
                .parent .child2{
                    color: $mainColor;
                }
                ...

                -we are repeating .parent
        
        -Sass has nesting (selector inside selector)

        Example with scss:
            html:           
                <div class="parent">
                    <div class="child1">item</div>
                    <div class="child2">item</div>
                    <div class="child3">item</div>
                    <div class="child4">item</div>
                    <div class="child5">item</div>
                </div>
            scss:
                .parent
                {
                    padding:20px;

                    .child1{
                        font:
                        {
                            size: 20px;
                            weight: 900;
                            style: italic;
                        }

                        background-color: $mainColor;
                    }

                    .child2{
                        color: $secondColor;
                    }

                    .child3{
                        width: $width;
                    }

                    &:hover{
                        color: red;
                    }
                }

            -we wrote parent one time only
            -we can give parent some properties that will be applied on parent only (like padding:20px)

            -if we want hover:
                .parent:hover{
                    .child1{}
                    .child2{}
                }

                -this means when we hover on parent ,change child1 and child2
                -but we don't want that 

                -if we want to change in parent only when hover on parent use:
                    &:hover inside parent class
                    & means we are talking to parent
                    
                    .parent:hover{
                        .child1{}
                        .child2{}

                        &:hover{
                            color:red
                        }
                    }  
                    
            -we can also make nesting on properties like font , background, border,..... : 
                example with css:
                    .child1{
                        font-size: 20px;
                        font-weight: 900;
                        font-style: italic;
                    }

                    -we are repeating font many times

                example with scss nesting:
                    .child1{
                        font:
                        {
                            size: 20px;
                            weight: 900;
                            style: italic;
                        }

                        background-color: $mainColor;
                    }
    ----------------------------------------------------------------------------------------------------------------------------------------------------------------

    3)for loop(@for):
        -we can make loops 

        rgba() method:
            rgba($color: #000000, $alpha: 1.0);

            -scss has rgba method that takes color and opacity(alpha):0->1 

        -to write for :@for $ from 1 to 11 
        -it means from 1 to 10 only , 11 is not taken   

        -to talk to child i : write #{$i} after each child
        -we can apply arithmatic operators(+ - * ...) in scss
        Example:
            html:
                <div class="parent">
                    <div class="child1">item</div>
                    <div class="child2">item</div>
                    <div class="child3">item</div>
                    <div class="child4">item</div>
                    <div class="child5">item</div>
                    <div class="child6">item</div>
                    <div class="child7">item</div>
                    <div class="child8">item</div>
                    <div class="child9">item</div>
                    <div class="child10">item</div>
                </div>
            scss:
                $mainWidth:50px;
                .parent
                {
                    @for $i from 1 to 11{
                        .child#{$i}{
                            width: $mainWidth + ($i * 50);
                            height: 20px;
                            background-color: rgba($color: $mainColor, $alpha: $i/10);
                        }
                    }
                }



-->