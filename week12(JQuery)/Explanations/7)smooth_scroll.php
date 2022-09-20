<!-- 
smooth scroll:
    Example:
        -we want when clicking on links in navbar , it will go to the certain section with smooth
        
        html:
            //code

        js:
            $(".nav-link").click(function(eventInfo){
                let sectionId = $(eventInfo.target).attr("href");
                let sectionOffset =$(sectionId).offset().top;
                
                $('html, body').animate({scrollTop:sectionOffset}, 1000);
            });

    -scroll-behaviour property:
        -css has property scroll-behavior: smooth; 
        -it can do smooth scroll, but it is not supported in multiple browsers
        -so we used jquery code
        
-->