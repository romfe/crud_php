<?php // file that makes inputs to the database
    include '../db.php';
    $title = $_POST["title"];
    $description = $_POST["description"];
    $stock = $_POST["stock"];

    // AINDA FALTAM OS MÉTODOS DA IMAGEM
    // ADICIONAR AQUI AS RESTRIÇÕES DE INPUTS
    
    $sql = "instert into produtos(title, description, image, stock) values ('$title', '$description', '$image', '$stock')";
    $conn->query($sql);
    $conn->close();
    header("location: index.php");
?>