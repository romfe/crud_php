<?php // file that makes inputs to the database
    include '../db.php';
    function invalidInput($variableName){
        echo '<script>alert("Invalid input for $variableName variable. Please check the imput rules and try again.")</script>';
        header("Location: index.php");
        exit(0);
    }
    $title = $_POST["title"];
    $description = $_POST["description"];
    $stock = $_POST["stock"];

    // AINDA FALTAM OS MÉTODOS DA IMAGEM
    if((isset($title) === FALSE) or (strlen($title) > 25) or (strlen($variableName)< 6)){
        invalidInput("Title");
    }
    if(strlen($description)>4000){
        invalidInput("Description");
    }
    if(isset($stock) === FALSE){
        invalidInput("Stock");
    }
    if(isset($_POST['submit']) and isset($_FILES['product_image'])){
        $img_name = $_FILES['product_image']['name']; //getting the image name
        $img_size = $_FILES['product_image']['size']; //getting the image size
        $tmp_name = $_FILES['product_image']['tmp_name']; 
        $img_error = $_FILES['product_image']['error']; //getting the image error
        $img_extension = pathinfo($img_name, PATHINFO_EXTENSION); // getting the image extension
        $img_extension = strtolower($img_extension);
        $allowed_extensions = array("jpg", "jpeg", "gif", "png");
        if (($img_error === 0) and ($img_size <= 625000) and (in_array($img_extension, $allowed_extensions))){
            
            $new_img_name = uniqid("IMG-", true).'.'.$img_extension;
            $upload_path = '../images/'.$new_img_name;
            move_uploaded_file($tmp_name, $upload_path);
            
        }else{
            invalidInput("Image");
        }
    }else{
        invalidInput("Image");
    }
    
    
    $sql = "instert into produtos(title, description, image, stock) values ('$title', '$description', '$image', '$stock')";
    $conn->query($sql);
    $conn->close();
    header("location: index.php");
?>