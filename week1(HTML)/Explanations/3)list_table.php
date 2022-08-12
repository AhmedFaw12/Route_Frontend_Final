<!-- 
list:
    -ul tag:
        syntax: 
            <ul>
                <li>HTML</li>
                <li>CSS</li>
                <li>JS</li>
                <li>Bootstrap</li>
            </ul>
        
        -(ul) :unordered list
        -(li) :list item : to display item in the 

        -ul display dotted list by default
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    
    -ol tag:
        syntax: 
            <ol>
                <li>HTML</li>
                <li>CSS</li>
                <li>JS</li>
                <li>Bootstrap</li>
            </ol>
        -(ol) : ordered list
        -ol display numbered list by default
        
        Attributes:
            -type:
                to change display type of the list(numbered , alphabetical, roman letters)
                
            Example:
                type = "A"  : A B C D
                type = "a"  : a b c d
                type = "I"  : I II III IV V
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        
    -Nested Lists:
        Example1:
            <ul>
                <li>HTML</li>
                <li>CSS
                    <ul>
                        <li>Margin</li>
                        <li>Padding</li>
                    </ul>
                </li>
                <li>JS</li>
                <li>Bootstrap</li>
            </ul>

        Example2:
            <ul>
                <li>HTML</li>
                <li>CSS
                    <ul>
                        <li>Margin
                            <ol>
                                <li>top</li>
                                <li>left</li>
                            </ol>
                        </li>
                        <li>Padding</li>
                        <li>Float</li>
                    </ul>
                </li>
                <li>JS</li>
                <li>Bootstrap</li>
            </ul>
        
        Example3:
            <ol>
                <li><a href="https://www.w3schools.com/html/" target="_blank">HTML</a></li>
                <li><a href="https://www.w3schools.com/CSS/" target="_blank">CSS</a></li>
            </ol>
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
table tag:
    syntax:
        <table>
            <thead>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>

    -table tag to make a table
    -tr tag means row
    -thead tag to make heading row of table(instead of tr)
    -th to write heading of column heading
    -td to write value of column

    Table uses:
        -don't ever use table to divide/design our page theme
        -table is only used to display data/products/ ...


    Attributes:
        1)border: 
            -border attribute to make a border around table and between columns and rows
            -we give border a value to determine its thickness
        2)width:
            -width attribute to determine width of table
            -width ="600" :means 600px 
            -in html ,we write number unitless(with units)
        3)height:
           -height attribute to determine height of table

    Example:
        <table border="4" width="600" height="300">
            <thead>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
            </thead>
            <tbody>
                <tr>
                    <td>Ahmed</td>
                    <td>25</td>
                    <td>male</td>
                </tr>
                <tr>
                    <td>Ahmed</td>
                    <td>25</td>
                    <td>male</td>
                </tr>
                <tr>
                    <td>Ahmed</td>
                    <td>25</td>
                    <td>male</td>
                </tr>
            </tbody>
        </table>

    Example2(table with images):

        -we will make table with images
        -always in images work with width not height
        -browser will automatically adjust height according to(not equal) the width we adjust

        <table border="4" width="600" height="400">
            <thead>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Image</th>
            </thead>
            <tbody>
                <tr>
                    <td>Ahmed</td>
                    <td>25</td>
                    <td>male</td>
                    <td><img src="webdesign.jpg" width="100" alt="myImage"></td>
                </tr>
                <tr>
                    <td>Ahmed</td>
                    <td>25</td>
                    <td>male</td>
                    <td><img src="webdesign.jpg" width="100" alt="myImage"></td>
                </tr>
                <tr>
                    <td>Ahmed</td>
                    <td>25</td>
                    <td>male</td>
                    <td><img src="webdesign.jpg" width="100" alt="myImage"></td>
                </tr>
            </tbody>
        </table>



    
    
-->


