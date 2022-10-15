import { Component, OnInit } from '@angular/core';
import { ParticleGroundService } from 'src/app/services/particle-ground.service';
import { PasswordAppearanceService } from 'src/app/services/password-appearance.service';
import {FormGroup, FormControl, Validators} from "@angular/forms";


@Component({
  selector: 'app-sign-in',
  templateUrl: './sign-in.component.html',
  styleUrls: ['./sign-in.component.scss']
})
export class SignInComponent implements OnInit {

  type:string = this._PasswordAppearanceService.type;

  isStyleInvalid= {'background-color':'gray', 'border-color':'gray'};
  isStyleValid = {'background-color':'#17a2b8' , 'border-color':'#17a2b8'};

  signInForm = new FormGroup({

    email: new FormControl(null,
      [Validators.email, Validators.required]),

    password: new FormControl(null,
      [Validators.required, Validators.pattern(/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/)]),
  });

  signIn(){
    if(this.signInForm.valid){

      console.log(this.signInForm);
      console.log(this.signInForm.value);
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
    this._ParticleGroundService.fireParticlePlugin("#signIn");
  }
}
