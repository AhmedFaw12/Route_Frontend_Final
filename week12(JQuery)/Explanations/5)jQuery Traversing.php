<!-- 
jQuery Traversing:
    jQuery Traversing - Siblings:
        -With jQuery you can traverse sideways in the DOM tree to find siblings of an element.

        Siblings share the same parent. 

        siblings():
            -The siblings() method returns all sibling elements of the selected element(after and before the element).
        next() : 
            -The next() method returns the next sibling element of the selected element.
        nextAll():
            -The nextAll() method returns all next sibling elements of the selected element.
        nextUntil():
            -The nextUntil() method returns all next sibling elements except the element in the nextUntil
        prev():
            -same as next but reversed
        prevAll():
            -same as nextAll but reversed
        prevUntil():
            -same as nextUntil but reversed

        Example:
            html:
                <section>
                    <div>
                        <h1>
                            <p>
                                <span>ok1</span>
                                <span>ok2</span>
                                <span id="demo">Special</span>
                                <span>ok3</span>
                                <span class="test">ok4</span>
                                <span>ok5</span>
                            </p>
                        </h1>
                    </div>
                </section>
            css:
                *{
                    border: 3px solid red;
                    padding:15px ;
                }
            
            js:
                $("#demo").next().css("borderColor", "green");//ok3
                $("#demo").nextAll().css("borderColor", "green");//ok3, ok4 ,ok5
                $("#demo").prev().css("borderColor", "green");//ok2
                $("#demo").prevAll().css("borderColor", "green");//ok1, ok2
                $("#demo").siblings().css("borderColor", "green");//ok1, ok2, ok3, ok4 , ok5
                $("#demo").nextUntil("test").css("borderColor", "green");//ok3
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------

    jQuery Traversing - Ancestors(الاباء):
        -parent():
            -The parent() method returns the direct parent element of the selected element.
        -parents():
            -The parents() method returns all ancestor elements of the selected element, all the way up to the document's root element (<html>).

        -parentsUntil()
            -The parentsUntil() method returns all ancestor elements between two given arguments.

        Example:
            html:
                <section>
                    <div>
                        <h1>
                            <p>
                                <span>ok1</span>
                                <span>ok2</span>
                                <span id="demo">Special</span>
                                <span>ok3</span>
                                <span class="test">ok4</span>
                                <span>ok5</span>
                            </p>
                        </h1>
                    </div>
                </section>
            css:
                *{
                    border: 3px solid red;
                    padding:15px ;
                }
            
            js:
                $("#demo").parent().css("borderColor", "green");//p
                $("#demo").parents().css("borderColor", "green");//p, h1, div, section, body, html
                $("#demo").parentsUntil("section").css("borderColor", "green");//p, h1, div

    --------------------------------------------------------------------------------------------------------------------------------------------------------------------

    jQuery Traversing - Descendants:
        -With jQuery you can traverse down the DOM tree to find descendants of an element.
        -A descendant is a child, grandchild, great-grandchild, and so on.

        -children():
            -The children() method returns all direct children of the selected element.
        -find():
            -The find() method returns descendant elements of the selected element, all the way down to the last descendant.

        Example:
            html:
                <section id="demo">
                    <div>
                        <h1>
                            <p>
                                <span>ok1</span>
                                <span>ok2</span>
                                <span>Special</span>
                                <span>ok3</span>
                                <span class="test">ok4</span>
                                <span>ok5</span>
                            </p>
                        </h1>
                    </div>
                </section>
            css:
                *{
                    border: 3px solid red;
                    padding:15px ;
                }
            js:                
                $("#demo").children().css("borderColor", "green");//div
                
                $("#demo").find("span").css("borderColor", "green");//all spans which are children(direct + indirect) to the demo
                
                $("#demo").find("*").css("borderColor", "green");//div, h1, p, all spans

    --------------------------------------------------------------------------------------------------------------------------------------------------------------------

    -jQuery Traversing - Filtering:
        eq():
            -The eq() method returns an element with a specific index number of the selected elements.
        not():
            -The not() method returns all elements that do not match the criteria.


        Example:
            html:
                <section id="demo">
                    <div>
                        <h1>
                            <p>
                                <span>ok1</span>
                                <span>ok2</span>
                                <span>Special</span>
                                <span>ok3</span>
                                <span class="test">ok4</span>
                                <span>ok5</span>
                            </p>
                        </h1>
                    </div>
                </section>
            css:
                *{
                    border: 3px solid red;
                    padding:15px ;
                }
            js:
                $("span").eq(0).css("borderColor", "green"); //get first span ok1
                $("span").eq(1).css("borderColor", "green");//ok2
                $("span").eq(2).css("borderColor", "green"); // special

                $("span").not(".test").css("borderColor", "green"); // ok1 ,ok2, special , ok3, ok5


            


-->