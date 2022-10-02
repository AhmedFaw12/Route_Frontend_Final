import { Component, OnInit } from '@angular/core';
import { UsersService } from './../users.service';

@Component({
  selector: 'app-about',
  templateUrl: './about.component.html',
  styleUrls: ['./about.component.css']
})
export class AboutComponent implements OnInit {

  aboutUsers:any = [];
  constructor(private _UsersService:UsersService) {
      this.aboutUsers = this._UsersService.users;
  }

  ngOnInit(): void {
  }

}
