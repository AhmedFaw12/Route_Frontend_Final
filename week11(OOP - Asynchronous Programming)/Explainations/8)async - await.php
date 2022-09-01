<!-- 
async - await:

    -The keyword await before a function makes the function wait for a promise:
    -tell js to wait untill function(that return promise) finished
    -then executes the following functionss

    The await keyword can only be used inside an async function.s

    Example:
      function getSalad(){
            return new Promise(function(resolve){
                let recipeList = [];
                let myHttp = new XMLHttpRequest();
                myHttp.open("GET", "https://forkify-api.herokuapp.com/api/search?q=salad");
                myHttp.send();
            
                myHttp.addEventListener("readystatechange", function(){
                    if(myHttp.readyState == 4 && myHttp.status == 200){
                        recipeList = JSON.parse(myHttp.response).recipes;
                        console.log("Salad");
                        console.log(recipeList);
                        resolve();
                    }
                });
            });
        }

        function getPasta(){
            return new Promise(function(resolve){
                let recipeList = [];
                let myHttp = new XMLHttpRequest();
                myHttp.open("GET", "https://forkify-api.herokuapp.com/api/search?q=pasta");
                myHttp.send();
            
                myHttp.addEventListener("readystatechange", function(){
                    if(myHttp.readyState == 4 && myHttp.status == 200){
                        recipeList = JSON.parse(myHttp.response).recipes;
                        console.log("Pasta");
                        console.log(recipeList);
                        resolve();
                    }
                });
            });
        }
        function getPizza(){
            return new Promise(function(resolve){
                let pizzaList = [];
                let myHttp = new XMLHttpRequest();
                myHttp.open("GET", "https://forkify-api.herokuapp.com/api/search?q=pizza");
                myHttp.send();
            
                myHttp.addEventListener("readystatechange", function(){
                    if(myHttp.readyState == 4 && myHttp.status == 200){
                        pizzaList = JSON.parse(myHttp.response).recipes;
                        console.log("Pizza");
                        console.log(pizzaList);
                        resolve();
                    }
                });
            })
        }

        function endMenu(){
            console.log("Belhanna");
        }

        console.log("1");
        (async function printAll(){
            await getSalad();
            await getPasta();
            await getPizza();

            endMenu();
            console.log("hello");
        }()
        console.log("2");
        
        //output:
            1
            2
            salad 
            pasta 
            pizza 
            Belhanna 
            hello
-->