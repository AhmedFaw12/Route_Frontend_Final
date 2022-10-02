<!-- 
Advantages of web application that don't exist in desktop application:
    -accessbality :
        -we can access web from any where 
        -desktop application must be asscessed from my laptop
        -and if we forgot our laptop , we can't access desktop application
    -resources burn:
        -if we have desktop application, it will burn resources(ram, ...) from pc/laptop
        -we need high machine resources enough to run desktop application

        -if we have web application, it will burn resources from application server, not from my pc/laptop 
        -all processing happen at the server (like facebook)
        -the only resources burnt at my laptop/pc is my browser that open web application
        -so web application saves my machine resources
        -we don't need high machine resources to run desktop application

-disadvantages of web application:
    -refresh/reload:
        every action we make on the website , reload happens 

-Why reload/refresh happens :
    -Example :
        -when we go to youm7.com website , we make request to youm7
        -so client(me) made a request to youm7.com server

        -then server send a response to client  
        -this response include (html+css+js + data(الاخبار)) of the (homePage) + 
        -this data is the api(which inlcude the news displayed on home page) from database 

        -if we clicked on sports link , we will make a new request to the server
        -server will send a response to client
        -this response include (html+css+js + data(  اخبار الرياضة)) of the (sports Page) 
        -so we had (html+css+js) of the homePage, and now we have (html+css+js) of the sportsPage
        -so my browser needed to reload/render to display the new (html+css+js) of the sportsPage

        -so each request we make , same scenario will happen although we receive same design (html+css+js) , only data changes

        -this technique is called (traditional web) and it is not good
------------------------------------------------------------------------------------------------------------------------------------------------------------------
SPA:
    -SPA(single page application)
    -we go from page to another without reload
    -websites apply SPA:
        -youtube
        -angular.io
        -gmail
        -....

    How to make SPA:
        -the problem was:
            -with every request :(html + css + js) are returned as a response
            -so browser needs to render (html+ css + js) to display page

        -solution:
            -when client make first request
            -server will return to the client all html+css+js of the whole website with the first response  and display only the homePage
            -there is a difference between what is return and what is displayed
            -as if we are making display:none to the rest of the pages, but we have them at our browser

            -and when we click on another page(new request), it will be displayed without reload
            -and we get data using AJAX (which doesn't require reload)


            -This Technique is called SPA(Single Page Application)
    ----------------------------------------------------------------------------------------------------------------------------------------------------------
    Disadvantages of SPA:
        -it makes load/time:
            -first request takes more time than traditional web

        -SEO(search engine optimization):
            -we will discuss it later

    ----------------------------------------------------------------------------------------------------------------------------------------------------------

    -first(entry) page of angular application is the (index.html)
    -index.html has (app-root) parent component selector which contain all components(with html, css ,ts)

    -index.html will be the first page to be rendered , and index.html has all my application code 
    -so when client make first request , whole application code is returned with first response

    -Note :
        -in app.component.html:
            -we are putting all selectors of all components 
            -so all pages will be displayed in one page

            -although pages are fully loaded in app.component.html
            -we will learn how to display home page only when we click on home
            -and how to display about page only when we click on about page, ....

            -this is called Routing(تقليب) between pages

        -then after we learn routing , we will learn how to handle api in angular
    





-->