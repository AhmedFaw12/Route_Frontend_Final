import { Pipe, PipeTransform } from '@angular/core';

@Pipe({
  name: 'search'
})
export class SearchPipe implements PipeTransform {

  transform(movies:any, searchWord:string) {
    if(searchWord == undefined || searchWord == ''){
      return movies;
    }

    return movies.filter((movies:any)=>{
        return movies.title.toUpperCase().includes(searchWord.toUpperCase());
      }
    );
  }

}
