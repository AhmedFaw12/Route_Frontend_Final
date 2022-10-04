import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HomeComponent } from './home/home.component';
import { AboutComponent } from './about/about.component';
import { GalleryComponent } from './gallery/gallery.component';
import { FormsModule } from '@angular/forms';
import { FooterComponent } from './footer/footer.component';
import { NavbarComponent } from './navbar/navbar.component';
import { ProjectsComponent } from './projects/projects.component';
import { NotfoundComponent } from './notfound/notfound.component';

import { HttpClientModule } from '@angular/common/http';
import { HelloPipe } from './hello.pipe';
import { GenderPipe } from './gender.pipe';
import { SeemorePipe } from './seemore.pipe';

@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    AboutComponent,
    GalleryComponent,
    FooterComponent,
    NavbarComponent,
    ProjectsComponent,
    NotfoundComponent,
    HelloPipe,
    GenderPipe,
    SeemorePipe
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule,
    HttpClientModule
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
