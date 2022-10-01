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
  friends = ['ahmed', 'ali', "ibrahim", "taha", "hazem"];

  user = {name:"ahmed", age:25, gender:"male", salary:5000, dateOfBirth:"1/1/2001"};

  users = [
    {name:"ahmed", age:25, gender:"male", salary:5000, dateOfBirth:"1/1/2001"},
    {name:"ali", age:23, gender:"male", salary:5000, dateOfBirth:"1/1/2001"},
    {name:"mai", age:29, gender:"female", salary:5000, dateOfBirth:"1/1/2001"},
    {name:"amal", age:22, gender:"female", salary:5000, dateOfBirth:"1/1/2001"},
    {name:"zaki", age:26, gender:"male", salary:5000, dateOfBirth:"1/1/2001"},
  ];

  // users:any = [];

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
