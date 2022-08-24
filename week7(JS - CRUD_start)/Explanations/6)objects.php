<!-- 
Objects:
    Intro:
        -it is a structural datatype(non primitive)
        -Objects are variables too. But objects can contain many values.

        -objects simulate Reality(بيحاكى الواقع)

        Example:
            -All cars have the same properties, but the property values differ from car to car.

            -All cars have the same methods, but the methods are performed at different times.

        Syntax:
            var user = {
                propertyName: value,
                propertyName2: value2,
                propertyName3: value3,
                .....
            }
        
        Example:
            var user = {
                firstName:'Ahmed',
                age:25,
                gender:'male',
                salary:8000,
                isMarried:true
            };
        
        -we can make empty object:        
            var product = {};
            console.log(typeof(product));
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    Access Object properties:
        -objectName.propertyName :
            -most used 
            Example:
                var user = {
                    firstName:'Ahmed',
                    age:25,
                    gender:'male',
                    salary:8000
                };
                console.log(user.age); //25  
            
            Example:
                var user = {
                    firstName:'Ahmed',
                    age:25,
                    gender:'male',
                    salary:8000
                };
                console.log(age); //error
            
        -objectName["propertyName"]:
            -not used because it makes conflict in understanding with arrays
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    Object Nesting:
        Example:
            var user = {
                firstName:'Ahmed',
                age:25,
                gender:'male',
                salary:8000,
                isMarried:true,
                wife:{
                    firstName:'aya',
                    age:24,
                    gender:'female'   
                }
            };

            console.log(user.wife); 
        
            -output:
                {
                    firstName:'aya',
                    age:24,
                    gender:'female'   
                }
            
            console.log(user.wife.gender); //female

        Example:
            var user = {
                firstName:'Ahmed',
                age:25,
                gender:'male',
                salary:8000,
                isMarried:true,
                wife:{
                    firstName:'aya',
                    age:24,
                    gender:'female',
                    son:{
                        firstName:"ali",
                        age:4,
                        gender:'male'
                    }   
                }
            };             
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    Object Methods:
        -Objects can also have methods.

        -Methods are actions that can be performed on objects.

        -Methods are stored in properties as function definitions.
    
        -A method is a function stored as a property.

        -we use expression functions
        -function inside an object is called method
            
        Example:
            var user = {
                firstName:'Ahmed',
                age:25,
                gender:'male',
                salary:8000,
                welcome:function(){ //Method
                    console.log("welcome back");
                }
            };

            user.welcome(); //welcome back
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    Js built-in objects:
        -window
        -document

        -how they are built:
            Example:
                var window = {
                    alert:function(message){
                        ////
                    },
                    prompt:function(message){
                        ////
                    },
                    document :{
                        getElementById:function(){
                            ////
                        },
                    console:{
                        log:function(){
                            ////
                        },
                        error:function(message){
                            ///
                        }
                    }
                }
        -document object is inside window object(window is the browser and html code is inside the browser)
        -also console is inside window(console is inside the browser)
                
        -also any objects or functions that are made by user , it is automatically put inside window object:
            Example:
                function sayHello(){
                   console.log("hello");
                }
                
                window.sayHello();
                
            Example:
                var user = {
                    firstName:'Ahmed',
                    age:25,
                    gender:'male',
                    salary:8000
                };

                console.log(window.user);
        
        -we should say widnow.document.getElementById('...')
        -we should say window.console.log("hello")
            
        We can consider window is the default global object:
            -everything is inside it
            -so we can write other built-in objects, user objects without (wondow.)

            Example:
                alert("hello");
                console.log("hello");

                var user = {
                    firstName:'Ahmed',
                    age:25,
                    gender:'male',
                    salary:8000
                };
                
                console.log(user);
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

-It is a common practice to declare objects with the const keyword:
    example:
        const car = {type:"Fiat", model:"500", color:"white"};
        
    -const car mean const reference to the object
    -we can change in the object itself normally

-->