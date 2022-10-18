<!-- 
Why we need JS:
    -interactions(events,..)
    -AJAX to get data from backend using api
    -Validations(regex)
    -makes logic (handles flow of our website)

-What can't JS do :
    -can't read or write from filesystem(on my pc)
    -can deal with backend/database using api , and deal with localStorage

-datatypes in JS:
    -primitive datatypes(that takes one value):
        -number, string, boolean,undefined, null


    -non primitive datatypes():
        -object: can take number,string, object, function, ...
        
    Note:
        -array is not a datatype,
        -array holds datatype(array of string, array of number, array of objects, ....)

-DOM:
    -object containing all our html code, so that js can deal with html elements

    selecting elements:
        -document.getElementById()
        -document.getElementsByTagName()


-functions

-let, var , const:
    -var makes hoisting
    -let, const don't make hoisting

    example on var:
        console.log(x); //undefined
        var x = 5;

    Example on let:
        console.log(x); //error
        let x = 5;

----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
destructing:
    -to extract only what you need

    syntax:
        let obj = {
            property1: value1,
            property2: value2,
            property3: value3,
        }

        let {property1, property2, property3} = obj

        -we must use same property names

        let {property2} = obj
        console.log(proporty2); //value2

        -we can use only one property 

    another syntax:
        let obj = {
            property1: value1,
            property2: value2,
            property3: value3,
        }

        let {property1: anotherName1 , property2: anotherName2} = obj;


        console.log(anotherName1, anothername2); //value1, value2

        -we can change name of properties by assigning them to new variables


    -Setting default values:
        You can assign a default value to the variable when the property of an object doesn’t exist.


        Example:
            let person = {
                firstName: 'John',
                lastName: 'Doe',
                currentAge: 28
            };

            let { firstName, lastName, middleName = '', currentAge: age = 18 } = person;

            console.log(middleName); // ''
            console.log(age); // 28

        Example:
            let person = {
                firstName: 'John',
                lastName: 'Doe',
                middleName: 'C.',
                currentAge: 28
            };

            let { firstName,  lastName, middleName = '', currentAge: age = 18 } = person;

            console.log(middleName); // 'C.'
            console.log(age); // 28

    -Destructuring a null object:
        - function may return an object or null in some situations. For example:

        Example(wrong , will get error):
            function getPerson() {
                return null;
            }

            let { firstName, lastName } = getPerson();

            console.log(firstName, lastName);


            -The code will throw a TypeError:
                TypeError: Cannot destructure property 'firstName' of 'getPerson(...)' as it is null.


        Example(correct):
            -To avoid this, you can use the OR operator (||) to fallback the null object to an empty object:

            let { firstName, lastName } = getPerson() || {};



            function getPerson() {
                return null;
            }

            let { firstName, lastName } = getPerson() || {};

            console.log(firstName, lastName); // undefined undefined

    
    Destructuring function arguments:
        Example:
            let person ={
                fName : "Ahmed",
                lName : "Fawzy"
            }

            let display = ({fName, lName}) =>{
                console.log(fName, lName);
            }

            display(person);


            -we didn't use person.fName, person.lName
            -we used directly fName , lName

    
    Nested object destructuring:

        let person ={
            name:{
                fName : "Ahmed",
                lName : "Fawzy"
            },

            age:25
        };

        -The following statement destructures the properties of the nested name object into individual variables:

        let {
            name:{
                fName,
                lName
            }
        } = person;


        console.log(fName); // Ahmed
        console.log(lName); // Fawzy

    
        -It’s possible to do multiple assignement of a property to multiple variables:

        let {
            name:{
                fName,
                lName
            },

            name
        } = person;

        console.log(name); //{fName:"Ahmed", lName: "Fawzy"}
        console.log(fName); // Ahmed
        console.log(lName); // Fawzy

----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

JavaScript Spread Operator:
    ES6 provides a new operator called spread operator that consists of three dots (...). The spread operator allows you to spread out elements of an iterable object such as an array, map, or set. 

    Example:
        const odd = [1,3,5];
        const combined = [2,4,6, ...odd];
        console.log(combined); //[ 2, 4, 6, 1, 3, 5 ]

        -In this example, the three dots ( ...) located in front of the odd array is the spread operator. The spread operator (...) unpacks the elements of the odd array.

    
    difference between rest parameter and spread operator:
        -Note that ES6 also has the three dots ( ...) which is a rest parameter that collects all remaining arguments of a function into an array.


        Example on rest parameter:
            function f(a, b, ...args) {
                console.log(args);
            }

            f(1, 2, 3, 4, 5);//[ 3, 4, 5 ]
            f(1, 2);//[] ==>empty array


            -In this example, the rest parameter (...) collects the arguments 3, 4, and 5 into an array args. So the three dots ( ...) represent both the spread operator and the rest parameter.


        -Here are the main differences:
            -The spread operator (...) unpacks the elements of an iterable object.
            -The rest parameter (...) packs the elements into an array.

        -The rest parameters must be the last arguments of a function. However, the spread operator can be anywhere:

        Example on spread operator:
            const odd = [1,3,5];
            const combined = [...odd, 2,4,6];
            console.log(combined); //[ 1, 3, 5, 2, 4, 6 ]

            or

            const odd = [1,3,5];
            const combined = [2,...odd, 4,6];
            console.log(combined);//[ 2, 1, 3, 5, 4, 6 ]


    how to spread array and send array as parameters in function:
        Example:
            function compare(a, b) {
                return a - b;
            }

            let result = compare(...[1, 2]);
            console.log(result); // -1

            -by using the spread operator, you can pass an array of two numbers to the compare() function

    
    A better way to use the Array’s push() method example:
        -Example to push array in another array:
            -we want to push moreRivers array into rivers array    

            let rivers = ['Nile', 'Ganges', 'Yangte'];
            let moreRivers = ['Danube', 'Amazon'];

            rivers.push(...moreRivers);

            console.log(rivers);


    JavaScript spread operator and array manipulation:
        1)Constructing array literal:
            The spread operator allows you to insert another array into the initialized array when you construct an array using the literal form. See the following example:
            
            Example:
                let initialChars = ['A', 'B'];
                let chars = [...initialChars, 'C', 'D'];
                console.log(chars); // ["A", "B", "C", "D"]

        2)Concatenating arrays:
            -Also, you can use the spread operator to concatenate two or more arrays:

            Example:
                let numbers = [1, 2];
                let moreNumbers = [3, 4];
                let allNumbers = [...numbers, ...moreNumbers];
                console.log(allNumbers); // [1, 2, 3, 4]

        3) Copying an array:
            In addition, you can copy an array instance by using the spread operator:

            EXAMPLE:
                let scores = [80, 70, 90];
                let copiedScores = [...scores];
                console.log(copiedScores); // [80, 70, 90]
    
        
    -JavaScript spread operator and strings:
        Example:
            let chars = ['A', ...'BC', 'D'];
            console.log(chars); // ["A", "B", "C", "D"]

        -In this example, we constructed the chars array from individual strings. When we applied the spread operator to the 'BC'string, it spreads out each individual character of the string 'BC' into individual characters.

----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

JavaScript Object Spread:
    -ES2018 expands the spread operator to objects, which is known as object spread.

    -ES2018 expands the spread operator (...) to make it works with own enumerable properties of an object.

    Example:
        const circle = {
            radius: 10
        };

        const coloredCircle = {
            ...circle,
            color: 'black'
        };

        console.log(coloredCircle);


        -Output:
            {
                radius: 10,
                color: 'black'
            }

        -coloredCircle object has all properties of the circle object and an additional property color

    

    -JavaScript Object spread operator use cases:
        1) clone(copy) an object:
            -You can use the spread operator to clone the own enumerable properties of an object:
            
            Example:
                const circle = {
                    radius: 10
                };

                const clonedCircle = {...circle};

                console.log(clonedCircle);//{ radius: 10 }

            Example:
                const circle = {
                    radius: 10,
                    style: {
                        color: 'blue'
                    }
                };

                const clonedCircle = {
                    ...circle
                };

                console.log(clibedCircle);
                clonedCircle.style = 'red';

                console.log(clonedCircle);//{ radius: 10, style: 'red' }

        2) Merging objects:

                Like arrays, you can use the spread operator (...) to merge two objects:

                Example:
                    const circle = {
                        radius: 10
                    };

                    const style = {
                        backgroundColor: 'red'
                    };

                    const solidCircle = {
                        ...circle,
                        ...style
                    };

                    console.log(solidCircle);//{ radius: 10, backgroundColor: 'red' }



----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


Map Object:
    


            


 -->
