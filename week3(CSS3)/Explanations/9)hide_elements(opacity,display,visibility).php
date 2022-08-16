<!-- 
Hide Elements:
    1)display:none:
        when we give element display:none , it disappears as if it is not created
        -and the element below it takes its space

    2)opacity:0 :
        -when we give element opacity:0 , it disappears but it is still there and reserve space 
        
        -and the element below it does not takes its space

        -we can apply transition on opacity only

    3)visibility:hidden :
        -when we give element visibility:hidden , it disappears but it is still there and reserve space

        -and the element below it does not takes its space

    
    -difference between opacity:0 and visibility:hidden :
        -There is a slight difference between visibility: hidden; and opacity: 0;. When clicking on an element with an opacity property of 0, it triggers the click event. Basically, an element with an opacity property of 0 still consumes pointer events (click, mouseover, etc.). However, an element with a visibility property of hidden does’t consume pointer events meaning if we were to click on it, it wouldn’t trigger the click event. This basically means that visibility: hidden; is a mix of opacity: 0; and pointer-events: none;
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------



-->