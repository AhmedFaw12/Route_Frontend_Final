import { Component, OnInit } from '@angular/core';
import { ParticleGroundService } from 'src/app/services/particle-ground.service';
import { PasswordAppearanceService } from 'src/app/services/password-appearance.service';
import {FormGroup, FormControl, Validators} from "@angular/forms";

@Component({
  selector: 'app-sign-up',
  templateUrl: './sign-up.component.html',
  styleUrls: ['./sign-up.component.scss']
})
export class SignUpComponent implements OnInit {
  type:string = this._PasswordAppearanceService.type;

  isStyleInvalid= {'background-color':'gray', 'border-color':'gray'};
  isStyleValid = {'background-color':'#17a2b8' , 'border-color':'#17a2b8'};

  signUpForm = new FormGroup({
    firstName: new FormControl(null,
      [Validators.required, Validators.pattern(/^([a-zA-Z]+[,.]?[ ]?|[a-z]+['-]?)+$/)]),
    lastName: new FormControl(null,
      [Validators.required, Validators.pattern(/^([a-zA-Z]+[,.]?[ ]?|[a-z]+['-]?)+$/)]),
    email: new FormControl(null,
      [Validators.email, Validators.required]),
    age: new FormControl(null,
      [Validators.min(16), Validators.max(80),Validators.required]),
    password: new FormControl(null,
      [Validators.required, Validators.pattern(/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/)]),
  });

  signUp(){
    if(this.signUpForm.valid){

      console.log(this.signUpForm);
      console.log(this.signUpForm.value);
    }
  }

  constructor(
    private _ParticleGroundService:ParticleGroundService
    ,private _PasswordAppearanceService:PasswordAppearanceService) { }

  changePasswordAppearance(){
    this._PasswordAppearanceService.changePasswordAppearance();
    this.type = this._PasswordAppearanceService.type;
  }


  ngOnInit(): void {
    this._ParticleGroundService.fireParticlePlugin("#signUp");
  }

}
