<!-- 
Grid Systems continue:
    grid system has 12 column
    -12 column can't be divided on 5,7,9:
        -so we can't divide row on 5/7/9 equals parts
    -12 column can be divided on 2,3,4,6

    How to divide row on 5/7/9:
        use col class only without determining number of columns
        -row can fit any number of equal divs , untill there is no space, then it will wrap
        -or we can tell row to do this untill certain screen width:
        Example:
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md col-sm-6">
                        <div class="member bg-info">
                            <h2>Product#</h2>
                        </div>
                    </div>
                    <div class="col-md col-sm-6">
                        <div class="member bg-info">
                            <h2>Product#</h2>
                        </div>
                    </div>
                    <div class="col-md col-sm-6">
                        <div class="member bg-info">
                            <h2>Product#</h2>
                        </div>
                    </div>
                    <div class="col-md col-sm-6">
                        <div class="member bg-info">
                            <h2>Product#</h2>
                        </div>
                    </div>
                    <div class="col-md col-sm-6">
                        <div class="member bg-info">
                            <h2>Product#</h2>
                        </div>
                    </div> 
                </div>
            </div>
    

    offsetting columns:
        -leave some columns in the row without content:
        -it will give offset from the left of the flex item

        example:
            index.html:
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-3 offset-3">
                            <div class="member">
                                <img src="images/two.png" class="w-100" alt="">
                                <h2>Lorem, ipsum dolor.</h2>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti architecto quasi velit quos mollitia consequatur consectetur dicta earum veritatis, ad maxime ex nam ullam non culpa doloremque aut sint eum.</p>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="member">
                                <img src="images/two.png" class="w-100" alt="">
                                <h2>Lorem, ipsum dolor.</h2>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti architecto quasi velit quos mollitia consequatur consectetur dicta earum veritatis, ad maxime ex nam ullam non culpa doloremque aut sint eum.</p>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="member">
                                <img src="images/two.png" class="w-100" alt="">
                                <h2>Lorem, ipsum dolor.</h2>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti architecto quasi velit quos mollitia consequatur consectetur dicta earum veritatis, ad maxime ex nam ullam non culpa doloremque aut sint eum.</p>
                            </div>
                        </div>
                        
                    </div>
                </div>

        -we gave first div offset-3 , so it will leave 3 columns from its left
        -we can make responsive offset:
            -to apply/change offset in different screens

            example:
                offset-md-1

    Note :
        col-md-4 means it wil take 4 columns in the medium screen and bigger screens, and it will take 12 column width in smaller screens

        -col-3 means it will take 3 columns in all screens





-->