<!DOCTYPE html>
 <html>
    <head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        function openUpdateModal(rowId){
            modal = $('#updateModal');
            upd = '<form class="form-inline" action="update.php" method="POST" enctype="multipart/form-data">';
            upd += '<td><input type="text" class="form-control" name="title" value="'+ $('#title_'+ rowId).html() +'"></td>';
            upd += '<td><input type="file" name="product_image" class="btn btn-primary"></td>';
            upd += '<td><input type="text" class="form-control" name="description" value="'+ $('#description_'+ rowId).html() +'">';
            upd += '</td><td><input type="number" class="form-control" name="stock" value="'+ $('#stock_'+ rowId).html() +'"></td>';
            upd += '<td><button type="submit" name="submit" class="btn btn-primary">Save</button></td>';
            upd += '<input type="hidden" name="id" value="'+ rowId +'"></form>';
            modal.html(upd);
        } 

        function deleteRow(rowId){
            if(confirm('Are you sure you want to delete this entry?')){
                //$.post('delete.php', {'id':rowId});
                form = jQuery('<form action="delete.php" method="POST"></form>'); 
                form.html('<input value="3" name="id">'); 
                form.submit();
            }
        }

    </script>
    
    </head>
    <body>
        <div class="container">
            <h1>Product Stock Manager</h1>
            <h3>Use this form to read, create, delete and update product records</h3>
            <p><strong>Input rules:</strong></p>
            <ul>
                <li>Title must be more than 6 and less than 25 characters long</li>
                <li>Description must be less than 4000 characters long</li>
                <li>Stock is a required input</li>
                <li>Image must have up to 5MB in size and in one of the following formats: .gif .jpg or .png</li>
            </ul>
            
            <form class="form-inline m-2" action="create.php" method="POST" enctype="multipart/form-data">

                <label for="title">Title:</label>
                <input type="text" class="form-control m-2" id="title" name="title"> 
                
                <label for="description">Description:</label>
                <input type="text" class="form-control m-2" id="description" name="description"> 
                
                <label for="stock">Stock:</label>
                <input type="number" class="form-control m-2" id="stock" name="stock"> <br><br>

                Select an image for the product: <br><br>
                
                <input type="file" name="product_image" class="btn btn-primary">

                <button type="submit" class="btn btn-primary" name="submit">Add Product</button>
            </form>

            <table class="table">
                <tbody>
                    <?php include 'read.php';?>
                </tbody>
            </table>
            <div id="updateModal">
                
            </div>
        </div>
    </body>
</html>