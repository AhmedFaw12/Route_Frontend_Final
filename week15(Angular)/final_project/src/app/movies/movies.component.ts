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
  currentPage:number = 1;
  isPrev:boolean = false;
  isNext:boolean = true;
  word:string = '';

  constructor(private _MoviesService:MoviesService) { }


  ngOnInit(): void {

    this.moviesSub = this._MoviesService.getTrending("movie", 1).subscribe((response)=>{

      this.trendingMovies = response.results;
      this.totalPages = response.total_pages;

      for(let i = 1; i <=this.totalPages; i++){
        this.pages.push(i);
      }

      if(this.totalPages == 1){
        this.isNext = false;
      }
    });
  }



  getPage(eventInfo:any){
    let page_number = eventInfo.target.value;
    this.moviesSub = this._MoviesService.getTrending("movie", page_number).subscribe((response)=>{
      this.trendingMovies = response.results;
    });
  }

  getPageByNumber(pageNumber:number){
    this.moviesSub = this._MoviesService.getTrending("movie", pageNumber).subscribe((response)=>{
      this.trendingMovies = response.results;
    });
  }

  getNext(){
    if(this.currentPage < this.totalPages){
      this.currentPage++;
      this.isPrev = true;
    }

    if(this.currentPage == this.totalPages){
      this.isNext = false;
    }

    this.getPageByNumber(this.currentPage);

  }

  getPrev(){
    if(this.currentPage > 1){
      this.currentPage--;
      this.isNext = true;
    }

    if(this.currentPage == 1){
      this.isPrev = false;
    }

    this.getPageByNumber(this.currentPage);
  }


  ngOnDestroy():void{
    this.moviesSub.unsubscribe();

    console.log("MoviesComponent destroyed");
  }
}
