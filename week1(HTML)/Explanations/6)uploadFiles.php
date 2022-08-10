<!-- 
Upload Files:
    Attributes:
        -type = "File":
            it will accept all file types.
        -accept:
            But it is possible to restrict the file types to only images, or certain image file extensions.
            Example:
                -accept only all images types(png, jpeg, jpg,....)
                accept="image/*"

                <input type="file" name="userImage" accept="image/*">

            -Example:
                -accecpt only images of types(png, jpeg)
                -JPEG and JPG are the same.
                <input type="file" name="userImage" accept="image/jpeg,image/png">

            Example:
                -accecpt only images of types(png)
                <input type="file" name="userImage" accept="image/png">
            
            file types:
                -audio/*  
                -video/*  
                -image/*

        -multiple:
            -The multiple attribute is a boolean attribute.
            -When present, it specifies that the user is allowed to enter/select more than one value.

            -in case of type="file", we can enter/upload multiple files
            Syntax:
                multiple ="multiple"
                -in html when we have an attribute name = its value, we only write attribute name:
                    multiple
            
            Example:
                <input type="file" name="userImage" accept="image/jpeg,image/png" multiple>

-->