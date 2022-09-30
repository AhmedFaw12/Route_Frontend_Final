<!-- 
Binding:
    -we took in classes :
        -we can make constructor (){}
        -we can make methods 
        -we can't put any identifier(let, var , const, function) :  
            example: let x = 10; //error we can't write let
                    function welcome(){} //error we can't write function
        -ESnext(modern js)(after ES6) :we can make properties inside class besides methods

        Example:
            class HomeComponent{
                constructor() { }

                userName = "Ahmed Fawzy";
                welcome(){
                    console.log("welcome");
                }
            }
    -we want to display class property in html:
        old Example :
            home.component.ts:
                 class HomeComponent{

                constructor() { }

                userName = "Ahmed Fawzy";
                welcome(){
                    console.log("welcome");
                }
                ngOnInit(): void {
                }

                }

                let home = new HomeComponent();
                document.getElementById("demo").innerHTML = home.userName;
            
            home.component.html:
                <h2>welcome <span id="demo"></span></h2>
                
    ------------------------------------------------------------------------------------------------------------------------------------------------------
    -angular made something called Binding
    -binding(ربط)
    
    New Example using binding:
        home.component.ts:
            export class HomeComponent implements OnInit {

                constructor() { }

                userName = "Ahmed Fawzy";
                imgSrc = "assets/images/1.jpg";

                welcome(eventInfo:any){
                    console.log(eventInfo.target);
                    alert("welcome Ahmed");
                }

                test(eventInfo:any){
                    console.log(eventInfo.target.value);
                }

                ngOnInit(): void {
                }
            }

        home.component.html:
            <h2>welcome {{userName}}</h2>
            <img [src]='imgSrc' alt="">

            <button (click)="welcome($event)" class="btn btn-outline-danger">hello</button>

            <div class="w-50 p-4">
                <input (keyup.t)="test($event)" type="text" class="form-control">
            </div>
        
    -so binding binds typescript with html
    -binding in angular has many types:
        - {{}} :
            -it is called text/data interpolation(دس الداتا)
            -we can use it to put data inside element like (innerHTML)
            -we can use {{}} with attributes
            -but some attributes won't accept this kind of binding {{}} like:
                -disabled
                -colspan
                ...

            Example:
                 <h2>welcome {{userName}}</h2>
        ----------------------------------------------------------------------------------------------------------------------------------------------
        -[] => property binding:
            [attribute] = 'typescript...'

            -this will work with all attributes

            Example:
                <img [src]='imgSrc' alt="">
        ----------------------------------------------------------------------------------------------------------------------------------------------


        () => Event binding:         
            -we want to bind method with event in html

            -to know info about event :
                -previously we used eventlistener and passed e to the function
                -now we must pass ($event)  to the function in html
                -we must use exactly same name ($event)

                -in typescript , we can receive $event in a parameter of the method , we can name this parameter any name like(event , or eventInfo, ....)  
                
            Example:
                ts:
                    welcome(eventInfo:any){
                        console.log(eventInfo.target);
                        alert("welcome Ahmed");
                    }
                html:
                    <button (click)="welcome($event)" class="btn btn-outline-danger">hello</button>

            Example:
                ts:
                    test(eventInfo:any){
                        console.log(eventInfo.target.value);
                    }
                html:   
                    <div class="w-50 p-4">
                      <input (keyup)="test($event)" type="text" class="form-control">
                    </div>
            Example :
                ts:
                    test(eventInfo:any){
                        console.log(eventInfo.target.value);
                    }
                html:   
                    <div class="w-50 p-4">
                      <input (keyup.t)="test($event)" type="text" class="form-control">
                    </div>           
                    
                    -test method will be called only when we type letter t

                    <div class="w-50 p-4">
                      <input (keyup.shift.t)="test($event)" type="text" class="form-control">
                    </div>
                    
                    -test method will be called only when we type letter shift + t

                note:
                    -this trick is only used with keyup, keydown, keypress
            
--------------------------------------------------------------------------------------------------------------------------------------------------------------
assets :
    -folder where we put images, videos
    -it is inside src folder
-->