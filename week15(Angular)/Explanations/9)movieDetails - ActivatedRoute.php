<!-- 
movieDetails:
    -we want when click on any movie, movieDetails page will be opened containing all details of the movie

    -we will generate a new component for movie details:
        ng g c moviedetails --skip-tests
    -then in home.component.html , we will put our movie html inside a link
    -then use routerLink attribue to navigate to moviedetails component
    -then we will pass movie id in routerLink, so we will use property binding since we are using something from ts file
    -so we will pass path of our component ,and id of movie  (in an array):
        home.component.html:
            <a [routerLink]="['/moviedetails', movie.id]">
                <img [src]="imgPrefix + movie.poster_path" class="w-100" [alt]="movie.title">
                <h3 class="my-2 h6">{{movie.title}}</h3>

                <div class="vote">
                    {{movie.vote_average |number:'1.1-1'}}
                </div>
            </a>
    -if we didn't put slash(/) in our path, it will continue on the existing path in the url:
        /home/moviedetails/id   xxxx error
    - we want path: /moviedetails/id
    - slash(/) removes previous url , add my new url
    
    -then we add our path to routes array in app-routing.module.ts :
        app-routing.module.ts:
            import { MoviedetailsComponent } from './moviedetails/moviedetails.component';

            const routes: Routes = [
                //
                {path:"moviedetails/:id", canActivate:[AuthGuard], component:MoviedetailsComponent},
                //
            ];
            -to make path take parameter make slash then colon then name of your parameter (/:id) 
            -to take more that one parameter: (/:id1/:id2)
            
    -then go to moviedetail.component.ts
    -then we want to catch parameter passed in the url
    -we will import ActivatedRoute class and make object from it using DI
    -then get the parameter of id 
    -then make method inside movies.service.ts to get movieDetails of any movie from its id , we will use api of tmdb website
    -then go to moviedetails.component.ts and import moviesService class and make object from it and get response and save it inside a variable

    -ActivatedRoute properties:
        -snapshot: take image/snapshot of the url
        -params: get the parameters in the snapshot

        moviedetails.component.ts:
            import { ActivatedRoute } from '@angular/router';
             id:string = '';
            movieDetails:any = {};
            imgPrefix:string = "https://image.tmdb.org/t/p/w500";

            constructor(private _ActivatedRoute:ActivatedRoute, private _MoviesService:MoviesService) {
                this.id = _ActivatedRoute.snapshot.params['id'];

                this._MoviesService.getMovieDetails(this.id).subscribe((response)=>{
                this.movieDetails = response;
                });
            }

        -movies.service.ts:
            getMovieDetails(id:string){
                return this._HttpClient.get(`https://api.themoviedb.org/3/movie/${id}?api_key=972842c9cd57185e1643b0cf6b0205aa&language=en-US`);
            }

    -then make your design inside html
------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Full Example on movieDetails:
    home.component.html:
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
    app-routing.module.ts:
        import { MoviedetailsComponent } from './moviedetails/moviedetails.component';

        const routes: Routes = [
            //
            {path:"moviedetails/:id", canActivate:[AuthGuard], component:MoviedetailsComponent},
            //
        ];
    movies.service.ts:
        getMovieDetails(id:string){
            return this._HttpClient.get(`https://api.themoviedb.org/3/movie/${id}?api_key=972842c9cd57185e1643b0cf6b0205aa&language=en-US`);
        }


    moviedetails.component.ts:
        import { Component, OnInit } from '@angular/core';
        import { ActivatedRoute } from '@angular/router';
        import { MoviesService } from './../movies.service';

        @Component({
        selector: 'app-moviedetails',
        templateUrl: './moviedetails.component.html',
        styleUrls: ['./moviedetails.component.scss']
        })
        export class MoviedetailsComponent implements OnInit {
        id:string = '';
        movieDetails:any = {};
        imgPrefix:string = "https://image.tmdb.org/t/p/w500";

        constructor(private _ActivatedRoute:ActivatedRoute, private _MoviesService:MoviesService) {
            this.id = _ActivatedRoute.snapshot.params['id'];

            this._MoviesService.getMovieDetails(this.id).subscribe((response)=>{
            this.movieDetails = response;
            });
        }

        ngOnInit(): void {
        }

        }


    moviedetails.component.html:
        <div class="container py-5">
            <div class="row ">
                <div class="col-md-4 mb-4">
                <img class="w-100" [src]="imgPrefix+movieDetails?.poster_path" alt="">
                </div>
                <div class="col-md-8 ">
                <div>
                    <h3 >{{movieDetails?.title}}</h3>
                    <h4 class="mb-4 second-color">{{movieDetails?.tagline}}</h4>
                    <span class="genre " *ngFor="let genre of movieDetails?.genres">{{genre.name}}</span>
                    <p >Vote : {{movieDetails?.vote_average|number:'1.1-1'}}</p>
                    <p >Vote count : {{movieDetails?.vote_count}}</p>
                    <p >Revenue : {{movieDetails?.revenue|currency:"USD":'symbol':'1.0-0'}}</p>
                    <p >Release Date : {{movieDetails?.release_date|date:"yyyy-MM-dd"}}</p>

                    <p class="f-18 second-color">{{movieDetails?.overview}}</p>
                </div>
                </div>
            </div>
        </div>

    
    moviedetails.component.scss:
        p{
        margin: 20px 0;
        }

        .f-18{
            font-size: 18px;
            line-height: 1.6;
        }

    styles.scss:
        .genre{
            background-color: $lightBgColor;
            padding: 7px;
            margin-right: 15px;
            border-radius: 10px;
        }
-->