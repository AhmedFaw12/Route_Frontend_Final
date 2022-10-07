<!--  
Register Api:
    -we need to register using register/signup api
    -so we make a new service called (auth) service
    -auth means do we have right to signup, ....(to do something)

    -we need to import HttpClientModule in app.module.ts, and add it to imports array
    -then we need to import HttpClient class ,Observable class in auth.service.ts
    -then make object from HttpClient using DependancyIncjection
    -then we make register function:
        -this function will take formGroup.value object(that contains all my input values)
        -then we use post() method of HttpClient:
            -take two paramters:
                -api url
                -object to be sent
            -it returns observable response
            -this response may be a success message
            -or it may be error 
        -don't forget to cast observable to a datatype(any forexample)
    
    -then go to register.component.ts
    -import AuthService class, and make object from it using (DI)dependancyInjection
    -then make submitRegisterForm that we will called when we submit form (ngSubmit event)
    -then subscribe to observable returned from register function in auth service
    -we will pass a function to subscribe , this function will be called after response come 
    -if response has success message ,we go to login page

    -Programmatic Routing:
        -we can make routing by code , not by clicking on link like we did before
        -so we need to import Router Class
        -make object from it using DI
        -Router has method called navigate():
            -we will pass to it array
            -this array contain 2 parameter , 1st parameter is required
            -1st parameter is page path : '/login'
            -2nd parameter is variable that we want to pass with page path

        -to use Router to need to:
            - specify routes array paths in app-routing.module.ts
            - import AppRoutingModule in app.module.ts
            - make navbar in navbar component nad add routerLink attributes
            - add router-outlet tag in app.component.html

    -if response has errors , we will display error above form html

--------------------------------------------------------------------------------------------------------------------------------------------------------------------
Full Register Api Example:
    -ng g s auth --skip-tests

    app.module.ts:
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
        }
    
    register.component.ts:
        import { AuthService } from '../auth.service';
        import { Router } from '@angular/router';
        
        export class RegisterComponent implements OnInit {
            error:string = '';
            constructor(private _AuthService:AuthService, private _Router:Router) {
    
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
        }

    register.component.html:
        <div *ngIf="error" class="alert alert-danger">
            <p>{{error}}</p>
        </div>

        <form [formGroup]="registerForm" (ngSubmit)="submitRegisterForm(registerForm)">
            //////
        </form>
    


-->