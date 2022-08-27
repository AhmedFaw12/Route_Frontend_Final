const myContainer = document.querySelector(".myContainer");
const rocket = document.getElementById("rocket");
const bullet = document.getElementById("bullet");
const bulletVoice = document.getElementById("bulletVoice");

var myContainerLeft = 0;
var bulletBottom = 0;
document.addEventListener("keydown", function(eventInfo){
    if(eventInfo.key == "ArrowRight"){
        myContainerLeft += 50;
        console.log(innerWidth, myContainerLeft);
        if(myContainerLeft >= innerWidth){
            myContainerLeft = innerWidth - 50;
        }
        myContainer.style.left = myContainerLeft +"px";
    }
    else if(eventInfo.key  == "ArrowLeft"){
        myContainerLeft -= 50;
        if(myContainerLeft < 0){
            myContainerLeft = 0;
        }
        myContainer.style.left = myContainerLeft +"px";
    }else if(eventInfo.key == " "){
        bulletBottom += 150;
        
        if(bulletBottom > innerHeight){
            bulletBottom = -60;
        }
        bulletVoice.play();
        bullet.style.bottom = bulletBottom + "px";
    }
});