import { Component, OnInit } from '@angular/core';
import { UsersService } from './../users.service';


@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {

  homeUsers:any = [];
  constructor(private _UsersService:UsersService) {
      this.homeUsers = this._UsersService.users;
   }

  userName = "Ahmed Fawzy";
  imgSrc = "assets/images/1.jpg";
  onSale = false;
  productPrice = 4000;

  x = '';
  friends = ['ahmed', 'ali', "ibrahim", "taha", "hazem"];

  user = {name:"ahmed", age:25, gender:"male", salary:5000, dateOfBirth:"1/1/2001"};



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
