<!-- 
CRUD Setup:
    C(Create)
    R(Retreive/display)
    U(Update)
    D(Delete)
    S(Search)

    -when we have a project , finish html, css , then go to js
    Example:
        -we want to create products , display products, Update products, delete and make real time search

        -don't use bootstrap grid , unless you want to get divs/elements beside each other

        index.html:
            <div class="w-75 m-auto py-5">
                <div class="mb-3">
                    <label for="productName" class="mb-2">Product Name</label>
                    <input class="form-control" type="text" name="productName" id="productName">
                </div>
                <div class="mb-3">
                    <label  for="productPrice" class="mb-2">Product Price</label>
                    <input class="form-control" type="number" name="productPrice" id="productPrice">
                </div>
                <div class="mb-3">
                    <label for="productCategory" class="mb-2">Product Category</label>
                    <input class="form-control" type="text" name="productCategory" id="productCategory">
                </div>            
                <div class="mb-3">
                    <label for="productDesc" class="mb-2">Product Description</label>
                    <textarea class="form-control" type="text" name="productDesc" id="productDesc"></textarea>
                </div>          
                <button class="btn btn-outline-info">add Product</button>
            </div>
            
            <div class="w-75 mx-auto">
                <input type="text" placeholder="Search..." class="form-control w-75 mx-auto" name="searchInput" id="searchInput">

                <table class="table table-bordered my-5 text-center">
                    <thead>
                        <th>Index</th>
                        <th>ProductName</th>
                        <th>ProductPrice</th>
                        <th>ProductCategory</th>
                        <th>ProductDescription</th>
                        <th>update</th>
                        <th>delete</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>0</td>
                            <td>toshiba</td>
                            <td>8000</td>
                            <td>mobile</td>
                            <td>good</td>
                            <td><button class="btn btn-outline-warning">update</button></td>
                            <td><button class="btn btn-outline-danger">delete</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        
-->