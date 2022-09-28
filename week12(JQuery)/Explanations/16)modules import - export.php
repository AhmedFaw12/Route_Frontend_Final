<!-- 
Module:
    -block of code 
    -file that contain function is called module
    -file that contain 3 or 4 classes is called module
    -module is part of project

    -in js ,we split our project into group of modules(files) , each module make certain functionality or ...

    -JavaScript modules allow you to break up your code into separate files.
    -JavaScript modules rely on the import and export statements.

Export:
    -After the export keyword, you can use let, const, and var declarations, as well as function or class declarations

    there are 2 ways to export:
        1)inline individually:
            export let workHours = 8;
            let breakHours = 1;

            export function calcSalary(hourRate){
                return hourRate * workHours * 30;
            }

        2)all at once at the bottom:
            let workHours = 8;
            let breakHours = 1;

            function calcSalary(hourRate){
                return hourRate * workHours * 30;
            }

            export {workHours, calcSalary};

    -we have two types of exports:
        -named export:
            -normal export that we do
        -default export:
            -You can only have one default export in each module/file.
            -when we import the default export , we can change its name


            Example:
                js1:
                    let userAge = 15;

                    export default userAge;
                jsMain:
                    import x from "./workModule";
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Import:
    -You can import modules into a file:
    -we can import values/variable/functions/classes that has export keyword 
        Example:
            import { workHours, calcSalary} from "./workModule.js";
            
    -to import all :
        -import * as myName from "./workModule.js";
        
        -this means import all exported variables/functions/classes and put them in myName variable
        -myName is considered now an object that contain all exported variables/functions/classes 

        -naming convention of this object should be the same name of the module:
            import * as workModule from "./workModule.js";

    -to import from default export:
        -we don't use curly braces{}

        example:
            import userAge from "./workModule.js";


    -to import into a file , we must determine attribute type = "module" in html:
        <script type="module" src="js/main.js"></script>

----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    
-Note :
    - if we export and import and then opened our project
    - project will get error
    - when we import modules into our main.js file , google chrome consider these module untrusted files and raise error, (because chrome import these modules from filesystem of windows)
            
    -Modules only work with the HTTP(s) protocol.
    -A web-page opened via the file:// protocol cannot use import / export.

    
    - to solve this , we must upload our project on server
    - there is extension called (live server) : simulate that my project is working on real server (as if it is working on real server)
    
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Example on modules export and import:
    html:
        <script type="module" src="js/main.js"></script>

    workModule.js:
        export let workHours = 8;
        export let userName = 'ahmed';
        let breakHours = 1;
        let userAge = 15;

        export function calcSalary(hourRate){
            return hourRate * workHours * 30;
        }

        export default userAge;

    validationModule.js:
        export let regex = /^[A-Z][a-z]{5}/;

        let userName = "ahmed";

    main.js:
        import userAge , { workHours, calcSalary} from "./workModule.js";
        import { regex } from "./validationModule.js";

        console.log(workHours);
        console.log(calcSalary(30));

        -we can import values/variable/functions/classes that has export keyword 


Auto Import extension:
    -it is extension in vscode 
    -when we write module name , it will import everything from it
-->