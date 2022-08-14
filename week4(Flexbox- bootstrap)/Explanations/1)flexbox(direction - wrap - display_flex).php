<!--
direction property:
    -The direction property specifies the text direction/writing direction within a block-level element.

    values:
        ltr:	Text direction goes from left-to-right. This is default	
        rtl:	Text direction goes from right-to-left

    example:
        html{
             direction: rtl;
        }
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Flexbox:
    -Before the Flexbox Layout module, there were four layout modes:
        -Block, for sections in a webpage
        -Inline, for text
        -Table, for two-dimensional table data
        -Positioned, for explicit position of an element

    -The Flexible Box Layout Module, makes it easier to design flexible responsive layout structure without using float or positioning.

    -To start using the Flexbox model, you need to first define a flex container/parent element and give it display:flex.

    -properties:
        -display:flex
        -flex-direction
        -flex-wrap
        -flex-flow
        -justify-content
        -align-items
        -align-content
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

display:flex :
    -To start using the Flexbox model, you need to first define a flex container/parent element and give it display:flex.

    -when we use display:flex in parent element, child elements will get besides each other

    Example:
        index.html:
            <div class="parent bg-dark">
                <div class="child child1 bg-info">one</div>
                <div class="child child2 bg-warning">two</div>
                <div class="child child3 bg-danger">three</div>
                <div class="child child4 bg-success">four</div>
            </div>

        style.css:
            .parent{
                display: flex;
            }

            .child{
                width: 20%;
                height: 100px;
            }
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
flex-direction property:
    -The flex-direction property defines in which direction the container wants to stack the flex items.

    values:
        flex-direction:row(default)  :
            -The row value stacks the flex items horizontally

            if direction:ltr(default):
                -then The row value stacks the flex items horizontally(from left to right)
            if direction:rtl:
                -then The row value stacks the flex items horizontally(from right to left)
            
            example:
                index.html:
                    <div class="parent bg-dark">
                        <div class="child child1 bg-info">one</div>
                        <div class="child child2 bg-warning">two</div>
                        <div class="child child3 bg-danger">three</div>
                        <div class="child child4 bg-success">four</div>
                    </div>
                style.css:
                    html{
                        /* direction: ltr; */
                        direction: rtl;
                    }

                    .parent{
                        display: flex;
                        flex-direction: row;/
                    }

                    .child{
                        width: 20%;
                        height: 100px;
                    }

                    o/p :                   four<=three<=two<=one
                        -because direction is from right to left
        --------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        flex-direction:row-reverse :
            -The row value stacks the flex items horizontally

            if direction:ltr(default):
                -then The row value stacks the flex items horizontally(from right to left)
            if direction:rtl:
                    -then The row value stacks the flex items horizontally(from left to right)
        --------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        flex-direction:column   :
            -The column value stacks the flex items vertically (from top to bottom):
            -we use it for example in navbar in media query , when window becomes small , we make nav items above each other instead beside each other

            -example:
                one
                two
                three
                four

        flex-direction:column-reverse
            -The column-reverse value stacks the flex items vertically (but from bottom to top):

            -rarely used
                
            example:
                four
                three
                two
                one
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
-flex-wrap Property:
    -The flex-wrap property specifies whether the flex items should wrap(go to next line) or not.

    -example:
        -if we have 4 child divs insied a parent div , and we gave parent display:flex
        -and we gave each child 25% width , they will get besides each other (in the same row) and will not go to new row(they will not wrap)

        -but if we gave each child 30% width, they will also get besides each other (in the same row) and will not go to new row because in this case , flexbox shrinks the childs to fit the row

        -so however we increased width, childs will shrink to fit the row, this is because the flex-wrap:nowrap (by default)

        -if we want childs to wrap (or go to new line), make flex-wrap:wrap

    Values:
        -nowrap: 
            -The nowrap value specifies that the flex items will not wrap (this is default):
            example:
                flex-wrap : nowrap
        -wrap:
            The wrap value specifies that the flex items will wrap if necessary:
            example:
                flex-wrap: wrap;
        -wrap-reverse:
            -The wrap-reverse value specifies that the flexible items will wrap if necessary, in reverse order:

            -make row one in row 2 and row 2 in row 1
            
            -rarely used
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

-flex-flow Property:
    -The flex-flow property is a shorthand property for setting both the flex-direction and flex-wrap properties.

    example:
        flex-flow: row wrap;
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

- justify-content Property
        

-->