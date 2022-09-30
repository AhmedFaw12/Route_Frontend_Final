<!-- 
Binding Continue:
    -class binding:
        Example:
            ts:
                class HomeComponent{
                    onSale = false;
                    productPrice = 4000; 
                }
            html:
                <h2 [class.bg-danger]="productPrice > 3000" > hello</h2>

                -if productPrice > 3000 , then bg-danger class will be added

                <h2 [class.bg-danger]="onSale" > hello</h2>

                -since onSale = false , bg-danger class will not be added
        syntax:
            [class.className] ="boolean Expression"

    ------------------------------------------------------------------------------------------------------------------------------------------------------
    -style Binding:
        -apply style based on certain condition
        -we use ternary operator
        -we can check on any style

        Example:
            ts:
                class HomeComponent{
                    onSale = false;
                    productPrice = 4000; 
                }

            html:
                <h2 [style.color]='productPrice >  3000 ? "red":"green"' > hello</h2>

                -if productPrice > 3000 , then color : red
                -else , then color : green
                
                <h2 [style.color]='onSale == true ? "red":"green"' > hello</h2>

                -this will get green , since onSale = false
-->