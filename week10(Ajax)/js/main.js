var myHttp = new XMLHttpRequest();
var allMovies;
myHttp.open("GET", "https://api.themoviedb.org/3/trending/movie/day?api_key=972842c9cd57185e1643b0cf6b0205aa");//connection establishment
myHttp.send();



myHttp.addEventListener("readystatechange", function(){
    
    if(myHttp.readyState == 4 && myHttp.status == 200){
        allMovies = JSON.parse(myHttp.response).results;
        displayMovies();
    }
});

function displayMovies(){
    var divs = ``;
    for(var i = 0 ; i < allMovies.length; i++){
        divs += `
        <div class="col-md-3">
            <div class="post position-relative">
                <img src="https://image.tmdb.org/t/p/w500${allMovies[i].poster_path}" class="w-100" alt="">
                <h3>${allMovies[i].title}</h3>
                <p>${allMovies[i].overview.split(" ").slice(0,15).join(" ")}</p>
                <div class="vote bg-info p-2 fw-bolder position-absolute">${allMovies[i].vote_average}</div>
            </div>
        </div>`;
    }
    document.getElementById("rowData").innerHTML = divs;
}














