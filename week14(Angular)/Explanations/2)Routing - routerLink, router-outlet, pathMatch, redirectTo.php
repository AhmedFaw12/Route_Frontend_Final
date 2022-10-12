<!-- 
Routing:
    -routing makes me move from page to another
    -when we first made angular project
    -it asked me a question do you want Routing? and we said yes
    -when we said yes , (app-routing.module.ts) is created

    -if we made a mistake and said no, we will create app-routing.module.ts manually and write its code manually

    -localhost:4200 is turned into (www.) when we upload our project on server
    -localhost:4200/home , what comes after slash(/) is called path

    -routing steps :
        1)
        -is what is the path in the url 
        -and what is the component to be displayed when we write that path
        -we do this using routes array in app-routing.module.ts
            Example:
                app-routing.module.ts:
                    import { HomeComponent } from './home/home.component';
                    import { AboutComponent } from './about/about.component';
                    import { GalleryComponent } from './gallery/gallery.component';
                    import { ProjectsComponent } from './projects/projects.component';


                    const routes: Routes = [
                    {path:"home", component:HomeComponent},
                    {path:"gallery", component:GalleryComponent},
                    {path:"about", component:AboutComponent},
                    {path:"projects", component:ProjectsComponent},

                    ];

        2)(router-outlet)
            -we must determine where to display this component
            -and we want some components to be fixed(sidebar, navbar, ...) displayed in all pages 
            -and other components we will route between them

            -we go to app.component.html and add <router-outlet></router-outlet>
            -<router-outlet></router-outlet> is a selector made by angular to tell/inform routing that this is the place where we will route between components
            
            Example:
                app.component.html:
                    <h1>Navbar</h1>
                    <router-outlet></router-outlet>
                    <h2>Footer</h2>

                    -this means h1 and h2 will be fixed in all pages
                    -and router-outlet will be changed/replaced by certain components according to the path

            -it is not good that user will write  /home , /about by himself in the url, so we need to make a navbar that has home,about, ... links
            -when we click on link , it will go to url and write the path 

        3)(routerLink)
            -it is not good that user will write  /home , /about by himself in the url, so we need to make a navbar that has home,about, ... links
            -when we click on link , it will go to url and write the path 

            -(routerLink) directive:
                -directive/attribute made by angular 
                -when we click on link , it will go to url and write the path 
                -so we will write our path inside routerLink directive

            -we removed href and replaced it with routerLink
            -href by default makes reload

            Example:
                <li class="nav-item">
                    <a class="nav-link" routerLink = "home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" routerLink = "about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" routerLink = "projects">Projects</a>
                </li>

            -routerLink = "home" is same as (window.location.href = "home.html) in js

        4)routerLinkActive: 
            -angular directive
            -it takes a class or array of string classes
            -when we click on link and become active , these classes are applied on the active link
            -we need property binding when passing array of classes

             Example:
                <li class="nav-item">
                    <a class="nav-link" routerLink = "home" [routerLinkActive]="['bg-danger', 'text-uppercase']">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" routerLink = "about" [routerLinkActive]="['bg-danger', 'text-uppercase']">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" routerLink = "projects" [routerLinkActive]="['bg-danger', 'text-uppercase']">Projects</a>
                </li>


        -note1:
            -when we open website for first time, it will give me an error
            -because we don't have path in the url(path is empty)
            -we must tell routes array in app-routing.module.ts what component to get when path is empty

            

            Example:
                app-routing.module.ts:
                    const routes: Routes = [
                        {path:"", component:HomeComponent},
                        {path:"home", component:HomeComponent},
                        {path:"gallery", component:GalleryComponent},
                        {path:"about", component:AboutComponent},
                        {path:"projects", component:ProjectsComponent},
                    ];

            -but it is not good in performance because we are getting HomeComponent two times , we are making two copies for same component, and this will increase load
            
            redirectTo:
                -so instead of getting same component twice
                -when user enter website for first time , and path is empty , we will write (home) in the path , using redirectTo
                -so we will get component only one time

                -but we must use pathMatch: "full/prefix".

                Example:
                    app-routing.module.ts:
                        const routes: Routes = [
                            {path:"", redirectTo:"home", pathMatch:"full"},
                            {path:"home", component:HomeComponent},
                            {path:"gallery", component:GalleryComponent},
                            {path:"about", component:AboutComponent},
                            {path:"projects", component:ProjectsComponent},
                        ];
        
            pathMatch:
                Note:
                    //wrong example
                    {path:"", redirectTo:"home"},
                    {path:"home/:id", component:HomeComponent},
                    {path:"home", component:HomeComponent},

                    -if we have two home paths , if we didn't write pathMatch , it will give error because it can't determine which home path

                -full:
                    {path:"", redirectTo:"home", pathMatch:"full"},
                    {path:"home/:id", component:HomeComponent},
                    {path:"home", component:HomeComponent},

                    -full means redirect to path which value ="home" only without any additives

                -prefix:
                    {path:"", redirectTo:"home", pathMatch:"prefix"},
                    {path:"home/:id", component:HomeComponent},
                    {path:"home", component:HomeComponent},

                    -prefix means redirect to path which starts with "home"
                    -and since we have 2 homes , it will go to the first home in the array "home/:id"
        --------------------------------------------------------------------------------------------------------------------------------------------------

        note2:
            -when someone write path that doesn't exists in routes array
            -there will be an error
            
            -so we should handle the case when someone write path that doesn't exists in routes array

            -we will redirect client to 404 page , 404 means page not found
            -so we make 404 page
            
            Example:
                app-routing.module.ts:
                    const routes: Routes = [
                        {path:"", redirectTo:"home", pathMatch:"full"},
                        {path:"home", component:HomeComponent},
                        {path:"gallery", component:GalleryComponent},
                        {path:"about", component:AboutComponent},
                        {path:"projects", component:ProjectsComponent},
                        {path:"**", component:NotfoundComponent}
                    ];

            {path:"**", component:NotfoundComponent}:   
                -means if path was something else not listed in the routes array, then get notfound Component
                -path:"**" means anything else 

                -so if path wasn't home,gallery, about, project or empty, then it will go to else(**)

                note:
                    -if we put path:"**" first thing in the routes array, notfound component will be displayed if we clicked on home,about, gallery , or if path was empty
    ----------------------------------------------------------------------------------------------------------------------------------------------------------
    -in app-routing.module.ts :
        -we have routes array:
            -this array takes object that take (path, component className)
            -and since we are write component className, we need to import this class   
------------------------------------------------------------------------------------------------------------------------------------------------------------------
Full Routing Example:
    -Commands:
        -we will create multiple components
        ng g c navbar --skip-tests
        ng g c home --skip-tests
        ng g c about --skip-tests
        ng g c gallery --skip-tests
        ng g c projects --skip-tests
        ng g c notfound --skip-tests
       
    app-routing.module.ts:
        import { HomeComponent } from './home/home.component';
        import { AboutComponent } from './about/about.component';
        import { GalleryComponent } from './gallery/gallery.component';
        import { ProjectsComponent } from './projects/projects.component';
        import { NotfoundComponent } from './notfound/notfound.component';


        const routes: Routes = [
            {path:"", redirectTo:"home", pathMatch:"full"},
            {path:"home", component:HomeComponent},
            {path:"gallery", component:GalleryComponent},
            {path:"about", component:AboutComponent},
            {path:"projects", component:ProjectsComponent},
            {path:"**", component:NotfoundComponent},
        ];

    -home.component.html:
        <table *ngIf="users.length > 0 ; else hambozo" class="table w-75 m-auto table-hover table-dark table-striped table-bordered text-center">
            <thead>
                <th>index</th>
                <th>name</th>
                <th>age</th>
                <th>gender</th>
                <th>salary</th>
                <th>dateOfBirth</th>
            </thead>
            <tbody>
                <tr *ngFor="let user of users; let i = first">
                <td>{{i}}</td>
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

    -projects.component.html:
        <div class="jumbotron">
            <h1 class="display-4">Projects, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>

    -gallery.component.html:
        <div class="jumbotron">
            <h1 class="display-4">Gallery, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>

    -about.component.html:  
        <div class="jumbotron">
            <h1 class="display-4">About, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>
    
    -notfound.component.html:
        <img src="assets/images/404.png" class="w-100" alt="">

    -navbar.component.html:
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto text-uppercase">
                <li class="nav-item">
                    <a class="nav-link" routerLink = "home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" routerLink = "about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" routerLink = "projects">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" routerLink = "gallery">Gallery</a>
                </li>
                </ul>

            </div>
        </nav>

    -app.component.html:
        <app-navbar></app-navbar> 
        <div class="container-fluid py-5">
            <div class="row">
                <div class="col-md-2">
                    <h3>SideBar</h3>
                </div>
                <div class="col-md-10">
                    <router-outlet></router-outlet>
                </div>
            </div>
        </div>
-->