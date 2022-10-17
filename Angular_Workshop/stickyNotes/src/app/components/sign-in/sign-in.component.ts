import { Component, OnInit } from '@angular/core';
import { ParticleGroundService } from 'src/app/services/particle-ground.service';
import { PasswordAppearanceService } from 'src/app/services/password-appearance.service';
import {FormGroup, FormControl, Validators} from "@angular/forms";
import { AuthService } from 'src/app/services/auth.service';
import { ActivatedRoute, Router } from '@angular/router';


@Component({
  selector: 'app-sign-in',
  templateUrl: './sign-in.component.html',
  styleUrls: ['./sign-in.component.scss']
})
export class SignInComponent implements OnInit {

  type:string = this._PasswordAppearanceService.type;

  isStyleInvalid= {'background-color':'gray', 'border-color':'gray'};
  isStyleValid = {'background-color':'#17a2b8' , 'border-color':'#17a2b8'};

  errorMsg:string = '';
  isError:boolean = false;
  isClicked:boolean = false;

  successLogoutMsg:string = '';
  isLogout:boolean = false;

  signInForm = new FormGroup({

    email: new FormControl(null,
      [Validators.email, Validators.required]),

    password: new FormControl(null,
      [Validators.required, Validators.pattern(/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/)]),
  });

  signIn(){
    if(this.signInForm.valid){

      this.isClicked = true;

      this._AuthService.signIn(this.signInForm.value).subscribe((response) =>{
        this.isClicked = false;

        if(response.message == "success"){

          this.isError = false;
          localStorage.setItem("userToken", response.token);
          this._AuthService.saveCurrentUser();
          this._Router.navigate(['/profile']);

        }else{
          this.isError = true;
          this.errorMsg  =response.message;
        }
      });
    }
  }

  constructor(
    private _ParticleGroundService:ParticleGroundService,
    private _PasswordAppearanceService:PasswordAppearanceService,
    private _AuthService:AuthService,
    private _Router:Router,
    private _ActivatedRoute:ActivatedRoute) { }

  changePasswordAppearance(){
    this._PasswordAppearanceService.changePasswordAppearance();
    this.type = this._PasswordAppearanceService.type;
  }

  ngOnInit(): void {
    this._ParticleGroundService.fireParticlePlugin("#signIn");
    if(this._ActivatedRoute.snapshot.params["successLogout"]){
      this.successLogoutMsg = this._ActivatedRoute.snapshot.params["successLogout"];
      this.isLogout = true;

      setTimeout(()=> {
        this.isLogout = false;
      },1000);
    }
  }
}
