<!-- 
Intro:
    -we want to make resgisteration 
    -we made a register component
    -we want to a good register form and make good validation for it
    -and data entered in the form by client, we will send this data to register api made by backend developer
    -and based on the response of api , if client made success register we will redirect user to some page , and if client made wrong register we will display error message for client

    -we need to build form
    -angular has 2 different types of forms:
        -reactive forms:
            -most common
            -more scalable(we can make it bigger or smaller)
            -reusable(we can reuse it in many projects)
            -more testable(can be tested easily)
            - 80%-90% of angular developers use reactive forms
            
        -template-driven forms :
            -for simple forms
--------------------------------------------------------------------------------------------------------------------------------------------------------------------
Reactive forms:
    -inorder to use reactive forms ,we need to import (ReactiveFormsModule) module in app.module.ts 
    -and we add ReactiveFormsModule in imports array
    
    app.module.ts:
        import { ReactiveFormsModule } from '@angular/forms';

        imports: [
            BrowserModule,
            AppRoutingModule,
            ReactiveFormsModule
        ],

    -in angular : 
        -form control is same as form input
        -form group is the thing/container that holds multiple form controls(inputs)
        -form control , form group are classes
        -angular also has another class called validator that has multiple  built-in validations(for password, email, ....)


    -then we go to register component ts file:
        -we will import FormControl, FormGroup, Validators classes
        -we will make normal object from FormGroup and pass object to it
        -that object holds all formControls of my 
        
        -Example on form Control:
            {
                first_name:new FormControl(null)
            }
            -first_name:new FormControl('ahmed') => will make first_name input value = ahmed
            -so we will make it null initially
        -after making our formGroup object and passing all our formControls objects to it

        -we will go to register.component.html and make our html form
        -we need to bind our html form with form object in ts file

        -angular has 2 attributes : formGroup , formControl
        -we need to make property binding for formGroup and pass our registerForm object to it inside form tag

        -then we use formControl attribute and write formControl object to it without property binding inside each input

        -name attribute is important if we are sending form to php file direct 
        -but we are using apis , so we don't need name attribute
        
        -Validators methods, properties:
            -minLength(): 
                determine min length of characters(can be letters, numbers, ...)
            -maxLength(): 
                determine max length of characters(can be letters, numbers, ...)
            required:
                -input value must be required
            -min():
                -determine min value of a number
                Example: Validators.min(16)  ==>least value is 16
            -max():
                -determine max value of a number
                Example: Validators.max(80)  ==>max value is 80
            -email:
                -value must be valid email
            -pattern():
                -to pass custom validation rule using regular expression

        -to use Validators ,we need to make array include validation rules and pass it to formControl constructor

        -angular reactive form makes me a report about my form :
            -tell me if inputs are valid or not
            -it collects the values entered for each input , so that if we want to put this in an object(like we did in CRUD)
            -if my form is invalid, then what are the errors
            
            -how to get these details:
                -we will make a method in the ts file
                -then we want when we submit form ,we call this method in html
                -so we have 2 solutions:    
                    -add click event in submit button(not recommended):
                        example:
                            <button (click)="submitRegisterForm(registerForm)" class="btn btn-info" type="submit">register</button>

                    -ngSubmit:
                        - angular has special event called : (ngSubmit)
                        - ngSubmit is put inside form tag
                        - this event is called when we submit form 
                        - we want to send all form details(validations, errors, ...) to our method in html
                        - so we pass our registerForm object to this method
                        - then in ts file, we ass parameter in our method to receive form details , then we can do anything with it

                        Example:
                            html:
                                <form [formGroup]="registerForm" (ngSubmit)="submitRegisterForm(registerForm)">
                                    //////
                                </form>
                            ts:
                                submitRegisterForm(registerForm:FormGroup){
                                    console.log(registerForm);
                                }
                    -to display errors:
                        -formGroup class has method called (get) to get certain formControl object
                        -after getting formControl, then we will get errors object 
                        -but get() might get something null, so we can't assess errors object, so we put safe Navigation operator(?)
                        -json pipe:
                            -json is a built in pipe to display object in details inside html pages             
                                
                        Example:
                            <h1>{{registerForm.get('first_name')?.errors|json}}</h1>
            -real time validation:
                -we want to display errors if errors object not null
                -but when user enter register page for first time, errors will appear because some inputs are required
                -so we will show errors if if errors object not null and formControl is touched(focus then blur)
                -angular has touched property to determine if user selected input
                -also we will display message for every error , so display certain error if it  exists in errors object

                Example:
                    <div *ngIf="registerForm.get('first_name')?.errors !=null && registerForm.get('first_name')?.touched" class="alert alert-danger my-2">
                        <p *ngIf="registerForm.get('first_name')?.errors?.required">first_name is ['required']</p>
                        <p *ngIf="registerForm.get('first_name')?.errors?.minlength">first_name is ['minLength'] 3</p>
                        <p *ngIf="registerForm.get('first_name')?.errors?.maxlength">first_name is ['maxLength'] 10</p>
                    </div>
                
                -we also want to disable submit button until form is valid:
                    example:
                        <button [disabled]="registerForm.invalid"  class="btn btn-info" type="submit">register</button>

            -we want when submit form , to collect all entered values in an object
            -angular reactive form has a property that returns that object
            Example:
                submitRegisterForm(registerForm:FormGroup){
                    console.log(registerForm.value);
                }

            Safe Navigation Operator (?):
                - It makes sure that we are not seeing null and undefined values in our application when we want to access properties of an object.
                
                -The Angular safe navigation operator, ?, guards against null and undefined values in property paths.
    ------------------------------------------------------------------------------------------------------------------------------------------------------------
    Conclusion:
        -to make reactive form, we import reactiveFormsModule and add it to imports array in app.module.ts
        -then go to our form component ts file , import FormGroup, FormControl, Validators class 
        -make object from formGroup, then pass js object to the constructor containings objects made from FormControl class
        -for every object made from FormControl class, we will pass to the constructor null initial value and array containing validation rules 
        -these validation rules are static methods inside validators class
        
        -this object we made from FormGroup contains properties that prepare a report for my Form:
            -value:
                -object containing all values entered for every input
            -valid:
                -boolean value means that our form is valid
            -invalid:
                -boolean value means that our form is invalid
            -formControls:
                -object contains all our formControls objects
                -for each formControl object we have:
                    -touched:
                        -boolean value means that we touched our input(focus on input then blur)
                    -errors:
                        -object contains errors of my formControl object
                        -this object contains key value pairs
                        -key is our error name and value is a error description string
        -also object made from FormGroup has method called (get) to get any FormControl object inside it
        
        -then we make our html form
        -then we bind our html form with formGroup object using (formGroup) attribute using property binding and then pass name of formGroup object

        -then we bind every html input with every FormControl object created using formControlName attribute without property binding and pass name of formControl object
        
        -then we make real time validation inisde html form using *ngIf directive with FormGroup object report properties

        -then we submit form:
            -we make button with type="submit"
            -angular has event called (ngSubmit), we write this event in the form tag
            -ngSubmit will be called when we click on the button with type="submit"
            -we will bind function made in ts file to ngSubmit event using event binding
            -so that this function will be called when we submit form
            -in this function we will submit the formGroup.value object to the register api
            -we don't have to send our FormGroup object as a parameter to the function called by ngSubmit event, as it is the same object in the ts file
--------------------------------------------------------------------------------------------------------------------------------------------------------------------

Full Example on Reactive form:
    app.module.ts:
        import { ReactiveFormsModule } from '@angular/forms';

        imports: [
            BrowserModule,
            AppRoutingModule,
            ReactiveFormsModule
        ]

    register.component.ts:
        import { Component, OnInit } from '@angular/core';
        import { FormControl, FormGroup, Validators } from '@angular/forms';

        @Component({
            selector: 'app-register',
            templateUrl: './register.component.html',
            styleUrls: ['./register.component.scss']
        })
        export class RegisterComponent implements OnInit {

            registerForm:FormGroup = new FormGroup({
                first_name:new FormControl(null,
                [Validators.minLength(3), Validators.pattern("^[a-zA-Z]{3,10}$"), Validators.maxLength(10), Validators.required]),
                last_name:new FormControl(null,
                [Validators.minLength(3), Validators.maxLength(10), Validators.required]),
                age:new FormControl(null,
                [Validators.required, Validators.min(16), Validators.max(80)] ) ,
                email:new FormControl(null,
                [Validators.email, Validators.required]),
                password:new FormControl(null,
                [Validators.required, Validators.pattern("^[A-Z][a-z0-9]{3,8}$")]),
            });

            submitRegisterForm(registerForm:FormGroup){
                console.log(registerForm.value);
            }

            type:string = "password";
            changeAppearance():void{
                if(this.type == "password"){
                this.type="text";
                }else{
                this.type="password";
                }
            }
            constructor() { }

            ngOnInit(): void {
            }

        }

    register.component.html:
        <div class="w-75 m-auto py-5">
            <form [formGroup]="registerForm" (ngSubmit)="submitRegisterForm(registerForm)">
                <div class="mb-3">
                <label for="first_name">first_name</label>
                <input formControlName="first_name" class="form-control" type="text" id="first_name">

                <div *ngIf="registerForm.get('first_name')?.errors !=null && registerForm.get('first_name')?.touched" class="alert alert-danger my-2">
                    <p *ngIf="registerForm.get('first_name')?.errors?.['required']">first_name is required</p>
                    <p *ngIf="registerForm.get('first_name')?.errors?.['minlength']">first_name is minLength 3</p>
                    <p *ngIf="registerForm.get('first_name')?.errors?.['maxlength']">first_name is maxLength 10</p>
                </div>
                </div>
                <div class="mb-3">
                <label for="last_name">last_name</label>
                <input formControlName="last_name" class="form-control" type="text" id="last_name">

                <div *ngIf="registerForm.get('last_name')?.errors !=null && registerForm.get('last_name')?.touched" class="alert alert-danger my-2">
                    <p *ngIf="registerForm.get('last_name')?.errors?.['required']">last_name is required</p>
                    <p *ngIf="registerForm.get('last_name')?.errors?.['minlength']">last_name is minLength 3</p>
                    <p *ngIf="registerForm.get('last_name')?.errors?.['maxlength']">last_name is maxLength 10</p>
                </div>
                </div>

                <div class="mb-3">
                <label for="age">age</label>
                <input formControlName="age" class="form-control" type="number" id="age">
                <div *ngIf="registerForm.get('age')?.errors !=null && registerForm.get('age')?.touched" class="alert alert-danger my-2">
                    <p *ngIf="registerForm.get('age')?.errors?.['required']">age is required</p>
                    <p *ngIf="registerForm.get('age')?.errors?.['min']">age is min 16</p>
                    <p *ngIf="registerForm.get('age')?.errors?.['max']">age is max 80</p>
                </div>
                </div>


                <div class="mb-3">
                <label for="email">email</label>
                <input formControlName="email" class="form-control" type="email" id="email">
                <div *ngIf="registerForm.get('email')?.errors !=null && registerForm.get('email')?.touched" class="alert alert-danger my-2">
                    <p *ngIf="registerForm.get('email')?.errors?.['required']">email is required</p>
                    <p *ngIf="registerForm.get('email')?.errors?.['email']">email is invalid</p>
                </div>
                </div>


                <div class="mb-3">
                <label for="password">password</label>
                <div class="input-group">
                    <input formControlName="password" class="form-control" [type]="type" id="password">
                    <span (click)="changeAppearance()" style="cursor: pointer;" class="input-group-text" id="basic-addon2"><i class="fas fa-eye"></i></span>
                </div>

                <div *ngIf="registerForm.get('password')?.errors !=null && registerForm.get('password')?.touched" class="alert alert-danger my-2">
                    <p *ngIf="registerForm.get('password')?.errors?.['required']">password is required</p>
                    <p *ngIf="registerForm.get('password')?.errors?.['pattern']">password must start with uppercase followed by 3 characters atleast ...</p>

                </div>

                </div>
                <button [disabled]="registerForm.invalid"  class="btn btn-info" type="submit">register</button>

            </form>
        </div>


-->