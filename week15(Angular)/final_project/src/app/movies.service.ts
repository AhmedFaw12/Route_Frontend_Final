import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class MoviesService {

  constructor(private _HttpClient:HttpClient) {}

  getTrending(mediaType:string, page:number):Observable<any>{
    return this._HttpClient.get(`https://api.themoviedb.org/3/trending/${mediaType}/week?api_key=972842c9cd57185e1643b0cf6b0205aa&page=${page}`);
  }

  getMovieDetails(id:string){
    return this._HttpClient.get(`https://api.themoviedb.org/3/movie/${id}?api_key=972842c9cd57185e1643b0cf6b0205aa&language=en-US`);
  }
}
