<!-- 
Example to make link active and change its color when active:
    html:
        //code in jquery example
    css:
        .navbar-dark .navbar-nav .nav-item .active {
            font-weight: 900 !important;
            color: #ff206e !important;
        }
    js:
        $(".nav-link").click(function (eventInfo) {
            let sectionId = $(eventInfo.target).attr("href");
            let sectionOffset = $(sectionId).offset().top;
           
            $("li a").removeClass("active");
            $(this).addClass("active"); 
            
            $('html, body').animate({ scrollTop: sectionOffset }, 1000);
        });
    
-->