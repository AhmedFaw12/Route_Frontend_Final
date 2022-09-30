import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {

  constructor() { }

  userName = "Ahmed Fawzy";
  imgSrc = "assets/images/1.jpg";
  onSale = false;
  productPrice = 4000;

  x = '';

  welcome(eventInfo:any){
    console.log(eventInfo.target);
    alert("welcome Ahmed");
  }

  test(eventInfo:any){
    console.log(eventInfo.target.value);
  }

  ngOnInit(): void {
  }

}
