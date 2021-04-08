<!DOCTYPE html>
 <html>
    <head>
    
    </head>
    <body>
        <div class="container">
            <h1>Product Stock Manager</h1>
            <h3>Use this form to read, create, delete and update product records</h3>
            <p><strong>Input rules:</strong></p>
            <ul>
                <li>Title must be more than 6 and less than 25 characters long</li>
                <li>Description must be less than 4000 characters long</li>
                <li>Stock is a required data</li>
                <li>Image must have up to 5MB in size and in one of the following formats: .gif .jpg or .png</li>
            </ul>
            
            <form class="form-inline m-2" action="create.php" method="POST">
                <label for="title">Title:</label>
                <input type="text" class="form-control m-2" id="title" name="title"> 
                
                <label for="description">Description:</label>
                <input type="text" class="form-control m-2" id="description" name="description"> 
                
                <label for="stock">Stock:</label>
                <input type="text" class="form-control m-2" id="stock" name="stock"> 
                
                <input type="file" name="product_image" class="btn btn-primary">
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </body>
</html>