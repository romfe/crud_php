<!DOCTYPE html>
 <html>
    <head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        function openUpdateModal(rowId){ //function that controls the Modal to update the selected registry
            modal = $('#update-modal-body');
            upd = '<form class="form-inline" action="update.php" method="POST" enctype="multipart/form-data" id="form-update">';
            upd += '<label for="title">Title:</label>';
            upd += '<td><input type="text" class="form-control" name="title" value="'+ $('#title_'+ rowId).html() +'"></td><br>';
            upd += '<label for="file">Image:</label><br>';
            upd += '<td><input type="file" name="product_image" class="btn btn-primary"></td><br><br>';
            upd += '<label for="description">Description:</label>';
            upd += '<td><input type="text" class="form-control" name="description" value="'+ $('#description_'+ rowId).html() +'"></td>';
            upd += '<label for="stock">Stock:</label>';
            upd += '<td><input type="number" class="form-control" name="stock" value="'+ $('#stock_'+ rowId).html() +'"></td><br>';
            upd += '<td><button type="submit"  name="submit" class="btn btn-primary">Save</button></td>';
            upd += '<input type="hidden" name="id" value="'+ rowId +'"></form><br>';
            modal.html(upd);
            $('#updateModal').modal('show');
        } 

        function deleteRow(rowId){ //function that triggers registry deletion
            if(confirm('Are you sure you want to delete this entry?')){

                form = jQuery('<form action="delete.php" method="POST"></form>'); 
                form.html('<input value="'+rowId+'" name="id">'); 
                $('body').append(form);
                form.submit();
            }
        }
        function closeModal(){
            $('#updateModal').modal('hide');
        }
        function submitUpdate(){
                $('#form-update').submit();
        }
       
    </script>
    <style> /*image size restrictions*/
        img{ 
            max-width: 150px;
            max-height: 150px;
        }
    </style> <!-- bootstrap importing --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </head>
    <body><!-- instructions section --> 
        <div class="container-fluid instructions">
            <div class="row-fluid row-instructions">
                <div class="col-fluid col-instructions">
                    <div class="px-4 py-5 my-5 text-center">
                        <h1>Product Stock Manager</h1><br>
                        <h3>Use this form to read, create, delete and update product records</h3><br>
                        <h3><strong>Input rules:</strong></h3><br>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-primary">Title must be more than 6 and less than 25 characters long</li>
                            <li class="list-group-item list-group-item-primary">Description must be less than 4000 characters long</li>
                            <li class="list-group-item list-group-item-primary">Stock is a required input</li>
                            <li class="list-group-item list-group-item-primary">Image must have up to 5MB in size and in one of the following formats: .gif .jpg or .png</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid input"> <!-- input form -->                
            <form class="form-inline m-2" action="create.php" method="POST" enctype="multipart/form-data">
                <div class="row-fluid row-form">
                    <div class="col-fluid yay">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control m-2" id="title" name="title"> 
                        <label for="description">Description:</label>
                        <input type="text" class="form-control m-2" id="description" name="description">
                        <label for="stock">Stock:</label>
                        <input type="number" class="form-control m-2" id="stock" name="stock">  
                        Select an image for the product: <br><br>
                        <input type="file" name="product_image" class="btn btn-primary">
                        <button type="submit" class="btn btn-success" name="submit">Add Product</button>
                    </div>
                </div>

            </form><br><br>

            
        </div>
        <div class="container container-products"><!-- Table to show the database entries --> 
            <h3>Current Products:</h3>
            <table class="table">
                <tbody>
                    <?php include 'read.php';?>
                </tbody>
            </table>
            <!-- modal that updates the database entries --> 
            <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update entry</h5>
                            <button type="button" class="close" data-dismiss="modal" onclick="closeModal()" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="update-modal-body">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>