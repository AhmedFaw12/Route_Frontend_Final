<!-- 
OOP Prototype based:
    -has no class
    -prototype(نموذج مبدأى)
    -make a prototype object ,and we  can produce more objects based on prototype object(object from prototype object)

    -How to make prototype object:
        -we will make a function and may have parameters, and this function is called (Constructor functions)

        -when this keyword is used in a constructor function, this refers to the object when the object is created

        Example:
            function Person(id, name, age , gender, salary){
                this.id = id;
                this.userName = name;
                this.gender = gender;
                this.salary = salary;
            }
        Example:
            let Person = function(id, name, age , gender, salary){
                this.id = id;
                this.userName = name;
                this.gender = gender;
                this.salary = salary;
            }

    -How to create objects from prototype object:
        -we use word (new)
        function Person(id, name, age , gender, salary){
            this.id = id;
            this.userName = name;
            this.gender = gender;
            this.salary = salary;
        }


        let ali = new Person("C344", 'ali hassan', 23, 'male', 5000);//instant
        let amr = new Person("C344", 'amr hassan', 23, 'male', 5000);
        let aya = new Person("C344", 'aya hassan', 23, 'male', 5000);
    ----------------------------------------------------------------------------------------------------------------------------------------------------------------

    

    

-->