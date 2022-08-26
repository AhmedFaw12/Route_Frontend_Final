const imgs = document.querySelectorAll(".item img");//nodeList
const lightBoxContainer = document.getElementById("lightBoxContainer");
const lightBoxItem = document.getElementById("lightBoxItem");

console.log(lightBoxItem);
for(let i = 0; i < imgs.length; i++){
    imgs[i].addEventListener("click", function(eventInfo){
        var imgSrc = eventInfo.target.getAttribute("src");
        //console.log(imgSrc);
        lightBoxItem.style.backgroundImage = `url(${imgSrc})`;
        lightBoxContainer.style.display = "flex";
    });
}


