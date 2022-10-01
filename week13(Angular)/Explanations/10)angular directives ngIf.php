<!-- 
Angular Directives:
    -angular made attributes for itself 
    -they called these attributes :directives

    *ngIf directive:
        -*ngIf directive is a built in directive in angular
        -*ngIf directive takes boolean expression
        -if true => element appear
        -if false => element disappear , we can make another element appear by using else and ng-template
        -*ngIf directive allows me to make if condition inside html

        Example:
            we want to display h2 , if product price > 3000
            -else don't display h2

            -we can solve it using style binding:
            style binding solution:
                html:
                    <h2 [style.display]="productPrice > 3000 ? 'block':'none'">web design and development</h2>
                ts:
                    class HomeComponent{
                        productPrice = 4000;
                    }
                
            *ngIf directive solution:
                html:
                    <h2 *ngIf="productPrice > 3000">web design and development</h2>
                    <h2 *ngIf="onSale">web design and development</h2> //element will not appear
                ts:
                    class HomeComponent{
                        productPrice = 4000;
                        onSale = false;
                    }
        Example2:
             we want to display h2 , if product price > 3000
            -else don't display h2 , and display something else

            -angular has ng-template like div , but don't appear unless we called it
            -we can give it name 

            html:                
                <h2 *ngIf="productPrice > 11000; else hambozo">web design and development</h2>


                <ng-template #hambozo>
                    <h2>Hi Hi</h2>
                </ng-template>
-->