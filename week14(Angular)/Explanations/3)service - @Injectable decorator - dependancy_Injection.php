<!-- 
Service:
    -we have something in angular called service , service is data
    -so if we have data needed to be shared among all components in this module
    -service is shared data and logic(functions) between components

    -for example: 
        -we are using certain api/array/function/....., to get some movies details
        -so if we used this api in home.component.ts only
        -so we can't use this api anywhere except this component only

        -and if we need this api in another component, so we have to use it again in anotherComponent.component.ts
        -and so on

        -so they made services
    ----------------------------------------------------------------------------------------------------------------------------------------------------------

    How to generate service:
        -command:
            ng generate service myserviceName --skip-tests
                or
            ng g s myserviceName --skip-tests
        
        -a file will be created
        -service is a class
        -any data/function/.... we want to share among all component
        -in order to use this data , we need to import service class from service.ts file in our component.ts file
        -then make object from service class
        -then save object array inside property array
        -then use this array inside component.html


        Example:
            ng g s users --skip-tests

            -users.service.ts file will be created 
            -we want to share users array among all components
            -so we will put this array in users.services.ts

    ----------------------------------------------------------------------------------------------------------------------------------------------------------
    anyName.service.ts file:
        @Injectable decorator:
            @Injectable({
                providedIn: 'root'
            })
            inorder to use @injectable decorator , we need to import injectable class from "@angular/core"
            
            -providedIn:
                determine where/what modules can see my service
                
            -providedIn:'root'
                -means that my service is available in all modules of my application

            -providedIn: HrModule 
                -means that my service is available in Hr module only
                -but we must import MrModule class 

            -providedIn: [AppModule, HrModule, ...]
                -we can make array of modules
                -service is available in appModule and hrModule
    ----------------------------------------------------------------------------------------------------------------------------------------------------------
    How to use Service:
        1)put our data inside service.ts file
        2)go to myComponent.component.ts and make object of service class using dependancy injection

        Example:
            users.service.ts:
                import { Injectable } from '@angular/core';

                @Injectable({
                providedIn: "root"
                })
                export class UsersService {
                    users = [
                        {name:"ahmed", age:25, gender:"male", salary:5000, dateOfBirth:"1/1/2001"},
                        {name:"ali", age:23, gender:"male", salary:5000, dateOfBirth:"1/1/2001"},
                        {name:"mai", age:29, gender:"female", salary:5000, dateOfBirth:"1/1/2001"},
                        {name:"amal", age:22, gender:"female", salary:5000, dateOfBirth:"1/1/2001"},
                        {name:"zaki", age:26, gender:"male", salary:5000, dateOfBirth:"1/1/2001"},
                    ];

                    constructor() { }
                }
            home.component.ts:
                import { UsersService } from './../users.service';

                @Component({
                    selector: 'app-home',
                    templateUrl: './home.component.html',
                    styleUrls: ['./home.component.css']
                })
                export class HomeComponent implements OnInit {

                    homeUsers:any = [];
                    constructor(private _UsersService:UsersService) {
                        this.homeUsers = this._UsersService.users;
                    }

                ngOnInit(): void {
                    }

                }
                
                -_UsersService:UsersService , we made object from UsersService class By using dependancy injection
                -private _UsersService:UsersService , private make _UsersService 
                object a property which can be accessed inside class

                -_UsersService.users to get users array

                -we need to put array in a variable
                -so we made empty array property
                -homeUsers:any = [];
                -in js , since we have property inside class , to use that property we need to say this.myProperty
            home.component.html:
                <table *ngIf="homeUsers.length > 0 ; else hambozo" class="table w-75 m-auto table-hover table-dark table-striped table-bordered text-center">
                    <thead>
                        <th>index</th>
                        <th>name</th>
                        <th>age</th>
                        <th>gender</th>
                        <th>salary</th>
                        <th>dateOfBirth</th>
                    </thead>
                    <tbody>
                        <tr *ngFor="let user of homeUsers; let i = index">
                        <td>{{i+1}}</td>
                        <td>{{user.name}}</td>
                        <td>{{user.age}}</td>
                        <td>{{user.gender}}</td>
                        <td>{{user.salary}}</td>
                        <td>{{user.dateOfBirth}}</td>
                        </tr>
                    </tbody>
                </table>


                <ng-template #hambozo>
                    <h2 class="text-center">Sorry No Data</h2>
                </ng-template>

            about.compoenent.ts:
                import { Component, OnInit } from '@angular/core';
                import { UsersService } from './../users.service';

                @Component({
                    selector: 'app-about',
                    templateUrl: './about.component.html',
                    styleUrls: ['./about.component.css']
                })

                export class AboutComponent implements OnInit {

                    aboutUsers:any = [];
                    constructor(private _UsersService:UsersService) {
                        this.aboutUsers = this._UsersService.users;
                    }

                    ngOnInit(): void {
                    }
                }
            about.component.html:
                <div class="jumbotron">
                    <h1 class="display-4">About, world!</h1>
                    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured
                        content or information.</p>
                    <hr class="my-4">
                    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                    <table *ngIf="aboutUsers.length > 0 ; else hambozo"
                        class="table w-75 m-auto table-hover table-dark table-striped table-bordered text-center">
                        <thead>
                        <th>index</th>
                        <th>name</th>
                        <th>age</th>
                        <th>gender</th>
                        <th>salary</th>
                        <th>dateOfBirth</th>
                        </thead>
                        <tbody>
                        <tr *ngFor="let user of aboutUsers; let i = index">
                            <td>{{i+1}}</td>
                            <td>{{user.name}}</td>
                            <td>{{user.age}}</td>
                            <td>{{user.gender}}</td>
                            <td>{{user.salary}}</td>
                            <td>{{user.dateOfBirth}}</td>
                        </tr>
                        </tbody>
                    </table>


                    <ng-template #hambozo>
                        <h2 class="text-center">Sorry No Data</h2>
                    </ng-template>
                </div>


    ----------------------------------------------------------------------------------------------------------------------------------------------------------
    -how to generate module:
        command:
            ng g m hr
                or
            ng generate module hr
        
        -hr.module.ts file is created
    ----------------------------------------------------------------------------------------------------------------------------------------------------------
    dependancy Injection(DI):
        Example without DI:
            class A{
                constructor(){}
            }
            class B{
                constructor(){}
            }
            class C{
                a;
                b;
                constructor(){
                    this.a = new A;
                    this.b = new B;
                }
            }
        Example2 without DI:
            class A{
                constructor(parameter){}
            }
            class B{
                constructor(){}
            }
            class C{
                a;
                b;
                constructor(){
                    this.a = new A();
                    this.b = new B();
                }
            }
            -this will give error, as we need to pass parameter to constructor of A
            -so we shouldn't make object from class inside another class
            -because other classes may add/depend on parameters

        -DI is a coding pattern class receives its dependancies from external sources rather than creating them itself

        Example with DI:
            class A{
                constructor(parameter){}
            }
            class B{
                constructor(){}
            }
            class C{
                a;
                b;
                constructor(a, b){
                    this.a = a;
                    this.b = b;
                }
            }    
            
            let a = new A(parameter);
            let b = new B();
            let c = new C(a,b);

            
            
        Example with DI:
            class A{
                constructor(parameter){}
            }
            class B{
                constructor(parameter){}
            }
            class C{
                a;
                b;
                constructor(a, b){
                    this.a = a;
                    this.b = b;
                }
            }    
            
            let a = new A(parameter);
            let b = new B(parameter);
            let c = new C(a,b);
            
            -we only passed objects of a, b to class C
            -C don't bother itself with instantiation of other classes

        Example with DI:
            let a = new A();
            let b = new B();
            let d = new d();
            let e = new e();
            let f = new f(e);
            let c = new C(a,b,d,f);

            -with bigger examples ,we need to instantiates many classes ourselves
            -and this is hard for developer
            -so Framework like Angular do this thing for us


        Example of services:
            users.services.ts:

                @Injectable({
                providedIn: "root"
                })
                export class UsersService {
                users = [
                    {name:"ahmed", age:25, gender:"male", salary:5000, dateOfBirth:"1/1/2001"},
                    {name:"ali", age:23, gender:"male", salary:5000, dateOfBirth:"1/1/2001"},
                    {name:"mai", age:29, gender:"female", salary:5000, dateOfBirth:"1/1/2001"},
                    {name:"amal", age:22, gender:"female", salary:5000, dateOfBirth:"1/1/2001"},
                    {name:"zaki", age:26, gender:"male", salary:5000, dateOfBirth:"1/1/2001"},
                ];

            home.component.ts:
                import { UsersService } from './../users.service';

                export class HomeComponent implements OnInit {

                    homeUsers:any = [];
                    constructor(private _UsersService:UsersService) {
                        this.homeUsers = this._UsersService.users;
                    }
                }

                -we only passed object from UsersService type without handling service constructor 
                
                -so if any changes happed in UsersService constructor , we will not change any thing in homeComponent 

                -we passed this object to homeComponent constructor
                
                





-->
