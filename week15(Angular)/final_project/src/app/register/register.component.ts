import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { AuthService } from '../auth.service';
import { Router } from '@angular/router';


@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.scss']
})
export class RegisterComponent implements OnInit {

  type:string = "password";
  error:string = '';
  constructor(private _AuthService:AuthService, private _Router:Router) {

  }

  registerForm:FormGroup = new FormGroup({
    first_name:new FormControl(null,
      [Validators.minLength(3), Validators.pattern("^[a-zA-Z]{3,10}$"), Validators.maxLength(10), Validators.required]),
    last_name:new FormControl(null,
      [Validators.minLength(3), Validators.maxLength(10), Validators.required]),
    age:new FormControl(null,
      [Validators.required, Validators.min(16), Validators.max(80)] ) ,
    email:new FormControl(null,
      [Validators.email, Validators.required]),
    password:new FormControl(null,
       [Validators.required, Validators.pattern("^[A-Z][a-z0-9]{3,8}$")]),
  });



  changePasswordAppearance():void{
    if(this.type == "password"){
      this.type="text";
    }else{
      this.type="password";
    }
  }


  submitRegisterForm(registerForm:FormGroup){
    this._AuthService.register(registerForm.value).subscribe((response)=>{
      if(response.message =="success"){
          this._Router.navigate(["/login"]);
          //success ,go to login

      }else{

        //error
        this.error = response.errors.email.message; 
      }
    });

  }

  ngOnInit(): void {
  }

}
