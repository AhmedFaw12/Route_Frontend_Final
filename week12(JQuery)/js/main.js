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
    // $(window).scrollTop(0);
    $("html,body").animate({scrollTop:0}, 1000);
});
