<!-- 
login - login Api:
    -we will do the same like what we did in register:

full Example login:
    app.module.ts:
        import { ReactiveFormsModule } from '@angular/forms';
        import { HttpClientModule } from '@angular/common/http';

        imports: [
            BrowserModule,
            AppRoutingModule,
            ReactiveFormsModule,
            HttpClientModule
        ]
    auth.service.ts:
        import { Injectable } from '@angular/core';
        import { HttpClient } from '@angular/common/http';
        import { Observable } from 'rxjs';

        @Injectable({
        providedIn: 'root'
        })
        export class AuthService {

        constructor(private _HttpClient:HttpClient) {

        }

        register(formData:object):Observable<any>{
            return this._HttpClient.post("https://route-egypt-api.herokuapp.com/signup", formData);
        }
        login(formData:object):Observable<any>{
            return this._HttpClient.post("https://route-egypt-api.herokuapp.com/signin", formData);
        }


        }

    login.component.ts:
        import { Component, OnInit } from '@angular/core';
        import { FormGroup, FormControl, Validators } from '@angular/forms';
        import { AuthService } from '../auth.service';
        import { Router } from '@angular/router';


        @Component({
        selector: 'app-login',
        templateUrl: './login.component.html',
        styleUrls: ['./login.component.scss']
        })
        export class LoginComponent implements OnInit {

        type:string = "password";
        error:string = '';

        constructor(private _AuthService:AuthService, private _Router:Router) { }

        loginForm:FormGroup = new FormGroup({
            email: new FormControl(null,
            [Validators.email, Validators.required]),
            password: new FormControl(null,
            [Validators.required, Validators.pattern("^[A-Z][a-z0-9]{3,8}$")])
        });

        changePasswordAppearance():void{
            if(this.type == "password"){
            this.type="text";
            }else{
            this.type="password";
            }
        }


        submitLoginForm(loginForm:FormGroup){
            this._AuthService.login(loginForm.value).subscribe((response)=>{
            if(response.message == "success"){
                this._Router.navigate(['/home']);

            }else{
                this.error = response.message;
            }
            });
        }


        ngOnInit(): void {
        }

        }
        
    login.component.html:
        <div class="w-75 m-auto py-5">

            <div *ngIf="error" class="alert alert-danger">
                <p>{{error}}</p>
            </div>

            <form [formGroup]="loginForm" (ngSubmit)="submitLoginForm(loginForm)">

                <div class="mb-3">
                <label for="email">email</label>
                <input formControlName="email" class="form-control" type="email" id="email">
                <div *ngIf="loginForm.get('email')?.errors !=null && loginForm.get('email')?.touched" class="alert alert-danger my-2">
                    <p *ngIf="loginForm.get('email')?.errors?.['required']">email is required</p>
                    <p *ngIf="loginForm.get('email')?.errors?.['email']">email is invalid</p>
                </div>
                </div>


                <div class="mb-3">
                <label for="password">password</label>
                <div class="input-group">
                    <input formControlName="password" class="form-control" [type]="type" id="password">
                    <span (click)="changePasswordAppearance()" style="cursor: pointer;" class="input-group-text" id="basic-addon2"><i class="fas fa-eye"></i></span>
                </div>

                <div *ngIf="loginForm.get('password')?.errors !=null && loginForm.get('password')?.touched" class="alert alert-danger my-2">
                    <p *ngIf="loginForm.get('password')?.errors?.['required']">password is required</p>
                    <p *ngIf="loginForm.get('password')?.errors?.['pattern']">password must start with uppercase followed by 3 characters atleast ...</p>

                </div>

                </div>
                <button [disabled]="loginForm.invalid"  class="btn btn-info" type="submit">login</button>

            </form>
        </div>
-->