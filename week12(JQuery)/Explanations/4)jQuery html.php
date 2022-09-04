<!-- 
jQuery html(setters & getters):
    -jQuery contains powerful methods for changing and manipulating HTML elements and attributes.

    - attr():
        The jQuery attr() method is used to get/set attribute values.

        Example on get attribute using attr():
            html:
                <img id="myImage" src="images/portfolio-1.jpg" class="w-100" alt="">
            js:
                console.log($("#myImage").attr("src"));

        Example on set attribute using attr():
            html:
                <img id="myImage" src="images/portfolio-1.jpg" class="w-100" alt="">
            js:
                $("#myImage").attr("src", "images/portfolio-2.jpg");
        
        Example:
            -when we click on any of small images , the big image will display this image

            html:
                <div class="w-50 mx-auto">
                    <img id="myImage" src="images/portfolio-1.jpg" class="w-100" alt="">
                    <img src="images/portfolio-1.jpg" class="w-25 image-item" alt="">
                    <img src="images/portfolio-2.jpg" class="w-25 image-item" alt="">
                    <img src="images/portfolio-3.jpg" class="w-25 image-item" alt="">
                    <img src="images/portfolio-1.jpg" class="w-25 image-item" alt="">
                </div>
            css:
                .image-item{
                    float: left;
                    cursor: pointer;
                }
                -we gave small images float:left , to remove the small space after each image
            js:
                $(".image-item").click(function(eventInfo){
                    let imgSrc = $(eventInfo.target).attr("src");//getter

                    $("#myImage").attr("src", imgSrc);//setter
                });
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------
    -jQuery css() Method:
        -The css() method sets or returns one or more style properties for the selected elements.

        Example on set:
            js:
                $("body").click(function(){
                    $("body").css("backgroundColor", "red");
                });

        Example on get:
            css:
                background-color : "green";
            js:
                $("body").click(function(){
                    console.log($("body").css("backgroundColor"));
                });
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------
    
    text(), html(), and val():
        -html() :
            - Sets or returns the content of selected elements (including HTML markup)
            -like innerHTML

            Example:
                html:
                    <div class="test bg-warning" >
                        <p>Lorem ipsum dolor sit.</p>
                        <button>ok</button>
                    </div>
                js:
                    $("body").click(function(){
                        console.log($(".test").html()); //getter
                    });

                //output:
                    <p>Lorem ipsum dolor sit.</p>
                    <button>ok</button>
            Example on set:
                html:
                    <div class="test bg-warning" >
                    
                    </div>
                js:
                    $("body").click(function(){
                        $(".test").html("<h1>hello</h1>"); //setter
                    });
        ------------------------------------------------------------------------------------------------------------------------------------------------------------
        -text() :
            - Sets or returns the text content of selected elements
            Example on set:
                html:
                    <div class="test bg-warning" >
                    
                    </div>
                js:
                    $("body").click(function(){
                        $(".test").text("web design"); //setter
                    });

                //output
                    <div class="test bg-warning" >web design</div>

            Example on get:
                html:
                    <div class="test bg-warning" >
                        <p>Lorem ipsum dolor sit.</p>
                        <button>ok</button>
                    </div>
                js:
                    $("body").click(function(){
                        console.log($(".test").text()); //getter
                    });

                //output:
                    Lorem ipsum dolor sit.
                    ok
        ------------------------------------------------------------------------------------------------------------------------------------------------------------
        -val() :
            -Sets or returns the value of form fields

            Example:
                html:
                    <input type="text" id="myInput">                    
                js:
                    $("body").click(function(){
                        console.log($("#myInput").val()); //getter
                    });
            Example on set:
                html:
                    <input type="text" id="myInput">                    
                js:
                    $("body").click(function(){
                        $("#myInput").val("hello"); //setter
                    });

    --------------------------------------------------------------------------------------------------------------------------------------------------------------------
    
    jQuery - Get and Set CSS Classes:
        -addClass() :
            - Adds one or more classes to the selected elements
            Example:
                html:
                    <div class="test bg-info rounded-circle mx-auto"></div>
                css:
                    .test{
                        width: 100px;
                        height: 100px;                       
                    }
                js:
                    $("body").click(function(){
                        $(".test").addClass("shadow-lg");
                    });
        -removeClass() :
            - Removes one or more classes from the selected elements
        -toggleClass() :
            - Toggles between adding/removing classes from the selected elements

    --------------------------------------------------------------------------------------------------------------------------------------------------------------------
    jQuery - Add Elements:
        -append() :
            - Inserts content at the end of the selected elements(next to it, at its right)

            Example:
                html:
                    <h1 id="#demo" class= "bg-warning">Web Design</h1>
                js:
                    $("body").click(function(){
                        $("#demo").append(`<a href="#">google</a>`);
                    });

                -output:   
                    web design google

        -prepend() - Inserts content at the beginning of the selected elements()
        -after() :
            - Inserts content after the selected elements
            Example:
                html:
                    <h1 id="#demo" class= "bg-warning">Web Design</h1>
                js:
                    $("body").click(function(){
                        $("#demo").after(`<a href="#">google</a>`);
                    });

                -output:   
                    web design
                    google
        -before() - Inserts content before the selected elements
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------
    -jQuery - Remove Elements:
        -remove() : 
            -Removes the selected element (and its child elements)
            
            Example:
                html:
                    <h1 id="demo" class="bg-warning">Web Design</h1>
                js:
                    $("body").click(function(){
                        $("#demo").remove();
                    });

                -h1 is removed with its child(text in this case)

        -empty() :
            -Removes the child elements from the selected element

            Example:
                html:
                    <h1 id="demo" class="bg-warning">Web Design</h1>
                js:
                    $("body").click(function(){
                        $("#demo").empty();
                    });

                -only web design is removed
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------

    -jQuery - Dimensions:
        -With jQuery, it is easy to work with the dimensions of elements and browser window.

        -width() 
        -innerWidth() :get element width + padding
        -outerWidth() : get element width + padding + border
        -outerWidth(true) :get element width + padding + border + margin
        -height()
        -innerHeight()
        -outerHeight()
        -outerHeight(true)

        Example:
            html:
                <div class="test"></div>

                -we removed bootstrap link in this example, because it has box-sizing:border box which state that padding and border are included in the width and height of the element
            css:
                .test{
                    width: 100px;
                    height: 100px;
                    background-color: #09c;
                    padding: 10px;
                    border: 10px solid red;
                    margin: 10px;
                }
            js:
                $("body").click(function(){
                    console.log($(".test").width());
                    console.log($(".test").innerWidth());
                    console.log($(".test").outerWidth());
                    console.log($(".test").outerWidth(true));
                });

            -output:
                100(width)
                120(width + padding)
                140(width + padding + border)
                160(width + padding + border + margin)
                
                
-->


