<!-- 
-How Engine of google chrome works:
    -chrome v8 is the name of google chrome engine

    v8 includes of:
        Executaion stack:
            -it executes synchronous code only
        Web Apis:
            -it executes asynchronous code
            -asynchronous code like:
                -events
                -setTimeout(), SetInterval()
                -APIs

        Message Queue:
            -it is a queue(FIFO)
            -it takes from web apis the asynchronous code that is executed and finished 

            -what finishes first in web apis goes first to message queue
            -so we need to control what finishes first through callbacks, promises, async await, observables

            -event loop takes asynchronous code that is finished from message queue to execution stack to be displayed when execution stack is empty from synchronous code(execpt global variables)

    step of js execution:
        -it takes all global variables then put them at the bottom of execution stack
        -we shouldn't use to many global variables , because they are the last thing removed from execution stack (because stack works with LIFO)
        -because they consume memory for long time

        -then it puts all synchronous code and put it inside execution stack

        -asynchronous code isn't executed in execution stack
        -we have Web Apis to execute asynchronous code
        -after asynchronous code is executed inside Web Apis 
        -it goes to message queue (FIFO)
        -when all synchronous code inside Execution stack finished (execpt global variables)
        -asynchronous code(finished) inside message queue goes to execution stack to be displayed
        
        -so asynchronous code (that is finished) wait inside message queue untill execution stack is empty from synchronous code(execpt global variable)
        
        -thats why synchronous code finishes before asynchronous code

        

-->