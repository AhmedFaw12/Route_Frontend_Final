<!-- 
Meta tags:
    -head tag carries information of our html page
    -these information is important for SEO(search engine optimization)
    -meta tag holds these information inside head tag
    
    -meta tag is self closing tag
    -meta tags types:
        
        1)<meta name="description" content="">
            -to write description about my website 
            -we write description in content attribute
            
            Example:
                <meta name="description" content="multipurpose template with responsive"> 
        
        2)<meta name="keywords" content="">

            -we write keywords , when user write any of these keywords in the browser , my website will appear for him
            -we put space between each keyword            

            Example:
                <meta name="keywords" content="webdesgin front-end ui template">

        3)<meta name="author" content="">
            -to tell who is the author of website
            Example:
                <meta name="author" content="Ahmed Fawzy">

        4)<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

            -when we write arabic characters, the arabic characters will not appear
            -strange characters will appear instead
            -old browsers will not support arabic/(any language other than english) characters
            -modern browsers have no problems in arabic, english ,....

            -so to solve this problem in old browser
            -we will add meta charset (الترميز)
            charset=UTF-8 : utf-8 global charset that support all languages characters (arabic, chinese,....)

        5) <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
            -although we applied media queries ,our design will still be curropted on small screen(like mobile)

            -we need to add meta viewport tag
            width= device-width   :width of website will be equal to decive(mobile,....) width

            -initial-scale=1.0 : 
                -initial scale is zoom of my website
                -it means if device has large zoom, small zoom
                -zoom of website will be 100% of device zoom

            -so my website will become responsive

        6)<title>Learning Html</title>
            -it is one of meta info
            -title tag 

        7)<!DOCTYPE>

            -tell the old browsers that we used html5 in our code
            -it is for old browsers that don't support html5
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

-favicon:
    -to put icon before title of my page

    Example:
        <link rel="icon" href="images/client-1.png">

-->