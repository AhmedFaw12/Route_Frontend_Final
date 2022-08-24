<!-- 
Function_exercise:
    -we want to make input and make button
    -when user write his name, and press the button
    -we will output hello + name
    -when we put button inside a form , button default behaviour is submit (without writing type="submit")
    -submit of the form default behaviour is to reload the page/browser
    -we can remove this behaviour  by :
        1)<form action="" onsubmit="e.preventDefault"></form>
            -this will prevent reloading the browser , but form will be submitted normally

        2)remove form tag
            -this will prevent reload and submit
            -we will use this
    Example:
        main.js:
            function sayHello(){
                var userName = document.getElementById("userName").value;
                window.alert("Hello " + userName);
            }
        index.html:
            <div class="w-75 mx-auto p-3">
                <form action="" onsubmit="e.preventDefault()">
                    <label for="userName" class="mb-2">userName</label>
                    <input class="form-control" type="text"  id="userName">
                    <button onclick="sayHello();" class="btn btn-info text-white my-2">say hello</button>
                </form>
            </div>


---------------------------------------------------------------------------------------------------------------------------------------------

-input:
    -most used way to get input from the user

    To get whole html element/tag :
        index.html:
            <input class="form-control" type="text"  id="userName">
        main.js:
            var x = document.getElementById("userName");
            console.log(x);
            
            -output:
                <input class="form-control" type="text"  id="userName">
    
    -To get html input value:
        index.html:
            <input class="form-control" type="text"  id="userName">
        main.js:
            var x = document.getElementById("userName").value;
            console.log(x);

            -output:
                -value that user will enter
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

onclick event:
    -The onclick attribute fires on a mouse click on the element.
    -when we click on the element, we can call certain script/js code

    syntax:
        <element onclick="script">

    script:The script to be run on onclick
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

submit behaviour:
    -when we put button inside a form , button default behaviour is submit (without writing type="submit")
    -submit of the form default behaviour is to reload the page/browser
    -we can remove this behaviour  by :
        1)<form action="" onsubmit="e.preventDefault"></form>
            -this will prevent reloading the browser , but form will be submitted normally
            
        2)remove form tag
            -this will prevent reload and submit
            -we will use this   
-->

