import { Observable } from 'rxjs';

let observable = new Observable((observer) => {
    setTimeout(function(){
        console.log("hello")
        observer.next("next being called")
    }, 1000);
  })

  console.log("START")
  observable.subscribe(value => console.log(value))
  console.log("END")
