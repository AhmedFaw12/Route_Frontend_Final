<!-- 
Set Object:
    -Introduction to the JavaScript Set object:
        -ES6 provides a new type named Set that stores a collection of unique values of any type. To create a new empty Set, you use the following syntax
            let setObject = new Set()

        -The Set constructor also accepts an optional iterable object. If you pass an iterable object to the Set constructor, all the elements of the iterable object will be added to the new set:
            let setObject = new Set(iterableObject);
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    -Useful Set methods:
    The Set object provides the following useful methods:

        add(value) :
            appends a new element with a specified value to the set. It returns the Set object, therefore, you can chain this method with another Set method.
        clear()  :
            removes all elements from the Set object.
        delete(value) :
            deletes an element specified by the value.
        entries():
            returns a new Iterator that contains an array of  [value, value] .
        forEach(callback [, thisArg]) :
                invokes a callback on each element of the Set with the this value sets to thisArg in each call.
        has(value) :
            returns true if an element with a given value is in the set, or false if it is not.
        keys() :
            is the same as values() function.
        [@@iterator] :
            returns a new Iterator object that contains values of all elements stored in the insertion order.
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    Create a new Set from an Array:
        Example:
            let chars = new Set(['a', 'a', 'b', 'c', 'c']);
            console.log(chars);//Set(3) {'a', 'b', 'c'}

            -All elements in the set must be unique therefore the  chars only contains 3 distinct elements a, b and c

            console.log(typeof(chars));//object

            let result = chars instanceof Set;
            console.log(result);//true

            -The chars set is an instance of the Set type so the following statement returns true
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    -Get the size of a Set:
        -To get the number of elements that the set holds, you use the size property of the Set object

        Example:
            let chars = new Set(['a', 'a', 'b', 'c', 'c']);
            console.log(chars.size); //3
    
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    -Add elements to a Set:
        -To add an element to the set, you use the add() method:

        Example:
            let chars = new Set(['a', 'a', 'b', 'c', 'c']);
            chars.add('d');
            console.log(chars);//Set(4) {'a', 'b', 'c', 'd'}

        Example:
            add() method is chainable

            let chars = new Set(['a', 'a', 'b', 'c', 'c']);
            chars.add('d')
                 .add('e');
                 .add('f');

            console.log(chars);//Set(6) {'a', 'b', 'c', 'd', 'e', 'f'}
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    -Check if a value is in the Set:
        -To check if a set has a specific element, you use the has() method. The has() method returns true if the set contains the element, otherwise, it returns false

        Example:
            let chars = new Set(['a', 'a', 'b', 'c', 'c']);
            chars.add('d');
            console.log(chars.has('b'));//true

    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    -Remove elements from a set:
        -To delete a specified element from a set, you use the delete() method.
        Example:
            let chars = new Set(['a', 'a', 'b', 'c', 'c']);
            chars.add('d');

            chars.delete('b');
            console.log(chars);//Set(3) {'a', 'c', 'd'}
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    -Delete all elements in the set:
        To delete all elements of a set, you use the clear() method:

        let chars = new Set(['a', 'a', 'b', 'c', 'c']);
        chars.add('d');
        
        chars.clear();
        console.log(chars.size); //0
        console.log(chars); //Set{}

    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    -Looping the elements of a JavaScript Set:
        -A Set object maintains the insertion order of its elements, therefore, when you iterate over its elements, the order of the elements is the same as the inserted order.

        Example:
            -using for of

            let roles = new Set();
            roles.add('admin')
                .add('editor')
                .add('subscriber');
                
            for(let role of roles){
                console.log(role);
            }

            -output:
                admin
                editor
                subscriber

        Example2:
            using for of and entries() method:

            The Set also provides the keys(), values(), and entries() methods like the Map. However, keys and values in the Set are identical

            for (let [key, value] of roles.entries()) {
                console.log(key === value);
            }
        
            OUTPUT:
                true
                true
                true
        
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    -Invoke a callback function on each element of a set:
        -If you want to invoke a callback on every element of a set, you can use the forEach() method.

        Example:
            let roles = new Set();
            roles.add('admin')
                .add('editor')
                .add('subscriber');
                
            roles.forEach((role) =>{
                console.log(role.toUpperCase()) ;
            });


            output:
                ADMIN
                EDITOR
                SUBSCRIBER
 -->