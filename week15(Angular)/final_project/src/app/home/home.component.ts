import { Component, OnInit, OnDestroy } from '@angular/core';
import { MoviesService } from '../movies.service';


@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss']
})
export class HomeComponent implements OnInit, OnDestroy {

  imgPrefix:string = "https://image.tmdb.org/t/p/w500";
  trendingMovies:any[] = [];
  trendingTv:any[] = [];
  trendingPeople:any[] = [];

  moviesSub:any;
  tvSub:any;
  peopleSub:any;

  constructor(private _MoviesService:MoviesService) {}

  ngOnInit(): void {
    this.moviesSub = this._MoviesService.getTrending("movie", 1).subscribe((response)=>{
      this.trendingMovies = response.results.slice(0,10);
    });
    this.tvSub = this._MoviesService.getTrending("tv", 1).subscribe((response)=>{
      this.trendingTv = response.results.slice(0,10);
    });
    this.peopleSub = this._MoviesService.getTrending("person", 1).subscribe((response)=>{
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
