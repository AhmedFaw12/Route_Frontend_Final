<!-- 
Font_Awesome:
    -it is a huge library of icons (as fonts)
    -some of them are free and some are for money
    -we can give these icons color and background

    How to download and install Font_awesome:
        -go to fontawesome.com
        -click start from navbar
        -download free for web
        -unzip fontawesome folder
        -we can deal with font-awesome by(css or sass, or, less, or svg , or js)
        -we will deal with font-awesome by css
        -go to fontawesom css folder :
            -it contains multiple folders
            -it has brand icons :icons for companies(facebook, twitter, ..)
            -it has regular icons : it contains normal icons
            ....
            -we will only take (all.min.css) because it contains all icons 
            -then put all.min.css inside our css folder

            -this all.min.css contains classes to deal with icons , but we didn't get icons themselves
        -to get icons:
            take webfonts folder(which contains all icons) and put it next to our css folder(that contains all.min.css)

            -note:
                -webfonts must be next to a css folder that contains all.min.css

        -then link to all.min.css in the head tag:
            <link rel="stylesheet" href="css/all.min.css">
        
    ------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    -You place Font Awesome icons by using the prefix fa and the icon's name.
    
    -Font Awesome is designed to be used with inline elements. The <i> and <span> elements are widely used for icons.

    -Also note that if you change the font-size or color of the icon's container, the icon changes. Same things goes for shadow, and anything else that gets inherited using CSS.

    <i></i> tag:
        -to make text italic
        -can be used to hold icons
        example:
            <i>Hello</i>
        example:
            <i class="fa-brands fa-facebook"></i> 

    
    -Advantages of icons:
        -it is treated as font
        -we can increase icon size using font-size without any loss/decrease of resolution

        -we can give it font-size
        -we can give it background-color
        -we can give it color
        -we can give it padding
        -we can give it border-radius
        
        example:
            index.html:
                <i class="test fa-brands fa-facebook"></i>
            style.css:
            
                .test{
                    font-size: 40px;
                    background-color: #09c;
                    color: tomato;
                    padding: 40px;
                    border-radius: 50%;
                }
    ------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    Fontawesome Classes:
        -these classes are in all.min.css

        Sizing icons:
            literal sizing:
                fa-1x	1em
                fa-2x	2em
                fa-3x	3em
                fa-4x	4em
                fa-5x	5em
                fa-6x	6em
                fa-7x	7em
                fa-8x	8em
                fa-9x	9em
                fa-10x	10em
        ----------------------------------------------------------------------------------------------------------------------------------------------------------------
        Fixed width icons:
            -Font Awesome icons are designed on grid and share a consistent height. But they vary in width depending on how wide or narrow each symbol is. If you prefer to work with icons that have a consistent width, adding fa-fw will render each icon using the same width.

            fa-fw : fontawesome fixed width , gives icons same width , so when we used icons in the list items , all icons will have same width


        ----------------------------------------------------------------------------------------------------------------------------------------------------------------

        icons in a list:
            -we can replace dots in the ul lists , with icons , to do this use:
                -fa-ul : 
                    -we give ul ,class fa-ul
                    -its css :
                        list-style-type:none
                -fa-li :
                    -we make li that contains span which contains i (has the icon)
                    -we give every span ,class fa-li
                    -Font Awesome is designed to be used with inline elements(i, span)
                    

                -example:
                    <ul class="fa-ul">
                        <li ><span class="fa-li"><i class="fab fa-facebook"></i></span>hello</li>
                        <li ><span class="fa-li"><i class="fab fa-twitter"></i></span>hello</li>
                        <li ><span class="fa-li"><i class="fab fa-instagram"></i></span>hello</li>
                        <li ><span class="fa-li"><i class="fab fa-apple"></i></span>hello</li>
                    </ul>
                
        ----------------------------------------------------------------------------------------------------------------------------------------------------------------

        animating icons:
            fa-spin:	
                -Makes an icon spin 360° clockwise
            fa-spin-pulse:	
                -Makes an icon spin 360° clockwise in 8 incremental steps
            fa-spin-reverse:	
                -When used in conjunction with fa-spin or fa-spin-pulse, makes an icon spin counter-clockwise.
            

            -Use the fa-spin class to get any icon to rotate, and use fa-spin-pulse to have it rotate with eight steps. This works especially well with fa-spinner (it is an doted icon)

            example:
                <i class="fas fa-spin-pulse fa-spinner fa-7x"></i>
        ----------------------------------------------------------------------------------------------------------------------------------------------------------------
        border:
            fa-border:
                -Creates a border with border-radius and padding applied around an icons
                example:
                    <i class="fab fa-twitter fa-border fa-10x"></i>

-->                 