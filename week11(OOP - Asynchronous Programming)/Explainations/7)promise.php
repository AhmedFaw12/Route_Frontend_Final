<!-- 
Promise:
    -make callback functions more readable

    to make a promise:
        -make a function
        -then return new promise()
        -promise take a function as a parameter(which also can take callback function as a parameter)
        -we will write our function body inside this parameter function
        -then call callback at the end 

    -inorder to use then on a function , it must return promise object

    Example:
        function getSalad(){
            return new Promise(function(callback){
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
            });
        }
        function getPasta(){
            return new Promise(function(callback){
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
            });
        }
        function getPizza(){
            return new Promise(function(callback){
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
            })
        }

        function endMenu(){
            console.log("Belhanna");
        }

        getSalad()
        .then(function(){return getPizza();}) //return promise, then bere became promises
        .then( function(){ return getPasta(); })
        .then( function(){ endMenu(); });
    ----------------------------------------------------------------------------------------------------------------------------------------------------------------
    promise can take two callbacks , one called on success , another one is called for failure/errors:
        -these callbacks naming convention is :resolve, reject
        Example:
            function getSalad(){
                return new Promise(function(resolve, reject){
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
                        }else if(myHttp.status != 200){
                            reject();
                        }
                    });
                });
            }

            function getPasta(){
                return new Promise(function(resolve, reject){
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
                        }else if(myHttp.status != 200){
                            reject();
                        }
                    });
                });
            }
            function getPizza(){
                return new Promise(function(resolve, reject){
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
                        }else if(myHttp.status != 200){
                            reject();
                        }
                    });
                })
            }

            function endMenu(){
                console.log("Belhanna");
            }

            getSalad()
            .then( function(){return getPizza();})
            .then(function(){return getPasta();})
            .then(function(){endMenu()})
            .catch(function(){console.log("error")});
    

    NOTE:
        -A JavaScript Promise object can be:
            Pending
            Fulfilled
            Rejected
        The Promise object supports two properties: state and result.

        While a Promise object is "pending" (working), the result is undefined.

        When a Promise object is "fulfilled", the result is a value.

        When a Promise object is "rejected", the result is an error object.
        -You cannot access the Promise properties state and result.



-->