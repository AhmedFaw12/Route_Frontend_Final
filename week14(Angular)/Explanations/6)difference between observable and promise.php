<!-- 
What is webpack:
    -it is a build automation tool
    -it builds our application when i save changes
    -it compile all files immediately
    -it gets all styles and script files ,then bundles/minifies them
    -it creates some files:
        main.js:
            -it contains all logic/source code written by developers
        polyfills.bundle.js:
            -fills the gap between js version used by browser and js version used by angular
        styles.bundle.js:
            -contains styles and script files and minifies them
        vendor.bundle.js:
            -it contains all third-party libraries and bundles/minifies them

    -Webpack is a module bundler that has its own development server - webpack-dev-server. It supports live reload and it is very easy to configure
------------------------------------------------------------------------------------------------------------------------------------------------------------------

Setting Up development environment for rxjs(not complete):
    -make new project folder
    -npm init
    -npm install rxjs webpack webpack-dev-server typescript ts-loader
    -npm install webpack-cli --save-dev

    -go to package.json and write:
        "scripts": {
            "start": "webpack-dev-server --mode development"
        }
        -when we write npm run start , it will run webpack live server 
        -so we can run our project on localhost and access it via browser
        
        What are npm scripts?
            -When we talk about "npm scripts" we are talking about entries in the scripts field of the package.json. The scripts field holds an object where you can specify various commands and scripts you want to expose. These can then be executed using npm run <script-name>.

            Example package.json:
                {
                    "name": "demo",
                    "scripts": {
                        "example": "echo 'hello world'"
                    }
                }

                -to run this script:
                    npm run example
                -o/p : hello world

            -This is especially handy if you want to pass a variety of arguments to a CLI command and don't want to re-type them every time. Additionally you'll be able to access any scripts that were exposed by your dependencies

            -For example if you want to use TypeScript, rather than asking everyone to install it globally using npm install -g typescript, you can install it as a dev dependency using npm install --save-dev typescript and then add a build script to your "scripts" section:
                
                "scripts": {
                    "build": "tsc"
                }

                -then : npm run build


            -another Example:
                "scripts": {
                    "start": "webpack-dev-server --mode development"
                }

                -when we write npm run start , it will run webpack live server 

    ----------------------------------------------------------------------------------------------------------------------------------------------------------
    -we need to add webpack configuration file:
        -create webpack.config.js
--------------------------------------------------------------------------------------------------------------------------------------------------------------------

difference between observable and promise:
        
    -ES6 Promises and RxJS Observables are both used to handle async activity in JavaScript. While an Observable can do everything a Promise can, the reverse is not true...

    What is a promise:
        -A Promise is a more elegant way of handling async activity in JavaScript.
        -Promises are native to ES6 meaning you can use them with vanilla JavaScript (assuming you are using ES6 version or later).

        Example:
            let promise = new Promise(function(resolve){
                setTimeout(function(){
                    resolve("hello");
                }, 1000);
            });

            promise.then(function(myValue){
                console.log(myValue);
            });

            -o/p: hello

        -A Promise works by taking a function with (optionally) two arguments resolve and reject. The passed in function executes some async code and either resolves or rejects.

        -Once the Promise resolves, its then() method executes a handler function with the emitted value.
    ------------------------------------------------------------------------------------------------------------------------------------------------------------
    What is an Observable?
        -Observables are an alternative to Promises for handling async activity

        -Unlike the Promise, Observables aren't native to JavaScript. This requires us to import the RxJS

        Example:
            let observable = new Observable(function(observer){
                setTimeout(() => {
                    observer.next("hello");
                }, 1000);
            });

            observable.subscribe(function(value) {
                console.log(value);
            });

            -o/p : hello
            -subscribe same as then 
            -observer is the callback function
            -observer.next() is the executes on success
    ------------------------------------------------------------------------------------------------------------------------------------------------------------
    Differences between Observables and Promises:
        1)Single vs Multiple Values:
            -A Promise emits a single value:
                Example:
                    let promise = new Promise((resolve) => {
                        resolve("a")
                        resolve("b")
                    })
                    promise.then(value => console.log(value))
                    
                    -o/p : a

                    -Once a Promise resolves, that's it. You can't call resolve twice and get different values. Only the first value a is returned by the promise.


            -An Observable can emit multiple values:
                Example:
                    let observable = new Observable((observer) => {
                        observer.next("a")
                        observer.next("b")
                    })

                    observable.subscribe(value => {
                        console.log(value)
                    });

                    -o/p: 
                        a
                        b

                    -An Observable can emit multiple values. Calling next() executes the handler function each time. Both a and b are returned.
        ----------------------------------------------------------------------------------------------------------------------------------------------------
        2)Eager vs Lazy Execution:
            -A Promise executes the moment it is defined:
            -A Promise executes the moment it's defined. Even if we don't call then(), the Promise executes. This is considered eager execution.

                Example1:
                    let promise = new Promise((resolve) => {
                        console.log("promise is running")
                        resolve("a")
                    })

                    console.log("start")
                    promise.then(value => console.log(value))
                    console.log("end")

                    -o/p:
                        promise is running
                        start
                        end
                        a
                Example2:
                    let promise = new Promise((resolve) => {
                        setTimeout(function(){
                            console.log("promise is running");
                            resolve("a");
                        },1000)
                    })

                    console.log("start")
                    promise.then(value => {console.log(value)})
                    console.log("end")

                    -o/p:
                        start
                        end
                        promise is running
                        a

            -An Observable executes only when subscribe() is called:
                -An Observable executes only when subscribe() is called. If we don't call subscribe(), nothing executes. This is considered lazy execution.

                Example:
                    let observable = new Observable((observer) => {
                        console.log("observable is running")
                        observer.next("a")
                    })
                    
                    console.log("start")
                    observable.subscribe(value => console.log(value))
                    console.log("end")
    
                    -o/p:
                        start
                        observable is running
                        a
                        end

        ----------------------------------------------------------------------------------------------------------------------------------------------------

        3)Cancellable:
            -A Promise can't be canceled. That's it. No example needed.
           
            -An Observable can be canceled via unsubscribe():

                let observable = new Observable((observer) => {
                setTimeout(() => {
                    console.log("calling next")
                    observer.next("a")
                }, 1000)
                })

                sub = observable.subscribe(value => console.log(value))
                sub.unsubscribe()

                -o/p:
                    calling next

                -observer.next("a") is cancelled via unsubscribe

                -Notice how we use setTimeout() to mimic async activity. By calling unsubscribe() on our subscription, you can effectively cancel an Observable before it executes.
        ----------------------------------------------------------------------------------------------------------------------------------------------------

        4)Unicast vs Multicast:
            -A Promise is unicast meaning you get the same value every time you call the async flow:

                With a Promise we get the same value no matter how many times we call then().
                
                Example:
                    let promise = new Promise((resolve) => {
                        resolve(Math.random())
                    })

                    promise.then(value => console.log(value))
                    promise.then(value => console.log(value))
                    
                    -o/p:
                        0.768598539600432

            -An Observable is multicast meaning a separate execution occurs for every call to subscribe:

                -With an Observable we get a different value every time we call subscribe().

                let observable = new Observable((observer) => {
                observer.next(Math.random())
                })

                observable.subscribe(value => console.log(value))
                observable.subscribe(value => console.log(value))

                -o/p:
                    0.6964325798899575
                    0.5931491554914805
    
        ----------------------------------------------------------------------------------------------------------------------------------------------------
        
        5)Sync vs Async Handlers:
            -A Promise has async handlers. This means a Promise won't execute synchronously with the rest of your code:
                Example:
                    let promise = new Promise((resolve) => {
                        resolve("promise is resolving")
                    })

                    console.log("START")
                    promise.then(value => console.log(value))
                    console.log("END")

                    -o/p:
                        START
                        END
                        promise is resolving

                    -Notice how the Promise executes asynchronously from the rest of the code. The code doesn't wait for the Promise to run.


            -An Observable has sync handlers. This means an Observable WILL execute synchronously with the rest of the code:
                Example:
                    let observable = new Observable((observer) => {
                      observer.next("next being called")
                    })

                    console.log("START")
                    observable.subscribe(value => console.log(value))
                    console.log("END")

                    -o/p:
                        START
                        next being called
                        END
                    
                    -The Observable executes synchronously with the rest of the code. The code waits for the Observable to emit a value before continuing.

                Example:
                    let observable = new Observable((observer) => {
                        setTimeout(function(){
                            observer.next("next being called")
                        }, 1000);
                    })

                    console.log("START")
                    observable.subscribe(value => console.log(value))
                    console.log("END")
                    
                    -o/p:
                        START
                        END
                        next being called

-->