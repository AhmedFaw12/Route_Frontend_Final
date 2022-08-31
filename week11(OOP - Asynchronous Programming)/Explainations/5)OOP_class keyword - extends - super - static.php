<!-- 
Class keyword:
    -ECMAScript 2015, also known as ES6, introduced JavaScript Classes.

    -A JavaScript class is not an object.
    -It is a template for JavaScript objects.
    -Use the keyword class to create a class.
    
    -Always add a method named constructor()
    -constructor is a special method , called automatically when making a new instance from the class
    -If you do not define a constructor method, JavaScript will add an empty constructor method.

    -we can't write any identifier(function, var , let , const) inside js class

    Example:
        class Person{
            constructor(id, name, age , gender, salary){
                this.id = id;
                this.userName = name;
                this.gender = gender;
                this.salary = salary;
            }
            welcome(){
                console.log("Welcome1");
            }
        }

        let ali = new Person("C344", 'ali hassan', 23, 'male', 5000);
        let amr = new Person("C344", 'amr hassan', 23, 'male', 5000);
        let aya = new Person("C344", 'aya hassan', 23, 'male', 5000);
        
    -the class they made is called sugar syntax
    -js is still oop prototype based
    -it just added keyword class from outside(appearance) , but from inside it is same as before :
        -Person is a construction function
        -welcome is a prototype function

    -some rules on classes:
        -only one constructor is allowed
        -every class should have a constructor
        -classes of ES6 can't have indetifier(var, let , const, function)
------------------------------------------------------------------------------------------------------------------------------------------------------------------------

extends keyword: 
    -The extends keyword is used to create a child class of another class (parent).

    -The child class inherits all the methods,properties from another class.

    -Inheritance is useful for code reusability: reuse properties and methods of an existing class when you create a new class.

    Example:
        class Person{
            constructor(id, name, age , gender, salary){
                this.id = id;
                this.userName = name;
                this.gender = gender;
                this.salary = salary;
            }
            welcome(){
                console.log("Welcome1");
            }
        }


        class Engineer extends Person{
            
        }

        let e = new Engineer("c4rr", "ahmed", 25, "male", 10000);
        e.welcome(); //welcome1
------------------------------------------------------------------------------------------------------------------------------------------------------------------------
super keyword:
    -The super keyword is used to call the constructor of its parent class to access the parent's properties and methods.

    -The super() method refers to the parent class

    Example:
        class Person{
            constructor(id, name, age , gender, salary){
                this.id = id;
                this.name = name;
                this.age = age;
                this.gender = gender;
                this.salary = salary;
            }
            welcome(){
                console.log("Welcome1");
            }
        }


        class Engineer extends Person{
            constructor(id, name, age, gender, salary, deprt, univ){
                super(id, name, age, gender, salary);
                this.deprt = deprt;
                this.univ = univ;
            }
            hello(){
                console.log("hello " , this.name);
            }
        }

        let e = new Engineer("c4rr", "ahmed", 25, "male", 10000, "civil", "AinShams");
        e.welcome();//welcome1

        e.hello(); //hello ahmed
------------------------------------------------------------------------------------------------------------------------------------------------------------------------

static keyword:
    The static keyword defines static methods for classes.

    Static methods are called directly on the class (Car from the example) - without creating an instance/object (mycar) of the class.


    Example:
        class Car {
            constructor(brand) {
                this.carname = brand;
            }
            static hello() {  // static method
                return "Hello!!";
            }
        }

        mycar = new Car("Ford");

        console.log(Car.hello()); //Hello!!


NOTE:
    -JS is not completely oop language
-->