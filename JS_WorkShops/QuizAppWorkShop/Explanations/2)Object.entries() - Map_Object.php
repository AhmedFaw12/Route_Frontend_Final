<!-- 

Object.entries():
    -The Object.entries() method accepts/takes an object(arrays are also objects) and returns an array of [key, value] pairs (array of arrays)

    -keys returned are string-keyed

    Example:
        let person = {
            name:"ahmed",
            age:25,
            salary:5000
        };

        let x = Object.entries(obj);
        console.log(x);

        output:

            [
                ['name', 'ahmed'],
                ['age', 25],
                ['salary', 5000]
            ]

----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Map Object:

    intro to Mab object:
        -map is a special type of object
        -side effects of object:
            -An object always has a default key like the prototype.
            
            -A key of an object must be a string or a symbol(primitive datatype), you cannot use an object as a key.
            
            -An object does not have a property that represents the size of the object(no length property)

        
        features of Map object:
            1)By definition, a Map object holds key-value pairs. Keys are unique in a Map’s collection. In other words, a key in a Map object only appears once.
            
            -in normal object , if key is repeated multiple times , latest key value will override old key value
                Example:
                    
                    let person = {
                        name:"ahmed",
                        age:25,
                        age:44,
                        salary:5000
                    };

                    console.log(person); //{name: 'ahmed', age: 44, salary: 5000}
        
            2)Keys and values of a Map can be any values.
                -can take any type

            3)When iterating a Map object, each iteration returns a 2-member array of [key, value]

                -the iteration order follows the insertion order which corresponds to the order in which each key-value pair was first inserted into the Map by the set() method.
        
        
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    Useful JavaScript Map methods:
        clear() :
            removes all elements from the map object.
        delete(key) :
             removes an element specified by the key. It returns if the element is in the map, or false if it does not.
        entries() :
            returns a new Iterator object that contains an array of [key, value] for each element in the map object. The order of objects in the map is the same as the insertion order.
        forEach(callback[, thisArg]) :
            invokes a callback for each key-value pair in the map in the insertion order. The optional thisArg parameter sets the this value for each callback.
        get(key) :
            returns the value associated with the key. If the key does not exist, it returns undefined.
        has(key) :
            returns true if a value associated with the key exists or false otherwise.
        keys() :
            returns a new Iterator that contains the keys for elements in insertion order.
        set(key, value) :
            sets the value for the key in the map object. It returns the map object itself therefore you can chain this method with other methods.
        values() :
            returns a new iterator object that contains values for each element in insertion order.

    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        
    Create New Map object:
        let userRoles = new Map();

        console.log(typeof(userRoles)); // object
        console.log(userRoles instanceof Map); // true

    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    Add elements to a Map:
        -To assign a role to a user, you use the set() method:

        Example:
            let userRoles = new Map();
            userRoles.set('ahmed', 'superAdmin');
            userRoles.set('john', 'admin');
            
            console.log(userRoles); //Map(2) {'ahmed' => 'superAdmin', 'john' => 'admin'}

        note:
            -set() method is chainable, you can save some typing

        Example using chaining set():
            let userRoles = new Map();
             userRoles.set('ahmed', 'superAdmin')
                      .set('john', 'admin');

    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------             
    Initialize a map with an iterable object:
        Example1:

            let userRoles = new Map([
                ['ahmed', 'admin'],
                ['john', 'editor'],
                ['jack', 'subscriber']
            ]);


            console.log(userRoles); //Map(3) {'ahmed' => 'admin', 'john' => 'editor', 'jack' => 'subscriber'}

    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    Converting array/object to Map:
        Example:
            let person = {
                name:"ahmed",
                age:44,
                salary:5000
            };

            let user = new Map(Object.entries(person));
            console.log(user);//Map(3) {'name' => 'ahmed', 'age' => 44, 'salary' => 5000}

        Example:
            let arr = [1,2,3,4];
            let user = new Map(Object.entries(arr));
            console.log(user);//Map(4) {'0' => 1, '1' => 2, '2' => 3, '3' => 4}

            
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    Get an element from a map by key:
        - you use the get() method:

        Example:
            
            let userRoles = new Map([
                ['ahmed', 'admin'],
                ['john', 'editor'],
                ['jack', 'subscriber']
            ]);
            console.log(userRoles.get('john'));//editor
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    Check the existence of an element by key:
        -to check if a key exists in the map, you use the has() method.

        Example:
            let userRoles = new Map([
                ['ahmed', 'admin'],
                ['john', 'editor'],
                ['jack', 'subscriber']
            ]);
            console.log(userRoles.has("ahmed"));//true
    
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    -Get the number of elements in the map:
        The size property returns the number of entries of the Map object

        Example:
            let userRoles = new Map([
                ['ahmed', 'admin'],
                ['john', 'editor'],
                ['jack', 'subscriber']
            ]);
            console.log(userRoles.size);//3
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    -Iterate over map keys:
        To get the keys of a Map object, you use the keys() method. The keys() returns a new iterator object that contains the keys of elements in the map.

        Example:
            -displays the username of the users in the userRoles map object.

            let ahmed = {name:"Ahmed Fawzy"};
            let john = {name:"John Walker"};
            let jack = {name:"Jack Shepard"};

            let userRoles = new Map([
                [ahmed, 'admin'],
                [john, 'editor'],
                [jack, 'subscriber']
            ]);

            for (let user of userRoles.keys()){
                console.log(user.name);
            }

            output:
                Ahmed Fawzy
                John Walker
                Jack Shepard

            note:
                -each key of the map here is object
                -each user is an object
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    -Iterate over map values:
        -Similarly, you can use the values() method to get an iterator object that contains values for all the elements in the map

        Example:
            let ahmed = {name:"Ahmed Fawzy"};
            let john = {name:"John Walker"};
            let jack = {name:"Jack Shepard"};

            let userRoles = new Map([
                [ahmed, 'admin'],
                [john, 'editor'],
                [jack, 'subscriber']
            ]);

            for (let role of userRoles.values()){
                console.log(role);
            }

            
            -output:
                admin
                editor
                subscriber
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    -Iterate over map elements:
        -Also, the entries() method returns an iterator object that contains an array of [key,value] of each element in the Map object:

        Example:
            let ahmed = {name:"Ahmed Fawzy"};
            let john = {name:"John Walker"};
            let jack = {name:"Jack Shepard"};

            let userRoles = new Map([
                [ahmed, 'admin'],
                [john, 'editor'],
                [jack, 'subscriber']
            ]);

            for (let user of userRoles.entries()){
                console.log(`${user[0].name}: ${user[1]}`);
            }

            output:
                Ahmed Fawzy: admin
                John Walker: editor
                Jack Shepard: subscriber

            -note:
                -we can remove entries() and use userRoles directly

        Improved Example:
            -To make the iteration more natural, you can use destructuring as follows:

            let ahmed = {name:"Ahmed Fawzy"};
            let john = {name:"John Walker"};
            let jack = {name:"Jack Shepard"};

            let userRoles = new Map([
                [ahmed, 'admin'],
                [john, 'editor'],
                [jack, 'subscriber']
            ]);

            for (let [user,role] of userRoles.entries()){
                console.log(`${user.name}: ${role}`);
            }



            output:
                Ahmed Fawzy: admin
                John Walker: editor
                Jack Shepard: subscriber

            -note:
                -we can remove entries() and use userRoles directly
                

        Improved Example2:
            In addition to for...of loop, you can use the forEach() method of the map object:

            let ahmed = {name:"Ahmed Fawzy"};
            let john = {name:"John Walker"};
            let jack = {name:"Jack Shepard"};

            let userRoles = new Map([
                [ahmed, 'admin'],
                [john, 'editor'],
                [jack, 'subscriber']
            ]);

            userRoles.forEach((user, role)=>{
                console.log(`${user.name}: ${role}`);
            })

            output:
                Ahmed Fawzy: admin
                John Walker: editor
                Jack Shepard: subscriber
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    -Convert map keys or values to a array:
        -Sometimes, you want to work with an array instead of an iterable object, in this case, you can use the spread operator.


        Example on converting keys for each element into an array of keys:
            let ahmed = {name:"Ahmed Fawzy"};
            let john = {name:"John Walker"};
            let jack = {name:"Jack Shepard"};

            let userRoles = new Map([
                [ahmed, 'admin'],
                [john, 'editor'],
                [jack, 'subscriber']
            ]);


            let keysArr = [...userRoles.keys()];

            console.log(keysArr);
            
            output:
                [ 
                    { name: 'Ahmed Fawzy' },
                    { name: 'John Walker' },
                    { name: 'Jack Shepard' } 
                ]

                -here it will be converting into array of objects , since each key is an object

        Example on converting  values of elements to an array:
            
            let ahmed = {name:"Ahmed Fawzy"};
            let john = {name:"John Walker"};
            let jack = {name:"Jack Shepard"};

            let userRoles = new Map([
                [ahmed, 'admin'],
                [john, 'editor'],
                [jack, 'subscriber']
            ]);


            let valuesArr = [...userRoles.values()];

            console.log(valuesArr); //[ 'admin', 'editor', 'subscriber' ]
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    -Delete an element by key:
        -to delete an entry in the map, you use the delete() method.

        Example:
            let ahmed = {name:"Ahmed Fawzy"};
            let john = {name:"John Walker"};
            let jack = {name:"Jack Shepard"};

            let userRoles = new Map([
                [ahmed, 'admin'],
                [john, 'editor'],
                [jack, 'subscriber']
            ]);

            userRoles.delete(john);
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    -Delete all elements in the map:
        -To delete all entries in the Map object, you use the clear() method:

        Example:
            let ahmed = {name:"Ahmed Fawzy"};
            let john = {name:"John Walker"};
            let jack = {name:"Jack Shepard"};

            let userRoles = new Map([
                [ahmed, 'admin'],
                [john, 'editor'],
                [jack, 'subscriber']
            ]);

            userRoles.clear();
            console.log(userRoles.size); // 0


 -->

 