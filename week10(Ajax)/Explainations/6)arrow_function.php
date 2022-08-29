<!-- 
Arrow Function:
    -Arrow functions were introduced in ES6.

    -Arrow functions allow us to write shorter function syntax

    -we don't use word function with arrow functions and replace it with(=>) after getting parameters or not

    Example:
        //decleration function
        function welcome(userName){
            return `welcome ${userName}`;
        }

        //Expression function
        let welcome = function(userName){
            return `welcome ${userName}`; 
        }

        //arrow function
        let welcome = (userName) =>{
            return `welcome ${userName}`;
        }

        -the three functions are the same
    
    -if arrow function has only one parameter , we can remove ():
        Example:
            let welcome = userName =>{
                return `welcome ${userName}`;
            }
        
    -if body of arrow function is one return statement only, we can remove {} and remove return:
        Example:
            let welcome = userName => `welcome ${userName}`;


    this:
        Example:
            console.log(this); //this here refer to window object
            this.alert("hello"); //also this here refer to window object

        Example:
            -this can also refer to the element on which the event was done
            index.html:
                <div onclick = "test(this);"></div>
            main.js:
                function test(element){
                    console.log(element); //<div onclick = "test(this);"></div>
                }

            -this here refer to the div element (it holds the whole div element)
            
        Example:
            -when using this in object, it refers to the object
            main.js:
                let person ={
                    name:"ahmed",
                    age :28,
                    welcome:function(){
                        console.log(this);
                    }
                }
                person.welcome();

                -this will print the object : {name: 'ahmed', age: 28, welcome: ƒ}
                
            main.js:
                let person ={
                    name:"ahmed",
                    age :28,
                    salary:8000,
                    welcome:function(){
                        console.log(this.name);
                    }
                }
                person.welcome(); //ahmed

                -we can't use name, age ,salary inside object without this 
        Example:
            -when making a function inside another function in the object in js,and used this inside the inner function,  we have problem
            
            -this here will not refer to the object, it will refer to window .
                
            main.js (wrong code):
                let person ={
                    name:"ahmed",
                    age :28,
                    salary:8000,
                    welcome:function(){
                        console.log(this.age);
                    },
                    calcSalary:function(){
                        function calcTax(){
                            return this.salary *0.1;
                        }
                        return this.salary - calcTax(); //number - window = NaN
                    }

                }
                console.log(person.calcSalary()); //return NaN
            
            main.js(Soluion):
                -convert inner function to arrow function                
                let person ={
                    name:"ahmed",
                    age :28,
                    salary:8000,
                    welcome:function(){
                        console.log(this.age);
                    },
                    calcSalary:function(){
                        let calcTax = () => {
                            return this.salary *0.1;//800
                        }
                        return this.salary - calcTax();//7200
                    }
                }
                console.log(person.calcSalary()); //7200

                -when using arrow function, this here will refer to the object

            

    -purpose of arrow function:
        -when making a function inside another function in the object in js,and used this inside the inner function,  we have problem
            
        -this here will not refer to the object, it will refer to window .
        
        -convert inner function to arrow function 
        -when using arrow function, this here will refer to the object

    -NOTE:
        -arrow functions are not hoisted
-->