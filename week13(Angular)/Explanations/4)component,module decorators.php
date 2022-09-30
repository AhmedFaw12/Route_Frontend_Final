<!-- 
-we want to understand what is written inside (myComponent.component.ts) file
    
-our component is the class that we make inside ts file
-so each component is a class , not the folder that contains(html, css, ts)
-component folder is not the component, the folder only gathers the files of the component

-we import this class in app.module.ts
-inorder to import our component class , we need to add export beside it

Decorator:
    -angular has something called decorators
    -decorators are meta info(معلومات اضافية) for an item
    -any decorator is a function

Component decorator:
    -decorator of component is @component()
    -@component() is a function to pass meta info about our component 
    -decorator of component exists inside Component class
    -Component class exists inside @angular/core folder
    -so we need to import Component class inorder to user @component() decorator
    
    -@component() takes object and we pass meta info about our component which are: 
        -selector : write selector name of our component
        -templateUrl: takes path of html file of our component
        -styleUrls: 
            -it is array that takes paths of css files of our component
            -we can make multiple css files for single component
        
    Example:
        home.component.ts:
            import { Component } from '@angular/core';

            @Component({
            selector: 'app-home',
            templateUrl: './home.component.html',
            styleUrls: ['./home.component.css']
            })
            export class HomeComponent {
            }

--------------------------------------------------------------------------------------------------------------------------------------------------------------
Module & component:
    -we want to understand what is inside app.module.ts
    -we said before that angular is a component-based-architecture
    -angular consists of components
    -but our project may contain 300-400-.... components, this will be hard 
    -angular made a level above component called module
    -each module can contain multiple components
    -so our angular project will consists of modules, and each module consists of multiple components

    -module may be used in things other than components
    
    -so app.module.ts is only one module
    -we can make new modules 
    -module is a class 
    -module has a module decorator



Module decorator:
    -decorator of module is @NgModule()
    -@NgModule() is a function to pass meta info about our module 
    -decorator of NgModule exists inside NgModule class
    -NgModule class exists inside @angular/core folder
    -so we need to import NgModule class inorder to user @NgModule() decorator 


    meta info of module:
        -declerations: 
            -array that takes classNames of our components
            -but we need to import our components classes
            -so if our module has components
            -we will make declerations array inside module decorator and add components classes inside it

            -modules may not contain components
            -we can make/add same component in multiple modules , we will discuss later

        -bootstrap:
            -array that takes name of root component class

            -it has no relation with bootstrap framework
            -it is called bootstrap because its meaning in arabic is called (تمهيد)

        -imports :
            -sometimes module needs/depends on others modules
            -imports is an array that takes other modules classes that my module needs

            -appRoutingModule: is the first question , we answered when making new angular project, we said we need routing to move from page to page without reload
        
        -providers:
            -it is array
            -we have something in angular called service , service is data
            -so if we have data needed to be shared among all components in this module, we will put it in provider array
    
            -providers array was needed in older angular versions
            -today, they made something better than providers that we will discuss later

            -we can even remove providers array

    Example on changing root component:
        app.module.ts:
            bootstrap: [HomeComponent]
        app.component.html:
            -remove selector tags from there
        home.component.html:
            <app-about></app-about>
            <app-gallery></app-gallery>
            <app-contacts></app-contacts>
        index.html:
            <app-home></app-home>

    
    Why do we make root component ?
        -root component represents module
        -as root component contain all components that exists in a module
        
        -if we don't have module , so we don't have root component for this module, so inorder to call all components of each module , we need to write selectors of all components in index.html

        -so instead of write only selector of root component of each module:
            <app-root></app-root>
        -we have to write all selectors of all components for each module:
            <app-home></app-home>
            <app-about></app-about>
            <app-gallery></app-gallery>
            <app-contacts></app-contacts>


    Full example of app.module.ts:
        import { NgModule } from '@angular/core';
        import { BrowserModule } from '@angular/platform-browser';

        import { AppRoutingModule } from './app-routing.module';
        import { AppComponent } from './app.component';
        import { HomeComponent } from './home/home.component';
        import { AboutComponent } from './about/about.component';
        import { ContactsComponent } from './contacts/contacts.component';
        import { GalleryComponent } from './gallery/gallery.component';
        import { ProductsComponent } from './products/products.component';
        import { ProfileComponent } from './profile/profile.component';

        @NgModule({
        declarations: [
            AppComponent,
            HomeComponent,
            AboutComponent,
            ContactsComponent,
            GalleryComponent,
            ProductsComponent,
            ProfileComponent
        ],
        imports: [
            BrowserModule,
            AppRoutingModule
        ],
        providers: [],
        bootstrap: [AppComponent]

        })
        export class AppModule { }

    Why we don't write extension when importing something from other files in angular?
        -angular uses something called (webpack)
        -webpack makes something called bundle
        -we will discuss the details later
        
        
    

-->