<!-- 
TypeScript:
    -it is programing language appeared in 2012
    -typescript focus on datatypes ,that don't exist in javascript
    -javascript is loosly typed
    
    TS = Js + some features

    -untill now , no browser support typescript
    -in order to work with typescript, we need to install package from npm :
        npm install typescript

        -it(typescript library) will translate my ts code and convert it to js so that browser understands it

    -TypeScript is compiled, rather than interpreted like JavaScript, which means errors can be caught before execution

    Features of Typescript:
        -we can determine datatype in typescript:
            let x:string = "ahmed";
        
        -we can determine datatype for properties inside class:
            class footer{
                constructor(){}

                userName:string = "ahmed Fawzy"; //property
            }

        -we can determine datatype for parameters and return type of methods and function:
            welcome(x:string, y:boolean):string{
                return "MEMO";
            }

        -typescript decreases error rate during development and makes code more predictable:
            Example:
                class FooterComponent{

                    constructor() { }

                    userName:string = "ahmed Fawzy"; //property

                    welcome(x:string, y:boolean):string{
                        return "MEMO";
                    }
                }


                let footer = new FooterComponent();
                footer.welcome("khaled", false).;     
                
                -since function welcome return string, we can use string methods with it , and it will get me error if we used array methods with it
                    footer.welcome("khaled", false).substr(.....) ; //no error
                    footer.welcome("khaled", false).push(.....) ; //error we can't use array methods with string

        -void return type for function:
            -to say function will not return anything
            Example:
                welcome(x:string, y:boolean):void{
                    console.log("MEMO");
                }

        any datatype:
            -super global type (string, boolean, object, void ,....)
            -we shouldn't use any too much 
            -if we used any too much , then there is not difference between js and typescript

            Example:
                userName:any = "ahmed Fawzy";


        -array of strings:
            friends:string[] = ["ahmed", 'ali', "mai"];

        -array of objects:
            users:object[] = [
                {name:"ahmed", age:25, gender:"male", salary:5000, dateOfBirth:"1/1/2001"},
                {name:"ali", age:23, gender:"male", salary:5000, dateOfBirth:"1/1/2001"},
                {name:"mai", age:29, gender:"female", salary:5000, dateOfBirth:"1/1/2001"},
                {name:"amal", age:22, gender:"female", salary:5000, dateOfBirth:"1/1/2001"},
                {name:"zaki", age:26, gender:"male", salary:5000, dateOfBirth:"1/1/2001"},
            ];

            -we want to determine datatype for every thing in the array of something
            -we want name to be only string, gender to be string, salary to be a number, dateOfbirth to be string
            -we want to make custom datatype
            -so we will use interface

        -interface:
            -how to generate interface:
                ng g i user

                -user.ts file is created 
                -interface is a special class

            -we will determine our datatypes in interface
            -then we will make array of our created interface


            Example:
                user.ts:
                    export interface User {
                        name:string;
                        gender:string;
                        age:number;
                        salary:number;
                        dateOfBirth:string;
                        id?:number
                    }

                users.service.ts: 
                    import { User } from './user';
                    class Service{
                        users:User[] = [
                            {name:"ahmed", age:25, gender:"male", salary:5000, dateOfBirth:"1/1/2001"},
                            {name:"ali", age:23, gender:"male", id:99,  salary:5000, dateOfBirth:"1/1/2001"},
                            {name:"mai", age:29, gender:"female", salary:5000, dateOfBirth:"1/1/2001"},
                            {name:"amal", age:22, gender:"female", salary:5000, dateOfBirth:"1/1/2001"},
                            {name:"zaki", age:26, gender:"male", salary:5000, dateOfBirth:"1/1/2001"},
                        ];
                    }


                    -if we entered numbers in name , it will give error
                    -if we want to add id optional in some objects:
                        -id?:number; 
                        -? means optional

            difference between class and interface:
                -we can make previous example with class
                -properties in class must be initialized
                -we can leave optional without initialization

                    export class User {
                        name:string ='';
                        gender:string = '';
                        age:number = 0;
                        salary:number = 0;
                        dateOfBirth:string = '';
                        id?:number 
                    }
                
                -interface ,we can seperate between each property and the other with ; or ,
                -while in class we can only separate between each property and the other with ; only

                -we can make object from class
                -we can't make object from interface

                -main difference:
                    -typescript is needed during development
                    -typescript is converted to js
                    -so if we make class , class remains in the code after converting 
                    -if we make interface , interface will be removed after converted , so no space is reserved

                    

                    
    




-->