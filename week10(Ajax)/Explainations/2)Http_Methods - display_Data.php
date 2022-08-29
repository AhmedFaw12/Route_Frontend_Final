<!-- 
HTTP Methods:
    -GET : to get data from backend
    -POST: to send data to backend
    -PUT : update large data(most used )
    -PATCH : update partial data
    -DELETE : delete data from backend
    
Display Data:
    -response is returned as a string(like local Storage)
    -so we need to convert from string to array of objects/object using json.parse()

    Example:
        index.html:
            <div class="container">
                <div id="rowData" class="row">
                    
                </div>
            </div>

        main.js:
            var myHttp = new XMLHttpRequest();
            var allPosts;
            myHttp.open("GET", "https://jsonplaceholder.typicode.com/posts");//connection establishment
            myHttp.send();

            myHttp.addEventListener("readystatechange", function(){
                
                if(myHttp.readyState == 4 && myHttp.status == 200){
                    allPosts = JSON.parse(myHttp.response);
                    displayPosts();
                }
            });

            function displayPosts(){
                var divs = ``;
                for(var i = 0 ; i < allPosts.length; i++){
                    divs += `
                    <div class="col-md-3">
                        <div class="post">
                            <h3>${allPosts[i].title}</h3>
                            <p>${allPosts[i].body}</p>
                        </div>
                    </div>`;
                }
                document.getElementById("rowData").innerHTML = divs;
            }

        -we will get data from server using ajax(XMLHttpRequest object)
        -we will not get data until readyState == 4 and status == 200
        -then converting data from string to array of objects/object
        -then display posts 
-->
