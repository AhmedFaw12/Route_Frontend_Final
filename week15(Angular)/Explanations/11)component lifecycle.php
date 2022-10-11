<!-- 
Component LifeCycle hooks in Angular:
    -دورة حياة الكومبونانت
    component lifecylce hooks are certain functions (3 of them are main/important)

    component lifecycle hooks methods:
        -ngOnChanges();
            -it is called automatically when any change happen to the @Input() decorator of component

            -we need to import onChanges interface 
            -then implement onChanges interface
            -then write code for ngOnChanges()

            Example:
                movies.component.html:
                    <div class="mb-2 p-3">
                        <label class="mb-2" for="test">Testing ngOnChange</label>
                        
                        <input type="text" [(ngModel)] = "x" id="test" class="form-control">
                    </div>

                    <app-tv [title]="x"></app-tv>

                movies.component.ts:
                    x:string = '';


                tv.component.html:
                    import { OnChanges } from '@angular/core';

                    export class TvComponent implements OnInit, OnChanges {

                        @Input() title:string = '';

                        constructor() { }

                        ngOnInit(): void {
                        }

                        ngOnChanges():void{
                            console.log(this.title);
                        }
                    }
                
                    -on any change in title , ngOnChanges() is called
        --------------------------------------------------------------------------------------------------------------------------------------------------------
        
        -ngOnInit();
            -it is called automatically when we open component
            -it is called after component constructor
            
            -we need to import onInit interface 
            -then implement onInit interface
            -then write code for ngOnInit()

            Why ngOnInit is made while we have constructor:
                -as good coding style , constructor should only contains DI 
                -and we any other code inside ngOnInit

            Example:

                import { Component, OnInit, OnDestroy } from '@angular/core';
                import { MoviesService } from '../movies.service';

                export class HomeComponent implements OnInit, OnDestroy {

                    trendingMovies:any[] = [];
                    trendingTv:any[] = [];
                    trendingPeople:any[] = [];
                    imgPrefix:string = "https://image.tmdb.org/t/p/w500";

                    moviesSub:any;
                    tvSub:any;
                    peopleSub:any;

                    constructor(private _MoviesService:MoviesService) {}

                    ngOnInit(): void {
                        
                        this.moviesSub = this._MoviesService.getTrending("movie").subscribe((response)=>{
                        this.trendingMovies = response.results.slice(0,10);
                        });

                        
                        this.tvSub = this._MoviesService.getTrending("tv").subscribe((response)=>{
                        this.trendingTv = response.results.slice(0,10);
                        });


                        this.peopleSub = this._MoviesService.getTrending("person").subscribe((response)=>{
                        this.trendingPeople = response.results.slice(0,10);
                        });
                    }


                    ngOnDestroy():void{
                        this.moviesSub.unsubscribe();
                        this.tvSub.unsubscribe();
                        this.peopleSub.unsubscribe();
                        // console.log("homeComponent destroyed");
                    }
                }
                
        --------------------------------------------------------------------------------------------------------------------------------------------------------

        -ngOnDestroy():
            -it is called automatically when we close component
            for example:
                - when we go from home component to about component
                - ngOnDestroy() of home component is called
            
            -we need to import onDestroy interface 
            -then implement onDestroy interface
            -then write code for ngOnDestroy()

            -we use ngOnDestroy() to unsubscribe any subscriptions when we leave our component and go to another page/component

            Example:
                home.component.ts:
                    import { Component, OnInit, OnDestroy } from '@angular/core';
                    
                    export class HomeComponent implements OnInit, OnDestroy{
                        ngOnDestroy():void{
                            this.moviesSub.unsubscribe();
                            this.tvSub.unsubscribe();
                            this.peopleSub.unsubscribe();
                            // console.log("homeComponent destroyed");
                        }             
                    }

            
                    
-->