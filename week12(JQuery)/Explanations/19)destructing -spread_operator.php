<!-- 
destructing:
    -We may have an array or object that we are working with, but we only need some of the items contained in these.

    -Destructuring makes it easy to extract only what is needed.

    Destructing Arrays:
        Example without destructing:
            const vehicles = ['mustang', 'f-150', 'expedition'];

            // old way
            const car = vehicles[0];
            const truck = vehicles[1];
            const suv = vehicles[2];

        Example with destructing:
            const vehicles = ['mustang', 'f-150', 'expedition'];

            const [car, truck, suv] = vehicles;

            console.log(car)

        Example2 :
            -Destructuring comes in handy when a function returns an array:

            function calculate(a, b) {
                const add = a + b;
                const subtract = a - b;
                const multiply = a * b;
                const divide = a / b;

                return [add, subtract, multiply, divide];
                }

                const [add, subtract, multiply, divide] = calculate(4, 7);
                console.log(add);//11
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    
    Destructing objects:
        Example without destructing:
            let user = {
                name: "ahmed",
                age: 25,
                gender: "male",
                foo: function(){
                    console.log("foo");
                }
            };
            console.log(user.name);
            console.log(user.age);
            user.foo();

        Example with destructing:
            let user = {
                name: "ahmed",
                age: 25,
                gender: "male",
                foo: function(){
                    console.log("foo");
                }
            };

            let {name, age, foo} = user;
            console.log(name);
            foo();

        Example2:
            -Here is the new way of using an object inside a function:
            const vehicleOne = {
                brand: 'Ford',
                model: 'Mustang',
                type: 'car',
                year: 2021, 
                color: 'red'
            }

            myVehicle(vehicleOne);

            function myVehicle({type, color, brand, model}) {
                let message = 'My ' + type + ' is a ' + color + ' ' + brand + ' ' + model + '.';

                console.log(message);
            }
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Spread Operator:
    The JavaScript spread operator (...) allows us to quickly copy all or part of an existing array or object into another array or object.

    Example:
        const numbersOne = [1, 2, 3];
        const numbersTwo = [4, 5, 6];
        const numbersCombined = [...numbersOne, ...numbersTwo];

        console.log(numbersCombined); //[1,2,3,4,5,6]
    
    Example:
        -he spread operator is often used in combination with destructuring.
        -Assign the first and second items from numbers to variables and put the rest in an array

        const numbers = [1, 2, 3, 4, 5, 6];
        const [one, two, ...rest] = numbers;

        console.log(one); //1
        console.log(two); //2
        console.log(rest); //[3,4,5,6]
    
    Example:
        -We can use the spread operator with objects too:
        -Combine these two objects:

        const myVehicle = {
            brand: 'Ford',
            model: 'Mustang',
            color: 'red'
        }

        const updateMyVehicle = {
            type: 'car',
            year: 2021, 
            color: 'yellow'
        }

        const myUpdatedVehicle = {...myVehicle, ...updateMyVehicle};
        console.log(myUpdatedVehicle);

        -Notice:
            - the properties that did not match were combined, but the property that did match, color, was overwritten by the last object that was passed, updateMyVehicle. The resulting color is now yellow.
-->

