import { Component, OnInit } from '@angular/core';
import { ParticleGroundService } from 'src/app/services/particle-ground.service';
import { PasswordAppearanceService } from 'src/app/services/password-appearance.service';
import {FormGroup, FormControl, Validators} from "@angular/forms";
import { AuthService } from 'src/app/services/auth.service';
import { Router } from '@angular/router';


@Component({
  selector: 'app-sign-up',
  templateUrl: './sign-up.component.html',
  styleUrls: ['./sign-up.component.scss']
})
export class SignUpComponent implements OnInit {
  type:string = this._PasswordAppearanceService.type;

  isStyleInvalid= {'background-color':'gray', 'border-color':'gray'};
  isStyleValid = {'background-color':'#17a2b8' , 'border-color':'#17a2b8'};

  isClicked:boolean = false;

  successMsg:string = '';
  isSuccess:boolean = false;

  errorMsg:string = '';
  isError:boolean = false;

  signUpForm = new FormGroup({
    first_name: new FormControl(null,
      [Validators.required, Validators.pattern(/^([a-zA-Z]+[,.]?[ ]?|[a-z]+['-]?)+$/)]),
    last_name: new FormControl(null,
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

      this.isClicked = true;

      this._AuthService.signUp(this.signUpForm.value).subscribe((response)=>{

        this.isClicked = false;

        if(response.message == "success"){


          this.isSuccess = true;
          this.isError = false;
          this.successMsg = response.message;
          this.signUpForm.reset();

          setTimeout(()=>{
            this.isSuccess = false;
            this._Router.navigate(["/signin"]);
          }, 1000);

        }else{
          this.isError = true;
          this.errorMsg = response.errors.email.message;
        }

        console.log(response);
      });
    }
  }

  constructor(
    private _ParticleGroundService:ParticleGroundService,
    private _PasswordAppearanceService:PasswordAppearanceService,
    private _AuthService:AuthService,
    private _Router:Router) { }

  changePasswordAppearance(){
    this._PasswordAppearanceService.changePasswordAppearance();
    this.type = this._PasswordAppearanceService.type;
  }


  ngOnInit(): void {
    this._ParticleGroundService.fireParticlePlugin("#signUp");

  }

}
