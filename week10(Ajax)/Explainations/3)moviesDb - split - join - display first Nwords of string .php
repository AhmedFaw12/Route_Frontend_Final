<!-- 
MoviesDB:
    -we want to deal with real api
    -there is famous website called TMDB(The Movie DataBase)
    -it is the big database for movies (has information about movies)
    -all websites uses tmdb apis
    -tmdb apis are with money , but free for developers

    Steps to get tmdb api:
        -make account and login
        -settings
        -then api
        -it gives me API KEY(for authentication)
        -we will use API kEY to get api data
        -tmdb is not here for developer
        -tmdb made another website called(developers.themoviedb.org) for the developers to get api data
        -developers.themoviedb.org has documentation for its apis
        -it has many apis for many subjects

        my account on themoviedb:
            username : ahmedFawzy
            password : allahakbar1

            api_key :972842c9cd57185e1643b0cf6b0205aa

        -for example:
            -we want to get trending movies api:
                -go to developers 
                -go to trending 
                -we want to get trending movies only in this week
                api : https://api.themoviedb.org/3/trending/movie/day?api_key=972842c9cd57185e1643b0cf6b0205aa

                -this api returns object that contain array of results
                -so we will get these results 

                -we want to get image of each movies , but the result has not the full path of the image:
                    -to get full path
                    -search for images and it will get me the first part of the path and concatinate it with the other half

                -we want to display the description(overview) for each movie , but we want to get first 15 words only of the description
                -so we will use split to convert string to array 
                -then use slice to get first 15 elements only of the array
                -then use join to convert array to string 

            index.html:
                <div class="container py-5">
                    <div id="rowData" class="row">
                        
                    </div>
                </div>
            style.css:
                body{
                    font-family: "segoe ui light";
                    background-color: #313131;
                    color: #fff;
                }

                .vote{
                    top: 0;
                    right: 20px;
                }

            main.js:
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
------------------------------------------------------------------------------------------------------------------------------------------------------------------------
split() string method:
    The split() method splits a string into an array of substrings.

    -The split() method returns the new array.

    -The split() method does not change the original string.

    -If (" ") is used as separator, the string is split between words.

    Syntax
        string.split(separator, limit)
    Parameters
        separator:
            -Optional.
            -A string or regular expression to use for splitting.
            -If omitted, an array(consist of one element) with the original string is returned.

    Return Value:
        -Array:	An array containing the splitted values

    
------------------------------------------------------------------------------------------------------------------------------------------------------------------------

join() array method:
    -The join() method converts array to string.

    -The join() method does not change the original array.

    -Any separator can be specified. The default is comma (,).

    Syntax
        array.join(separator)
    Parameters
        separator:	
            Optional.
            The separator to be used.
            Default is a comma.
    Return Value
        A string.	The array values, separated by the specified separator.


------------------------------------------------------------------------------------------------------------------------------------------------------------------------

display first N-words of a string:
    -we want to display the description(overview) for each movie , but we want to get first 15 words only of the description
    -so we will use split to convert string to array 
    -then use slice to get first 15 elements only of the array
    -then use join to convert array to string 

    let myString = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni beatae!"

    let result = myString.split(" ").slice(0,15).join(" ");
-->

