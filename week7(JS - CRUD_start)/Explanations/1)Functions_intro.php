<!-- 
Functions:
    Intro:
        -javascript is a functional programming functions

        -A JavaScript function is a block of code designed to perform a particular task.

        -A JavaScript function is executed when "something" invokes it (calls it).

        -functions re-use code

        -variables in the function definitionn are called function parameters
        -variables passed to function call are called arguments
        -when we call function , it is called function call or function invoke

        Example:
            function getAvg(x, y){
                console (x+y)/2;
            }

            getAvg(10,30);
            getAvg(20,50);
            getAvg(15,16);

        Example:
            function calProduct(price ,profit, tax, ads){
                var result1 = price +  profit; 
                var result2 = result1 * tax;
                var result3 = result2 + ads;
                
                console.log(result3);
            }

            calProduct(100, 20, 1.2, 20);//function call, invoke
            calProduct(160, 40, 1.1, 10);
        
            -variables in the function definitionn are called function parameters
            -variables passed to function call are called arguments
            
            -price, profit, tax , ads are called parameters
            -100, 20, 1,2, 20 ==> are called arguments:
                calProduct(100, 20, 1.2, 20);
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    Function Return:
        -When JavaScript reaches a return statement, the function will stop executing.

        -it is used to return a value to the user:

            function getAvg(x, y){
                var sum = x + y;
                var result = sum / 2
                return result;
            }

            var x = getAvg(10, 30);
            console.log(x); //20

        -also we can use return to exit from a function:
            function getAvg(x, y){
                var sum = x + y;
                var result = sum / 2;
                console.log(result);
                return ;
            }
            getAvg(10, 30);
        
        -code exit after first return statement:
            function getAvg(x, y){
                var sum = x + y;
                var result = sum / 2
                return result; // 20;
                return result * 10; // 20;

            }

            var x = getAvg(10, 30);
            console.log(x); //20

            -first return only will be executed 
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------

            

-->
