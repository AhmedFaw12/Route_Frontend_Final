<!-- 
Colors box:
    Example:
        -we want to make box that contain multiple colors , when clicking on any of these colors , website text color changes to the clicked color

        -we will make a sideBar section , it will take fixed position
        -then we will make 2 divs , div to hold colors boxes and the other holds the settings icon
        -since sideBar is fixed , we need to give it large z-index

        -inside colorsBox div, we can make span or ul or....
        -we will make span 
        -span by default are inline elements , so they can not take width or height 
        -so we will give them inline-block and give them small width and height and certain backgroundColor at first
        -inline block will make space after element

        -to get colorsBox div and icon div beside eachother , we will give them float-left 
        -we can make a third div and give it clearfix or we can give clearfix to their parent

        -when click on icon , we will get the inner width of colorsBox div(width + padding) 
        -if sideBar left is 0 (normal/visible) , we will give it left = - colorsBoxWidth 
        if sideBar left is invisible , we will give it left = 0 

        -we want to give each color-box span a backgroundColor
        -so we will select them once using $(".color-box") and put them in variable
        -then make an colorsArray 
        -loop through the colorsArray and give color to each span using eq() method

        -when click on any color box span, we will get its backgroundColor and give it to elements that have (.change) class
 
        html:
            <section id="sideBar" class="clearfix">
                <div id="colorsBox" class="float-left">
                    <h4 class="text-dark">Choose your Color: </h4>
                    <span class="color-box"></span>
                    <span class="color-box"></span>
                    <span class="color-box"></span>
                    <span class="color-box"></span>
                    <span class="color-box"></span>
                </div>
                <div id="toggleIcon" class="float-left">
                    <i  class="fas fa-cog fa-spin float-left "></i>
                </div>
            </section>
        css:
            #sideBar {
                position: fixed;
                left: 0;
                top: 100px;
                z-index: 99999;
            }

            #sideBar #colorsBox{
                padding: 10px;
                background-color: #ccc;
            }

            #sideBar .color-box{
                display: inline-block;
                width: 30px;
                height: 30px;
                background-color: aqua;
                cursor: pointer;
            }

            #sideBar div{
                padding: 10px;
                color: #fff;
                background-color: #333;
                cursor: pointer;
            }

        js:
            $("#toggleIcon").click(function(){

                let colorsBoxWidth = $("#colorsBox").innerWidth();
                
                let sideBarLeft = $("#sideBar").css("left");
                if(sideBarLeft == '0px'){
                    $("#sideBar").animate({left:`-${colorsBoxWidth}px`}, 1000); 
                }else{
                $("#sideBar").animate({left:"0px"}, 1000); 
                }
            });


            const colorsArr = ["tomato", "#09c", "orange", "teal", "aqua", "lightgreen"];
            const colorBoxes = $(".color-box");

            for(let i = 0; i < colorBoxes.length; i++){
                colorBoxes.eq(i).css("backgroundColor", colorsArr[i]);    
            }

            $(".color-box").click(function(eventInfo){
                let myColor = $(eventInfo.target).css("backgroundColor");
                $(".change").css("color", myColor);
            });
-->