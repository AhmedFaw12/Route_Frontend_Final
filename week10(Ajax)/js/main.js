const rowData = document.getElementById("rowData");
const allMovies = [];
const myHttp = new XMLHttpRequest();

const API_KEY = "972842c9cd57185e1643b0cf6b0205aa";
myHttp.open("GET", `https://api.themoviedb.org/3/trending/tv/week?api_key=${API_KEY}`);
myHttp.send();

myHttp.addEventListener("readystatechange", function(){
    if(myHttp.readyState == 4 && myHttp.status == 200){
        results = JSON.parse(myHttp.response).results;
        for(let i = 0 ; i < results.length; i++)
            allMovies.push(results[i]) ;
        displayMovies();
    }
});


function displayMovies(){
    let divs = ``;
    for(let i = 0 ; i < allMovies.length; i++){
        divs += `
        <div class="col-md-3">
            <div class="item position-relative">    
                <img src="https://image.tmdb.org/t/p/w500${allMovies[i].poster_path}" class="w-100" alt="">
                <h3>${allMovies[i].name}</h3>
                <p>${allMovies[i].overview.split(" ").slice(0,15).join(" ")}...</p>
                <div class="vote position-absolute bg-info">${allMovies[i].vote_average}</div>
            </div>
        </div>  
        `;
    }
    rowData.innerHTML = divs;
}