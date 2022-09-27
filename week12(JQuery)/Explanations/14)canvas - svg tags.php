<!-- 
canvas , svg tags:
    -they appeared in html5
    -these tags related to graphics
    -using code to draw

    -canvas: draw with js
    -svg : draw with html


SVG:
    -SVG stands for Scalable Vector Graphics
    -SVG is used to define graphics for the Web
    -SVG is a W3C recommendation

    -The HTML <svg> element is a container for SVG graphics.

    -SVG has several methods for drawing paths, boxes, circles, rectangles, text, and graphic images.

    -in order to make certain shape we need to write many numbers to draw certain shape 
    -we will use tool to draw these shapes
    -(getwaves.io) website to draw svg 
    -go to getwaves.io , then adjust your shape as you like
    -then click on download icon , copy svg code


    -there is another website called (blobmaker) : also makes/draw good and wierd shapes
    -go to blobmaker website and adjust your shape 
    -click on download icon and copy svg code
    -if you want to decrease drawing size , increase viewbox numbers : viewBox="0 0 600 400"

    Example:
        -draw circle inside a rectangle

        html:
            <svg style="border:solid 2px blue">
                <circle cx="50" cy="50" r="40" stroke="green" stroke-width="4" fill="yellow" />
            </svg>

    Example using getwaves.io:
        html:
            <header>
            </header>
            
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#000000" fill-opacity="1" d="M0,288L14.1,277.3C28.2,267,56,245,85,208C112.9,171,141,117,169,122.7C197.6,128,226,192,254,208C282.4,224,311,192,339,192C367.1,192,395,224,424,224C451.8,224,480,192,508,170.7C536.5,149,565,139,593,122.7C621.2,107,649,85,678,74.7C705.9,64,734,64,762,106.7C790.6,149,819,235,847,234.7C875.3,235,904,149,932,149.3C960,149,988,235,1016,229.3C1044.7,224,1073,128,1101,85.3C1129.4,43,1158,53,1186,96C1214.1,139,1242,213,1271,234.7C1298.8,256,1327,224,1355,197.3C1383.5,171,1412,149,1426,138.7L1440,128L1440,0L1425.9,0C1411.8,0,1384,0,1355,0C1327.1,0,1299,0,1271,0C1242.4,0,1214,0,1186,0C1157.6,0,1129,0,1101,0C1072.9,0,1045,0,1016,0C988.2,0,960,0,932,0C903.5,0,875,0,847,0C818.8,0,791,0,762,0C734.1,0,706,0,678,0C649.4,0,621,0,593,0C564.7,0,536,0,508,0C480,0,452,0,424,0C395.3,0,367,0,339,0C310.6,0,282,0,254,0C225.9,0,198,0,169,0C141.2,0,113,0,85,0C56.5,0,28,0,14,0L0,0Z"></path></svg>


        -it will appear as if header and svg are connected to each other

    Example using blobmaker:
        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
        <path fill="#FF0066" d="M52.6,-66.5C63.4,-53.7,63.9,-32.5,66.1,-12.7C68.3,7.1,72.2,25.5,63.1,31.8C53.9,38,31.7,32.1,16.6,31.4C1.5,30.7,-6.5,35.2,-18.9,37.1C-31.4,39.1,-48.3,38.4,-52.4,30.6C-56.5,22.8,-47.8,8,-41.5,-3.8C-35.2,-15.5,-31.4,-24.1,-24.9,-37.6C-18.3,-51.1,-9.2,-69.5,5.9,-76.5C21,-83.5,41.9,-79.2,52.6,-66.5Z" transform="translate(100 100)" />
        </svg>

        
-->
