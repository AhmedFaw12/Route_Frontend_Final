<!-- 
Array Methods:
    sort():
        -The sort() sorts the elements of an array.

        -The sort() overwrites the original array.

        -The sort() sorts the elements as strings in alphabetical and ascending order.

        -sort only string arrays
        -to sort numbers , there is another way/method

        Example:
            var friends = [
                'taha', 
                'ahmed', 
                'hazem', 
                'ibrahim',
                'saber', 
                'tarek', 
                'omar' 
            ];

            friends.sort()
            console.log(friends);
            
            -output:  ['ahmed', "hazem", "ibrahim", "omar", "saber", "taha", "tarek"]
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    reverse():
        -The reverse() method reverses the order of the elements in an array.

        -The reverse() method overwrites the original array.

        Example:
            var friends = [
                'taha', 
                'ahmed', 
                'hazem', 
                'ibrahim',
                'saber', 
                'tarek', 
                'omar' 
            ];

            friends.reverse()
            console.log(friends);
            -output:
                ['omar', 'tarek', 'saber', 'ibrahim', 'hazem', 'ahmed', 'taha']
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    push():
        -The push() method adds new items to the end of an array.

        -The push() method changes the length of the array.

        -The push() method returns the new length.

        Example:            
            var friends = [
                'taha', 
                'ahmed', 
                'hazem', 
                'ibrahim',
                'saber', 
                'tarek', 
                'omar' 
            ];

            var newName = "zaki";
            friends.push(newName);
            friends.push("Ali");

            console.log(friends);
        
            -output:
                ['taha', 'ahmed', 'hazem', 'ibrahim', 'saber', 'tarek', 'omar', 'zaki', 'Ali']
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    unshift():
        -The unshift() method adds new elements to the beginning of an array.

        -The unshift() method overwrites the original array.

        Example:
            var friends = [
                'taha', 
                'ahmed', 
                'hazem', 
                'ibrahim',
                'saber', 
                'tarek', 
                'omar' 
            ];

            friends.unshift("zaki");
            console.log(friends);

            -output:
                ['zaki', 'taha', 'ahmed', 'hazem', 'ibrahim', 'saber', 'tarek', 'omar']
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    -pop():
        -The pop() method removes (pops) the last element of an array.

        -The pop() method changes the original array.

        -The pop() method returns the removed element.
        -if array is empty , undefined is returned and the array is not modified

        Example:
            var friends = [
                'taha', 
                'ahmed', 
                'hazem', 
                'ibrahim',
                'saber', 
                'tarek', 
                'omar' 
            ];

            var deletedFriend = friends.pop();
            console.log(friends);
            console.log(deletedFriend);

            -output:
                -['taha', 'ahmed', 'hazem', 'ibrahim', 'saber', 'tarek']
                
                -omar

    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    -shift():
        -The shift() method removes the first item of an array.

        -The shift() method changes the original array.

        -The shift() method returns the shifted element.

        -if array is empty , undefined is returned and the array is not modified     
        
        Example:
            var friends = [
                'taha', 
                'ahmed', 
                'hazem', 
                'ibrahim',
                'saber', 
                'tarek', 
                'omar' 
            ];

            var deletedFriend = friends.shift();
            console.log(friends);
            console.log(deletedFriend);

            -output:
                ['ahmed', 'hazem', 'ibrahim', 'saber', 'tarek', 'omar']
                
                -taha
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    splice():
        -Removes elements from an array and, if necessary, inserts new elements in their place, returning the deleted elements.

        -The splice() method overwrites the original array.

        Syntax:
            array.splice(index, howmany, item1, ....., itemX)

        Parameters:
            index:	
                -Required. The start position to remove items.
            
                -Negative value defines the position from the end of the array.
            howmany:	
                -Optional.
                -Number of items to be removed.
            item1, ..., itemX:
            	-Optional.
                -New elements(s) to be added.

        Example:
            var friends = [
                'taha', 
                'ahmed', 
                'hazem', 
                'ibrahim',
                'saber', 
                'tarek', 
                'omar' 
            ];

            var deletedFriends = friends.splice(2 , 2, "mohamed", "hany");
            console.log(deletedFriends);
            console.log(friends);

            -output:
                -['hazem', 'ibrahim']
                
                -['taha', 'ahmed', 'mohamed', 'hany', 'saber', 'tarek', 'omar']
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    slice():
        -The slice() method returns selected elements in an array, as a new array.

        -The slice() method selects from a given start, up to a (not inclusive) given end.

        -The slice() method does not change the original array.

        Return Value:A new array containing the selected elements.

        parameters:
            start:
            	-Optional.
                -Start position. Default is 0.
                -Negative numbers select from the end of the array.
            end:	
                -Optional.
                -End position. Default is last element.
                -Negative numbers select from the end of the array.

        Example:
            var friends = [
                'taha', 
                'ahmed', 
                'hazem', 
                'ibrahim',
                'saber', 
                'tarek', 
                'omar' 
            ];

            var slicedPart = friends.slice(0 , 4); //0,1,2,3
            console.log(slicedPart);
            console.log(friends);

            -output:
                
                ["taha" , "ahmed" , "hazem" , "ibrahim"]
                               ​ 
                ["taha", "ahmed", "hazem", "ibrahim", "saber", "tarek", "omar"]
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    -toString():
        -The toString() method returns a string with array values separated by commas.

        -The toString() method does not change the original array.
            
        Example:
            var friends = [
                'taha', 
                'ahmed', 
                'hazem', 
                'ibrahim',
                'saber', 
                'tarek', 
                'omar' 
            ];

            var stringFriends = friends.toString();
            console.log(stringFriends);
            console.log(friends);

            -output:
                -taha,ahmed,hazem,ibrahim,saber,tarek,omar
                
                ['taha', 'ahmed', 'hazem', 'ibrahim', 'saber', 'tarek', 'omar']
        
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    -indexOf():
        -The indexOf() method returns the first index of a specified value.
        
        -The indexOf() method returns -1 if the value is not found.
        -By default the search starts at the first element and ends at the last.

        Example:
            var friends = [
                'taha', 
                'ahmed', 
                'hazem',    //2
                'ibrahim',
                'saber', 
                'tarek', 
                "hazem",  //6
                'omar'
            ];

            var friend = friends.indexOf("hazem");
            console.log(friend); //2 (return first occurence only)

        -we can tell our method where to start search:
            var friend = friends.indexOf("hazem", 4);
            console.log(friend); //6
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    -lastIndexOf():
        -The lastIndexOf() method returns the last index/occurance of a specified value.

        -The lastIndexOf() method returns -1 if the value is not found
        
        -By defalt the search starts at the last element and ends at the first.

        -it fint the last occurance of specified value:
        
        Example:
            var friends = [
                'taha', 
                'ahmed', 
                'hazem',    //2
                'ibrahim',
                'saber', 
                'tarek', 
                "hazem",  //6
                'omar'
            ];

            var friend = friends.lastIndexOf("hazem");
            console.log(friend); //6 (return last occurence only)
-->