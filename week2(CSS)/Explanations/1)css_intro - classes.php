<!-- 
-Css Introduction:
    Three places to write styles(css):
        1)inline css:
            -write styles inside html tags
            <p style="color: blue;">hello</p>
        2)Internal(style tag):
            -called internal because it is inside html head tag
            syntax:
                <head>
                    <style>
                        p{
                            color: tomato;
                        } 
                    </style>
                </head>
            -we write styles/css inside style tag inside head tag
            

        3)external file:
            -we write our styles/css inside a seperate (.css) file 
            and link this file inside head tag of html page(using link tag and href attribute)

            -link tag :
                syntax:
                    <link rel="stylesheet" href="mystyle.css">
                
                -The <link> tag defines the relationship between the current document and an external resource.

                -The <link> tag is most often used to link to external style sheets or to add a favicon to your website.

                -The <link> element is an empty element, it contains attributes only.

                Attributes:
                    -href:
                        The href attribute specifies the location (URL) of the external resource (most often a style sheet file).
                    -rel:
                        -Required. Specifies the relationship between the current document and the linked document
 
                        rel="stylesheet"
                        <link rel="stylesheet" href="mystyle.css">
                        
                        -stylesheet	Imports a style sheet
            

            example:
                index.html:
                    <head>
                        <link rel="stylesheet" href="mystyle.css">
                    </head>
    -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------    
    -Priorities of css:
        -css works in sequence (it is what comes after what)
        Example:
            styles.css:
                h2{
                    color: tomato;
                }
            index.html:
                <head>
                    <style>
                        h2{
                            color: green;
                        }
                    </style>
                    <link rel="stylesheet" href="style.css">
                </head>
            
            -code in style tag will be performed , then the link tag comes and overrides 
            the code in the style tag

            -if link tag comes before style tag:
                -code in external css file will be performed
                -then code in style tag will override it
        Example:
            styles.css:
                h2{
                    color: tomato;
                    color: gray;
                }
            index.html:
                <link rel="stylesheet" href="style.css">

                <body>
                    <h2>Ahmed</h2>
                </body>                    
                
            -h2 will be gray because it comes last(after tomato)
            
        Example:
            <h2 style="color: tomato; color:aqua;">Ahmed</h2>

            -h2 will be aqua because it comes after tomato

        -Note:
            -this sequence is in css styling only
            -sequence will not be applied on repeated html attributes
            Example:
                 <h2 style="background-color: tomato;" width="200" width="400">Ahmed</h2>
                 -width = 200 will be applied only

    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    what is css:
        -CSS(Cascading Style Sheet)
        -cascading means: متسلسل/مترابط
        -style : decoration
        -sheet : means html code

        cascading:
            -means that when we write style for h2(for example) , it will be applied on all h2 elements(مترابط)

            example:
                h2{
                    color:blue;
                    background-color;
                    text-align : center;
                }

                -h2/p/...... is called  selector
    
        Properties:
            -text-align : center  :
                -to get text in the center of the element
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    Classes:
        -The .class selector selects elements with a specific class attribute.

        -To select elements with a specific class, write a period (.) character, followed by the name of the class.

        -You can also specify that only specific HTML elements should be affected by a class. To do this, start with the element name, then write the period (.) character, followed by the name of the class (look at Example 1 below).
        example1:
            css:
                p.center {
                    text-align: center;
                    color: red;
                }
            html:
                <h1 class="center">This heading will not be affected</h1>
                <p class="center">This paragraph will be red and center-aligned.</p>

            -h1 will not be affected
            -only p will be affected


        example:
            index.html:
                <p class="vip">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, cum.</p>
                <p class="vip">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, cum.</p>
                <p class="vip">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, cum.</p>
                <p class="vip">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, cum.</p>
                
            style.css:
                .vip{
                    color: tomato;
                    background-color: gray;
                }
        
        -element can take multiple classes
        Example:
            index.html:
                <h2 class="vip center">Ahmed</h2>
            style.css:                
                .vip{
                    color: tomato;
                    background-color: gray;
                }

                .center{
                    text-align: center;
                }

        -each class should be specific and readable:
        Example:
            style.css:
                .danger{
                    color: tomato;
                    background-color: gray;
                }

                .center{
                    text-align: center;
                }

                .bg-dark{
                    background-color: black;
                }
        
        Example:
            style.css:
                .one{
                    background-color: yellow;
                }

                .two{
                    background-color: red;
                }

                <h2 class="two one">Ahmed</h2>

                -the last thing in css will work
                -so two will work(as it is the last in css)
                -h2 background-color will be red 

        -class names has rules:
            -names shouldn't contain spaces(.danger)
            -names shouldn't contain reserved words (body, html, ....)
            -names shouldn't start with numbers or symbols
            -if names consists of multiple parts , seperate between them with dash(bg-dark)
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    
    Nested Selectors:
        -selector inside selector
        Example:
            css:
                .member img{
                    width:100%;
                }
            html:
                <div class="member">
                    <h2>hello</h2>
                    <img src="images/one.png" alt="">
                </div>
            -select images inside member 

            

    Grouping Selectors:
        -to group multiple selectors with common styles

        example:
            h3,h4{
                color: red;
            }
        example:
            .x,.y{
                color: red;
            }
        example:
            h2, .y{
                color:blue;
            }
            
-->

