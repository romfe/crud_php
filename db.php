<?php
    //document that manages the database connection
    //$conn = new mysqli("localhost", "root", "toor", "crud_products");
    $sname = "localhost:3306";
    $uname = "root";
    $password = "toor";
    $db_name = "crud_products";
    $conn = mysqli_connect($sname, $uname, $password, $db_name);
    
?>