//loading screen
$(document).ready(function () {
  $("#loading").fadeOut(1000, function () {
    $("body").css("overflow", "auto");
  });

  //scroll - offset
  let aboutOffset = $("#about").offset().top;
  $(window).on("scroll", function () {
    let wScroll = $(window).scrollTop();

    if (wScroll > aboutOffset - 50) {
      $("#main-nav").css("backgroundColor", "rgba(0,0,0,0.5)");
      $("#main-nav").css("padding", "0 50px");

      $("#btnUp").fadeIn(500);
    } else {
      $("#main-nav").css("backgroundColor", "transparent");
      $("#main-nav").css("padding", "0 30px");

      $("#btnUp").fadeOut(500);
    }
  });


  $("#btnUp").click(function () {
    // $(window).scrollTop(0);
    $('html, body').animate({ scrollTop: 0 }, 1000);
  });


  //smooth scroll
  $(".nav-link").click(function (eventInfo) {
    let sectionId = $(eventInfo.target).attr("href");
    let sectionOffset = $(sectionId).offset().top;

    $('html, body').animate({ scrollTop: sectionOffset }, 1000);
  });


  // color Box 
  $("#toggleIcon").click(function () {

    let colorsBoxWidth = $("#colorsBox").innerWidth();

    let sideBarLeft = $("#sideBar").css("left");
    if (sideBarLeft == '0px') {
      $("#sideBar").animate({ left: `-${colorsBoxWidth}px` }, 1000);
    } else {
      $("#sideBar").animate({ left: "0px" }, 1000);
    }
  });


  const colorsArr = ["tomato", "#09c", "orange", "teal", "aqua", "lightgreen"];
  const colorBoxes = $(".color-box");

  for (let i = 0; i < colorBoxes.length; i++) {
    colorBoxes.eq(i).css("backgroundColor", colorsArr[i]);
  }

  $(".color-box").click(function (eventInfo) {
    let myColor = $(eventInfo.target).css("backgroundColor");
    $(".change").css("color", myColor);
  });
  
});


// window.onload = function(){
//   $("#loading").fadeOut(1000, function () {
//     $("body").css("overflow", "auto");
//   });

//   let myDate = new Date();
//   console.log(myDate);
// };