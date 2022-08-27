<!-- 
JSON:
    -we have 4 different platforms:
        -Website
        -Android app
        -IOS app
        -desktop app
    -we must make one backend for all these 4 plateforms
    -so we will make one database only(C# & SQLserver, Php & mysql, nodejs & mongodb)
    -but the 4 plateforms can communicate with database using c# or php or nodejs
    -so we will take the backend and convert it into a format/language that all plateforms can understand (JSON)

    -all plateforms can understand json
    -json is text formatting based on object or array of objects
    -json is very light , has high performance
------------------------------------------------------------------------------------------------------------------------------------------------------------------------

API:
    -converting Backend into json is called api
    -API stands for Application Programming Interface.
    -A Web API is an application programming interface for the Web.
    
    -API is the url that contains json(object , array of objects)

    -there is website called :(jsonplaceholder)
    -it gets me fake apis to test on my design 
    -untill backend finish all his apis

------------------------------------------------------------------------------------------------------------------------------------------------------------------------
AJAX:
    -Read data(receving api) from a web server - after the page has loaded
    -Update a web page without reloading the page
    -Send data to a web server - in the background

    What is AJAX:
        -AJAX = Asynchronous JavaScript And XML.

        -Asynchronous : any Code that we don't know its time frame/duration or when it will finish like (open(), send() methods)

        -XML : 
            -in the past , data didn't come in json format , it came in XML format
            -JSON is better than XML
            -No one use XML  

        -AJAX is not a programming language.

        -AJAX just uses a combination of:
            -A browser built-in XMLHttpRequest object (to request data from a web server)
            -JavaScript and HTML DOM (to display or use the data)
    ----------------------------------------------------------------------------------------------------------------------------------------------------------------
    XMLHttpRequest object:
        The keystone of AJAX is the XMLHttpRequest object:
            Create an XMLHttpRequest object
            Define a callback function
            Open the XMLHttpRequest object
            Send a Request to a server
    
        -All modern browsers support the XMLHttpRequest object.

        -The XMLHttpRequest object can be used to exchange data(of api) with a web server behind the scenes. This means that it is possible to update parts of a web page, without reloading the whole page.

        -Syntax for creating an XMLHttpRequest object:
            -var variable = new XMLHttpRequest();

        Steps:
            1)create object:
                var variable = new XMLHttpRequest();
            2)open/establish connection:
                -To send a request to a server, you can use the open() and send() methods of the XMLHttpRequest object.
                -open() to establish connection

                parameters:
                    open(method, url, async)	Specifies the type of request

                    method: the type of request: GET or POST or PUT or PATCH or DELETE(determined by backend)
                    url: the server (file) location
                    async: true (asynchronous) or false (synchronous)

                Example:
                    var myHttp = new XMLHttpRequest();
                    myHttp.open("GET", "https://jsonplaceholder.typicode.com/posts");//connection establishment
            3)send a request:
                -we use send() , to send the request to the server
                Example:
                    var myHttp = new XMLHttpRequest();
                    myHttp.open("GET", "https://jsonplaceholder.typicode.com/posts");//connection establishment
                    myHttp.send();
            4)get the response:
                -we use response property:
                Example:
                    var myHttp = new XMLHttpRequest();
                    myHttp.open("GET", "https://jsonplaceholder.typicode.com/posts");//connection establishment
                    myHttp.send();
                    console.log(myHttp.response);

                    -response is returned as a string(like local Storage)
                    -so we need to convert to string to array of objects/object using json.parse()

            -connection with api may have errors(server down, network failure, wrong url,)
            -So we must make sure that response is received correctly:
                -readyState property:
                    -The readyState property holds the status of the XMLHttpRequest.
                    readyState	:Holds the status of the XMLHttpRequest.
                        0: request not initialized
                        1: server connection established
                        2: request received/sent
                        3: processing request
                        4: request finished and response is ready

                    -we will only check for readyState == 4
                -status property:
                    -sometimes readyState = 0 ,and we don't know why
                    -status responsible to check for the url

                    -status	200: "OK" (url is good)
                    -403: "Forbidden" (url exists , but we can't enter it(not authorized), because url need userName and password or needs admins only or ...)
                    -404: "Page not found" (url is not correct)

                -onreadystatechange property:
                	-Defines a function to be called when the readyState property changes:

                    -The onreadystatechange property defines a function to be executed when the readyState changes.

                    readystatechange function will be executed with every readyStatus change

                    -open ,send takes time , so if we get the response before open and send are finised , response will get empty
                    
                    -so we must check for readyStatus and status before receiving response

                    Example:
                        var myHttp = new XMLHttpRequest();
                        myHttp.open("GET", "https://jsonplaceholder.typicode.com/posts");//connection establishment
                        myHttp.send();

                        myHttp.addEventListener("readystatechange", function(){
                            console.log(myHttp.readyState);
                        })

                        -output:
                            2 
                            3
                            4
                            -since open and send make readyStatus = 1
                            -then when readystatechange change from 1-2 , 2-3 , 3-4
                            -2 3 4 are printed
                    Example:
                        var myHttp = new XMLHttpRequest();
                        myHttp.open("GET", "https://jsonplaceholder.typicode.com/posts");//connection establishment
                        myHttp.send();

                        myHttp.addEventListener("readystatechange", function(){
                            
                            if(myHttp.readyState == 4 && myHttp.status == 200){
                                console.log(myHttp.response);
                            }
                        });
                    
--> 