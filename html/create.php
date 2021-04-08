<?php // file that makes inputs to the database
    include '../db.php';
    function invalidInput($variableName){
        echo '<script>alert("Invalid input for ', $variableName, ' variable")</script>';
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
    
    
    $sql = "instert into produtos(title, description, image, stock) values ('$title', '$description', '$image', '$stock')";
    $conn->query($sql);
    $conn->close();
    header("location: index.php");
?>