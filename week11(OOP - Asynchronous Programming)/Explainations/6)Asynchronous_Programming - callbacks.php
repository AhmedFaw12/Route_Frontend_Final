<!-- 
Asynchronous Programming:
    -we have two types of programming:
        -synchronous code:
            -synchronous(متزامن)
            -it is the normal code we write that we know when to start and finish. 
            -we know its duration(time frame)
        -Asynchronous code(non blocking):
            -we don't know its time frame(we don't know when to start or finish)
            -js collects all synchronous code and finish it first , then go to asynchronous code

            -Asynchronous code is called non blocking
            -js is non blocking(nothing stop it)

        Example:
            function getPizza(){
                let pizzaList = [];
                let myHttp = new XMLHttpRequest();
                myHttp.open("GET", "https://forkify-api.herokuapp.com/api/search?q=pizza");
                myHttp.send();

                myHttp.addEventListener("readystatechange", function(){
                    if(myHttp.readyState == 4 && myHttp.status == 200){
                        pizzaList = JSON.parse(myHttp.response).recipes;
                        console.log("Pizza");
                        console.log(pizzaList);
                    }
                });
            }

            console.log("hello1");//synchronous
            getPizza();//asynchronous
            console.log("hello2");//synchronous

            -output:
                -hello1
                -hello2
                -pizza

            -since getPizza is asynchronous(because it uses XMLHttpRequest which has open and send methods) , js will finish synchronous code then go to asynchronous 
    ----------------------------------------------------------------------------------------------------------------------------------------------------------------
    
    -Example on multiple asynchronous code:
        function getSalad(){
            let recipeList = [];
            let myHttp = new XMLHttpRequest();
            myHttp.open("GET", "https://forkify-api.herokuapp.com/api/search?q=salad");
            myHttp.send();

            myHttp.addEventListener("readystatechange", function(){
                if(myHttp.readyState == 4 && myHttp.status == 200){
                    recipeList = JSON.parse(myHttp.response).recipes;
                    console.log("Salad");
                    console.log(recipeList);
                }
            });
        }
        function getPasta(){
            let recipeList = [];
            let myHttp = new XMLHttpRequest();
            myHttp.open("GET", "https://forkify-api.herokuapp.com/api/search?q=pasta");
            myHttp.send();

            myHttp.addEventListener("readystatechange", function(){
                if(myHttp.readyState == 4 && myHttp.status == 200){
                    recipeList = JSON.parse(myHttp.response).recipes;
                    console.log("Pasta");
                    console.log(recipeList);
                }
            });
        }
        function getPizza(){
            let pizzaList = [];
            let myHttp = new XMLHttpRequest();
            myHttp.open("GET", "https://forkify-api.herokuapp.com/api/search?q=pizza");
            myHttp.send();

            myHttp.addEventListener("readystatechange", function(){
                if(myHttp.readyState == 4 && myHttp.status == 200){
                    pizzaList = JSON.parse(myHttp.response).recipes;
                    console.log("Pizza");
                    console.log(pizzaList);
                }
            });
        }

        getSalad();//asynchronous
        getPizza();//asynchronous
        getPasta();//asynchronous


        -when we have multiple asynchronous code:
        -whatever finishes first , will be printed

        -so every time we make console.log , we may have new result:
            salad ==> pasta ==>pizza
            pasta ==> salad ==>pizza
            pizza ==> salad ==>pasta
            pizza ==> salad ==>pasta
            ....

        note: url is called endpoint : 
            "https://forkify-api.herokuapp.com/api/search?q=pizza"
        
------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Callback functions:
    -Sometimes you would like to have better control over when to execute a function.

    -A callback is a function passed as an argument to another function.

    How to pass function as a parameter:
        -using function name:
            -function one(callback){
                console.log("one");
                callback();
            }

            function two(){
                console.log("two");
            }

            one(two);
        -using anonymous function and call function inside it:
            function one(callback){
                console.log("one");
                callback();
            }

            function two(){
                console.log("two");
            }

            one(function(){ two()});

   -we usually use callbacks with asynchronous codes to control order of asynchronous codes
   
------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Controlling order/sequence of multiple asynchronous codes:
    -we will use callbacks
    Example:
        function getSalad(callback){
            let recipeList = [];
            let myHttp = new XMLHttpRequest();
            myHttp.open("GET", "https://forkify-api.herokuapp.com/api/search?q=salad");
            myHttp.send();

            myHttp.addEventListener("readystatechange", function(){
                if(myHttp.readyState == 4 && myHttp.status == 200){
                    recipeList = JSON.parse(myHttp.response).recipes;
                    console.log("Salad");
                    console.log(recipeList);
                    callback();
                }
            });
        }
        function getPasta(callback){
            let recipeList = [];
            let myHttp = new XMLHttpRequest();
            myHttp.open("GET", "https://forkify-api.herokuapp.com/api/search?q=pasta");
            myHttp.send();

            myHttp.addEventListener("readystatechange", function(){
                if(myHttp.readyState == 4 && myHttp.status == 200){
                    recipeList = JSON.parse(myHttp.response).recipes;
                    console.log("Pasta");
                    console.log(recipeList);
                    callback();
                }
            });
        }
        function getPizza(callback){
            let pizzaList = [];
            let myHttp = new XMLHttpRequest();
            myHttp.open("GET", "https://forkify-api.herokuapp.com/api/search?q=pizza");
            myHttp.send();

            myHttp.addEventListener("readystatechange", function(){
                if(myHttp.readyState == 4 && myHttp.status == 200){
                    pizzaList = JSON.parse(myHttp.response).recipes;
                    console.log("Pizza");
                    console.log(pizzaList);
                    callback();
                }
            });
        }

        function endMenu(){
            console.log("Belhanna");
        }

        getSalad(function(){
            getPizza(function(){
                getPasta(function(){
                    endMenu();
                });
            });
        });

        Explanation:
            -we will use callbacks to control order of multiple asynchronous codes
            -we want to print salad then pizza then pasta
            -so we will call salad() then pass pizza() as a parameter to salad()
            -then in salad function, we will call pizza() after we finish salad() code
            -and so on ....

            -this is called callback hell:
                getSalad(function(){
                    getPizza(function(){
                        getPasta(function(){
                            endMenu();
                        });
                    });
                });
                
                -because it is very complicated
                -some people also call it Pyramid DoM (هرم الهلاك)

-->