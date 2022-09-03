// let test = document.querySelector(".test");


$("#myBtn").click(function(){
    //chain
    $(".test").slideUp(1000).show(1000).hide(1000).slideDown(1000);
});
