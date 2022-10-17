import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { AuthService } from 'src/app/services/auth.service';
import { NotesService } from 'src/app/services/notes.service';
import { Router } from '@angular/router';

declare var $:any;

@Component({
  selector: 'app-profile',
  templateUrl: './profile.component.html',
  styleUrls: ['./profile.component.scss']
})
export class ProfileComponent implements OnInit {


  userId:any = '';
  token:any ;
  allNotes:any = [];

  isLoaded : boolean = false;

  addNoteForm = new FormGroup({
    title : new FormControl(null, [Validators.required]),
    desc  : new FormControl(null, [Validators.required]),
  });

  constructor(private _NotesService:NotesService, private _AuthService:AuthService, private _Router:Router) { }


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

  addNote(){
    let data ={
      title:this.addNoteForm.value.title,
      desc:this.addNoteForm.value.desc,
      citizenID: this.userId,
      token:this.token
    };
    this.isWaiting = true;
    this._NotesService.addNote(data).subscribe((response)=>{
      this.isLoaded = false;
      if(response.message == "success"){
        // console.log(response);
        $("#AddNote").modal('hide');
        this.getAllUserNotes();
        this.addNoteForm.reset();
        this.isWaiting = false;
      }
    });
  }


  /*************************Delete Node********************************** */

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

      $("#DeleteNote").modal("hide");
      this.isLoaded = true;
      this.getAllUserNotes();
    });
  }


  /*************************Edit Node********************************** */
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
}
