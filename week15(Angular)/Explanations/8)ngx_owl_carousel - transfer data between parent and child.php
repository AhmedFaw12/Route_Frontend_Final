<!-- 
Making component inside component & transfer data between parent and child:
    -we want to make owl carousel slider containing top movies
    -we will make component for owl carousel
    -then call header selector inside home page

    -we will use owl carousel plugin to make slider
    -How to use owl carousel:
        -we can download owl carousel like we did in jquery and link the files manuallu

        -or some plugins make a version specific for angular 
        -owl carousel is one of those plugin
        -owl carousel angular called :(ngx-owl-carousel-o)
        -anything start with (ngx) mean that it is made for angular

    How to use/install/setup ngx-owl-carousel-o :
        1)run npm install ngx-owl-carousel-o
        2)Add styles(one of these variants):
            -angular.json:
                "styles": [
                    "node_modules/ngx-owl-carousel-o/lib/styles/prebuilt-themes/owl.carousel.min.css",
                    "node_modules/ngx-owl-carousel-o/lib/styles/prebuilt-themes/owl.theme.default.min.css",
                    "src/styles.sass" or "src/styles.css"
                ],
            -src/styles.sass or src/styles.scss:
                @import '~ngx-owl-carousel-o/lib/styles/scss/owl.carousel';
                @import '~ngx-owl-carousel-o/lib/styles/scss/owl.theme.default';

            
            -we will use the second way , because any change in angular.json requires to re-run our project server
        3)Import RouterModule and Routes into AppModule unless they are imported.
            -we already imported them in app.module.ts and app-routing.module.ts

        4)Import BrowserAnimationsModule into AppModule unless it is imported:
            import { BrowserAnimationsModule } from '@angular/platform-browser/animations';

        5)Import CarouselModule into a module which declares a component intended to have a carousel:
            import { CarouselModule } from 'ngx-owl-carousel-o';


        6) Add to needed component ts  (customOptions) or named in different way object with options for the carousel:
            import { OwlOptions } from 'ngx-owl-carousel-o';
            export class CarouselHolderComponent {
                customOptions: OwlOptions = {
                    loop: true,
                    mouseDrag: false,
                    touchDrag: false,
                    pullDrag: false,
                    dots: false,
                    navSpeed: 700,
                    navText: ['', ''],
                    responsive: {
                    0: {
                        items: 1
                    },
                    400: {
                        items: 2
                    },
                    740: {
                        items: 3
                    },
                    940: {
                        items: 4
                    }
                    },
                    nav: true
                }
            }
        7)Add html-markup to the template of the component:
            <div>Some tags before</div>
                <owl-carousel-o [options]="customOptions">

                    <ng-container *ngFor="let slide of slidesStore">
                    <ng-template carouselSlide [id]="slide.id">
                        <img [src]="slide.src" [alt]="slide.alt" [title]="slide.title">
                    </ng-template>
                    </ng-container>

                </owl-carousel-o>
            <div>Some tags after</div>

            -then adjust as you want in html and ts
            
    
    
    -after we installed ngx-owl-carousel-o
    -we adjust the design 
    -we can add/remove some options like:
        mouseDrag :true -we can drag images by mouse
        margin:8 between every image
        autoplay:true -also images are dragged automatically
----------------------------------------------------------------------------------- 
-----------------------------------------------------------------------------------       
Transfer data between parent and child:
    -we need to transfer data : trending movies and imgPrefix from home (parent) to homeheader child

    How to Pass data from parent to child:
        @input() decorator:
            -decorator/method 
            -when we put input decorator before my property 
            -this means that value of this property will come from another component which will call my component selector
        
        -we will add @input() before our property
        -then when we call selector ,we will pass attributes to this selector
        -these attributes will contain value needed to be passed
        -name of attribute must be same name as property name of the child

        Example:
            home.component.html(parent):
                <app-homeheader
                [trendingMovies]="trendingMovies"
                [imgPrefix]="imgPrefix"
                >
                </app-homeheader>
            homeheader.component.ts:
                import { Input } from '@angular/core';

                @Input() trendingMovies:any[] = [];
                @Input() imgPrefix:string = '';
    --------------------------------------------------------------------------------
    --------------------------------------------------------------------------------
    How to pass data from child to parent:
        @output() decorator:
            -@Output() lets the child send data to a parent component.
            
            1)Import Output and EventEmitter in the child component class:
                import { Output, EventEmitter } from '@angular/core';
            2)Prepare Child component to emit data:
                -The @Output() decorator in a child component or directive lets data flow from the child to the parent." This is exactly what we want.

                -child component uses the @Output() property to raise an event (by using an EventEmitter) to notify the parent of the change.

                -@Output() is a decorator that marks a class field (that has to be named) as an output property.

                -EventEmitter: emits custom events.

                Example:
                    homeheader.component.ts:
                        import { EventEmitter, Output } from '@angular/core';
                        
                        @Output() newBookEvent = new EventEmitter<string>();//new event
                        newTitle:string = '';

                        addNewBook(){
                            console.log("hello");
                            this.newBookEvent.emit(this.newTitle);
                        }
            3)Child.ts emits data through an event every time the user clicks on a button:
                homeheader.component.html:
                    <input [(ngModel)]="newTitle" type="text" class="form-control">
                    <button class="btn btn-info" (click)="addNewBook()">add book</button>
            
            4)Bind Property in Parent Component template:
                -In the parent's template, bind the parent's method to the child's event.

                -The $event contains the data that the user types into the <input> in the child template UI.

                Example:
                    home.component.html:
                        <app-homeheader
                        [trendingMovies]="trendingMovies"
                        [imgPrefix]="imgPrefix"
                        (newBookEvent)="addBookParent($event)"
                        >
                        </app-homeheader>
            5) Use Property in Parent Component class:
                Example:
                    home.component.ts:
                        books:string[]=['b1','b2','b3'];
                        addBookParent(title:string){
                            this.books.push(title);
                        }
        full Example on @output:
            homeheader.component.ts:
                import { EventEmitter, Output } from '@angular/core';
                
                @Output() newBookEvent = new EventEmitter<string>();//new event
                newTitle:string = '';

                addNewBook(){
                    console.log("hello");
                    this.newBookEvent.emit(this.newTitle);
                }

            homeheader.component.html:
                <input [(ngModel)]="newTitle" type="text" class="form-control">
                <button class="btn btn-info" (click)="addNewBook()">add book</button>
                
            home.component.html:
                <app-homeheader
                [trendingMovies]="trendingMovies"
                [imgPrefix]="imgPrefix"
                (newBookEvent)="addBookParent($event)"
                >
                </app-homeheader>
            home.component.ts:
                books:string[]=['b1','b2','b3'];
                addBookParent(title:string){
                    this.books.push(title);
                }

                    
------------------------------------------------------------------------------------
------------------------------------------------------------------------------------
Full Example:
    -ng g c homeheader --skip-tests


    app.module.ts:
        import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
        import { CarouselModule } from 'ngx-owl-carousel-o';

        imports: [
            BrowserModule,
            AppRoutingModule,
            ReactiveFormsModule,
            HttpClientModule,
            BrowserAnimationsModule,
            CarouselModule
        ],
    

    styles.scss:
        @import '~ngx-owl-carousel-o/lib/styles/scss/owl.carousel';
        @import '~ngx-owl-carousel-o/lib/styles/scss/owl.theme.default';

    homeheader.component.html:
        <section class="vh-100 d-flex align-items-end">
            <div class="container">
                <h1 class="fw-bolder">Our Latest Movies</h1>
                <owl-carousel-o [options]="customOptions">
                <ng-container *ngFor="let movie of trendingMovies">
                    <ng-template carouselSlide [id]="movie.id">
                    <img [src]="imgPrefix+movie.poster_path" [alt]="movie.title" [title]="movie.title">
                    </ng-template>
                </ng-container>

                </owl-carousel-o>
            </div>
        </section>

    homeheader.component.ts:
            import { Component, Input, OnInit } from '@angular/core';
            import { OwlOptions } from 'ngx-owl-carousel-o';


            @Component({
                selector: 'app-homeheader',
                templateUrl: './homeheader.component.html',
                styleUrls: ['./homeheader.component.scss']
            })
            export class HomeheaderComponent implements OnInit {

                @Input() trendingMovies:any[] = [];
                @Input() imgPrefix:string = '';


                customOptions: OwlOptions = {
                    loop: true,
                    margin:8,
                    autoplay:true,
                    mouseDrag: true,
                    touchDrag: false,
                    pullDrag: false,
                    dots: false,
                    navSpeed: 700,
                    navText: ['', ''],
                    responsive: {
                    0: {
                        items: 1
                    },
                    400: {
                        items: 2
                    },
                    740: {
                        items: 3
                    },
                    940: {
                        items: 6
                    }
                    },
                    nav: true
                };


                constructor() { }

                ngOnInit(): void {
                }

            }
    homeheader.component.scss:
        section
        {
        background-image: url("../../assets/images/background_img.jpg");
        background-size: cover;
        background-position: center center;
        }

        h1{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

    home.component.html:
        <app-homeheader
        [trendingMovies]="trendingMovies"
        [imgPrefix]="imgPrefix"
        >
        </app-homeheader>

    
    
-->