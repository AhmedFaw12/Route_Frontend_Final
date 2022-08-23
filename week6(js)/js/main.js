var cartoona = "";

for(var i=0 ; i< 100; i++){
    cartoona += `
            <div class="col-md-3">
                <img src="images/1.jpg" class="w-100" alt="">
                <h2>web design</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem, accusamus?</p>
            </div>`;
}

document.getElementById("demo").innerHTML = cartoona;