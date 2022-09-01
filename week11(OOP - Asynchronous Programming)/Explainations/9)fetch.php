<!-- 
fetch:
    -fetch() is an ECMAScript6 (ES6) feature.
    -JavaScript Fetch API
    -The fetch() method starts the process of fetching a resource from a server.
    -The fetch() method returns a Promise that resolves to a Response object.
    
    - No need for XMLHttpRequest anymore.
    
    -default request method of fetch is "GET"
    -fetch() return promise by default , so we can use await and async with it
     
    Syntax:
        fetch(url)
    Parameters
        file:
            Optional.
            The name of a resource to fetch.
    Return Value
        Promise:
            A Promise that resolves to a Response object.


    Example(wrong code):
        (function(){
            let response = fetch("https://forkify-api.herokuapp.com/api/search?q=salad");
            console.log(response);
        })();

        output:
            -it will output response pending(waiting for the response)
            -console.log() is synchronous , so it will be executed before fetch() which is asynchronous code

    Example(right code):
        (async function(){
            let response = await fetch("https://forkify-api.herokuapp.com/api/search?q=salad");
            console.log(response);
        })();

    -How to get data from response that come from fetch:
        -The Response object, in turn, does not directly contain the actual JSON response body but is instead a representation of the entire HTTP response. 
        
        -So, to extract the JSON body content from the Response object, we use the json() method, which returns a second promise that resolves with the result of parsing the response body text as JSON.


        -json() is also asynchronous , so we will use await with it
        -we don't need to use JSON.parse(), because json() gets json data and parse it

        Example:
            (async function(){
                let response = await fetch("https://forkify-api.herokuapp.com/api/search?q=salad");

                let responseData = await response.json();
                console.log(responseData.recipes);
            })();

        Example:
            -fetch is non-blocking and doesn't block the DOM.
            await blocks code inside the async function , but outside the asynch function it is non blocking

            async function getSalad(){
                let response = await fetch("https://forkify-api.herokuapp.com/api/search?q=salad");

                let responseData = await response.json();
                console.log("Salad");
                console.log(responseData.recipes);
            }

            console.log("1");
            getSalad();
            console.log("2");

            //output:
                1
                2
                salad
        --------------------------------------------------------------------------------------------------------------------------------------------------------
        Example:
            async function getSalad(){
                let response = await fetch("https://forkify-api.herokuapp.com/api/search?q=salad");

                let responseData = await response.json();
                console.log("Salad");
                console.log(responseData.recipes);
            }
            async function getPasta(){
                let response = await fetch("https://forkify-api.herokuapp.com/api/search?q=pasta");

                let responseData = await response.json();
                console.log("Pasta");
                console.log(responseData.recipes);
            }
            async function getPizza(){
                let response = await fetch("https://forkify-api.herokuapp.com/api/search?q=pizza");

                let responseData = await response.json();
                console.log("Pizza");
                console.log(responseData.recipes);
            }
            async function getBeef(){
                let response = await fetch("https://forkify-api.herokuapp.com/api/search?q=beef");

                let responseData = await response.json();
                console.log("Beef");
                console.log(responseData.recipes);
            }

            function endMenu(){
                console.log("Belhanna");
            }


            console.log("1");
            (async function printAll(){
                await getSalad();
                await getBeef();
                await getPasta();
                await getPizza();
                endMenu();
            })(); 
            console.log("2");


            //output:
                1
                2
                salad
                beef
                pasta
                pizza
                belhanna

            Note:
                -it we want to display errors , then use try and catch
                
                console.log("1");
                (async function printAll(){
                    try{
                        await getSalad();
                        await getBeef();
                        await getPasta();
                        await getPizza();
                        endMenu();
                    }catch(error){
                        console.log(error.message);
                    }
                })(); 
                console.log("2");

        --------------------------------------------------------------------------------------------------------------------------------------------------------
        Example:
            -we will use fetch with then and catch , instead of async and await to get data

            function getSalad(){
                fetch("https://forkify-api.herokuapp.com/api/search?q=salad").then(function(response){
                    console.log("Salad");

                    (async function(){
                        console.log((await response.json()).recipes);
                    })();
                }).catch(function(error){
                    console.log(error.message);
                });
            }
            console.log("1");
            getSalad();
            console.log("2");


            //output is :
                1
                2
                salad
                
            -fetch will send response inside (then)
            -in case of error , fetch will send error inside catch 

        

    
-->