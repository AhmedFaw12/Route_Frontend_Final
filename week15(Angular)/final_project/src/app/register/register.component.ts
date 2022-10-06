import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.scss']
})
export class RegisterComponent implements OnInit {

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

  submitRegisterForm(registerForm:FormGroup){
    console.log(registerForm.value);
  }

  type:string = "password";
  changeAppearance():void{
    if(this.type == "password"){
      this.type="text";
    }else{
      this.type="password";
    }
  }
  constructor() { }

  ngOnInit(): void {
  }

}
