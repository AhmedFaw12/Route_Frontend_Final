import { Component, Input, OnInit} from '@angular/core';
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
