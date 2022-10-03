<!-- 
Api:
    -we always use/receive apis in service.ts file
    -inorder to receive apis, we need to make service 
     https://api.themoviedb.org/3/trending/movie/day?api_key=972842c9cd57185e1643b0cf6b0205aa

    
    HttpClient class:
        -angular made HttpClient class 
        -it has all methods to deal with APIs:
            -get:
                -method is an asynchronous method that performs an HTTP get request in Angular applications and returns an Observable
            -post
            -put
            -patch
            -delete

        -HttpClient class exists in '@angular/common/http' file
        
        -we will use this class in our service class
        -so we need to import this class
        -make object from HttpClient class using dependancy injection

        -HttpClient class exists in another module called (HttpClientModule)
        -so we need to import HttpClientModule in our module(app.module.ts)
        -then add HttpClientModule class to imports array

observable:
    Recap:
        -_HttpClient.get("myApiUrl") is a asynchronous method
        -asynchronous because we can't know when data of api will come. because this depends on data size , internet connection , ...
        -js runs synchronous code before asynchronous code
        -so we used callback functions
        -but callback caused callback hell
        -in ES6 promise appeared to make callback functions more readable
        -then we used fetch instead of writing many lines of code
        -fetch also return promise
        -then we used await and async with fetch

    -promise has many problems in performance that we will discuss later
    -so promise is not the best way in performance to handle asynchronous programming
    -promise is used in vanila/Native js (pure js without jquery, angular, or any external library)


    -someone made a library called (RxJS)
    -(RxJS) library handle asynchronous programming(apis)
    -(RxJS) has something called (observable)
    -we will use observable instead of promise
    -observable solved problems exist in promise
    -observable is not in JS
    -observable is in RxJS library
    -RxJS is built with something called (Reactive Programming)
    -so inorder to use Observable , we need to import RxJS

    -since RxJS is very good, now they made other libraries for other languages like(RxJava for android, RxSwift for ios, ...)

    -angular wants us to use RxJS library inorder to use observable
    -we don't need to install RxJs(npm install rxjs) in angular project
    -Angular project already installed RxJS library
    -rxjs is already installed in node_modules folder
    -also rxjs exists in dependancies array inside Package.json file
    -RxJS stands for (Reactive Extension for JavaScript)


    How to use observable:
        1)make Http get request from server
        2)Receive The Observable and cast it into an array/object/... in service file
        3)make required components subscribe to the observable in order to use array/object
        4)inside component.ts assign array/object to a local variable

        subscribe() method:
            -to call/invoke observable, we use subscribe() 
            -subscribe(متابعة)
            -means tell me when api response come
            -we can pass arrow function to subscribe which will be executed when api response come
            -so subscribe takes callback function that we want to execute when api response come

            Example:    
                _MoviesService.getTrendingMovies.subscribe(() =>{
                    console.log("hello");
                });
                -console.log("hello") will be called after getTrendingMovies

            -observable send data/respone inside a parameter in the arrow function in subscribe method, we can name this parameter data or any other name

            Example:
                _MoviesService.getTrendingMovies.subscribe((data) =>{
                    console.log(data);
                });

            -subscribe can take 3 arrow functions to be executed after api response come:
                1)next method :
                    -same as then
                    -it is the first method that we wrote above
                    -first method is executed if api response is received correctly
                    -it receives a paramter that holds api data

                2)error method:
                    -it is executed if api returned errors
                    -observable passes a paremter in it that holds errors

                3)complete method :
                    -it is executed anyway regardless next or error methods are executed
                    -so we can have next() + complete()
                    -or we can have error() + complete()
                    -it is executed after next() or error()

                -these 3 arrow functions(next,  error , complete) are optional
                -we don't even have to write next method
                -not every api call has to be displayed 
                
            Example depricated:
                _MoviesService.getTrendingMovies().subscribe(
                   (data) =>{
                        this.trendingMovies = data.results;
                    },
                    (error) =>{
                        console.log(error);
                    },
                    () =>{
                        console.log("Done");
                    });
                -passing 3 arrow functions inside subscribe is depricated
                -so we need to pass object that holds these 3 arrow functions

            Example:
                _MoviesService.getTrendingMovies().subscribe({
                    next: (data) =>{
                        this.trendingMovies = data.results;
                    },
                    error: (error) =>{
                        console.log(error);
                    },
                    complete: () =>{
                        console.log("Done");
                    }
                });
------------------------------------------------------------------------------------------------------------------------------------------------------------------
full Example on api handling with observables:
    app.module.ts:
        import { HttpClientModule } from '@angular/common/http';

        imports: [
            //,
            HttpClientModule
        ],
    movies.service.ts:
        import {HttpClient} from '@angular/common/http';
        import { Observable } from 'rxjs';

        @Injectable({
            providedIn: 'root'
        })
        export class MoviesService {

            constructor(private _HttpClient:HttpClient) {

            }

            getTrendingMovies():Observable<any>{
                return this._HttpClient.get("https://api.themoviedb.org/3/trending/movie/day?api_key=972842c9cd57185e1643b0cf6b0205aa")
            }
        }
        -we imported HttpClient class
        -then we made object from HttpClient using angular dependancy injection

        -we imported Observable class
        -cast observable into array/object:
            getTrendingMovies():Observable<object>{
                return this._HttpClient.get<object>("https://api.themoviedb.org/3/trending/movie/day?api_key=972842c9cd57185e1643b0cf6b0205aa")
            }

            -this means response returned is object
        -but since we don't know what will return , we will return any
        -so we will cast observable into any:
            getTrendingMovies():Observable<any>{
                return this._HttpClient.get<any>("https://api.themoviedb.org/3/trending/movie/day?api_key=972842c9cd57185e1643b0cf6b0205aa")
            }

        -we can remove any beside get:
            getTrendingMovies():Observable<any>{
                return this._HttpClient.get("https://api.themoviedb.org/3/trending/movie/day?api_key=972842c9cd57185e1643b0cf6b0205aa")
            }

            -we made sure that the return is observable casted to any

    home.component.ts:
        import { Component, OnInit } from '@angular/core';
        import { MoviesService } from './../movies.service';


        @Component({
            selector: 'app-home',
            templateUrl: './home.component.html',
            styleUrls: ['./home.component.css']
        })

        export class HomeComponent implements OnInit {

            trendingMovies:any[] = [];
            imgPrefix:string =  "https://image.tmdb.org/t/p/w500/"
            
            constructor(private _UsersService:UsersService, private _MoviesService:MoviesService) {
                _MoviesService.getTrendingMovies().subscribe({
                    next: (data) =>{
                        this.trendingMovies = data.results;
                    },
                    error: (error) =>{
                        console.log(error);
                    },
                    complete: () =>{
                        console.log("Done");
                    }
                });
            }

            ngOnInit(): void {
            }
        }

        -we imported moviesService class
        -we made object from MoviesService class using dependancy injection

        -we called observable using subscribe method
        -next() method is executed after api data comes
        
    home.component.html:
        <div class="container-fluid">
            <div class="row">
                <div *ngFor="let movie of trendingMovies" class="col-md-3">
                <img [src]="imgPrefix + movie.poster_path" class="w-100" alt="">
                <h5>{{movie.title}}</h5>
                <p>{{movie.overview}}</p>
                </div>
            </div>
        </div>

------------------------------------------------------------------------------------------------------------------------------------------------------------------
What is Reactive Programming:
    -we make code that reacts on the response that we receive
    -observable uses pure js before promise
    
    -observable don't use promise

    -observable handle asynchronous activities
    -so we can use observable with api, events , (setTimeOut, setInterval)

What are asynchronous activities in JS:
    -api
    -setTimeOut : call function one time only after certain time , setInterval :call function every period of time
    -events

    -asynchronous code is code we don't know when to execute
-->