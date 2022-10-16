import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { BehaviorSubject, Observable } from 'rxjs';
import jwtDecode from 'jwt-decode';

@Injectable({
  providedIn: 'root'
})
export class AuthService {

  baseURL:string = "https://routeegypt.herokuapp.com/";

  currentUser:any = new BehaviorSubject(null);

  constructor(private _HttpClient:HttpClient) {
    if(localStorage.getItem("userToken")){
      this.currentUser.next(localStorage.getItem("userToken")) ;
    }
  }

  signUp(data:any):Observable<any>{

    return this._HttpClient.post(`${this.baseURL}signup`,data);
  }

  signIn(data:any):Observable<any>{
    return this._HttpClient.post(`${this.baseURL}signin`, data);
  }

  signOut(data:any):Observable<any>{
    return this._HttpClient.post(`${this.baseURL}signin`, data);
  }

  saveCurrentUser(){
    let token:any = localStorage.getItem("userToken");
    this.currentUser.next(jwtDecode(token));
  }
}
