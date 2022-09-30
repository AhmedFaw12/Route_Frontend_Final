<!-- 
Binding Continue:
    we have 2 types of binding:
        -one way data binding:
            -data interpolation
            -property binding
            -event binding
            -style binding
            -class binding

            =>we bring data from ts to html (one way)
        -two way data binding:
            -we want to bring data from ts to html and vice versa

            -we will make banana in the box [(ngModel)]
            - () is called banana, [] is called box

            -ngModel exists in forms module
            -so inorder to use ngModel , we need to import forms module class
            -we will import forms module inside app.module.ts and add its class name inside imports array

            -we can only use ngModel in three places:
                -input
                -textarea
                -select option
            -two way data binding works using onkeyup, on key up it will take value of input and put it in class property

            Example:
                -we want to receive data from input in html and save it in a variable in ts
                -then we display value of that variable in html h2

                ts:
                    class HomeComponent{
                        x = "";
                    }
                html:
                    <div class="w-50 p-4 m-auto">
                        <input [(ngModel)]="x" type="text" class="form-control">
                        <h2>{{x}}</h2>
                    </div>
                    
                    -ngModel will take value of input and put it in x property

                app.module.ts:
                    import { FormsModule } from '@angular/forms';

                    imports: [
                        BrowserModule,
                        AppRoutingModule,
                        FormsModule
                    ],

    -Note:
       -binding is related to DOM
        
-->