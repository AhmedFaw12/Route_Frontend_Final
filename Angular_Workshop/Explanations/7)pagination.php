<!-- 

Pagination:
    profile.component.html:
        <div class="pagination fixed-bottom my-3">
            <div *ngIf="isPrev" (click)="getPrev()" class="page"><i class="fa-solid fa-arrow-left"></i></div>
            <div *ngIf="currentPageNumber-1 > 0 " (click)="getPrev()" class="page ">{{currentPageNumber-1}}</div>

            <div class="page current">{{currentPageNumber}}</div>
            
            <div *ngIf="currentPageNumber+1 <= totalPages " (click)="getNext()" class="page ">{{currentPageNumber+1}}</div>
            <div *ngIf="isNext" (click)="getNext()" class="page"><i class="fa-solid fa-arrow-right"></i></div>
        </div>

    profile.component.ts:
        .pagination{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .page{
            padding: 10px;
            border: 1px solid black;
            background-color: white;
            cursor: pointer;
        }

        .current{
            background-color: #09c;
            color: #fff;
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

                this.currentPageNotes = this.getCurrentPageNotes();
                this.calculateTotalPages();


            }else{
                localStorage.clear();
                this.isLoaded = true;
                this._AuthService.currentUser.next(null);
                this._Router.navigate(["/signin"]);
            }
            });
        }

        currentPageNumber:number = 1;
        totalPages:number = 1 ;
        isNext = false;
        isPrev = false;
        currentPageNotes:any[] = [];
        maxNotesPerPage = 9;

        getNext(){

            if(this.currentPageNumber < this.totalPages){
            this.currentPageNumber++;
            this.isPrev = true;
            this.currentPageNotes = this.getCurrentPageNotes();
            }
            if(this.currentPageNumber == this.totalPages){
            this.isNext = false;
            }

        }

        calculateTotalPages(){
            this.totalPages = Math.ceil(this.allNotes.length/this.maxNotesPerPage);
            if(this.currentPageNumber < this.totalPages){
            this.isNext = true;
            }
        }

        getCurrentPageNotes():any[]{
            let loopInit:number = (this.currentPageNumber-1) * this.maxNotesPerPage;
            let loopEnd: number = loopInit + this.maxNotesPerPage;
            let currentPageNotes:any[] = [];

            if(loopEnd > this.allNotes.length){
            loopEnd = this.allNotes.length;
            }

            console.log(loopInit, loopEnd);
            for(let i = loopInit; i < loopEnd ; i++){
            currentPageNotes.push(this.allNotes[i]);
            }
            console.log(currentPageNotes);
            return currentPageNotes;
        }

        getPrev(){
            if(this.currentPageNumber > 1){
            this.currentPageNumber--;
            this.isNext = true;
            this.currentPageNotes = this.getCurrentPageNotes();
            }

            if(this.currentPageNumber == 1){
            this.isPrev = false;
            }
        }


 -->