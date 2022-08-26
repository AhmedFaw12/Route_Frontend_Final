<!-- 
DOM:
    Intro:
        DOM ==> Document Object Model
        -document ==> html code
        -model ==> representation

        -js can't deal with html tag as it has no datatype called tags

        -DOM converted html code into objects so that js can deal with html code
        -so DOM is the programming interface of HTML
        -The HTML DOM model is constructed as a tree of Objects:
                            document
                                |
                            root element(<html>)
                                |
               ---------------------------------------------------                 
               |                                                  |
            <head>                                              <body>
               |                                                  |  
            <title>                              ----------------------------
               |                                 |          |               |
            my text                             element    <a>             <h1>
                                                            |                |
                                                        my link             text

        -With the object model, JavaScript gets all the power it needs to create dynamic HTML:
            JavaScript can change all the HTML elements in the page
            JavaScript can change all the HTML attributes in the page
            JavaScript can change all the CSS styles in the page
            JavaScript can remove existing HTML elements and attributes
            JavaScript can add new HTML elements and attributes
            JavaScript can react to all existing HTML events in the page
            JavaScript can create new HTML events in the page

        -What we will learn in DOM:
            1)select Element
            2)add event:
                (when click on element)     
            3)action:
                (when click on element what action we will take)
----------------------------------------------------------------------------------------------------------------------------------------------------------------------
DOM_Select Elements:
    -Finding HTML elements by id:
        const element = document.getElementById("intro");
        
        -If the element is not found, element will contain null.

    -Finding HTML elements by class name:
        -If you want to find all HTML elements with the same class name, use getElementsByClassName().

        -The getElementsByClassName() method returns a collection of elements with a specified class name(s).

        -The getElementsByClassName() method returns an HTMLCollection.

        -The getElementsByClassName() property is read-only.
        Example:
            index.html:
                <h2 class="text-center">Lorem ipsum dolor sit.</h2>
                <h2 class="text-center">Lorem ipsum dolor sit.</h2>
                <h2 class="text-center">Lorem ipsum dolor sit.</h2>
                <h2 class="text-center">Lorem ipsum dolor sit.</h2>
                <h2 class="text-center">Lorem ipsum dolor sit.</h2>
                <h2 class="text-center">Lorem ipsum dolor sit.</h2>
                <h2 class="text-center">Lorem ipsum dolor sit.</h2>
                <h2 class="text-center">Lorem ipsum dolor sit.</h2>
                <h3 class="text-center">Lorem ipsum dolor sit.</h3>
                <h3 class="text-center">Lorem ipsum dolor sit.</h3>
                <h3 class="text-center">Lorem ipsum dolor sit.</h3>
                <h3 class="text-center">Lorem ipsum dolor sit.</h3>
                <h3 class="text-center">Lorem ipsum dolor sit.</h3>
                <h3 class="text-center">Lorem ipsum dolor sit.</h3>
            main.js:
                -const elements = document.getElementsByClassName("text-center");
                console.log(elements)

                for(var i = 0 ; i < elements.length; i++){
                    console.log(elements[i]);
                }


    -Finding HTML elements by tag name:
        -The getElementsByTagName() method returns a collection of all elements with a specified tag name.

        -The getElementsByTagName() method returns an HTMLCollection.

        -The getElementsByTagName() property is read-only.

        Example:
            index.html:
                <h2 class="text-center">Lorem ipsum dolor sit.</h2>
                <h2 class="text-center">Lorem ipsum dolor sit.</h2>
                <h2 class="text-center">Lorem ipsum dolor sit.</h2>
                <h2 class="text-center">Lorem ipsum dolor sit.</h2>
                <h2 class="text-center">Lorem ipsum dolor sit.</h2>
                <h2 class="text-center">Lorem ipsum dolor sit.</h2>
                <h2 class="text-center">Lorem ipsum dolor sit.</h2>
                <h2 class="text-center">Lorem ipsum dolor sit.</h2>
                <h3 class="text-center">Lorem ipsum dolor sit.</h3>
                <h3 class="text-center">Lorem ipsum dolor sit.</h3>
                <h3 class="text-center">Lorem ipsum dolor sit.</h3>
                <h3 class="text-center">Lorem ipsum dolor sit.</h3>
                <h3 class="text-center">Lorem ipsum dolor sit.</h3>
                <h3 class="text-center">Lorem ipsum dolor sit.</h3>

            main.js:
                -const elements = document.getElementsByClassName("h2");//HTML Collection
                console.log(elements);//it selects only all h2 elements

        NOTE:
            getElementsByTagName("*") returns all elements in the document.
            
    document.getElementsByName(""):
            
        -it selects inputs tag which has a specifc name attribute
        -so it is used with forms

        -The getElementsByName() method returns a collection of elements with a specified name.

        -The getElementsByName() method returns a live NodeList.

        -The getElementsByName() method appeared in 2009(ES5) 
        -so anything appeared in (2009- .... ) are returned in NodeList

        Example:
            index.html:
                <input type="radio" name="gender" id="">
                <input type="radio" name="gender" id="">
            main.html:
                const elements = document.getElementsByName("gender");//NODE List
                console.log(elements);


    Finding HTML elements by CSS selectors:
        -it is used alot
        -it appeared in 2009
        -The querySelectorAll() method returns all elements that matches a CSS selector(s).

        -The querySelectorAll() method returns a NodeList.

        -The querySelectorAll() method throws a SYNTAX_ERR exception if the selector(s) is invalid
        
        -it can replace getElementsByClassName() , getElementsByTagName
        Example:
            index.html:
                <div class="item">
                    <img src="images/4.jpg" alt="">
                </div>
                <div class="item">
                    <img src="images/4.jpg" alt="">
                </div>
                <div class="item">
                    <img src="images/4.jpg" alt="">
                </div>

                
            main.js:
                const elements = document.querySelectorAll(".item img"); //NodeList
                console.log(elements);

        Example:
            const elements = document.querySelectorAll("#demo"); //NodeList
    --------------------------------------------------------------------------------------------------------------------------------------------------------------

    document.querySelector("h2"):
        -The querySelector() method returns the first element that matches a CSS selector.

        -To return all matches (not only the first), use the querySelectorAll() instead.

        -Both querySelector() and querySelectorAll() throw a SYNTAX_ERR exception if the selector(s) is invalid.
                
        Example:
            index.html:
                <h2 class="text-center">Lorem ipsum dolor sit.</h2>
                <h2 class="text-center">Lorem ipsum dolor sit.</h2>
                <h2 class="text-center">Lorem ipsum dolor sit.</h2>
                <h2 class="text-center">Lorem ipsum dolor sit.</h2>
                <h2 class="text-center">Lorem ipsum dolor sit.</h2>
                <h2 class="text-center">Lorem ipsum dolor sit.</h2>
                <h2 class="text-center">Lorem ipsum dolor sit.</h2>
            main.js:
                const element = document.querySelector("h2");
                console.log(element);//select first h2 element only

    --------------------------------------------------------------------------------------------------------------------------------------------------------------

    -document has some properties to select body, head, title, links....:
        -document.body : to select body tag
            Example:
                const myBody = document.body.innerHTML;

        -document.title : to select title tag in the head
            Example:
                document.title = "A new title"; //change the title of the document
                document.title; //return the title of the document

        -document.head:to select head tag
        -document.forms: to select all forms
    
----------------------------------------------------------------------------------------------------------------------------------------------------------------------
HTMLCollection:
    -An HTMLCollection is an array-like collection (list) of HTML elements.

    -An HTMLCollection is not an Array!

    -An HTMLCollection may look like an array, but it is not.
    
    -we can't apply all array methods on it except length property
    
    -they are similar to arrays in:
        -The elements in a collection can be accessed by index (starts at 0).
        -The length Property returns the number of elements in the collection.

        -You can loop through an HTMLCollection and refer to its elements with an index.

        -But you cannot use Array methods like push(), pop(), or join() on an HTMLCollection.



    -WHO Returns an HTMLCollection?
        -The getElementsByTagName() Method

        -The getElementsByClassName() Method

        -The children Property
----------------------------------------------------------------------------------------------------------------------------------------------------------------------
NodeList:
    -A NodeList is an array-like collection (list) of Node Objects.

    -The nodes in a NodeList can be accessed by index (starts at 0).

    
    NodeList is not an array:
        -A NodeList is not an Array!

        -A NodeList may look like an array, but it is not.

        -You can loop through a NodeList and refer to its nodes with an index.

        -But you cannot use Array methods like push(), pop(), or join() on a NodeList.

        -The length property returns the number of nodes in a NodeList.

    
    -Who Returns a NodeList?
        -The childNodes() Method

        -The querySelectorAll() Method

        -The getElementsByName() Method
----------------------------------------------------------------------------------------------------------------------------------------------------------------------
-->             