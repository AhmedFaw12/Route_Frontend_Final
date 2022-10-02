import { Injectable } from '@angular/core';
import { User } from './user';

@Injectable({
  providedIn: "root"
})
export class UsersService {
  users:User[] = [
    {name:"ahmed", age:25, gender:"male", salary:5000, dateOfBirth:"1/1/2001"},
    {name:"ali", age:23, gender:"male", salary:5000, dateOfBirth:"1/1/2001"},
    {name:"mai", age:29, gender:"female", salary:5000, dateOfBirth:"1/1/2001"},
    {name:"amal", age:22, gender:"female", salary:5000, dateOfBirth:"1/1/2001"},
    {name:"zaki", age:26, gender:"male", salary:5000, dateOfBirth:"1/1/2001"},
  ];

  constructor() { }
}
