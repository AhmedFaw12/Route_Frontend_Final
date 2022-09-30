<!--
folders of angular project:
    1)src:
        -this is the main project folder
        -consists of:
            -index.html :
                -entry point/page of our project
                -contains <app-root></app-root> selector of app component
            -app folder:
                - which includes all our components that we will make 
                - it also includes app/root component files:
                    -app.component.html 
                    -app.component.css 
                    -app.component.ts 
                -it also includes app.module.ts:
                    -chief/manager of all components
                    -when we make a component, we need to tell app.module.ts that we made a component

                    -app.module.ts has an array called (declerations) that is used to collect all components in my project
                    -so we need to add our new Component className in declerations array
                    -since we are adding a class from another file , we need to import this file in app.module.ts
                    
                    
    2)nodes_modules
--------------------------------------------------------------------------------------------------------------------------------------------------------------
Generate Components:
    -we will make component folder with its 3 files manually:
        -we will make home folder inside app folder
        -we will make 3 files inside home folder:
            -home.component.html:
                -we put component as a naming convention, because angular has other things like modules, ...

                -we will write our code without head or body
                -because we will put selector in app component
                -then app selector in index.html which contain head and body

                Example:
                    <h1>Home Component</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente nihil omnis corrupti earum numquam, at soluta hic veritatis, necessitatibus voluptas repellendus. Quaerat dolores reprehenderit dolor inventore earum! Veniam, nihil corrupti!</p>

                    <button>Hello Home</button>



            -home.component.css:
                Example:
                    h1{
                        color:tomato;
                    }

                    p{
                        font-size: 20px;
                    }

            -home.component.ts:
                -to make our home component work , we will put following code:
                    import { Component } from '@angular/core';

                    @Component({
                        selector: 'app-home',
                        templateUrl: './home.component.html',
                        styleUrls: ['./home.component.css']
                    })
                    export class HomeComponent {
                    }
                
                -selector: 'app-home'  ==> write our selector for home component

                -templateUrl: './home.component.html' ==> write name of html file of the component

                -styleUrls: ['./home.component.css'] ==> write name of css file of the component
                
                export class HomeComponent {} ==> write name of our class homecomponent

                -we will discuss details of this file later

        -then we will put our home selector in the app.component.html
        
        -if we run our project like this ,it will give error
        -we need to tell app.module.ts that we made a new component
        -app.module.ts has an array called (declerations) that is used to collect all components in my project
        -so we need to add our homeComponent class in declerations array
        -since we are adding a class from another file , we need to import this file in app.module.ts

        Example:
            app.module.ts:
                import { HomeComponent } from './home/home.component';
                
                declarations: [
                    AppComponent,
                    HomeComponent
                ]
        
        -we will not generate components manually
    ------------------------------------------------------------------------------------------------------------------------------------------------------
    -we will generate components by giving command to (Angular CLI):
        
        -we already opened terminal , and gave cli command to open project
        -to write another command , we will open another terminal

        -command to generate new component:
            ng generate component componantName
                or
            ng g c componantName

                or
            ng g c componentName --skip-tests  //to skip tests and not create(specs.ts)
            
        -CLI will make a folder for components and 4 files for it:
            -componentName.component.html 
            -componentName.component.css 
            -componentName.component.ts 
            -componentName.component.spec.ts :
                -this file is for unit testing
                -testing : to test application 
                -tester is a job
                -there are multiple testing: automation testing, manual testing, unit testing, ....

                -test unit by unit of my application
                -unit in angular is the component
                
                -there are another tools for unit testing: jasmine, karma, ....
                -so if we don't want angular to make this file(specs.ts)
                -we will make testing using other tools
                -so when write component generating command , we will write this command:
                    ng g c componentName --skip-tests

                    --skip-tests is called flag

        -it will choose selector for the component 
        -and add component className to app.module.ts

        -then we will write selector name in app.component.html manually

                

            
-->