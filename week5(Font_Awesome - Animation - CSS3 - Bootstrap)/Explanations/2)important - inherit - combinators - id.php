<!-- 
!important property:
    -The !important rule in CSS is used to add more importance to a property/value than normal.

    -In fact, if you use the !important rule, it will override ALL previous styling rules for that specific property on that element!

    example:
        index.html:
            <div class="test"></div>
        style.css:
            .test{
                width: 200px;
                height: 200px;
                background-color: #09c !important;
            }
        
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

inherit property:
    -The inherit keyword specifies that a property should inherit its value from its parent element.

    example:
        index.html:
            <div class="test">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit!</p>
            </div>
        style.css:
            .test{
                width: 200px;
                height: 200px;
                background-color: #09c;
                padding-top: 40px;
            }

            .test p{
                background-color: yellowgreen;
                padding-top: inherit;
            }

            -parent div has 40px padding-top
            -p will inherit this padding-top (p will also have 40px padding-top)
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
CSS Combinators:
    -A combinator is something that explains the relationship between the selectors.
    -A CSS selector can contain more than one simple selector. Between the simple selectors, we can include a combinator.

    There are four different combinators in CSS:
        -descendant selector (space):
            -The descendant(children + grandchildren) selector matches all elements that are descendants of a specified element.

            example:
                index.html:
                    <section>
                        <p>first p direct child</p>
                        <div>
                            <p>second p not a direct child</p>
                        </div>
                    </section>
                style.css:
                    section p{
                        color: blue;
                    }
                -both paragraphs(direct child + not direct child) will be affected 

        child selector (>):
            -The child selector selects all elements that are direct children of a specified element.

            -it will not select undirect children

            example:
                index.html:
                    <section>
                        <p>first p direct child</p>
                        <div>
                            <p>second p not a direct child</p>
                        </div>
                        <p>third p direct child</p>
                    </section>
                style.css:
                    section > p{
                        color: blue;
                    }
                -only direct children paragraphs will be affected(first p  and third p)

        adjacent sibling selector (+)
            -The adjacent sibling selector is used to select an element that is directly after another specific element.
            
            -"adjacent" means "immediately following"
            example:
                index.html:
                    <section>
                        <p>first p direct child</p>
                        <div>
                            <p>second p not a direct child</p>
                        </div>
                        <p>third p direct child</p>
                    </section>
                    <p>fourth p adjacent(immediately after) to section</p>
                    <p>fifth p adjacent(not immediately after) to section</p>
                style.css:
                    section + p{
                        color: blue;
                    }
                
                -only fourth paragraph will be affected (because it is the immediately after) paragraph
            
            -example:
                index.html:
                    <section>
                        <p>first p direct child</p>
                        <div>
                            <p>second p not a direct child</p>
                        </div>
                        <p>third p direct child</p>
                    </section>
                    <a href="#">Hello Google</a>
                    <p>fourth p adjacent(immediately after) to section</p>
                    <p>fifth p adjacent(not immediately after) to section</p>
                style.css:
                    section + p{
                        color: blue;
                    }

                -no paragraph will be affected 
                -fourth paragraph will not be affected , because it is not immediately after the section( anchor tag is the immediately after section)
                
        general sibling selector (~):
            The general sibling selector selects all elements that are next siblings of a specified element.

            both (immediately after + not immediately after) elements  will be affected
            Example:
                index.html:
                    <p>six p before section</p>
                    <section>
                        <p>first p direct child</p>
                        <div>
                            <p>second p not a direct child</p>
                        </div>
                        <p>third p direct child</p>
                    </section>
                    <a href="#">Hello Google</a>
                    <p>fourth p adjacent(immediately after) to section</p>
                    <p>fifth p adjacent(not immediately after) to section</p>
                style.css:
                    section ~ p{
                        color: blue;
                    }

                -both fourth and fifth paragraphs will be affected because they are adjacent/next to section

                -six p will not be affected because it is before section
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
id attribute:
    -The HTML id attribute is used to specify a unique id for an HTML element.

    -You cannot have more than one element with the same id in an HTML document.
    
    Using The id Attribute:
        -The id attribute specifies a unique id for an HTML element. The value of the id attribute must be unique within the HTML document.

        -The id attribute is used to point to a specific style declaration in a style sheet. It is also used by JavaScript to access and manipulate the element with the specific id.

        -The syntax for id is: write a hash character (#), followed by an id name. Then, define the CSS properties within curly braces {}.

        example:
            index.html:
                <p>Lorem ipsum dolor sit amet.</p>
                <p>Lorem ipsum dolor sit amet.</p>
                <p id="vip">Lorem ipsum dolor sit amet.</p>
                <p>Lorem ipsum dolor sit amet.</p>
                <p>Lorem ipsum dolor sit amet.</p>
                <p>Lorem ipsum dolor sit amet.</p>
                <p>Lorem ipsum dolor sit amet.</p>
            style.css:
                #vip{
                    color: tomato;
                }


    -Difference Between Class and ID:
        -A class name can be used by multiple HTML elements, while an id name must only be used by one HTML element within the page

    -HTML Bookmarks with ID and Links:
        -HTML bookmarks are used to allow readrs to jump to specific parts of a webpage.

        -Bookmarks can be useful if your page is very long.

        -To use a bookmark, you must first create it, and then add a link to it.

        -Then, when the link is clicked, the page will scroll to the location with the bookmark.

        example:
            index.html:
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#gallery">Gallery</a>
                <a href="#contacts">Contacts</a>

                <section class="vh-100 bg-danger" id="home">
                    <h1>Home</h1>
                </section>
                <section class="vh-100 bg-info" id="about">
                    <h1>About</h1>
                </section>
                <section class="vh-100 bg-warning" id="gallery">
                    <h1>Gallery</h1>
                </section>
                <section class="vh-100 bg-secondary" id="contacts">
                    <h1>Contacts</h1>
                </section>
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
for attribute:
    -When used together with the <label> element, the for attribute specifies which form element a label is bound to.
    Example:
        <form action="">
            <label for="myinput">First Name</label>
            <input type="text" name="" id="myinput">
        </form>
-->