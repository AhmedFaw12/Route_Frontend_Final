<!-- 
Grid system:
    Grid(تقسيمة)
    -bootstrap made a complete grid system (using classes) to help developers make the layout of their webpage
    
    -100% means 12 columns
    example: 3 columns means 25% width
    has xs , sm, md, lg, xl ranges for responsive design

    -Bootstrap’s grid system uses a series of containers, rows, and columns to layout and align content. It’s built with flexbox and is fully responsive. 

    bootstrap grid system classes:
        -container:
            takes width <100% and has margin:auto
            example:
                <div class="container">
                    <div class="bg-danger">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime cupiditate impedit suscipit rerum! Adipisci voluptates sunt expedita? Blanditiis eligendi aut pariatur minima, quidem, unde, molestias id ipsa reiciendis mollitia quasi.</p>
                    </div>
                </div>
        -container-fluid:
            -my seection takes width=100% but has small padding from left and right 

            Example:
                <div class="container-fluid">
                    <div class="bg-danger">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime cupiditate impedit suscipit rerum! Adipisci voluptates sunt expedita? Blanditiis eligendi aut pariatur minima, quidem, unde, molestias id ipsa reiciendis mollitia quasi.</p>
                    </div>
                </div>
        -row:
            -bootstrap grid system is built with flexbox
            -it has class row(parent) that is given display:flex
            -row class has also flex-wrap by default

            -bootstrap named the padding in the col class :gutter(مذراب/ماسورة)
            -to remove gutters ,go to div with row class and give another class:no-gutters

            example:
            
        -col:
            -it is the flex item
            -we can make it responsive
            -col gives padding(left padding:15px and right padding:15px) which will appear as a margin to its child(because bootstrap uses box-sizing:border-box)

            -bootstrap named the padding in the col class :gutter(مذراب/ماسورة)
            



            example:
                col-xl-3 :
                    -in extra large screens , div will take 3 columns from 12, which is 25% width 
                col-lg-4:
                    -in large screens , div will take 4 columns, which is 33.333% width
                col-md-6:
                    -in medium screens , div will take 6 columns, which is 50% width
                col-sm-6:
                    -in sm screens , div will take 6 columns, which is 50% width
                
                -note:
                    -xl , lg, md, sm has media queries code inside them

                    -we didn't set xs (extra small) screens , as it will be set by bootstrap to (col-xs-12) where it will take width:100% by default
            example:
                index.html:
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                <div class="member">
                                    <img src="images/two.png" class="w-100" alt="">
                                    <h3>Lorem, ipsum dolor.</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, sunt? Qui minima at iure, quisquam eaque in eius sequi vitae fugit incidunt atque aspernatur dolores possimus obcaecati consectetur, voluptate doloremque?</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                <div class="member">
                                    <img src="images/two.png" class="w-100" alt="">
                                    <h3>Lorem, ipsum dolor.</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, sunt? Qui minima at iure, quisquam eaque in eius sequi vitae fugit incidunt atque aspernatur dolores possimus obcaecati consectetur, voluptate doloremque?</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                <div class="member">
                                    <img src="images/two.png" class="w-100" alt="">
                                    <h3>Lorem, ipsum dolor.</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, sunt? Qui minima at iure, quisquam eaque in eius sequi vitae fugit incidunt atque aspernatur dolores possimus obcaecati consectetur, voluptate doloremque?</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                <div class="member">
                                    <img src="images/two.png" class="w-100" alt="">
                                    <h3>Lorem, ipsum dolor.</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, sunt? Qui minima at iure, quisquam eaque in eius sequi vitae fugit incidunt atque aspernatur dolores possimus obcaecati consectetur, voluptate doloremque?</p>
                                </div>
                            </div>
                        </div>
                    </div>
            example:
                index.html:
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                <div class="member bg-info">
                                    <h2>Product#</h2>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                <div class="member bg-info">
                                    <h2>Product#</h2>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                <div class="member bg-info">
                                    <h2>Product#</h2>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                <div class="member bg-info">
                                    <h2>Product#</h2>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-4 col-md-6 col-sm-6">
                                <div class="member bg-info">
                                    <h2>Product#</h2>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="member bg-info">
                                    <h2>Product#</h2>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
                                <div class="member bg-info">
                                    <h2>Product#</h2>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-4 col-md-6 col-sm-6">
                                <div class="member bg-info">
                                    <h2>Product#</h2>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
                                <div class="member bg-info">
                                    <h2>Product#</h2>
                                </div>
                            </div>            
                        </div>
                    </div>
        --------------------------------------------------------------------------------------------------------------------------------------------------
        
        gutters:
            -Gutters are the padding between your columns, used to responsively space and align content in the Bootstrap grid system.

            -Gutters are the gaps between column content, created by horizontal padding. We set padding-right and padding-left on each column
            
            -Gutters start at 1.5rem (24px) wide
            
            -Gutters can be responsively adjusted.Use breakpoint-specific gutter classes to modify horizontal gutters, vertical gutters, and all gutters.

            -gx-* classes can be used to control the horizontal gutter widths:
                gx-0
                gx-1
                gx-2
                gx-3
                gx-4
                gx-5

            -to remove horizontal gutters ,go to div with row class and give another class:gx-0
            
            example:
                <div class="container-fluid">
                    <div class="row gx-0">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="member bg-info">
                                <h2>Product#</h2>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="member bg-info">
                                <h2>Product#</h2>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="member bg-info">
                                <h2>Product#</h2>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="member bg-info">
                                <h2>Product#</h2>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-4 col-md-6 col-sm-6">
                            <div class="member bg-info">
                                <h2>Product#</h2>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="member bg-info">
                                <h2>Product#</h2>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
                            <div class="member bg-info">
                                <h2>Product#</h2>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-4 col-md-6 col-sm-6">
                            <div class="member bg-info">
                                <h2>Product#</h2>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
                            <div class="member bg-info">
                                <h2>Product#</h2>
                            </div>
                        </div>            
                    </div>
                </div>






-->