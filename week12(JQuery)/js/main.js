

// $("#demo").next().css("borderColor", "green");//ok3
// $("#demo").nextAll().css("borderColor", "green");//ok3, ok4 ,ok5
// $("#demo").prev().css("borderColor", "green");//ok2
// $("#demo").prevAll().css("borderColor", "green");//ok1, ok2
// $("#demo").siblings().css("borderColor", "green");//ok1, ok2, ok3, ok4 , ok5
// $("#demo").nextUntil("test").css("borderColor", "green");//ok3


// $("#demo").parent().css("borderColor", "green");//p
// $("#demo").parents().css("borderColor", "green");//p, h1, div, section, body, html
// $("#demo").parentsUntil("section").css("borderColor", "green");//p, h1, div


// $("#demo").children().css("borderColor", "green");//div
// $("#demo").find("span").css("borderColor", "green");//all spans which are children(direct + indirect) to the demo
// $("#demo").find("*").css("borderColor", "green");//div, h1, p, all spans


$("span").eq(0).css("borderColor", "green"); //get first span ok1
$("span").eq(1).css("borderColor", "green");//ok2
$("span").eq(2).css("borderColor", "green"); // special

$("span").not(".test").css("borderColor", "green"); // ok1 ,ok2, special , ok3, ok5




