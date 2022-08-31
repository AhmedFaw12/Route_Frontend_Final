<!-- 
__proto__ property:
    -Any object in Js has ( __proto__ ) property
    - __proto__ has all things created by prototype property
    - __proto__ property is depricated , so use Object.getPropertyOf() method instead.
    Example:
        function Person(id, name, age , gender, salary){
            this.id = id;
            this.userName = name;
            this.gender = gender;
            this.salary = salary;
        }

        Person.prototype.friends = ["hazem", "taha"];

        Person.prototype.welcome = function(){
            console.log("Welcome1");
        }


        let ali = new Person("C344", 'ali hassan', 23, 'male', 5000);
        let amr = new Person("C344", 'amr hassan', 23, 'male', 5000);
        let aya = new Person("C344", 'aya hassan', 23, 'male', 5000);

        console.log(ali);
        console.log(Person.prototype === ali.__proto__);//true

        //output
            Person {id: 'C344', userName: 'ali hassan', gender: 'male', salary: 5000}
                gender: "male"
                id: "C344"
                salary: 5000
                userName: "ali hassan"
                [[Prototype]]: Object
                    friends: (2) ['hazem', 'taha']
                    welcome: ƒ ()
                    constructor: ƒ Person(id, name, age , gender, salary)
                    [[Prototype]]: Object
                
            
            true
------------------------------------------------------------------------------------------------------------------------------------------------------------------------
hasOwnProperty() object method:
    -The JavaScript Object hasOwnProperty() method checks if the object has the given property as its own property(added by this or not).

    Example:
        function Person(id, name, age , gender, salary){
            this.id = id;
            this.userName = name;
            this.gender = gender;
            this.salary = salary;
        }

        Person.prototype.friends = ["hazem", "taha"];

        Person.prototype.welcome = function(){
            console.log("Welcome1");
        }


        let ali = new Person("C344", 'ali hassan', 23, 'male', 5000);
        let amr = new Person("C344", 'amr hassan', 23, 'male', 5000);
        let aya = new Person("C344", 'aya hassan', 23, 'male', 5000);

        console.log(ali.hasOwnProperty("id")); //true
        console.log(ali.hasOwnProperty("friends")); //false
------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Object.getPropertyOf() method:

    -__proto__ property is depricated
        
    -The Object.getPrototypeOf() method returns the prototype (i.e. the value of the internal [[Prototype]] property) of the specified object.  
    
    Example:
        function Person(id, name, age , gender, salary){
            this.id = id;
            this.userName = name;
            this.gender = gender;
            this.salary = salary;
        }

        Person.prototype.friends = ["hazem", "taha"];

        Person.prototype.welcome = function(){
            console.log("Welcome1");
        }


        let ali = new Person("C344", 'ali hassan', 23, 'male', 5000);
        let amr = new Person("C344", 'amr hassan', 23, 'male', 5000);
        let aya = new Person("C344", 'aya hassan', 23, 'male', 5000);

        console.log(Person.prototype === Object.getPrototypeOf(ali));//true

    -all objects in js has [[Prototype]] property
    Example:            
        let user = {name:"ahmed", age: 25};
        console.log(user)

        output:
            age: 25
            name: "ahmed"
            [[Prototype]]: Object

------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Prototypal Inheritance(prototypal chain):
    -All JavaScript objects inherit properties and methods from a prototype its parent
    -The Object.prototype is on the top of the prototype inheritance chain

    -Object is a built-in object
    -the parent of Object is null

    Example:
        Object.prototype.test = function(){
            console.log("test");
        }
        function Person(id, name, age , gender, salary){
            this.id = id;
            this.userName = name;
            this.gender = gender;
            this.salary = salary;
        }

        Person.prototype.friends = ["hazem", "taha"];

        Person.prototype.welcome = function(){
            console.log("Welcome1");
        }


        let ali = new Person("C344", 'ali hassan', 23, 'male', 5000);
        let amr = new Person("C344", 'amr hassan', 23, 'male', 5000);
        let aya = new Person("C344", 'aya hassan', 23, 'male', 5000);

        console.log(Person.prototype === Object.getPrototypeOf(ali));//true
        ali.test(); //test

        Explanation:
            -Object is the parent of Person, Person is the parent of (ali, amr, aya)
            -anything added by prototype property in Person , it will be inherited by (ali, amr, aya)
            
            -and anything added by prototype property in Object , it will be inherited by Person and (ali, aya, amr)

            -anything added to the prototype of the parent , it will be inherited by the prototype of the child

    Example:        
        Object.prototype.welcome = function(){
            console.log("hello");
        }

        let user = {name:"ahmed", age: 25};
        user.welcome();

        -anything added to the prototype of the parent , it will be inherited by the prototype of the child
    

    Array built in object:
        -we have built in object called array
        -it has prototype functions like : push, sort , pop , shift ,.....
        -when we make new instance from it , it will inherit these prototype functions



        Example:
            Object.prototype.test = function(){
                console.log("test");
            }

            let users = new Array();
            Array.prototype.push = function(){
                
            }
            Array.prototype.pop = function(){

            }
            Array.prototype.unshift = function(){

            }
            users = ["ahmed", "ali", "mai", "aya"];

            users.test(); //test
            
        Example:
            let users = []; //same as let users = new Array();         
-->