<!--  
Lazy Loading:
    -التحميل الكسول
    -nomrally when we open angular project, everything loads
    -but when we have bigger project, (everything loads) causes delay
    -we will mark certain part of my project and tell angular not to load this part untill user click on it

    lazy loading rules:
        1)lazy loading is not applied on components:
            -lazy loading is applied on whole module

    -example:
        brief:
            -we will make (settings) module
            -setting module will contain two components: profile , changepassword
            -tell angular not to load this module untill user clicks on it
            -we will make it manually at first

        -we want to make module and make routing for it:
            ng g m settings --routing true

            -settings folder is created containing 2 files:
                -settings.module.ts
                -settings-routing.module.ts

            -note:
                -app-routing.module.ts contains:
                    imports: [RouterModule.forRoot(routes)],

                    -forRoot means it is the main routing for whole project


                -settings-routing.module.ts contains:
                    imports: [RouterModule.forChild(routes)],

                    -forChild means it is sub-routing for part of project(روتينج فرعى لجزء من المشروع)
                    
        -we want to make components inside module:
            ng g c settings/profile --skip-tests

            -settings/profile : means make profile component inside settings module
            -profile component is created and its class name is put in decleration array inside settings.module.ts

        
        -we will add our path that will redirect us to profileComponent inside routes array of settings.module.ts:
                
            settings-routing.module.ts:
                const routes: Routes = [
                    {path:"", component:ProfileComponent}
                ];

            -path:"": path empty relative to settings module
            -path:"" :means http://localhost:4200/settings
                
        -go to main routing module(app-routing.module.ts) and make lazy loading:
            -app-routing.module.ts:
                const routes: Routes = [
                    //
                    {
                        path: 'settings',
                        loadChildren: () => import('./settings/settings.module').then(m => m.SettingsModule)
                    },
                    //
                ];

                -this code makes angular do lazy loading to settings module
                -when path :"settings", go to settings folder and go to settings.module.ts and load SettingsModule
                
                Note:
                    -don't import settingsModule in app.module.ts
                    -if we imported it inside app module, we didn't make lazy loading 
        
        -then go to navbar.component.html and add link for settings:
            -<li class="nav-item">
              <a *ngIf="isLogin"  class="nav-link" routerLink="settings">Settings</a>
            </li>
            
        
        -how to make sure that lazy loading is applied:
            -go to browser
            -inspect
            -Network: show all request that my browser made to show project design
            -select js files : settings module isn't loaded
            -when we click on settings link , settings module is loaded
------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Full Example Lazy Loading:
    -ng g m settings --routing true
    -ng g c settings/profile --skip-tests

    app-routing.module.ts:
        const routes: Routes = [
            //
            {
                path: 'settings',
                loadChildren: () => import('./settings/settings.module').then(m => m.SettingsModule)
            },
            //
        ];

    settings.module.ts:
        import { ProfileComponent } from './profile/profile.component';

        declarations: [
            ProfileComponent
        ],
        

    settings-routing.module.ts:
        import { ProfileComponent } from './profile/profile.component';

        const routes: Routes = [
            {path:"", component:ProfileComponent}
        ];
            

    navbar.component.html:
        <li class="nav-item">
          <a *ngIf="isLogin"  class="nav-link" routerLink="settings">Settings</a>
        </li>

    
        
-->