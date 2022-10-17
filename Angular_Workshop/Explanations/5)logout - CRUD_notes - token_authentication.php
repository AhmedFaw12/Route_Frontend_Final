<!-- 
Logout:

    -we will make logout using api
    -it need to get a object containing token as a key and its value
    -so we made a function inside authService that takes token and send it to backend
    -then go to navbar.component.ts, we made another function called logout
    -logout function subscribe to observable returning from signOut() 
    -when response come, remove token from localStorage, make currentUser = null
    -also we will navigate to signin page and pass response(success msg) as a parameter to it
    
    -then add a route inside app-routing.module.ts that go to signin and take a parameter
    -then go to sign-in.component.ts and capture this param if it exists
    -then print success message in html and clear after 1 second



    Example:
        auth.service.ts:
            signOut(data:any):Observable<any>{
                return this._HttpClient.post(`${this.baseURL}signout`, data);
            }

        navbar.component.ts:
            isLogin:boolean = false;

            constructor(private _AuthService:AuthService, private _Router:Router) {}

            logout(){
                let tokenObj = {"token":localStorage.getItem("userToken")};
                this._AuthService.signOut(tokenObj).subscribe((response)=>{

                    this._AuthService.currentUser.next(null);
                    localStorage.removeItem("userToken");
                    this._Router.navigate(["/signin", response.message]);
                });
            }
        
        navbar.component.html:
            <li *ngIf="isLogin"><a class="dropdown-item" (click)="logout()" >Logout</a></li>
        
        app-routing.module.ts:
            const routes: Routes = [
                {path:"", redirectTo:"signin" , pathMatch:"full"},
                {path:"signin", canActivate:[GuestGuard], component:SignInComponent},
                {path:"signin/:successLogout", canActivate:[GuestGuard], component:SignInComponent},
                {path:"signup",canActivate:[GuestGuard], component:SignUpComponent},
                {path:"profile", canActivate:[AuthGuard], component:ProfileComponent},
                {path:"**", component:NotFoundComponent},
            ];

        sign-in.component.ts:

            isLogout:boolean = false;

            ngOnInit(): void {
                this._ParticleGroundService.fireParticlePlugin("#signIn");
                if(this._ActivatedRoute.snapshot.params["successLogout"]){
                    this.successLogoutMsg = this._ActivatedRoute.snapshot.params["successLogout"];
                    this.isLogout = true;

                    setTimeout(()=> {
                        this.isLogout = false;
                    },1000);
                }
            }

        sign-in.component.html:
            <div *ngIf="isLogout" class="alert alert-success text-center">
                <strong>{{successLogoutMsg}}</strong>
            </div>

------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

CRUD (create read/get update delete) notes:
    -we will make a service that deal with all apis of notes
    
    get all notes and display :
        example:
            notes.service.ts:
                import { HttpClient } from '@angular/common/http';
                import { Observable } from 'rxjs';

                baseURL:string = "https://routeegypt.herokuapp.com/";
                
                constructor(private _HttpClient:HttpClient) { }

                getAllUserNotes(data:any):Observable<any>{
                    return this._HttpClient.post(`${this.baseURL}getUserNotes`, data);
                }
            
            profile.component.ts:
                import { AuthService } from 'src/app/services/auth.service';
                import { NotesService } from 'src/app/services/notes.service';

                allNotes:any = [];

                constructor(private _NotesService:NotesService, private _AuthService:AuthService) { }

                ngOnInit(): void {
                    this.userId = this._AuthService.currentUser.getValue()._id;
                    this.token = localStorage.getItem("userToken");
                    this.getAllUserNotes();
                }

                getAllUserNotes(){
                   
                    let data = {
                    "token":token,
                    "userID":userId
                    }

                    this._NotesService.getAllUserNotes(data).subscribe((response)=>{
                    this.allNotes = response.Notes;
                    console.log(this.allNotes)
                    });
                }

            profile.component.html:
                <div *ngFor="let note of allNotes;" class="col-md-3  mb-3">
                    <div class="node text-center p-4">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="dropdown float-end">

                            <i class="fas fa-ellipsis-v"  id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"></i>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                            <li><a class="dropdown-item text-info" data-bs-toggle="modal" data-bs-target="#EditNote"><span>Edit</span><i class="fas fa-edit float-end"></i></a></li>

                            <li><a class="dropdown-item text-danger" data-bs-toggle="modal" data-bs-target="#DeleteNote"><span>Delete</span><i class="fas fa-trash float-end"></i></a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <h2>{{note.title}}</h2>
                    <p>{{note.desc}}</p>

                    </div>
                </div>
    ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    add note:
        -we want to make form to get note data and submit it to backend using api
        -when we make form in html without form group, form control , error is produced
        -because we imported reactiveFormsModule inside app.module.ts and we didn't make formgroup object


        -we want to make loading screen , we will get spinner code from internet
        -then we make loading screen appear until data come
        -when data come , make loading screen disappear and make notes appear
        
        -to add note , we will make a form inside modal 
        -when we click on addNote , modal appear and we enter data
        -we want when click on add button inside modal , to addNote() and close modal
        -we will make loading screen appear again unitil response come and show all user notes

        Example:
            notes.service.ts:
                addNote(data:any):Observable<any>{
                    return this._HttpClient.post(`${this.baseURL}addNote`, data);
                }

            profile.component.ts:

                userId:any = '';
                token:any ;
                allNotes:any = [];

                isLoaded : boolean = false;

                addNoteForm = new FormGroup({
                    title : new FormControl(null, [Validators.required]),
                    desc  : new FormControl(null, [Validators.required]),
                });

                ngOnInit(): void {
                    this.userId = this._AuthService.currentUser.getValue()._id;
                    this.token = localStorage.getItem("userToken");
                    this.getAllUserNotes();
                }

                getAllUserNotes(){
                    
                    let data = {
                        "token":this.token,
                        "userID":this.userId
                    }

                    this._NotesService.getAllUserNotes(data).subscribe((response)=>{
                    this.allNotes = response.Notes;
                    this.isLoaded = true;
                    console.log(this.allNotes);
                    });
                }

                addNote(){
                    let data ={
                        title:this.addNoteForm.value.title,
                        desc:this.addNoteForm.value.desc,
                        citizenID: this.userId,
                        token:this.token
                    };

                    this._NotesService.addNote(data).subscribe((response)=>{
                        this.isLoaded = false;
                        if(response.message == "success"){
                            console.log(response);
                            $("#AddNote").modal('hide');
                            this.getAllUserNotes();
                            this.addNoteForm.reset();
                        }
                    });
                }

            profile.component.html:
                <div *ngIf="!isLoaded" class="loadingScreen d-flex align-items-center justify-content-center">
                    <div class="spinner">
                        <div class="rect1"></div>
                        <div class="rect2"></div>
                        <div class="rect3"></div>
                        <div class="rect4"></div>
                        <div class="rect5"></div>
                    </div>
                </div>

                <div  class="container pt-5">
                    <div *ngIf="isLoaded" class="row">
                        <div class="col-md-12 mb-3">
                            <button class="btn btn-info float-end" data-bs-toggle="modal" data-bs-target="#AddNote">Add Note</button>
                        </div>

                        <div *ngFor="let note of allNotes;" class="col-md-3  mb-3">
                            <div class="node text-center p-4">
                            <div class="row">
                                <div class="col-md-12">
                                <div class="dropdown float-end">

                                    <i class="fas fa-ellipsis-v"  id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"></i>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                                    <li><a class="dropdown-item text-info" data-bs-toggle="modal" data-bs-target="#EditNote"><span>Edit</span><i class="fas fa-edit float-end"></i></a></li>

                                    <li><a class="dropdown-item text-danger" data-bs-toggle="modal" data-bs-target="#DeleteNote"><span>Delete</span><i class="fas fa-trash float-end"></i></a></li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                            <h2>{{note.title}}</h2>
                            <p>{{note.desc}}</p>

                            </div>
                        </div>
                    </div>
                </div>

                //addNote modal
                <div class="modal fade" id="AddNote" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <form [formGroup]="addNoteForm" (ngSubmit)="addNote()">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Note</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                <div class="col-md-12 mb-3">
                                    <input type="text" formControlName="title" class="form-control" placeholder="Title">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <textarea formControlName="desc" class="form-control" placeholder="Type your Note" cols="30" rows="10"></textarea>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="modal-footer">
                            <button type="submit" class="btn btn-info">Add</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>

            
            profile.component.scss:
                .loadingScreen{
                    position: fixed;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    background-color: rgba(0,0,0,0.6);

                    z-index: 999999999999;

                }

                /***************************Spinner *************************************/
                .spinner {
                width: 50px;
                height: 40px;
                text-align: center;
                font-size: 10px;
                }

                .spinner>div {
                background-color: #fff;
                height: 100%;
                width: 6px;
                margin-right: 1px;
                display: inline-block;

                -webkit-animation: sk-stretchdelay 1.2s infinite ease-in-out;
                animation: sk-stretchdelay 1.2s infinite ease-in-out;
                }

                .spinner .rect2 {
                -webkit-animation-delay: -1.1s;
                animation-delay: -1.1s;
                }

                .spinner .rect3 {
                -webkit-animation-delay: -1.0s;
                animation-delay: -1.0s;
                }

                .spinner .rect4 {
                    -webkit-animation-delay: -0.9s;
                    animation-delay: -0.9s;
                }

                .spinner .rect5 {
                    -webkit-animation-delay: -0.8s;
                    animation-delay: -0.8s;
                }

                @-webkit-keyframes sk-stretchdelay {

                    0%,
                    40%,
                    100% {
                        -webkit-transform: scaleY(0.4)
                    }

                    20% {
                        -webkit-transform: scaleY(1.0)
                    }
                }

                @keyframes sk-stretchdelay {

                    0%,
                    40%,
                    100% {
                        transform: scaleY(0.4);
                        -webkit-transform: scaleY(0.4);
                    }

                    20% {
                        transform: scaleY(1.0);
                        -webkit-transform: scaleY(1.0);
                    }
                }

    ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    Delete note:
        -we need to get noteId 
        -so when click on delete icon , we will call getID() and pass noteId to it which will dave id in a variable
        -then when modal open , when we click on delete button of modal ,we will call deleteNote() and make object of token and noteId and pass them to deleteNote() of the notesService 

        -but this will cause error
        -delete method has a special syntax, we need to make another object called options
        -options has a property called body
        -body is an object that hold our old data object(token, noteId)
        -then we send this options object to delete api method
        
        -we should also add to options another property called header which will be an instance of HttpHeaders and pass empty object to it


        Example:
            notes.service.ts:
                 deleteNote(data:any):Observable<any>{
                    let options:any = {
                    headers:new HttpHeaders({

                    }),
                    body:{
                        NoteID : data.NoteID,
                        token :data.token
                    }
                    }
                    return this._HttpClient.delete(`${this.baseURL}deleteNote` , options);
                }

            profile.component.ts:
                
                noteId:string = '';
                
                getNoteId(id:string){
                    this.noteId = id;
                    console.log(id);
                }
                deleteNote(){
                    let data = {
                    "NoteID":this.noteId,
                    "token" : this.token
                    }

                    this.isLoaded = false;
                    this._NotesService.deleteNote(data).subscribe((response)=>{
                    console.log(response);
                    $("#DeleteNote").modal("hide");
                    this.isLoaded = true;
                    this.getAllUserNotes();
                    });
                }

            
            
            profile.component.html:

                <li><a class="dropdown-item text-danger" (click)="getNoteId(note._id)" data-bs-toggle="modal" data-bs-target="#DeleteNote"><span>Delete</span><i class="fas fa-trash float-end"></i></a></li>

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
                            <button (click)="deleteNote()" class="btn btn-info">Delete</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                        </div>
                        </div>
                    </div>
                </div>
    
    ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    Edit note:
        -we want when click edit icon, edit modal will appear and title and desc are filled with old values

        -we will make a new formGroup called editNoteForm
        -when we click on edit icon , we will call setValue function , we will pass index of current loop

        -setValue() will get current node details using our allNotes array and index
        -save old values in editNoteForm

        -then we can enter new values
        -then when we save , call api function to update note
        

        Example:
            notes.service.ts:
                updateNote(data:any):Observable<any>{
                    return this._HttpClient.put(`${this.baseURL}updateNote`, data);
                }
            
            profile.component.ts:
                editNoteForm = new FormGroup({
                    title : new FormControl(null, [Validators.required]),
                    desc  : new FormControl(null, [Validators.required]),
                });

                isWaiting:boolean = false;

                setValue(index:number){
                    this.editNoteForm.controls.title.setValue(this.allNotes[index].title);
                    this.editNoteForm.controls.desc.setValue(this.allNotes[index].desc);
                    this.noteId = this.allNotes[index]._id;
                }

                editNote(){
                    let data = {
                    title:this.editNoteForm.value.title,
                    desc:this.editNoteForm.value.desc,
                    NoteID:this.noteId,
                    token:this.token
                    };
                    console.log(data);
                    this.isLoaded = false;
                    this.isWaiting = true;
                    this._NotesService.updateNote(data).subscribe((response)=>{

                    if(response.message =="updated"){
                        this.editNoteForm.reset();
                        this.isWaiting = false;
                        $("#EditNote").modal("hide");
                        this.getAllUserNotes();
                    }
                    });
                }

            profile.component.html:
                <div *ngFor="let note of allNotes; let i = index" class="col-md-4  mb-3">
                    <div class="node text-center p-4">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="dropdown float-end">

                            <i class="fas fa-ellipsis-v"  id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"></i>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                            <li><a class="dropdown-item text-info" (click)="setValue(i);" data-bs-toggle="modal" data-bs-target="#EditNote"><span>Edit</span><i class="fas fa-edit float-end"></i></a></li>

                            <li><a class="dropdown-item text-danger" (click)="getNoteId(note._id)" data-bs-toggle="modal" data-bs-target="#DeleteNote"><span>Delete</span><i class="fas fa-trash float-end"></i></a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <h2 class="box">{{note.title}}</h2>
                    <p class="box">{{note.desc}}</p>

                    </div>
                </div>  
            
                <div class="modal fade" id="EditNote" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <form [formGroup]="editNoteForm" (ngSubmit)="editNote()">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Note</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                <div class="col-md-12 mb-3">
                                    <input type="text" formControlName="title" class="form-control" placeholder="Title">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <textarea formControlName="desc" class="form-control" placeholder="Type your Note" cols="30" rows="10"></textarea>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="modal-footer">
                            <button type="submit" class="btn btn-info"><span *ngIf="!isWaiting">Save</span><span *ngIf="isWaiting">Waiting...</span> </button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>


                

------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

token manipulation authentication:
    -if someone removed token value and added another invalid value
    -error will be produced so we want to handle this case
    -this error appear because we could not decode the token (jwtDecode())
    -we will handle this using try and catch 
    try to decode token , if could not decode token , then clear localStorage and navigate to signin page

    -if user entered valid fake token that can be decoded , that is a problem that we want to handle 
    -in profile when we get all notes , we will receive response , if response message is not success , then token passed is fake , so we will also clear localStorage and navigate to signin


    Example:
        -auth.service.ts:
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

        profile.component.ts:
            getAllUserNotes(){

                let data = {
                "token":this.token,
                "userID":this.userId
                }

                this._NotesService.getAllUserNotes(data).subscribe((response)=>{
                console.log(response);
                if(response.message == "success"){

                    this.allNotes = response.Notes;
                    this.isLoaded = true;
                }else{
                    localStorage.clear();
                    this.isLoaded = true;
                    this._AuthService.currentUser.next(null);
                    this._Router.navigate(["/signin"]);
                }
                });
            }

    NOTE:
        -when we use token ,no need to use session
        -token is better because android doesn't have session 
        -session is only in web

        
-->