import { Injectable } from '@angular/core';
declare var $:any;

@Injectable({
  providedIn: 'root'
})
export class ParticleGroundService {

  constructor() {

  }

  fireParticlePlugin(id:string){
    $(id).particleground();
  }

}
