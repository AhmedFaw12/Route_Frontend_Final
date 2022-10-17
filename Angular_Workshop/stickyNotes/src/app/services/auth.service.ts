import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { BehaviorSubject, Observable } from 'rxjs';
import jwtDecode from 'jwt-decode';
import { Router } from '@angular/router';


@Injectable({
  providedIn: 'root'
})
export class AuthService {

  baseURL:string = "https://routeegypt.herokuapp.com/";

  currentUser:any = new BehaviorSubject(null);

  constructor(private _HttpClient:HttpClient, private _Router:Router) {
    if(localStorage.getItem("userToken")){
      this.saveCurrentUser();
    }
  }

  signUp(data:any):Observable<any>{

    return this._HttpClient.post(`${this.baseURL}signup`,data);
  }

  signIn(data:any):Observable<any>{
    return this._HttpClient.post(`${this.baseURL}signin`, data);
  }

  signOut(data:any):Observable<any>{
    return this._HttpClient.post(`${this.baseURL}signout`, data);
  }

  saveCurrentUser(){
    let token:any = localStorage.getItem("userToken");
    try{

      this.currentUser.next(jwtDecode(token));
    }catch(error){
      localStorage.clear();
      this.currentUser.next(null);
      this._Router.navigate(["/signin"]);
    }
  }
}
