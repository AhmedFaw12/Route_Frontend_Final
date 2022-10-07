import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { BehaviorSubject, Observable } from 'rxjs';
import jwtDecode from 'jwt-decode';
import { Router } from '@angular/router';

@Injectable({
  providedIn: 'root'
})
export class AuthService {


  constructor(private _HttpClient:HttpClient, private _Router:Router) {
    if(localStorage.getItem("userToken") != null){
      this.saveCurrentUser();
    }
  }
  currentUser:any = new BehaviorSubject(null);

  saveCurrentUser(){
    let token:any = localStorage.getItem('userToken');
    this.currentUser.next(jwtDecode(token)) ;
  }

  register(formData:object):Observable<any>{
    return this._HttpClient.post("https://route-egypt-api.herokuapp.com/signup", formData);
  }
  login(formData:object):Observable<any>{
    return this._HttpClient.post("https://route-egypt-api.herokuapp.com/signin", formData);
  }

  logout(){
    this.currentUser.next(null);
    localStorage.removeItem("userToken");
    this._Router.navigate(["/login"]);
  }
}
