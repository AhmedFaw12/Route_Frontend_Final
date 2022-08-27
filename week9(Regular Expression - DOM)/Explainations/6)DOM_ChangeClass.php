<!-- 
DOM_ChangeClass:
    classList:
        The classList property returns the CSS classnames of an element.

    -classList Properties and Methods:
        -add():
        	Adds one or more classes to the list
            Example:
                const list = element.classList;
                list.add("class", "anotherClass", "thirdClass");

        -replace():
            -The replace() method replaces a class in classList.
            Example:
                element.classList.replace("oldClass", "newClass");
        -remove():
            -The remove() method removes one (or more) classes
            Example:
                element.classList.remove("Class", "anotherClass");
            -it won't make error , if classes not exists from the beginning
        
        -toggle():
            -if class not exist , it will add it 
            -and it exists, it will remove it
            Example:
                element.classList.toggle("Class", "anotherClass");             
-->