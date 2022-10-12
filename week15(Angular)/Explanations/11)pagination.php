<!-- 
Pagination:
    https://api.themoviedb.org/3/trending/${mediaType}/week?api_key=972842c9cd57185e1643b0cf6b0205aa&page=${page}


    -we will make simple pagination
    steps:
        1)add page parameter while getting movies from api in movies service:
            movies.service.ts:
                getTrending(mediaType:string, page:number):Observable<any>{
                    return this._HttpClient.get(`https://api.themoviedb.org/3/trending/${mediaType}/week?api_key=972842c9cd57185e1643b0cf6b0205aa&page=${page}`);
                }

        2)get movies inside movies.component.ts:
            -also get total pages 
            -and make array of pages numbers

            movies.component.ts:
                import { MoviesService } from '../movies.service';

                imgPrefix:string = "https://image.tmdb.org/t/p/w500";
                allMovies:any[] = [];
                trendingMovies:any[] = [];
                moviesSub:any;
                pages:number[] = [];
                totalPages:number = 0 ;

                constructor(private _MoviesService:MoviesService) { }


                ngOnInit(): void {

                    this.moviesSub = this._MoviesService.getTrending("movie", 1).subscribe((response)=>{

                    this.trendingMovies = response.results;
                    this.totalPages = response.total_pages;

                    for(let i = 1; i <=this.totalPages; i++){
                        this.pages.push(i);
                    }
                    });
                }
                            
        3)make select option inside movies html:
            <select (change)="getPage($event)">
                <option *ngFor="let page of pages" [value]="page">{{page}}</option>
            </select>

            -we will make select option containing numbers of pages
            -then use change event in the angular
            -change is an event for select
            -when we choose certain option it will send data about that option

        4)receive that option:
            movies.component.ts:
                getPage(eventInfo:any){
                    let page_number = eventInfo.target.value;
                    this.moviesSub = this._MoviesService.getTrending("movie", page_number).subscribe((response)=>{
                    this.trendingMovies = response.results;
                    });
                }

            -we will receive page number , and get movies in that page by api


------------------------------------------------------------------------------------------------------------------------------------------------------------------------


Full Example simple pagination:

    movies.service.ts:
        getTrending(mediaType:string, page:number):Observable<any>{
            
            return this._HttpClient.get(`https://api.themoviedb.org/3/trending/${mediaType}/week?api_key=972842c9cd57185e1643b0cf6b0205aa&page=${page}`);
        }

    movies.component.html:

        <div class="container">
            <select (change)="getPage($event)">
                <option class="" *ngFor="let page of pages" [value]="page">{{page}}</option>
            </select>


            <div class="row py-5">
                <div class="col-md-4 d-flex align-items-center">
                <div>
                    <div class="brdr w-25 mb-4"></div>
                    <h2>Trending Movies <br/> to watch Right Now</h2>
                    <p class="second-color my-2">Most watched Movies by days</p>
                    <div class="brdr w-75 mt-4"></div>
                </div>
                </div>

                <div *ngFor="let movie of trendingMovies" class="col-md-2">
                <div class="movie my-2 position-relative">
                    <a [routerLink]="['/moviedetails', movie.id]">
                    <img [src]="imgPrefix + movie.poster_path" class="w-100" [alt]="movie.title">
                    <h3 class="my-2 h6">{{movie.title}}</h3>

                    <div class="vote">
                        {{movie.vote_average |number:'1.1-1'}}
                    </div>
                    </a>
                </div>
                </div>
            </div>

        </div>


    movies.component.ts:
        import { Component, OnInit, OnDestroy } from '@angular/core';
        import { MoviesService } from '../movies.service';


        @Component({
        selector: 'app-movies',
        templateUrl: './movies.component.html',
        styleUrls: ['./movies.component.scss']
        })

        export class MoviesComponent implements OnInit, OnDestroy {

        // x:string = '';
        imgPrefix:string = "https://image.tmdb.org/t/p/w500";
        allMovies:any[] = [];
        trendingMovies:any[] = [];
        moviesSub:any;
        pages:number[] = [];
        totalPages:number = 0 ;

        constructor(private _MoviesService:MoviesService) { }


        ngOnInit(): void {

            this.moviesSub = this._MoviesService.getTrending("movie", 1).subscribe((response)=>{

            this.trendingMovies = response.results;
            this.totalPages = response.total_pages;

            for(let i = 1; i <=this.totalPages; i++){
                this.pages.push(i);
            }
            });
        }



        getPage(eventInfo:any){
            let page_number = eventInfo.target.value;
            this.moviesSub = this._MoviesService.getTrending("movie", page_number).subscribe((response)=>{
            this.trendingMovies = response.results;
            });
        }


        ngOnDestroy():void{
            this.moviesSub.unsubscribe();

            console.log("MoviesComponent destroyed");
        }
        }





    
-->