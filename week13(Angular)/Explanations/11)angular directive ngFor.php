<!-- 
angular directives Continue:
    *ngFor directive:
        -it allows me to write for loop inside html
        -it uses for of loop
        -we put *ngFor in the element we want to be repeated

        Example:
            home.component.ts:
                class HomeComponent{
                    friends = ['ahmed', 'ali', "ibrahim", "taha", "hazem"];
                }

            home.component.html:
                <ul class="p-4">
                   <li *ngFor = 'let friend of friends'> {{friend}}</li>
                </ul>

                -o/p:
                    ahmed
                    ali
                    ibrahim
                    taha
                    hazem
        --------------------------------------------------------------------------------------------------------------------------------------------------
        Example:
            -if we tried to display whole object inside html
            -it will result in [object Object]

            ts:
                class HomeComponent{
                    user = {name:"ahmed", age:25, gender:"male", salary:5000, dateOfBirth:"1/1/2001"};
                }
            html:
                <h2>{{user}}</h2> // [object Object]
                <h2>{{user.name}}</h2> // ahmed
        --------------------------------------------------------------------------------------------------------------------------------------------------
        Example:
            -we want to display array of objects using *ngFor directive

            ts:
                class HomeComponent{
                    users = [
                        {name:"ahmed", age:25, gender:"male", salary:5000, dateOfBirth:"1/1/2001"},
                        {name:"ali", age:23, gender:"male", salary:5000, dateOfBirth:"1/1/2001"},
                        {name:"mai", age:29, gender:"female", salary:5000, dateOfBirth:"1/1/2001"},
                        {name:"amal", age:22, gender:"female", salary:5000, dateOfBirth:"1/1/2001"},
                        {name:"zaki", age:26, gender:"male", salary:5000, dateOfBirth:"1/1/2001"},
                    ];
                }
            html:
                <table class="table w-75 m-auto table-hover table-dark table-striped table-bordered text-center">
                <thead>
                    <th>index</th>
                    <th>name</th>
                    <th>age</th>
                    <th>gender</th>
                    <th>salary</th>
                    <th>dateOfBirth</th>
                </thead>
                <tbody>
                    <tr *ngFor="let user of users ; let i = index">
                    <td>{{i+1}}</td>
                    <td>{{user.name}}</td>
                    <td>{{user.age}}</td>
                    <td>{{user.gender}}</td>
                    <td>{{user.salary}}</td>
                    <td>{{user.dateOfBirth}}</td>
                    </tr>
                </tbody>
                </table>

                index:
                    -angular has (index) which get me the index of current loop
                    -so after we finish our loop 
                    -we put semicolon
                    -then we make let myVarName = index
        --------------------------------------------------------------------------------------------------------------------------------------------------
        Example:
            odd/even:
                -angular also made odd , even
                -odd return true when index current iteration is odd , and return false when not odd
                -even return true when index current iteration is even

            last:
                -return true at last iteration of the loop

            first:
                -return true at first iteration of the loop

            ts:
                class HomeComponent{
                    users = [
                        {name:"ahmed", age:25, gender:"male", salary:5000, dateOfBirth:"1/1/2001"},
                        {name:"ali", age:23, gender:"male", salary:5000, dateOfBirth:"1/1/2001"},
                        {name:"mai", age:29, gender:"female", salary:5000, dateOfBirth:"1/1/2001"},
                        {name:"amal", age:22, gender:"female", salary:5000, dateOfBirth:"1/1/2001"},
                        {name:"zaki", age:26, gender:"male", salary:5000, dateOfBirth:"1/1/2001"},
                    ];
                }
            html:
                <tr *ngFor="let user of users ; let x = odd">
                    <td>{{x}}</td>
                </tr>

                //o/p
                    false
                    true
                    false
                    true
                    false


                <tr *ngFor="let user of users ; let x = last">
                    <td>{{x}}</td>
                </tr>

                //o/p
                    false
                    false
                    false
                    false
                    true
                
                <tr *ngFor="let user of users ; let x = first">
                    <td>{{x}}</td>
                </tr>

                //o/p
                    
                    true
                    false
                    false
                    false
                    false
                
        --------------------------------------------------------------------------------------------------------------------------------------------------

        Example:
            -if array is empty , we don't want to display table 
            -and we will display message instead

            ts:
                users:any = [];
            
            html:
                <table *ngIf="users.length > 0 ; else hambozo" class="table w-75 m-auto table-hover table-dark table-striped table-bordered text-center">
                    <thead>
                        <th>index</th>
                        <th>name</th>
                        <th>age</th>
                        <th>gender</th>
                        <th>salary</th>
                        <th>dateOfBirth</th>
                    </thead>
                    <tbody>
                        <tr *ngFor="let user of users; let i = index">
                        <td>{{i+1}}</td>
                        <td>{{user.name}}</td>
                        <td>{{user.age}}</td>
                        <td>{{user.gender}}</td>
                        <td>{{user.salary}}</td>
                        <td>{{user.dateOfBirth}}</td>
                        </tr>
                    </tbody>
                </table>


                <ng-template #hambozo>
                    <h2 class="text-center">Sorry No Data</h2>
                </ng-template>
         
------------------------------------------------------------------------------------------------------------------------------------------------------------------

custom attributes:
    -html is a static language (tags and attributes)
    -later they extended html 
    -we can make custom attributes

    Example:
        html:
            <div id="demo" hambozo="taha"></div>
        js:
            $("#demo").attr("hambozo", "ahmed");
        
    -angular made same thing for *ngIf, *ngFor 
    -they convert these attributes values to if condition and for loops
    
-custom tags:
    -we can make custom tags with any names
    -custom tags by default are display:inline , they can't take width and height

    Example:
        html:
            <taha></taha>
        css:
            taha{
                background-color: tomato;
                width: 100px;
                height: 100px;
                display: block;
            }
        
    -angular made same thing, we give it name of our selector in @component  decorator in string , and it will make custom tag for me






-->