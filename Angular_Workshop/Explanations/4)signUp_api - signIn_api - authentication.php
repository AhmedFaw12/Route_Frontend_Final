<!-- 
signUp_api:
    -we will make (auth) service that has all apis methods for signUp , signIn, ...
    -to deal with apis , we need to import HttpClientModule in app.module.ts and put it inside imports array
    -we also need to import HttpClient class inside authService and make instance/object using DI(dependancy Injection)
    -we import Observable inside authService
    -we make signUp method using post method like api pdf that we receive from backend developer

    -then we go to sign-up component and import authService and make object from it using DI
    -we subscribe to observable coming from signUp() method
    -when response come , we will check
    -if response.message == "success"
    -we will save successMsg and display it in an alert
    -we will make a boolean flag to control when to display successMsg
    -at first flag = false
    -when msg come, flag = true
    -make errorFlag = false
    -then reset form
    -then we use Router class to navigate to sign-in compoenent


    -else if response.message != "success"
    -we will save errorMsg and display it in an alert
    -we will make a boolean flag to control when to display successMsg
    -at first flag = false
    -when msg come, flag = true
    -if msg == success , make errorflag = false , because if someone register and error appeared , when he register next time , success msg and error msg will appear together , so we need to hide error msg


    -we want when click on signUp button , signUp changes to waiting...
    -so we make a boolean flag isClicked
    -at first flag = false
    -when we click on button , isClicked = true
    -when response come , change isClicked to false again

    Example:
        app.module.ts:
            import { HttpClientModule } from '@angular/common/http';

            imports: [
                BrowserModule,
                AppRoutingModule,
                ReactiveFormsModule,
                FormsModule,
                HttpClientModule
            ],

        auth.service.ts:
            import { Injectable } from '@angular/core';
            import { HttpClient } from '@angular/common/http';
            import { Observable } from 'rxjs';

            @Injectable({
                providedIn: 'root'
            })

            export class AuthService {

                baseURL:string = "https://routeegypt.herokuapp.com/";

                constructor(private _HttpClient:HttpClient) { }

                signUp(data:any):Observable<any>{

                    return this._HttpClient.post(`${this.baseURL}signup`,data);
                }
            }



        sign-up.component.ts:
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

               ////

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

               /////

            }

        
        sign-up.component.html:

            <button [disabled]='signUpForm.invalid' [ngStyle]="signUpForm.invalid?isStyleInvalid:isStyleValid" class="btn submit-btn w-100" type="submit"><span *ngIf="!isClicked">Sign Up</span><span *ngIf="isClicked">Waiting...</span></button>

            <div *ngIf="isSuccess" class="alert alert-success text-center my-3">
                <strong>{{successMsg}}</strong>
            </div>

            <div *ngIf="isError" class="alert alert-danger text-center my-3">
                <strong>{{errorMsg}}</strong>
            </div>

------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
signIn_api:

    auth.service.ts:
        signIn(data:any):Observable<any>{
            return this._HttpClient.post(`${this.baseURL}signin`, data);
        }


    sign-in.component.html:

        <button  [disabled]="signInForm.invalid" [ngStyle]="signInForm.invalid?isStyleInvalid:isStyleValid" class="btn submit-btn w-100"><span *ngIf="!isClicked">Sign In</span><span *ngIf="isClicked">Waiting...</span></button>

        <div *ngIf="isError" class="alert alert-danger text-center my-3">
            <strong>{{errorMsg}}</strong>
        </div>
    
    sign-in.component.html:

        import { AuthService } from 'src/app/services/auth.service';
        import { Router } from '@angular/router';

        signIn(){
            if(this.signInForm.valid){

                this.isClicked = true;

                this._AuthService.signIn(this.signInForm.value).subscribe((response) =>{
                    this.isClicked = false;

                    if(response.message == "success"){

                    this.isError = false;
                    localStorage.setItem("userToken", JSON.stringify(response.token));
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
        private _Router:Router) { }

------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Authentication:
    -we will do same as we did before in final_project (ahmed bahnasy)

    notes:
        -we made guest guard so that if user logged in , then he can't go to signin, signup pages

        -this.isLogin = !!this._AuthService.currentUser.getValue();

        -_AuthService.currentUser.getValue() returns a value not boolean
        -but isLogin is a boolean, 
        -any value will return true , except null
        -so we put ! which means return false
        -and we put !! to return true as it is 
        -we just converted value into a boolean  


    auth.service.ts:
        npm install jwt-decode

        currentUser:any = new BehaviorSubject(null);

        constructor(private _HttpClient:HttpClient) {
            if(localStorage.getItem("userToken")){
            this.currentUser.next(localStorage.getItem("userToken")) ;
            }
        }

        saveCurrentUser(){
            let token:any = localStorage.getItem("userToken");
            this.currentUser.next(jwtDecode(token));
        }

    auth.guard.ts:
        import { ActivatedRouteSnapshot, CanActivate, Router, RouterStateSnapshot, UrlTree } from '@angular/router';
        import { AuthService } from '../services/auth.service';

        constructor(private _Router:Router, private _AuthService:AuthService){}

        canActivate(
            route: ActivatedRouteSnapshot,
            state: RouterStateSnapshot): Observable<boolean | UrlTree> | Promise<boolean | UrlTree> | boolean | UrlTree {

                if(this._AuthService.currentUser.getValue()){
                    return true;
                }else{
                    this._Router.navigate(["/signin"]);
                    return false;
                }
        }

    guest.guard.ts:
        import { ActivatedRouteSnapshot, CanActivate, Router, RouterStateSnapshot, UrlTree } from '@angular/router';

        import { AuthService } from '../services/auth.service';

        constructor(private _AuthService:AuthService, private _Router:Router){}

        canActivate(
            route: ActivatedRouteSnapshot,
            state: RouterStateSnapshot): Observable<boolean | UrlTree> | Promise<boolean | UrlTree> | boolean | UrlTree {

            if(this._AuthService.currentUser.getValue() == null){
                return true;
            }else{
                this._Router.navigate(["/profile"]);
                return false;
            }
        }

        

    app-routing.module.ts:

        import { AuthGuard } from './guards/auth.guard';
        import { GuestGuard } from './guards/guest.guard';

        const routes: Routes = [
            {path:"", redirectTo:"signin" , pathMatch:"full"},
            {path:"signin", canActivate:[GuestGuard], component:SignInComponent},
            {path:"signup",canActivate:[GuestGuard], component:SignUpComponent},
            {path:"profile", canActivate:[AuthGuard], component:ProfileComponent},
            {path:"**", component:NotFoundComponent},
        ];

    
    navbar.component.ts:

        import { AuthService } from 'src/app/services/auth.service';

        isLogin:boolean = false;

        constructor(private _AuthService:AuthService) {}

        ngOnInit(): void {
            this._AuthService.currentUser.subscribe(()=>{
                this.isLogin = !!this._AuthService.currentUser.getValue();
            });
        }

    navbar.component.html:
        <li *ngIf="!isLogin"><a class="dropdown-item" routerLink="/signup">SignUp</a></li>
        <li *ngIf="!isLogin"><a class="dropdown-item" routerLink="/signin">SignIn</a></li>
        <li *ngIf="isLogin"><a class="dropdown-item" >Logout</a></li>

        
-->