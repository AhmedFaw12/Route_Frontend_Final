<!-- 
search pipe:
    ng g p search --skip-tests

    search.pipe.ts:
        transform(movies:any, searchWord:string) {
            if(searchWord == undefined || searchWord == ''){
            return movies;
            }

            return movies.filter((movies:any)=>{
                return movies.title.toUpperCase().includes(searchWord.toUpperCase());
            });
        }


    app.module.ts:
        import { SearchPipe } from './search.pipe';

        declarations: [
            SearchPipe
        ]

        
    movies.component.ts:
        word:string = ''
    
    movies.component.html:
        <div class="w-50 m-auto">
            <label for="searchMovie">Movies Search</label>
            <input id="searchMovie" type="text" class="form-control my-2" placeholder="Search for a Movie" [(ngModel)] = 'word'>
        </div>

         <div *ngFor="let movie of trendingMovies|search:word" class="col-md-2"></div>



-->