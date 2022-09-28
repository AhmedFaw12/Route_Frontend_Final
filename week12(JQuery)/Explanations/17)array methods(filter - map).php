<!-- 
filter method:
    -it is an array method

    -it is one of ES6 methods

    -The filter() method creates a new array filled with elements that pass a test provided by a function.

    -The filter() method does not execute the function for empty elements.

    -The filter() method does not change the original array.

    -we usually pass arrow function with filter

    syntax : 
        array.filter(function(currentValue){
            //certain test
        });

        -currentValue:
            -Required.
            -The value of the current element.

    Return Value:
        An array:
            -Containing the elements that pass the test.
            -If no elements pass the test it returns an empty array
        

    Example without filter:
        -if we have multiple ages , and we want to get only ages > 18 and put them in array

        let ages = [12, 17, 78, 45, 34, 11 ,19, 10];
        let adults = [];

        for(let i = 0 ; i < ages.length; i++){
            if(ages[i] > 18){
                adults.push(ages[i]);
            }
        }
        console.log(adults); // [78, 45, 34, 19]

    Example with filter:
        let ages = [12, 17, 78, 45, 34, 11 ,19, 10];

        let adults = ages.filter((x) => {
            return x > 18; 
        });

        or 
        let adults = ages.filter( age => x > 18 );

        console.log(adults); // [78, 45, 34, 19]
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

map method:
    -it is array method
    -it is one of ES6 method

    -map() creates a new array from calling a function for every array element.
    -map() calls a function once for each element in an array.
    -map() does not execute the function for empty elements.
    -map() does not change the original array.

    syntax:
        array.map(function(currentValue){
            //code/action
        });

       -currentValue:
            -Required.
            -The value of the current element.
    
    Return value:
        An array:	The results of a function for each array element.

    Example without map :
        -if we have array of number, and we want to add 10 to each element of array

        let ages = [12, 17, 78, 45, 34, 11 ,19, 10];

        let newAge = [];
        for(let i = 0 ;i < ages.length; i++){
            let x = ages[i] + 10;
            newAge.push(x);
        }

        console.log(newAge);

    Example with map:
        let newAge = ages.map((age) => {
            return age + 10; 
        });
    
        console.log(newAge); //[22, 27, 88, 55, 44, 21, 29, 20]

    -difference between filter and map:
        -filter decrease data (return less array)
        -map do action on data 

Example on map and filter:
    -we have array of object
    -each object has name, gender and age
    -we want to return array of objects whose ages > 16
    -and we want (Mr) before name, if gender is male, and (Mrs) before name if gender is female

    -we will use map and filter

    let users = [
        {name: "ahmed", gender: "male" , age: 35},
        {name: "ali", gender: "male" , age: 15},
        {name: "aya", gender: "female" , age: 25},
        {name: "gehan", gender: "female" , age: 5},
    ]

    let newUsers = users.filter((user) =>{return user.age > 16}).map((user) =>{
        if(user.gender == "male"){
            user.name = "Mr. " + user.name;
            return user;
        }else{
            user.name = "Mrs. " + user.name;
            return user;
        }
    });

    console.log(newUsers);

    -after applying filter , we will apply map

    
-->