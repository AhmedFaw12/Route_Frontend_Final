import { NgPluralCase } from '@angular/common';
import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { AuthService } from 'src/app/services/auth.service';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.scss']
})
export class NavbarComponent implements OnInit {

  isLogin:boolean = false;

  constructor(private _AuthService:AuthService, private _Router:Router) {}

  ngOnInit(): void {
    this._AuthService.currentUser.subscribe(()=>{
      this.isLogin = !!this._AuthService.currentUser.getValue();
    });
  }

  logout(){
    let tokenObj = {"token":localStorage.getItem("userToken")};
    this._AuthService.signOut(tokenObj).subscribe((response)=>{

      this._AuthService.currentUser.next(null);
      localStorage.removeItem("userToken");
      this._Router.navigate(["/signin", response.message]);
    });
  }



}
