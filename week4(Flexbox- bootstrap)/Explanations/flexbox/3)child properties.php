<!-- 
flexbox(child properties):
    -order
    -flex-grow
    -flex-shrink
    -align-self
    -flex-basis
    -flex


    =>these properties are given to the flex items (not the flex container/parent)
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

-order property:
    -The order property specifies the order of a flexible item relative to the rest of the flexible items inside the same container.

    -Note: If the element is not a flexible item, the order property has no effect.

    -order is similar to z-index but for x-axis flex items

    value:
        number:	Default value 0. Specifies the order for the flexible item

    example:
        -by default flex items order:0 , so they are displayed by their html order
        -----------------------
        -  one  two   three   -
        -                     -
        -                     -
        -----------------------
    
    -example :
        -we will change order for some flex items

        index.html:
            <div class="parent bg-dark">
                <div class="child child1 bg-info">one</div>
                <div class="child child2 bg-warning">two</div>
                <div class="child child3 bg-danger">three</div>
                <div class="child child4 bg-success">four</div>
                <div class="child child5 bg-primary">five</div>
                <div class="child child6 bg-secondary">six</div>
            </div>
        style.css:
            .parent{
                height: 400px;
                display: flex;
                flex-flow: wrap row;
            }

            .child{
                width: 30%;
                height: 100px;
            }

            .child2{
                order:8;
            }
            .child3{
                order:-1;
            }
            .child4{
                order:2;
            }
            .child5{
                order:20;
            }
            .child6{
                order:8;
            }

        -output:
            three(ord:-1)=>one(ord:0)=>four(ord:2)=>two(ord:8)=>six(ord:8)=>five(ord:20)

            -since two and six have same order:8 , then they are ordered based on their html order


    when to use:
        -to display products bestseller at first
        -navbar for example when display on mobile, display elements of navbar in different order
        -netflix orders preference of movies for us
        -....
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
flex-grow:
    -This defines the ability for a flex item to grow if necessary. It accepts a unitless value that serves as a proportion. It dictates what amount of the available space inside the flex container the item should take up.


    -The flex-grow property specifies how much the item will grow relative to the rest of the flexible items inside the same container.

    Note: If the element is not a flexible item, the flex-grow property has no effect.

    -Negative numbers are invalid.

    values:
        number:	A number specifying how much the item will grow relative to the rest of the flexible items. Default value is 0

    -example:
        -if we have a flex parent and 5 flex items
        -parent has width 700px and each flex item has width: 100px
        -then the remaining space is 700-500 = 200px
        -for example we will give item 2 flex-grow:3
        -and we will give item 5 flex-grow:1
        -and the rest of items have flex-grow:0 by default

        -we will sum/aggregate the units of flex-grow: 3 + 1 = 4
        -then divide the remaining space over the units (200/4 = 50px)
        -then the 1unit = 50px
        -then item 2 grow will be 50*3 = 150px, then its total width becomes 100+150=250px

        -and item 2 grow will be 50 * 1 = 50px , then its total width becomes 100+50=150px

        -and the rest of items have 100px width with no change

    -example:
        -if we have a flex parent and 5 flex items
        -parent has width 700px and each flex item has width: 100px
        -if we give parent border/padding = 10px from left and right
        -and we are making box-sizing:border-box
        -then the remaining space is 700-500 -(2*10) = 180px

        -for example we will give item 2 flex-grow:3
        -and we will give item 5 flex-grow:1
        -and the rest of items have flex-grow:0 by default

        -we will sum/aggregate the units of flex-grow: 3 + 1 = 4
        -then divide the remaining space over the units (180/4 = 45px)
        -then the 1unit = 45px
        -then item 2 grow will be 45*3 = 135px, then its total width becomes 100+135=235px

        -and item 2 grow will be 45 * 1 = 45px , then its total width becomes 100+45=145px

        -and the rest of items have 100px width with no change 

    -example:
        -if we are not having box-sizing:border-box
        -then remaining width will be :700-500 = 200px
    
    -example:
        index.html:
            
        style.css:
            .parent{
                width: 700px;
                height: 400px;
                display: flex;
                flex-flow: wrap row;
            }

            .child{
                width: 100px;
                height: 100px;
            }

            .child2{
                
            }
            .child3{
                flex-grow: 5;
            }
            .child4{
            }
            .child5{
                flex-grow: 10;
            }
        
        -steps:
            -remaining space :700-500=200px
            -sum of units:5+10=15
            -unit = 200/15= 13.333333px
            then item 3 full width = 100 + 5*13.3333= 100+66.65 = 166.65px
            then item 5 full width = 100 + 10*13.3333= 100+133.33 = 233.33px
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

-flex-shrink property:
    -This defines the ability for a flex item to shrink if necessary.

    -Negative numbers are invalid.

    -to shrink we need parent width to be less than sum of widths of the childs
    -and we need to make flex-wrap:nowrap

    values:
        number:	A number specifying how much the item will shrink relative to the rest of the flexible items. Default value is 1
   
    example
        -if we have a flex parent and 5 flex items
        -parent has width 400px and each flex item has width: 100px
        -shortage space = 5*100 - 400 = 100px 
        -all items have flex-shrink:1 by default
        
        -so we have 5 units
        -unit = shortage space/units = 100/5 = 20px

        each item width will shrink by 1*20px = 20px
        -each item total width = 100px- 20px = 80px
    example:
        -if we have a flex parent and 5 flex items
        -parent has width 400px and each flex item has width: 100px
        -shortage space = 5*100 - 400 = 100px 
        -we will give item 2 flex-shrink:3 
        -we will give item 4 flex-shrink:2 
        -rest of items have flex-shrink:1 by default
        
        -so we have 3+2+1+1+1 = 8 units
        -unit = shortage space/units = 100/8 = 12.5px

        -item 2 width will shrink by :3*12.5 = 37.5px
        -item 4 width will shrink by :2*12.5 = 25px
        -rest of items width will shrink by 1*12.5px = 12.5px

        -item2 width = 100-37.5
        -item4 width = 100-25
        -each item of the rest width = 100px- 12.5px
    example:
        index.html:
            <div class="parent bg-dark">
                <div class="child child1 bg-info">one</div>
                <div class="child child2 bg-warning">two</div>
                <div class="child child3 bg-danger">three</div>
                <div class="child child4 bg-success">four</div>
                <div class="child child5 bg-primary">five</div>
            </div>
        style.css:
            .parent{
                width: 400px;
                height: 400px;
                display: flex;
                flex-flow: nowrap row;
            }

            .child{
                width: 100px;
                height: 100px;
            }

            .child2{
                flex-shrink: 3;    
            }
            .child3{
            }
            .child4{
                flex-shrink: 2;
            }
            .child5{
            }
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
-->