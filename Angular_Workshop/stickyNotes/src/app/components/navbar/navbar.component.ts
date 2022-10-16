import { Component, OnInit } from '@angular/core';
import { AuthService } from 'src/app/services/auth.service';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.scss']
})
export class NavbarComponent implements OnInit {

  isLogin:boolean = false;

  constructor(private _AuthService:AuthService) {}

  ngOnInit(): void {
    this._AuthService.currentUser.subscribe(()=>{
      this.isLogin = !!this._AuthService.currentUser.getValue();
    });
  }

 

}
