<!-- 
-Anchor tag:
    syntax:
        <a href="">MyData</a>
    
    -to make links that goes to another page
    -href is an attribute to go to another page
    -target="_blank" to open link in a new tab

    Example:
        <a href="https://www.youtube.com/" target="_blank">read More</a>
    
    -we can make link to external page from another website (but open it in another tab)(use target = "_blank")
    -we can make link to a page inside my website(open it in same tab)
    -we can make link to go to certain section in the same webpage(open it in same tab)
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

types of tags in html:
    1)Nested Tags :
        -has open tag <h1> and closed tag </h1>
    2)Empty Tags:
        -self closed tag:<img src="" alt="">


----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

-Img tag:
    syntax:
        <img src="" alt="">
    Attributes:
        1)src:
            src attribute to add image path
        2)alt:
            (Interview)alt attribute has 3 purposes:
                -alt (alternative)
                1)to display certain text in case there was no image
                2)for search engines :
                    -when someone search in the web for certain person image
                    -search engines see the alt of the images 
                    -if the alt == certain person/something name , it will display my image

                    -we should write 3 words in the alt to help search Engines:
                        alt="Dr Ahmed Zeweil"
                    -we can write arabic or english in the alt
                3)Accessability:
                    -blind people can read alt of the image to know what this image about
                    -there is a program called screen reader that read website for blind people
                    -and when comes to images , it will read the alt    

    Example(Interview):
        <img src="one.png" src="two.png" alt="">

        -it will read/display first src attribute .
        -even if first src attribute img not found, it will not display anything
        
        -this rule is general for all html tags:
            -if same attribute is repeated multiple times, it will read first attribute only
    
    -NOTE:
        -always in images work with width not height
        -browser will automatically adjust height according to(not equal) the width we adjust

        Example:
            <img src="webdesign.jpg" width="100" alt="myImage">
-->

