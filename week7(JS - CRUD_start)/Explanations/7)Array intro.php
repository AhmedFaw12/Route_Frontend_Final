<!-- 
Array:
    Intro:
        -An array can hold many values under a single name, and you can access the values by referring to an index number.

        Example:
            var friends = [];
            -empty array
        Example:
            var friends = [
                'ahmed',
                'taha',
                'hazem',
                'ibrahim',
                'saber'
            ];
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    -Accessing Array Elements:
        -Array indexes start with 0.
        -[0] is the first element. [1] is the second element.

        Example:
            var friends = [
                'ahmed',
                'taha',
                'hazem',
                'ibrahim',
                'saber'
            ];
            
            console.log(friends[2]); //hazem
            console.log(friends[0]); //ahmed
            console.log(friends); //print whole array

    -Looping array elements:
        Example:
            var friends = [
                'ahmed', //0
                'taha', //1
                'hazem', //2
                'ibrahim',//3
                'saber', //4
                'tarek', //5
                'omar' //6
            ];

            for(let i = 0; i < 7; i++){
                console.log(friends[i]);
            }
        
        Example:
            var friends = [
                'ahmed', //0
                'taha', //1
                'hazem', //2
                'ibrahim',//3
                'saber', //4
                'tarek', //5
                'omar' //6
            ];

            for(let i = 0; i < friends.length; i++){
                console.log("Mr. " + friends[i]);
            }
            
            -array has (length) property that get the full length of array
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    Arrays are Objects:
        -Arrays are a special type of objects. The typeof operator in JavaScript returns "object" for arrays.

        -But, JavaScript arrays are best described as arrays.

        -Arrays use numbers to access its "elements". 
        
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    It is a common practice to declare arrays with the const keyword:
        -The keyword const is a little misleading.

        -It does NOT define a constant array. It defines a constant reference to an array.

        -Because of this, we can still change the elements of a constant array.

-->