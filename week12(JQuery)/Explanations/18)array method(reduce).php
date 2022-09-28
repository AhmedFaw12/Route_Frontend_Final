<!-- 
reduce method:
    -it is an array method

    -The reduce() method executes a reducer function for array element.

    The reduce() method returns a single value: the function's accumulated result.

    The reduce() method does not execute the function for empty array elements.

    The reduce() method does not change the original array.

    syntax:
        array.reduce(function(total, currentValue){
            //code
        } ,totalInitialValue)

        -total	:
            Required.
            -The initialValue, or the previously returned value of the function.
        -currentValue:
            -Required.
            -The value of the current element.
        -initialValue:
        	-Optional.
            -A value to be passed to the function as the initial value.

    Return value:
        -The accumulated result from the last call of the callback function.

    Example without reduce:
        let ages = [10,20, 30, 12, 30, 40];
        let sum = 0;

        for(let i = 0; i < ages.length; i++){
            sum += ages[i];
        }

        console.log(sum);//142

    Example with reduce:
        let ages = [10,20, 30, 12, 30, 40];

        let sum = ages.reduce((total, currentValue) =>{
        return total += currentValue;
        }, 0);

        console.log(sum);//142
        

-->