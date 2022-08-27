const imgs =Array.from(document.querySelectorAll(".item img")) ;//nodeList==>array
const lightBoxContainer = document.getElementById("lightBoxContainer");
const lightBoxItem = document.getElementById("lightBoxItem");
const nextBtn = document.getElementById("next");
const prevBtn = document.getElementById("prev");
const closeBtn = document.getElementById("close");

var currentIndex = 0;

for(var i = 0; i < imgs.length; i++){
    imgs[i].addEventListener("click", function(eventInfo){
        var imgSrc = eventInfo.target.getAttribute("src");
        currentIndex = imgs.indexOf(eventInfo.target); 
        
        lightBoxItem.style.backgroundImage = `url(${imgSrc})`;
        lightBoxContainer.style.display = "flex";
    });
}

function nextSlide(){
    currentIndex++;
    if(currentIndex == imgs.length){
        currentIndex = 0;
    }
    var imgSrc = imgs[currentIndex].getAttribute("src");

    lightBoxItem.style.backgroundImage = `url(${imgSrc})`;
}


function prevSlide(){
    currentIndex--;
    if(currentIndex < 0){
        currentIndex = imgs.length - 1;
    }
    var imgSrc = imgs[currentIndex].getAttribute("src");
    lightBoxItem.style.backgroundImage = `url(${imgSrc})`;
}


function close(){
    lightBoxContainer.style.display = "none";
}

nextBtn.addEventListener("click", nextSlide);
prevBtn.addEventListener("click", prevSlide);
closeBtn.addEventListener("click", close);

document.body.addEventListener("click", function(eventInfo){
    if(eventInfo.target == lightBoxContainer){
        close();
    }
});


document.addEventListener("keydown", function(eventInfo){    
    if(eventInfo.key == "ArrowRight"){
        nextSlide();
    }else if(eventInfo.key == "ArrowLeft"){
        prevSlide();
    }else if(eventInfo.key == "Escape"){
        close();
    }
});









