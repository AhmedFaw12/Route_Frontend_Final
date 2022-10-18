

// import {Setting} from './setting.js'
// new Setting();




let person = {
    name :"Ahmed",
    age : 25
};
let second ={
    address:{
        city:"cairo",
        street:"dokki"
    }
}
let clonedObject = {...person, ...second};
console.log(clonedObject);
clonedObject.name ="ali";
console.log(clonedObject);