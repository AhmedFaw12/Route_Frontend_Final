<!-- 
Home Page:
    -we want to make home page ,in home pages we get movies from (moviesdb) using this api: https://api.themoviedb.org/3/trending/movie/day?api_key=972842c9cd57185e1643b0cf6b0205aa


    -so we will make service to get movies:called (movies.service.ts):
        -we will use this command:
            ng g s movies --skip-tests

    -we get data from api like we did before 
    -then subscribe to the observable to receive data and display them in home component
    -we will display movies , tvs and people in home page


Full Example:
    movies.service.ts:
        import { Injectable } from '@angular/core';
        import { HttpClient } from '@angular/common/http';
        import { Observable } from 'rxjs';

        @Injectable({
            providedIn: 'root'
        })
        export class MoviesService {
            constructor(private _HttpClient:HttpClient) {}

            getTrending(mediaType:string):Observable<any>{
                return this._HttpClient.get(`https://api.themoviedb.org/3/trending/${mediaType}/week?api_key=972842c9cd57185e1643b0cf6b0205aa`);
            }
        }

    home.component.ts:
        import { Component, OnInit } from '@angular/core';
        import { MoviesService } from '../movies.service';

        @Component({
        selector: 'app-home',
        templateUrl: './home.component.html',
        styleUrls: ['./home.component.scss']
        })

        export class HomeComponent implements OnInit {

        trendingMovies:any[] = [];
        trendingTv:any[] = [];
        trendingPeople:any[] = [];
        imgPrefix:string = "https://image.tmdb.org/t/p/w500";

        constructor(private _MoviesService:MoviesService) {
            _MoviesService.getTrending("movie").subscribe((response)=>{
                this.trendingMovies = response.results.slice(0,10);
            });
            _MoviesService.getTrending("tv").subscribe((response)=>{
                this.trendingTv = response.results.slice(0,10);
            });
            _MoviesService.getTrending("person").subscribe((response)=>{
                this.trendingPeople = response.results.slice(0,10);
                console.log(this.trendingPeople[2].profile_path)
            });

        }

        ngOnInit(): void {
        }

        }


    home.component.html:
        <div class="container">
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
                    <img [src]="imgPrefix + movie.poster_path" class="w-100" [alt]="movie.title">
                    <h3 class="my-2 h6">{{movie.title}}</h3>

                    <div class="vote">
                    {{movie.vote_average |number:'1.1-1'}}
                    </div>
                </div>
                </div>
            </div>


            <div class="row py-5">
                <div class="col-md-4 d-flex align-items-center">
                <div>
                    <div class="brdr w-25 mb-4"></div>
                    <h2>Trending Tv <br/> to watch Right Now</h2>
                    <p class="second-color my-2">Most watched Tv by days</p>
                    <div class="brdr w-75 mt-4"></div>
                </div>
                </div>

                <div *ngFor="let tv of trendingTv" class="col-md-2">
                <div class="movie my-2 position-relative">
                    <img [src]="imgPrefix + tv.poster_path" class="w-100" [alt]="tv.title">
                    <h3 class="my-2 h6">{{tv.title}}</h3>

                    <div class="vote">
                    {{tv.vote_average |number:'1.1-1'}}
                    </div>
                </div>
                </div>
            </div>


            <div class="row py-5">
                <div class="col-md-4 d-flex align-items-center">
                <div>
                    <div class="brdr w-25 mb-4"></div>
                    <h2>Trending People <br/> to watch Right Now</h2>
                    <p class="second-color my-2">Most watched People by days</p>
                    <div class="brdr w-75 mt-4"></div>
                </div>
                </div>

                <div *ngFor="let person of trendingPeople; let i = index" class="col-md-2">
                <div class="movie my-2 position-relative">
                    <img *ngIf="trendingPeople[i].profile_path; else alternate_path" [src]="imgPrefix + person.profile_path" class="w-100" [alt]="person.title">
                    <h3 class="my-2 h6">{{person.name}}</h3>
                </div>
                </div>

                <ng-template #alternate_path>
                <img class="w-100" src="assets/images/notFound.webp" alt="alternate img">
                </ng-template>
            </div>
        </div>

    styles.scss:
        /* You can add global styles to this file, and also import other style files */
        @import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@300&display=swap');

        $bgColor:#131722;
        $lightBgColor:#24baef;
        $bgTransparent:rgba(36,186,239,.6) ;
        $fontColor:#fff;
        $borderColor:#a8a8a83d;
        $borderHeight:1px;
        $secondFontColor:#949cb0;


        body{
            font-family: 'Montserrat Alternates', sans-serif;
            background-color: $bgColor;
            color: $fontColor;
        }

        .brdr
        {
            height: 1px;
            background-color: $borderColor;
        }

        .second-color{
            color: $secondFontColor;
        }

        .vote{
            background-color: $lightBgColor;
            padding: 5px;
            font-weight: 700;
            position: absolute;
            top: 0;
            right: 10px;
        }

-->