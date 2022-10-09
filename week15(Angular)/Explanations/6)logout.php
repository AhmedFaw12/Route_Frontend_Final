<!-- 
Logout:

    to logout , we will do :
        -currentUser = null
        -clear usertoken from localStorage
        -navigate to login page

    -we will make a function called logout in AuthService that will do these things
    -then go to navbar ts file
    -make a function and call logout() function inside it
    -then call this function in html when we click on logout

Example:
    auth.service.ts:
        import { Injectable } from '@angular/core';
        import { HttpClient } from '@angular/common/http';
        import { BehaviorSubject, Observable } from 'rxjs';
        import jwtDecode from 'jwt-decode';
        import { Router } from '@angular/router';

        @Injectable({
            providedIn: 'root'
        })
        export class AuthService {
            //code

            constructor(private _HttpClient:HttpClient, private _Router:Router) {
                if(localStorage.getItem("userToken") != null){
                    this.saveCurrentUser();
                }
            }

            //code
            
            logout(){
                this.currentUser.next(null);
                localStorage.removeItem("userToken");
                this._Router.navigate(["/login"]);
            }
        }
    navbar.component.ts:
        isLogout(){
            this._AuthService.logout();
        }

    navbar.component.html:
        <li class="nav-item">
          <a *ngIf="isLogin" (click)="isLogout()" style="cursor:pointer" class="nav-link">Logout</a>
        </li>
-->