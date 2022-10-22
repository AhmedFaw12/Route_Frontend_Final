$(document).ready(()=>{
    /**********************************Toggle sideBar*************************************** */
    function openSideBar(){
        let sideBarWidth = $("#sideBar").innerWidth();
        let sideBarLeft = $("#sideBar").css("left");

        if(sideBarLeft != '0px'){
            $("#sideBar").animate({left:`0px`},500);
            $(this).animate({left:`+=${sideBarWidth}`}, 500);
        }
    }

    function closeSideBar(){
        let sideBarWidth = $("#sideBar").innerWidth();
        let sideBarLeft = $("#sideBar").css("left");
        
        if(sideBarLeft == '0px'){
            $("#sideBar").animate({left:`-${sideBarWidth}px`},500);
            $("#openSideBarBtn").animate({left:`0px`}, 500);
        }
    }


    $("#openSideBarBtn").click(openSideBar);
    $("#closeBtn").click(closeSideBar);

    /**********************************end of Toggle sideBar**************************** */


    /*********************************Smooth Scroll ***********************************/
    $(".link").click(function(){
        let sectionId = $(this).find("a").attr("href");
        let sectionOffset = $(sectionId).offset().top - 100;
        console.log(sectionId, sectionOffset);
        $("html,body").animate({scrollTop:sectionOffset},1000);
    });

    /*********************************end of Smooth Scroll ***********************************/


    /************************************Details ******************************************** */
    $(".details-body").eq(0).css("display","block");

    function toggleDetails(){
        let allDivs = $(".details-body");
        
        let currentDiv = $(this).next();
        currentDiv.slideToggle(500);

        allDivs.not(currentDiv).slideUp(500);
    }

    $(".details-item h2").click(toggleDetails);
    /************************************end of Details ***************************** */


    /************************************Duration Countdown************************************ */
    function countDown(){
        let now = new Date();
        
        /***************these are dummy data to make program works all the time*************** */
        let nowMonth = now.getMonth();
        let nowYear = now.getFullYear();
        let nowDay = now.getDate();
        
        let eventDate = new Date(nowYear,nowMonth,nowDay+2);
        /***************end of dummy data*************** */


        // let eventDate = new Date("2022-10-22 10:10:00");
    
        let currentTime = now.getTime();
        let eventTime = eventDate.getTime();
        
        let remainingTime = eventTime - currentTime;

        if(remainingTime >= 0){
            let s = Math.floor(remainingTime/1000);
            let m = Math.floor(s/60) ;
            let h = Math.floor(m/60) ;
            let d = Math.floor(h/24) ;
        
            h %= 24;
            m %= 60;
            s %= 60;
        
        
            h = (h < 10) ? "0" + h : h;
            m = (m < 10) ? "0" + m : m;
            s = (s < 10) ? "0" + s : s;
        
            
            $("#days").html(`${d} D`);
            $("#hours").html(`${h} H`);
            $("#minutes").html(`${m} M`);
            $("#seconds").html(`${s} S`);
        }else{
            $("#days").html(`0 D`);
            $("#hours").html(`00 H`);
            $("#minutes").html(`00 M`);
            $("#seconds").html(`00 S`);
        }


        setTimeout(countDown, 1000);
        
    }

    countDown();

    /************************************ end of Duration Countdown************************ */


    /*********************************Textarea ***********************************/
    let max = 100;
    $("#maxCharacters").text(max);

    $("#message").on("keyup",function(){
        console.log($(this).val().length);
        let currentLength = $(this).val().length;
        let remaining = max - currentLength;

        if(remaining <= 0 ){
            $("#maxCharacters").text("your available character finished");
        }else{
            $("#maxCharacters").text(remaining);
        }
    });
    /*********************************end of Textarea ***********************************/

});


















