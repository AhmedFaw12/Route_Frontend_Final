<!-- 
Bootstrap Utilities:
    -utilities/classes means helpers(مساعدات/رفاهيات)

    Background( colors):
        -bg-info => light blue
        -bg-primary =>blue
        -bg-secondary =>gray
        -bg-danger  =>red
        -bg-warning =>yellow
        -bg-success =>green
        -bg-dark =>black
        -bg-white =>white

    ----------------------------------------------------------------------------------------------------------------------------------------------------------
    colors(text colors):
        - text-white
        - text-primary
        - text-info
        - text-secondary
        - text-danger
        - text-success
        - text-warning
        - text-dark
        - text-info
        - text-muted =>semi gray used mainly for p tags
    ----------------------------------------------------------------------------------------------------------------------------------------------------------
    Sizing:
        -width:
            relative to parent:
                w-25 => 25% of parent width
                w-50
                w-75
                w-100
            relative to viewport:
                vw-100 =>100% relative to viewport width
        -height:
            relative to parent:
                h-25 => 25% of parent width
                h-50
                h-75
                h-100
            relative to viewport:
                vh-100 =>100% relative to viewport height

        -You can also use max-width: 100%; and max-height: 100%; utilities as needed:
            mw-100, mh-100

        -if we want width:90% :
            -we will make our own class and name it w-90 and use it
            example:
                .w-90{
                    width:90%;
                }
        
        units:
            0   ==> 0
            1   ==> $spacer * 0.25
            2   ==> $spacer * 0.5
            3   ==> $spacer * 1
            4   ==> $spacer * 1.5
            5   ==> $spacer * 3  

            -if the space = 16 px , the biggest sizing in bootstrap is (3*16 = 48px)

            -we can change spacer by using sass
    ----------------------------------------------------------------------------------------------------------------------------------------------------------
    Text:
        -Text alignment:
            text-center
            text-left
            text-right
        -Text transform: 
            Transform text in components with text capitalization classes.

            -text-lowercase => make all letters small
            -text-uppercase => make all letters big
            -text-capitalize=> .text-capitalize only changes the first letter of each word, leaving the case of any other letters unaffected.
    ----------------------------------------------------------------------------------------------------------------------------------------------------------
    Spacing:
        padding:
            p-0 =>no padding
            p-1 =>padding with one unit(we will know later what is the unit)
            p-2
            p-3
            p-4
            p-5

            pt-0 ==> pt-5  :padding top
            pb-0 ==> pb-5  :padding bottom
            pe-0 ==> pr-5  :padding right(end)
            ps-0 ==> pl-5  :padding left
            px-0 ==> px-5  :padding left and right
            py-0 ==> py-5  :padding top and bottom
        margin:
            m-0
            m-1
            m-2
            m-3
            m-4
            m-5

            mt-0 ==>mt-5  :margin top
            mb-0 ==>mb-5  :margin bottom
            me-0 ==>mr-5  :margin right(end)
            ms-0 ==>ml-5  :margin left(start)
            mx-0 ==> mx-5  :margin left and right
            my-0 ==> my-5  :margin top and bottom

            mx-auto  :margin auto horizontal (to center divs and elements horizontally)

            ms-auto : left is empty (similar to float:right , but it is not float)
            me-auto : right is empty (similar to float:left , but it is not float)
    ----------------------------------------------------------------------------------------------------------------------------------------------------------

    Borders:
        border:
            border  =>add border to all sides
            border-top =>add border to top side only
            border-bottom =>add border to bottom side only
            border-start  =>add border to left side only
            border-end    =>add border to right side only
        
        remove border:
            -but first we should use border class
            border-0
            border-top-0
            border-right-0
            border-bottom-0
            border-left-0

            example:
                border border-top-0

                -all border to all sides , but remove the top side

        color:
            
            for border colors(but first we should use border class)

            -border-warning
            -border-info
            -border-danger
            -border-primary
            -border-dark
            -border-white
            -border-success
            -border-secondary
        
        width:
            -to determine width of the border(but first we should use border class)

            border-1 =>1unit
            border-2
            border-3
            border-4
            border-5
        
        Radius:
            Add classes to an element to easily round its corners.
            
            rounded  :
                add simple border-radius to all corners
            rounded-top :
                add simple border-radius to  top left and top right corners
            rounded-end  :
                add simple border-radius to top right and bottom right corners
            rounded-bottom  :
                add simple border-radius to bottom left and bottom right corners
            rounded-start  :
                add simple border-radius to top left and bottom left corners

            rounded-circle:
                -make border-radius:50%
    ----------------------------------------------------------------------------------------------------------------------------------------------------------
    display:
        d-none
        d-block
        d-flex
    ----------------------------------------------------------------------------------------------------------------------------------------------------------
    Position:
        position values:
            position-absolute
            position-relative
            position-fixed
            position-static
            fixed-top:
                Position an element at the top of the viewport, from edge to edge.(full width)
            fixed-bottom:
                Position an element at the bottom of the viewport, from edge to edge.(full width)
    ----------------------------------------------------------------------------------------------------------------------------------------------------------
    Float:
        float-start  =>float left
        float-end   =>float right
        float-none => if we don't want to make float
        clearfix  =>to clear float
    ----------------------------------------------------------------------------------------------------------------------------------------------------------
    overflow:
        overflow-auto
        overflow-hidden
        overflow-scroll
    ----------------------------------------------------------------------------------------------------------------------------------------------------------
    flex:
        d-flex
        wrap:
            flex-wrap
            flex-nowrap
            flex-wrap-reverse
        
        flex-direction: 
            flex-row
            flex-row-reverse
            flex-column
            flex-column-reverse

        justify-content:
            justify-content-center
            justify-content-around
            justify-content-between
            justify-content-evenly
            ....

        align-items:
            align-items-center
            align-items-stretch
            align-items-start
            align-items-end
            ....
        align-content:
            align-content-center
            ....
    ----------------------------------------------------------------------------------------------------------------------------------------------------------
    
    bootstrap box shadow:
        Add or remove shadows to elements with box-shadow utilities.
        classes:
            shadow-none :No shadow
            shadow-sm   :small shadow
            shadow      :regular shadow
            shadow-lg   :Larger shadow
        example:
            <div class="shadow-lg">hello</div>
    ----------------------------------------------------------------------------------------------------------------------------------------------------------

    Typography:
        lead :
            -it is given to paragraphs
            -it give p (font-size:1.25rem = 20px, font-weight:300 make it lighter)
            example:
                <p class="lead text-muted">HELLO</p>
                
    -----------------------------------------------------------------------------------------------------------------------------------------------------------
    -responsive images:
        img-fluid:
            This applies max-width: 100%; and height: auto; to the image so that it scales with the parent width.
        
        img-thumbnails:
            give an image a rounded 1px border appearance.

------------------------------------------------------------------------------------------------------------------------------------------------------------------
      

-Vs code Extensions:
    -intellisense for css class names in html: to help me auto complete class names


            
-->

