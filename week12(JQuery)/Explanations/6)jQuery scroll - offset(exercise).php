<!-- 
jQuery Scroll:
    scroll method:
        -there is an event called scroll
        -The scroll event occurs when the user scrolls in the specified element.

        -The scroll event works for all scrollable elements and the window object (browser window).

        -The scroll() method triggers the scroll event, or attaches a function to run when a scroll event occurs.
        
        Example scroll:
            js:
                $(window).scroll(function(){
                  console.log("hello");
                });

        -scroll method is deprictated use on() method:
            -The on() method attaches one or more event handlers for the selected elements and child elements.
            
            -syntax:
                $(selector).on(event,childSelector,data,function,map)

            Example:
                $(window).on("scroll" , function(){
                  console.log("hello");
                });
    
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------
    
    scrollTop() method:
        -The scrollTop() method sets or returns the vertical scrollbar position for the selected elements.

        -Tip: When the scrollbar is on the top, the position is 0.

        Example on get scroll vertical position:
            $(window).on("scroll" , function(){
                let wScroll = $(window).scrollTop();
                console.log(wScroll);
            });

        Example/syntax on set scroll vertical position:
            -$(selector).scrollTop(position) 
            
            -$(selector).scrollTop(340) 
            -position is in pixels

    --------------------------------------------------------------------------------------------------------------------------------------------------------------------        
    scrollLeft() method:
        -The scrollLeft() method sets or returns the horizontal scrollbar position for the selected elements.

        -Tip: When the scrollbar is on the far left side, the position is 0.

        Syntax"
            Return horizontal scrollbar position:
                $(selector).scrollLeft()

            Set horizontal scrollbar position:
                $(selector).scrollLeft(position)
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------
    
    offset() Method:
        
        -it sets or returns the coordinates(vertically and horizontally) for the selected element relative to the document

        -The offset() method set or returns the offset coordinates for the selected elements, relative to the document.
        
        -When used to return the offset:
            This method returns the offset coordinates of the FIRST matched element. It returns an object with 2 properties; the top and left positions in pixels.

        When used to set the offset:
            This method sets the offset coordinates of ALL matched elements.


            
        Syntax:
            Return the offset coordinates:
                $(selector).offset()

            Set the offset coordinates:
                $(selector).offset({top:value,left:value})

        Example:  
            js:
                let aboutOffset = $("#about").offset().top;

    --------------------------------------------------------------------------------------------------------------------------------------------------------------------
    
    -Example:
        -we want when scrolling to certain height(about section or above it a little) , navbar backgroundColor is changed to another color

        -and when we go up again , background color return to its original

        -also we want to make a button , that appear when reach certain height(about section or above it a little) , and disappear when we go up again
        -when we click on this button , it will to the top of the page

        -when making position fixed , always check on z-index
        -at first button is disappeared

        html:
            //code found in jQuery Example folder
            
            <button id="btnUp" class="btn p-3 text-white bg-main rounded-circle shadow-lg">
                <i class="fas fa-arrow-alt-circle-up"></i>
            </button>
        css:
            //code found jQuery Example folder
            #main-nav
            {
                transition: background-color 2s , padding 0.5s;
            }


            #btnUp
            {
                position: fixed;
                bottom: 30px;
                right: 30px;
                z-index: 99999;
                display: none;
            }
        js:
            let aboutOffset = $("#about").offset().top;

            $(window).on("scroll" , function(){
                let wScroll = $(window).scrollTop();
                
                if(wScroll > aboutOffset - 50){
                    $("#main-nav").css("backgroundColor", "rgba(0,0,0,0.5)");
                    $("#main-nav").css("padding", "0 50px");
                    
                    $("#btnUp").fadeIn(500);
                }else{   
                    $("#main-nav").css("backgroundColor", "transparent");
                    $("#main-nav").css("padding", "0 30px");

                    $("#btnUp").fadeOut(500);
                }    
            });


            $("#btnUp").click(function(){
                //$(window).scrollTop(0);  //bad scrolling without smoothing
                $("html,body").animate({scrollTop:0}, 1000); //smoothing scroll
            })

            -we used animate to make smoothing
            -animate() don't work on window because window is the browser

            -we used both html and body:
                -The browsers Firefox & IE utilize the html portion of this selector(all my webpage)

                -Browsers in the "webkit class" eg: Safari and Chrome respond to the body(all my webpage).
-->