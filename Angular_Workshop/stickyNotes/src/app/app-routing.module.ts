import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { NotFoundComponent } from './components/not-found/not-found.component';
import { ProfileComponent } from './components/profile/profile.component';
import { SignInComponent } from './components/sign-in/sign-in.component';
import { SignUpComponent } from './components/sign-up/sign-up.component';
import { AuthGuard } from './guards/auth.guard';
import { GuestGuard } from './guards/guest.guard';

const routes: Routes = [
  {path:"", redirectTo:"signin" , pathMatch:"full"},
  {path:"signin", canActivate:[GuestGuard], component:SignInComponent},
  {path:"signin/:successLogout", canActivate:[GuestGuard], component:SignInComponent},
  {path:"signup",canActivate:[GuestGuard], component:SignUpComponent},
  {path:"profile", canActivate:[AuthGuard], component:ProfileComponent},
  {path:"**", component:NotFoundComponent},

];

@NgModule({
  imports: [RouterModule.forRoot(routes, {useHash:true})],
  exports: [RouterModule]
})
export class AppRoutingModule { }
