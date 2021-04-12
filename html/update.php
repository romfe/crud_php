<?php // file that makes inputs to the database
    include '../db.php';
    function invalidInput($variableName){ //function that handles input errors.
        echo '<script>alert("Invalid input for ' . $variableName . ' field. Please check the input rules and try again.")</script>';

        echo '<script>location.href="index.php"</script>';
    }


    $title = $_POST["title"];
    $description = $_POST["description"];
    $stock = $_POST["stock"];
    $entry_id = $_POST["id"];

    if((isset($title) === FALSE) or (strlen($title) > 25) or (strlen($title)< 6)){ //input verification
        invalidInput("Title");
    }
    if(strlen($description)>4000){
        invalidInput("Description");
    }
    if(isset($stock) === FALSE){
        invalidInput("Stock");
    }
    if(isset($_POST['submit']) and isset($_FILES['product_image'])){ //checking to see if the image was selected
        $img_name = $_FILES['product_image']['name']; //getting the image name
        $img_size = $_FILES['product_image']['size']; //getting the image size
        $tmp_name = $_FILES['product_image']['tmp_name']; //getting the file full name
        $img_error = $_FILES['product_image']['error']; //getting the image error
        $img_extension = pathinfo($img_name, PATHINFO_EXTENSION); // getting the image extension
        print '<pre>';
        print_r($img_extension);
        print '</pre>';
        $img_extension = strtolower($img_extension);
        $allowed_extensions = array("jpg", "jpeg", "gif", "png");
        if (($img_error === 0) and ($img_size <= 625000000) and (in_array($img_extension, $allowed_extensions))){
            
            $new_img_name = uniqid("IMG-", true).'.'.$img_extension;
            $upload_path = '../images/'.$new_img_name;
            move_uploaded_file($tmp_name, $upload_path);
            
        }else{
            invalidInput("Image corrupted"); 
        }
    }else{
        invalidInput("Unknown Image");
    }
    
    
    $sql = "update products set title='$title', description='$description', image='$new_img_name', stock='$stock' where id='$entry_id'";
    $conn->query($sql);
    $conn->close();
    echo '<script>location.href="index.php"</script>';
?>