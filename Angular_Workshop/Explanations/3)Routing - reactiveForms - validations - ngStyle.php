<!-- 
routing:
    app.component.html:
        <app-navbar></app-navbar>

        <router-outlet></router-outlet>

    app-routing.module.ts:
        import { NotFoundComponent } from './components/not-found/not-found.component';
        import { ProfileComponent } from './components/profile/profile.component';
        import { SignInComponent } from './components/sign-in/sign-in.component';
        import { SignUpComponent } from './components/sign-up/sign-up.component';

        const routes: Routes = [
            {path:"", redirectTo:"signin" , pathMatch:"full"},
            {path:"signin", component:SignInComponent},
            {path:"profile", component:ProfileComponent},
            {path:"signup", component:SignUpComponent},
            {path:"**", component:NotFoundComponent},
        ];

    navbar.component.html:
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{status}}
          </a>
          <ul class="dropdown-menu">
            <li><a (click)="getValue($event)" class="dropdown-item" routerLink="/signup">SignUp</a></li>
            <li><a (click)="getValue($event)" class="dropdown-item" routerLink="/signin">SignIn</a></li>
          </ul>
        </li>

    navbar.component.ts:
        status:string = "SignIn";

        getValue($eventInfo:any):void{
            this.status = $eventInfo.target.text;
        }

------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
ReactiveForms & validations:
    -notes on reactiveForms:
        -forms reload page by default
        -when we use [formGroup]="myFormName" 
        -it prevents form default(reloading)
        
        -if we add formControlName in html , and we didn't make its formControl in ts , error is produced
        -if we add formControl ints , and we didn;t make its formControlName in html , no error is produced

    -notes on js object naming:
        -we can put property name between "" , we use it when our name consists of two parts separated by space or -  :
            let myObj =  {
                "first-name" : new FormControl(....),       
                first_name : new FormControl(....),       
                firstName : new FormControl(....),       
            }
        

    -notes on validation:
        - we want to disable button untill form is valid
        - but user can remove disabled attribute and submit form
        - so we should also make security in ts also
        - when user press submit and perform function 
        - we will go to the function and do its action if form is valid
        - also we can check if valid is form inside ngSubmit event:
            (ngSubmit)="signInForm.valid && signUp()

        -signUp() :function/anything except false,null,0 gives true
        -if false && true , so no submit will be done
        

        Example:
            html:
                <form [formGroup]="signUpForm" (ngSubmit)="signUp()">
                    ///
                    
                    <button [disabled]='signUpForm.invalid' [ngStyle]="signUpForm.invalid?{ 'background-color':'gray'}:{'background-color':'#17a2b8'}" class="btn submit-btn w-100" type="submit">Sign Up</button>
                </form>

            ts:
                signUp(){
                    if(this.signUpForm.valid){

                        console.log(this.signUpForm);
                        console.log(this.signUpForm.value);
                    }
                }
                

        -we want when button is disabled to change backgroundColor and when enabled to get old backgroundColor
            1)first solution:
                <button [disabled]='signUpForm.invalid' [style.backgroundColor]="signUpForm.invalid?'gray':'#17a2b8'" class="btn submit-btn w-100" type="submit">Sign Up</button>

                -we used style binding , but style binding allows me to add one style property only

            2)second solution:
                ngStyle directive:
                    -An attribute directive that updates styles for the containing HTML element. Sets one or more style properties

                    -we use property binding on ngStyle
                    -we make condition using ternary operator
                    -if true pass object and write css property with value inside it
                    -if false pass object and write css property with value inside it

                    Example:
                         <button [disabled]='signUpForm.invalid' [ngStyle]="signUpForm.invalid?{ 'background-color':'gray', 'border-color':'gray'}:{'background-color':'#17a2b8' , 'border-color':'#17a2b8'}" class="btn submit-btn w-100" type="submit">Sign Up</button>

            3)third solution:
                -ngStyle solution is perfect ,but we write two much code in html
                -so we will save these objects in variable in ts and call them using binding



full Example on reactive forms and validations:
    signUp:
        sign-up.component.html:
            <section id="signUp">
                <form [formGroup]="signUpForm" (ngSubmit)="signUpForm.valid && signUp()">
                    <div class="form" >
                    <div class="row">

                        <div class="col-md-6 mb-3">

                        <input [class.is-valid]="signUpForm.get('firstName')?.status =='VALID'" type="text" formControlName="firstName" class="form-control" placeholder="Enter First Name">

                        <div *ngIf="signUpForm.get('firstName')?.errors && signUpForm.get('firstName')?.touched" class="alert alert-danger my-2">
                            <p *ngIf="signUpForm.get('firstName')?.errors?.required"> first name is required</p>
                        </div>

                        </div>

                        <div class="col-md-6 mb-3">

                        <input [class.is-valid]="signUpForm.get('lastName')?.status =='VALID'" type="text" formControlName="lastName" class="form-control" placeholder="Enter Last Name">

                        <div *ngIf="signUpForm.get('lastName')?.errors && signUpForm.get('lastName')?.touched" class="alert alert-danger my-2">
                            <p *ngIf="signUpForm.get('lastName')?.errors?.required"> last name is required</p>
                        </div>

                        </div>

                    </div>

                    <div class="mb-3">
                        <input [class.is-valid]="signUpForm.get('email')?.status =='VALID'" type="email" formControlName="email" class="form-control" placeholder="Enter Your Email">

                        <div *ngIf="signUpForm.get('email')?.errors && signUpForm.get('email')?.touched" class="alert alert-danger my-2">
                        <p *ngIf="signUpForm.get('email')?.errors?.required">Email is required</p>
                        <p *ngIf="signUpForm.get('email')?.errors?.email">Email is Invalid</p>

                        </div>
                    </div>

                    <div class="mb-3">
                        <input [class.is-valid]="signUpForm.get('age')?.status =='VALID'" type="number" formControlName="age" class="form-control" placeholder="Enter Your Age">

                        <div *ngIf="signUpForm.get('age')?.errors && signUpForm.get('age')?.touched" class="alert alert-danger my-2">
                        <p *ngIf="signUpForm.get('age')?.errors?.required">Age is required</p>
                        <p *ngIf="signUpForm.get('age')?.errors?.min">Min age is 16</p>
                        <p *ngIf="signUpForm.get('age')?.errors?.max">Max age is 80</p>

                        </div>

                    </div>

                    <div class=" mb-3">
                        <div class="input-group">
                        <input  [class.is-valid]="signUpForm.get('password')?.status =='VALID'" [type]="type" formControlName="password" class="form-control " placeholder="Enter Your Password">
                        <span (click)="changePasswordAppearance()" style="cursor: pointer;" class="input-group-text" id="basic-addon2"><i class="fas fa-eye"></i></span>
                        </div>

                        <div *ngIf="signUpForm.get('password')?.errors && signUpForm.get('password')?.touched" class="alert alert-danger my-2">
                        <p *ngIf="signUpForm.get('password')?.errors?.required">Password is required</p>
                        <ul class="list-unstyled" *ngIf="signUpForm.get('password')?.errors?.pattern">
                            <li>password must contain at least eight characters</li>
                            <li>at least one number</li>
                            <li>and both lower and uppercase letters</li>
                            <li>and special characters</li>
                        </ul>
                        </div>

                    </div>

                    <button [disabled]='signUpForm.invalid' [ngStyle]="signUpForm.invalid?isStyleInvalid:isStyleValid" class="btn submit-btn w-100" type="submit">Sign Up</button>

                    </div>
                </form>
            </section>

        app.module.ts:
            import { ReactiveFormsModule } from '@angular/forms';
            imports: [
                BrowserModule,
                AppRoutingModule,
                ReactiveFormsModule
            ],

        sign-up.component.ts:
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


    ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    signIn component:
        sign-in.component.html:
            <section id="signIn" class="">
                <form [formGroup]="signInForm" (ngSubmit)=" signInForm.valid && signIn()">
                    <div class="form">
                    <div class="mb-3">
                        <input [class.is-valid]="signInForm.get('email')?.status =='VALID'" type="email" formControlName="email" class="form-control" placeholder="Enter Your Email">

                        <div *ngIf="signInForm.get('email')?.errors && signInForm.get('email')?.touched" class="alert alert-danger my-2">
                        <p *ngIf="signInForm.get('email')?.errors?.required">Email is required</p>
                        <p *ngIf="signInForm.get('email')?.errors?.email">Email is Invalid</p>

                        </div>
                    </div>

                    <div class=" mb-3">
                        <div class="input-group">
                        <input  [class.is-valid]="signInForm.get('password')?.status =='VALID'" [type]="type" formControlName="password" class="form-control " placeholder="Enter Your Password">
                        <span (click)="changePasswordAppearance()" style="cursor: pointer;" class="input-group-text" id="basic-addon2"><i class="fas fa-eye"></i></span>
                        </div>

                        <div *ngIf="signInForm.get('password')?.errors && signInForm.get('password')?.touched" class="alert alert-danger my-2">
                        <p *ngIf="signInForm.get('password')?.errors?.required">Password is required</p>
                        <ul class="list-unstyled" *ngIf="signInForm.get('password')?.errors?.pattern">
                            <li>password must contain at least eight characters</li>
                            <li>at least one number</li>
                            <li>and both lower and uppercase letters</li>
                            <li>and special characters</li>
                        </ul>
                        </div>

                    </div>
                    <button [disabled]="signInForm.invalid" [ngStyle]="signInForm.invalid?isStyleInvalid:isStyleValid" class="btn submit-btn w-100">Sign In</button>
                    </div>
                </form>
            </section>
            
        sign-in.component.ts:  
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



-->