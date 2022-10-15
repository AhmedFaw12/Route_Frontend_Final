import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.scss']
})
export class NavbarComponent implements OnInit {
  status:string = "SignIn";
  constructor() { }


  getValue($eventInfo:any):void{
    this.status = $eventInfo.target.text;
  }

  ngOnInit(): void {
  }

}
