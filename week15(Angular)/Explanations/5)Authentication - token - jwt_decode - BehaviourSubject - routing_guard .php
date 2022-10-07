<!-- 
Authentication - routing guard:
    
    -we will test login/signin api using postman
    -we will make post request and we will use endPoint:/login
    -we will send with request body an object containing: email and password
    
    -token:
        -when we send request,  if success, we will receive response containing success message and a token
        
        -this token contain all user information(firstname, lastname, age, email) who made login 
        -this user information is encoded
        -backend developer encode this information using library called (jwt)
        Why backend developer send a token:
            -so that we will decode this token and get user information
            -this token means that user login to my website
            -when token is removed , this means that user has logout

        how to decode token:
            -we will use library called(jwt-decode) to decode token
            -(jwt-decode) take token encoded by (jwt) and decode it
            -we will install jwt-decode library using this npm command:
                npm i jwt-decode
            -we will save token in localStorage:
                localStorage.setItem('userToken', response.token)

                -response.token is string ,so we don't need to use JSON.stringify

            -then we will make property in AuthService class called currentUser = null
            -then we will make a function called saveCurrentUser that will take userToken from localStorage then decode it using jwtDecode function
            -so we must import jwtDecode function
            -then call saveCurrentUser inside login ts file before we navigate to home page
        
    -we want to hide (home, about, movies, tv shows, network, people, logout)links if we didn't login
    -we will only show (login, register) only:
        -so go to navbar ts file
        -import authService class and make object from it using DI
        -we make boolean flag called isLogin = false 
        -Wrong Way:
            -then inside constructor, if CurrentUser != null ==> make isLogin = true
            - if CurrentUser == null ==> make isLogin = false

            -if we did this inside constructor , we will only check for currentUser once at the beigining (when open website)

        -right Way:
            -we need to continuosly watch currentUser ,when its value change , change isLogin value
        --------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        -BehaviourSubject observable:
            -it is a built-in observable class inside RxJS library

            -Observable is a Generic, and BehaviorSubject is technically a sub-type of Observable because BehaviorSubject is an observable with specific qualities.

            -we need to continuosly watch/subscribe property ,when its value change , change isLogin value

            - BehaviorSubject keeps the last emitted value and emits it immediately to new subscribers.

            -BehaviourSubject methods:
                -next() : to receive a value (to put data inside observable)
                -getValue() :
                    - to get value of behaviourSubject
                    -to get the current value
                    -we can use it without/with subscribe
                    -if we used it without subscribe ,it will get it one time only


            -How to use BehaviourSubject obversable:
                -import BehaviourSubject class
                -make new object from it normally without DI because we need to use its constructor
                -we pass null initial value in the constructor
                
                -we can then subscribe/watch our behaviourSubject 
                -when value inside object changes , do certain action

                -in ourExample:
                    -we will make currentUser an object from behaviourSubject
                    -then decode userToken and save it inside currentUser using next() method
                    -we can then subscribe/watch our behaviourSubject object (currentUser)
                    -if value inside currentUser != null ,isLogin = true
                    -else , make isLogin = false
                    
                    -then go to navbar html file hide all links using *ngIf = "isLogin"
                    -when we login , these links will appear ,and we will hide login, register links
    ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    Routing Guard:
        -we successfully managed to hide links
        -but if user write /home path in the url , home component will appear 
        -so we need to secure/guard our paths/routing

        -if currentUser == null, no one can enter pass
        -if currentUser != null, user can enter pass

        -we will generate guard using command:
            ng generate guard auth --skip-tests
                or 
            ng g g auth --skip-tests

            -angular will ask me :Which interfaces would you link to implement?(why do you want guard):
                -CanActivate:
                    -we will make guard on routes
                    -means activate component that succeed from(pass) guard
                -CanActivateChild:
                    -means activate component childs(we can create components inside a component) that succeed from(pass) guard
                -CanDeactivate:
                    -means don't activate component that succeed from(pass) guard
                -CanLoad:
                    -load component but don't activate

            -we will always choose CanActivate

            -auth.guard.ts file is created 
        -guard is a class containing method
        -this method return true or false

        -if false we will navigate user to login page

        -how to apply guard on our routes:
            -go to app-routing.module.ts
            -go to required component path
            -add (canActive property) which takes array of our guards to be applied on this route
            -canActive means ,we can activate component only it passes these guards



        -in ourExample :
            -go to auth.guard.ts
            -import AuthService class and make object using DI
            -we will return true if currentUser != null

            -at any point, you can retrieve the last value of the BehaviourSubject in a non-observable code using the getValue() method.
            -so we can use getValue directly without subscribe

            -if currentUser == null,  we will navigate user to login page then return false

            -go to app-routing.module.ts
            -go to required component path
            -add (canActive) which takes array of our guards to be applied on this route
            -canActive means ,we can activate component only it passes these guards

        Important Note:
            -after we made our routing guard, we will login and call saveCurrentUser
            -so userToken is saved in localStorage
            -and currentUser will equal userToken decoded
            -if user write for example (/about, /home, ....), it will navigate me to login page
            -when user write anything in path and press enter, website will be refreshed and currentUser will be null initial value as if we didn't call saveCurrentUser

            -so we need to handle this problem
            -we will go to auth.service.ts
            -we will check if there is userToken in localStorage , we will call saveCurrentUser , else(user didn't login) make currentUser = new BehaviorSubject and has null value


------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Full Example on authentication & BehaviourSubject & routing guard:
    auth.service.ts:
        import { Injectable } from '@angular/core';
        import { HttpClient } from '@angular/common/http';
        import { BehaviorSubject, Observable } from 'rxjs';
        import jwtDecode from 'jwt-decode';

        @Injectable({
        providedIn: 'root'
        })
        export class AuthService {
            currentUser:any = new BehaviorSubject(null);

            if(localStorage.getItem("userToken") != null){
               this.saveCurrentUser();
            }

            saveCurrentUser(){
                let token:any = localStorage.getItem('userToken');
                this.currentUser.next(jwtDecode(token)) ;
            }
            //codes
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
            //code
            
            error:string = '';
            constructor(private _AuthService:AuthService, private _Router:Router) { }

            //code

            submitLoginForm(loginForm:FormGroup){
                this._AuthService.login(loginForm.value).subscribe((response)=>{
                    if(response.message == "success"){
                        localStorage.setItem("userToken", response.token);
                        this._AuthService.saveCurrentUser();
                        this._Router.navigate(['/home']);

                    }else{
                        this.error = response.message;
                    }
                });
            }
        }
    navbar.component.ts:
        import { Component, OnInit } from '@angular/core';
        import { AuthService } from './../auth.service';

        @Component({
        selector: 'app-navbar',
        templateUrl: './navbar.component.html',
        styleUrls: ['./navbar.component.scss']
        })
        export class NavbarComponent implements OnInit {
            isLogin:boolean = false;
            constructor(private _AuthService:AuthService) {
                this._AuthService.currentUser.subscribe(() =>{
                    if(this._AuthService.currentUser.getValue() != null){
                        this.isLogin = true;
                    }else{
                        this.isLogin = false;
                    }
                });
            }

            ngOnInit(): void {
            }
        }
    navbar.component.html:
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <a class="navbar-brand" routerLink="home">Noxe</a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a *ngIf="isLogin" class="nav-link" routerLink="home">Home</a>
                        </li>
                        <li class="nav-item">
                        <a *ngIf="isLogin" class="nav-link" routerLink="about">About</a>
                        </li>
                        <li class="nav-item">
                        <a *ngIf="isLogin" class="nav-link" routerLink="movies">Movies</a>
                        </li>
                        <li class="nav-item">
                        <a *ngIf="isLogin" class="nav-link" routerLink="tv">Tv shows</a>
                        </li>
                        <li class="nav-item">
                        <a *ngIf="isLogin" class="nav-link" routerLink="network">Network</a>
                        </li>
                        <li class="nav-item">
                        <a *ngIf="isLogin" class="nav-link" routerLink="people">people</a>
                        </li>

                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
                    <div class="social-media me-4">
                        <i class="fab mx-2 fa-facebook"></i>
                        <i class="fab mx-2 fa-spotify"></i>
                        <i class="fab mx-2 fa-instagram"></i>
                        <i class="fab mx-2 fa-youtube"></i>
                    </div>

                    <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a *ngIf="!isLogin" class="nav-link" routerLink="login">Login</a>
                    </li>
                    <li class="nav-item">
                    <a *ngIf="!isLogin" class="nav-link" routerLink="register">Register</a>
                    </li>
                    <li class="nav-item">
                    <a *ngIf="isLogin" class="nav-link">Logout</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    auth.guard.ts:
        -generate authGuard : ng g g auth --skip-tests

        import { Injectable } from '@angular/core';
        import { Observable } from 'rxjs';
        import { ActivatedRouteSnapshot, CanActivate, Router, RouterStateSnapshot, UrlTree } from '@angular/router';
        import { AuthService } from './auth.service';


        @Injectable({
        providedIn: 'root'
        })
        export class AuthGuard implements CanActivate {
            constructor(private _AuthService:AuthService, private _Router:Router){}

            canActivate(
                route: ActivatedRouteSnapshot,
                state: RouterStateSnapshot): Observable<boolean | UrlTree> | Promise<boolean | UrlTree> | boolean | UrlTree {

                if(this._AuthService.currentUser.getValue() != null){
                    return true;
                }else{
                    this._Router.navigate(['/login']);
                    return false;
                }
            }
        }
    
    app-routing.module.ts:
        import { AuthGuard } from './auth.guard';

        const routes: Routes = [
            {path:"", redirectTo:"home", pathMatch:"full"},
            {path:"home", canActivate:[AuthGuard], component:HomeComponent},
            {path:"about", canActivate:[AuthGuard], component:AboutComponent},
            {path:"movies", canActivate:[AuthGuard], component:MoviesComponent},
            {path:"tv", canActivate:[AuthGuard], component:TvComponent},
            {path:"network", canActivate:[AuthGuard], component:NetworkComponent},
            {path:"people", canActivate:[AuthGuard], component:PeopleComponent},
            {path:"login",  component:LoginComponent},
            {path:"register", component:RegisterComponent},
            {path:"**", component:NotfoundComponent},
        ];

    
-->
