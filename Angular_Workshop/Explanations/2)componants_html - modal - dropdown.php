<!-- 
Make HtmL for components:

Sign-up component:
    -particle ground that we used , takes whole background 
    -so inorder to write something , we will use position to make layer above particles
    
    -we will make service for particleGround plugin and put fire function inside it
    -we will call this service in signUp , sign in components

    -we will also create service to change password appearance when click on eye icon

    Example:
        particle-ground.service.ts:
            import { Injectable } from '@angular/core';
            declare var $:any;

            @Injectable({
            providedIn: 'root'
            })
            export class ParticleGroundService {                
                constructor() {}

                fireParticlePlugin(id:string){
                    $(id).particleground();
                }
            }
        
        password-Appearance.service.ts:
            import { Injectable } from '@angular/core';

            @Injectable({
            providedIn: 'root'
            })

            export class PasswordAppearanceService {
                type:string = "password";

                constructor() { }

                changePasswordAppearance(){
                    if(this.type == "password"){
                    this.type = "text";
                    }else{
                    this.type = "password";
                    }
                }
            }


        sign-up.component.html:
            <section id="signUp">
                <div class="form">
                    <form>
                        <div class="row">

                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" placeholder="Enter First Name">
                        </div>

                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" placeholder="Enter Last Name">
                        </div>

                        </div>

                        <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Enter Your Email">
                        </div>

                        <div class="mb-3">
                        <input type="number" class="form-control" placeholder="Enter Your Age">
                        </div>

                        <div class="input-group mb-3">
                            <input [type]="type" class="form-control" placeholder="Enter Your Password">
                            <span (click)="changePasswordAppearance()" style="cursor: pointer;" class="input-group-text" id="basic-addon2"><i class="fas fa-eye"></i></span>
                        </div>

                        <button class="btn submit-btn w-100">Sign Up</button>

                    </form>
                </div>
            </section>
        
        sign-up.component.scss:
            #signIn{
                min-height: 100vh;
            }
        
        styles.scss:
            $mainbg:#343a40;
            $secondBg : #17a2b8;

            .form{
                position: absolute;
                width: 40%;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            .submit-btn{
                background-color: $secondBg;
                color: #fff;
                &:hover{
                    background-color: #3797a6;
                    color: #fff;
                }
            }

        sign-up.component.ts:
            import { Component, OnInit } from '@angular/core';
            import { ParticleGroundService } from 'src/app/services/particle-ground.service';
            import { PasswordAppearanceService } from 'src/app/services/password-appearance.service';



            export class SignUpComponent implements OnInit {
                type:string = this._PasswordAppearanceService.type;
                constructor(
                    private _ParticleGroundService:ParticleGroundService
                    ,private _PasswordAppearanceService:PasswordAppearanceService) { }

                changePasswordAppearance(){
                    this._PasswordAppearanceService.changePasswordAppearance();
                    this.type = this._PasswordAppearanceService.type;
                }


                ngOnInit(): void {
                    this._ParticleGroundService.fireParticlePlugin("#signUp");
                }

            }
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
sign-in component:

    -it will be same as sign-up
    -we will just remove age, firstname ,lastname inputs

    sign-in.component.ts:
        import { Component, OnInit } from '@angular/core';
        import { ParticleGroundService } from 'src/app/services/particle-ground.service';
        import { PasswordAppearanceService } from 'src/app/services/password-appearance.service';

        @Component({
            selector: 'app-sign-in',
            templateUrl: './sign-in.component.html',
            styleUrls: ['./sign-in.component.scss']
        })

        export class SignInComponent implements OnInit {

            type:string = this._PasswordAppearanceService.type;
            constructor(
                private _ParticleGroundService:ParticleGroundService
                ,private _PasswordAppearanceService:PasswordAppearanceService) { }

            changePasswordAppearance(){
                this._PasswordAppearanceService.changePasswordAppearance();
                this.type = this._PasswordAppearanceService.type;
            }

            ngOnInit(): void {
                this._ParticleGroundService.fireParticlePlugin("#signIn");
            }
        }


    sign-in.component.ts:
        <section id="signIn" class="">
            <div class="form">
                <form>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Enter Your Email">
                    </div>

                    <div class="input-group mb-3">
                        <input [type]="type" class="form-control" placeholder="Enter Your Password">
                        <span (click)="changePasswordAppearance()" style="cursor: pointer;" class="input-group-text" id="basic-addon2"><i class="fas fa-eye"></i></span>
                    </div>

                    <button class="btn submit-btn w-100">Sign In</button>
                </form>
            </div>
        </section>
    
    sign-in.component.scss:
        #signIn{
            min-height: 100vh;
        }



------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

profile component:
    
    -we will make note card 
    -then make button to add note
    -we will use bootstrap modal and take the trigger attributes and put it inside add note button
    -when we click on add note button, modal will pop up and we enter our new note inputs

    -then we will use dropdown menu and take trigger attributes and put it inside our dots icon 
    -we must put our link or icon inside bootstrap dropdown div so that dropdown would open

    -then make two links inside dropdown , edit link to trigger edit modal , delete link to trigger delete modal

    Example:
        profile.component.html:
            <section id="profile" class="third-bg py-5">
                <div class="container pt-5">
                    <div class="row">
                    <div class="col-md-12 mb-3">
                        <button class="btn btn-info float-end" data-bs-toggle="modal" data-bs-target="#AddNote">Add Note</button>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="node text-center p-4">
                        <div class="row">
                            <div class="col-md-12">
                            <div class="dropdown float-end">

                                <i class="fas fa-ellipsis-v"  id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"></i>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                                <li><a class="dropdown-item text-info" href="#" data-bs-toggle="modal" data-bs-target="#EditNote"><span>Edit</span><i class="fas fa-edit float-end"></i></a></li>

                                <li><a class="dropdown-item text-danger" data-bs-toggle="modal" data-bs-target="#DeleteNote"><span>Delete</span><i class="fas fa-trash float-end"></i></a></li>
                                </ul>
                            </div>
                            </div>
                        </div>
                        <h2>My Note Title</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim, perspiciatis.</p>

                        </div>
                    </div>
                    </div>
                </div>
            </section>


            ================================================= Modals==================================== 

            ------------------------------------ Add Note ---------------------------------------------
            <div class="modal fade" id="AddNote" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Note</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                        <input type="text" class="form-control" placeholder="Title">
                        </div>
                        <div class="col-md-12 mb-3">
                        <textarea name="" id="" class="form-control" placeholder="Type your Note" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info">Add</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                </div>
                </div>
            </div>
            </div>
            ------------------------------------ /Add Note --------------------------------------------- 

            ------------------------------------ Edit Note --------------------------------------------- 
            <div class="modal fade" id="EditNote" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Note</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                        <input type="text" class="form-control" placeholder="Title">
                        </div>
                        <div class="col-md-12 mb-3">
                        <textarea name="" id="" class="form-control" placeholder="Type your Note" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info">Save</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                </div>
                </div>
            </div>
            </div>
            ------------------------------------ /Edit Note--------------------------------------------- 


            ------------------------------------ Delete Note---------------------------------------------
            <div class="modal fade" id="DeleteNote" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Note</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container text-center">
                    <div class="row">
                        <div class="container">
                        <div class="col-md-12">
                            <p class="text-info">Do you really want to delete ?
                                process cannot be undone</p>
                        </div>
                        </div>
                    </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info">Delete</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                </div>
                </div>
            </div>
            </div>
            -------------------------------- /Delete Note---------------------------------------------








-->