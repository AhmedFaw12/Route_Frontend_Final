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

  word:string = '';

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
