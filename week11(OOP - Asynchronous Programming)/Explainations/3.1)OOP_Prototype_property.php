<!-- 
Prototype Property:
    -Sometimes you want to add new properties (or methods) to all existing objects of a given type.
    -Prototype property add new properties (or methods) to all existing objects of a given type(these properties and methods will be common between all objects)
    -if one object changed in them , this change will be applied to all objects

    Example:
        let Person = function(id, name, age , gender, salary){
            this.id = id;
            this.userName = name;
            this.gender = gender;
            this.salary = salary;

            this.welcome2 = function(){
                console.log("welcome2");
            }
        }

        Person.prototype.friends = ["hazem", "taha"];

        Person.prototype.welcome1 = function(){
            console.log("Welcome1");
        }


        let ali = new Person("C344", 'ali hassan', 23, 'male', 5000);
        let amr = new Person("C344", 'amr hassan', 23, 'male', 5000);
        let aya = new Person("C344", 'aya hassan', 23, 'male', 5000);

        ali.friends.push("salah");
        console.log(amr.friends); //['hazem', 'taha', 'salah']
        ali.userName = "abdelrahman";
        console.log(amr.userName); //amr hassan

        Explanation:
            -when memory make a new object , it puts all things created by this in a side and all things created by prototype property in the other side

            -all things created by this will be created for every new object/instance
            -while things created by prototype property will be created once and shared between all objects

            -if we created welcome2 function by this , it will be created for every new object and this is not correct

            -if we created friends array using prototype property , it will be shared between all objects and this is not correct 
            
            -we should create properties inside constructor function(prototype object) using this 
            -and we should create all methods outside constructor function using prototype property

            -prototype property is what oop prototype - based has better performance
-->