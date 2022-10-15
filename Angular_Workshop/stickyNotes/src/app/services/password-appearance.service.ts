import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class PasswordAppearanceService {
  type:string = "password";

  constructor() { }

  changePasswordAppearance(){
    if(this.type == "password"){
      this.type = "text";
    }else{
      this.type = "password";
    }
  }
}
