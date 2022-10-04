<!-- 
Pipe:
    -pipe(ماسورة بدخلها حاجة و تخرجلى حاجة تانية وفى نص الماسورة يوجد بعض التعديلات )

    -for example :we enter s small in the pipe, S capital will be out
    -we call pipe in html
    -pipe is like a function , and we call this function inside html

    we have 2 pipe types in angular:
        -built_in pipes : angular made these pipes
        -custom pipes: pipes that we can build
        
        
    built-in pipes:
        -how to call built-in pipes in html:
            -we write |pipe_name

            Example:
                <td>{{user.name|uppercase}}</td> 

        1)uppercase :
            Transforms text to all upper case.
        2)lowercase:
            -Transforms text to all lower case.
        3)currency:
            -Transforms a number to a currency string, formatted according to locale rules.
            -it also adds currency sign($ by default)
            Example:
                <td>{{user.salary|currency}}</td> 

                -o/p :$5,000.00

            -pipes can take multiple parameters
            -we can change currency sign
            Example:
                <td>{{user.salary|currency:"EUR"}}</td>

            dummy Example :
                <td>{{user.salary|currency:"EUR":"":""}}</td>
        
        4)date:
            -Formats a date value according to locale rules.

            parameters:
                -format	string	Optional. Default is 'mediumDate'.

                -timezone	string	Optional. Default is undefined.

                -locale	string	Optional. Default is undefined.

            -to see date formats go to : https://angular.io/api/common/DatePipe

            Example:
                <td>{{user.dateOfBirth|date}}</td>

    ------------------------------------------------------------------------------------------------------------------------------------------------------------

    Custom pipes:
        how to make custom pipe:
            -write this command:
                ng generate pipe pipeName --skip-tests
                    or
                ng g p pipeName --skip-tests

            -pipeName.pipe.ts file is created
            -pipe is a class

        @Pipe decorator:
            it is the decorator of pipe file
            it has name of the pipe that will be called in html

            Example:
                hello.pipe.ts:                
                    @Pipe({
                        name: 'hello'
                    })
        
        transform() method:
            -it is in the middle of our pipe
            -we will give it input , and it will give me output based on our logic

            Example:
                -we want to enter string and return string
                -when enter name , it will return hello + name
                transform(name:string): string {
                    return `Hello ${name}`;
                }


        -note :
            -pipes are global , we don't import them 
            -we just call them directly in html

        Example:
            -we want to make pipe 
            -when we enter our name , it will output (hello + name)

            ng g p hello --skip-tests

            hello.pipe.ts:
                import { Pipe, PipeTransform } from '@angular/core';

                @Pipe({
                    name: 'hello'
                })

                export class HelloPipe implements PipeTransform {
                    transform(name:string): string {
                        return `Hello ${name}`;
                    }
                }
            about.component.html:
                <tr *ngFor="let user of aboutUsers; let i = index">
                    <td>{{i+1}}</td>
                    <td>{{user.name|hello}}</td>
                    <td>{{user.age}}</td>
                    <td>{{user.gender}}</td>
                    <td>{{user.salary|currency:"EUR"}}</td>
                    <td>{{user.dateOfBirth|date}}</td>
                </tr>

            
        ----------------------------------------------------------------------------------------------------------------------------------------------------
        Example:
            -we want to make a pipe that takes two parameters:name, gender
            -if gender is male , write Mr+name
            -if gender is female , write Mrs+name
            
            ng g p gender --skip-tests

            gender.pipe.ts:
                transform(name:string, gender:string):string {
                    if(gender == "male"){
                        return `Mr ${name}`;
                    }else{
                        return `Mrs ${name}`;
                    }
                }
            
            about.pipe.ts:
                <td>{{user.name|gender:user.gender}}</td>

        ----------------------------------------------------------------------------------------------------------------------------------------------------

        Example:
            -we want to make pipe that takes long movie description and number of words we want to produce from this decription 
            -it will output the minified decription
            
            ng g p seemore --skip-tests
            
            seemore.pipe.ts:              
                transform(overview:string, count:number): string {
                    return overview.split(" ").slice(0,count).join(" ");
                }
            
            home.component.html:
                <div class="container-fluid">
                    <div class="row">
                        <div *ngFor="let movie of trendingMovies" class="col-md-3">
                            <img [src]="imgPrefix + movie.poster_path" class="w-100" alt="">
                            <h5>{{movie.title}}</h5>
                            <p>{{movie.overview|seemore:10}}</p>
                        </div>
                    </div>
                </div>

            home.component.ts:
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

                    this.homeUsers = this._UsersService.users;
                }

            movies.service.ts:
                constructor(private _HttpClient:HttpClient) {
                }

                getTrendingMovies():Observable<any>{
                    return this._HttpClient.get("https://api.themoviedb.org/3/trending/movie/day?api_key=972842c9cd57185e1643b0cf6b0205aa")
                }

-->