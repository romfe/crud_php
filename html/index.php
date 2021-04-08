<!DOCTYPE html>
 <html>
    <head>
    
    </head>
    <body>
        <div class="container">
            <h1>Product Stock Manager</h1>
            <p>Use this form to read, create, delete and update product records</p>
            <p>Title must be more than 6 and less than 25 characters long</p>
            <p>Description must be less than 4000 characters long</p>
            <p>Stock is a required data</p>

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