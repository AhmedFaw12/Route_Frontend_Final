<!--
justify-content property:
    -The justify-content property aligns the flexible container's items when the items do not use all available space on the main-axis (horizontally).

    values:
        flex-start:
        	-Default value. Items are positioned at the beginning of the container	
            example:
                one->two->three

        flex-end:	
            -Items are positioned at the end of the container	
            example:
                --------------------------one->two->three
        center:	
            -Items are positioned in the center of the container
            example:
                ---------------------one->two->three-----------------------
        space-between:
        	-Items will have space between them	
            example:
                one--------------two-------------three
            example:
                one--------------two-------------three
                four-----------------------------five
                
        space-around:
            -Items will have space before, between, and after them	
            example:
                ----one--------two--------three----
                --------four--------------five--------
        space-evenly:
            -Items will have equal space around them
            example:
                ------one------two------three------
    
    Example:
        -index.html:
            <div class="parent bg-dark">
                <div class="child child1 bg-info">one</div>
                <div class="child child2 bg-warning">two</div>
                <div class="child child3 bg-danger">three</div>
                <div class="child child4 bg-success">four</div>
            </div>
        -style.css:
            .parent{
                display: flex;
                flex-flow: wrap row;
                justify-content: space-evenly;
            }

            .child{
                width: 20%;
                height: 100px;
            }
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
-align-items property:
    -The align-items property specifies the default alignment for items inside the flexible container.

    -align-items property align the items vertically.
    
    values:
        stretch:
        	-Default. Items are stretched to fit the container
            -items/childs takes full height of the container/parent
            -if items have specific height, then they will not fit the full height of parent

            example:
                parent:
                --------------------------
                - one    two    three    -
                - one    two    three    -
                - one    two    three    -
                - one    two    three    -
                - one    two    three    -
                --------------------------
        center:
        	-Items are positioned at the center of the container	

            -example:
                parent
                --------------------------
                -                        -
                -                        -
                - one    two    three    -
                -                        -
                -                        -
                --------------------------


        flex-start:	
            -Items are positioned at the beginning of the container	
            example:
                parent
                --------------------------
                - one    two    three    -
                -                        -
                -                        -
                -                        -
                -                        -
                --------------------------
        flex-end:	
            -Items are positioned at the end of the container	
            example:
                --------------------------
                -                        -
                -                        -
                -                        -
                -                        -
                - one    two    three    -
                --------------------------
        baseline:	
            -Items are positioned at the baseline of the container
            -has some browser support problems
    
    example:
        index.html:
            <div class="parent bg-dark">
                <div class="child child1 bg-info">one</div>
                <div class="child child2 bg-warning">two</div>
                <div class="child child3 bg-danger">three</div>
                <div class="child child4 bg-success">four</div>
            </div>
        style.css:
            .parent{
                height: 400px;
                display: flex;
                flex-flow: wrap row;
                justify-content: space-evenly;
                align-items: center;
            }

            .child{
                width: 30%;
                height: 100px;
            }
            
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

align-content property: 
    -it is not used alot
    
    -align-content is made/used: 
        -when there are extra spaces for parent (vertically) 
        -and having multiple lines/rows of childs

    -these extra spaces come when parent has fixed height 
    -and giving fixed height is not good for responsive design

    -This aligns a flex container’s lines/rows within when there is extra space in the cross-axis(y-axis)

    -Note: This property only takes effect on multi-line flexible containers, where flex-wrap is set to either wrap or wrap-reverse). A single-line flexible container (i.e. where flex-wrap is set to its default value, no-wrap) will not reflect align-content.

    values:
        stretch:	
            -Default value. Lines stretch to take up the remaining space	
        center:	
            -Lines are packed toward the center of the flex container	
            
            Example:
                while using align-items:center                
                before align-content:center:
                --------------------------
                -                        -
                -                        -
                - one    two    three    -
                -                        -  
                - four   five   six      -
                -                        -
                -                        -
                --------------------------
                
                while using align-items:center
                after align-content:center:
                --------------------------
                -                        -
                -                        -
                - one    two    three    -
                - four   five   six      -
                -                        -
                -                        -
                --------------------------
                -if removed the spaces between lines at the center

        flex-start:	
            -Lines are packed toward the start of the flex container(without leaving any spaces at the top)

            example:
                --------------------------
                - one    two    three    -
                - four   five   six      -
                -                        -
                -                        -
                -                        -
                -                        -
                --------------------------

        flex-end:	
            -Lines are packed toward the end of the flex container(without leaving any spaces at the bottom)
            example:
                --------------------------
                -                        -
                -                        -
                -                        -
                -                        -
                - one    two    three    -
                - four   five   six      -
                --------------------------
        space-between:
            -Lines are evenly distributed in the flex container	
            example:
                --------------------------
                - one    two    three    -
                -                        -
                -                        -
                - four    five    six    -
                -                        -
                -                        -
                - seven    eight    nine -
                --------------------------
        space-around:
        	-Lines are evenly distributed in the flex container, with half-size spaces on either end	
            example:

                --------------------------
                -                        -
                - one    two    three    -
                -                        -
                -                        -
                - four    five    six    -
                -                        -
                -                        -
                - seven    eight    nine -
                -                        -
                --------------------------
        space-evenly:
        	-Lines are evenly distributed in the flex container, with equal space around them
            example:

                --------------------------
                -                        -
                - one    two    three    -
                -                        -
                - four    five    size   -
                -                        -
                - seven    eight    nine -
                -                        -
                --------------------------
    example:
        index.html:
            <div class="parent bg-dark">
                <div class="child child1 bg-info">one</div>
                <div class="child child2 bg-warning">two</div>
                <div class="child child3 bg-danger">three</div>
                <div class="child child4 bg-success">four</div>
            </div>
        style.css:
            .parent{
                height: 400px;
                display: flex;
                flex-flow: wrap row;
                justify-content: space-evenly;
                align-items: center;
                align-content: center;
            }

            .child{
                width: 30%;
                height: 100px;
            }
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Note :
    if(flex-direction:row)
        -align-items align items vertically
        -justify-content align items horizontally
    
    if(flex-direction:column)
        -align-items and justify-content functionalities are reversed
        -align-items align items horizontally
        -justify-content align items vertically

-->