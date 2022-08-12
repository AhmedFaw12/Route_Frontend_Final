<!--  
font:
    properties:
        font-size:
            -The font-size property sets the size of the text.    
            -If you do not specify a font size, the default size for normal text, like paragraphs, is 16px (16px=1em).

            -font is made with something called vector which allows to enlarge/reduce font and keep up the good resolution
            
            Set Font Size With Pixels:
                example:   
                p{
                    font-size:20px;
                }
            Set Font Size With percent:
                -font percent means relative to its default value(16px=1em)
                example:
                    p{
                        font-size:200% ; //200%= 16*2=32
                    }
        --------------------------------------------------------------------------------------------------------------------------------------------------------------
        font-weight:
            The font-weight property sets how thick or thin characters in text should be displayed.

            -font-weight is unitless(we don't write units)

            Values:
                normal:     Defines normal characters. This is default	
                bold:       Defines thick characters	
                bolder:     Defines thicker characters	
                lighter:    Defines lighter characters	
                100->900:    Defines from thin to thick characters. 400 is the same as
                            normal, and 700 is the same as bold
            
            -there are some fonts that comes light by default:
                however we applied font-weight ,it will never gets bolder(or maybe gets bolder by very small value)
             
            -there are some fonts that comes bold by default:
                however we applied font-weight ,it will never gets lighter(or maybe gets lighter by very small value)
             
        --------------------------------------------------------------------------------------------------------------------------------------------------------------

        -font-style:
            The font-style property specifies the font style for a text.
            values:
                normal:  The browser displays a normal font style. This is default	
                italic:  The browser displays an italic font style	
                oblique: The browser displays an oblique font style(similar to italic)
            Example:
                font-style:italic;
        --------------------------------------------------------------------------------------------------------------------------------------------------------------

        -font-family:
            -The font-family property specifies the font for an element.

            -The font-family property can hold several font names as a "fallback" system. If the browser does not support the first font, it tries the next font.
            
            -There are two types of font family names:

                family-name :   The name of a font-family, like "times", "courier", "arial", etc.

                generic-family : The name of a generic-family, like "serif", "sans-serif", "cursive", "fantasy", "monospace".
                
            -Start with the font you want, and always end with a generic family, to let the browser pick a similar font in the generic family, if no other fonts are available.

            -Note: Separate each value with a comma.

            -Note: If a font name contains white-space, it must be quoted. Single quotes must be used when using the "style" attribute in HTML.
                Example:
                    font-family: 'Times New Roman', Times, serif;

            -search for css safe fonts:
                -these are fonts that exists on all systems
        --------------------------------------------------------------------------------------------------------------------------------------------------------------
        font-variant:
            -In a small-caps font, all lowercase letters are converted to uppercase letters. However, the converted uppercase letters appears in a smaller font size than the original uppercase letters in the text.

            values:
                normal:     The browser displays a normal font. This is default	
                small-caps:	The browser displays a small-caps font
        
    ----------------------------------------------------------------------------------------------------------------------------------------------------------------------

    font property Shorthand:
        The font property is a shorthand property for:
            font-style
            font-variant
            font-weight
            font-size/line-height
            font-family

            -The font-size and font-family values are required. If one of the other values is missing, their default value are used.

            -Note: The line-height property sets the space between lines.
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Google Fonts:
    -these are fonts that we will include in our website
    -when the client open our website , google will download this font on the client computer and cache(save temporary)(ram) it in the browser
    -so the font will appear to the client

    Steps to Include google Font:
        -go to fonts.google.com
        -select your font and choose its style

        -sidebar will appear that contains 3 links and css font-family rule/code:
            -these 3links gets the font from server of google and cache it at client browser
            -the font is a file with extension (ttf, utf, wtf)
            -these links makes https request to google server to get the font

            -css font-family rule/code to use the font 


    Example:
        index.html:
            <head>
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">

                <link rel="stylesheet" href="style.css">
            </head>
            <body>  
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum eligendi excepturi repudiandae nisi fugit harum dolorum, autem minima a minus laudantium, fugiat totam ullam praesentium dicta! Iusto voluptates recusandae iure!</p>
            </body>
        style.css:
            p{
                font-family: 'Indie Flower', cursive;
            }
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

            
-->