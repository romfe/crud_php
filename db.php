<?php
    //document that manages the database connection
    // old stuff be like $conn = new mysqli("localhost", "root", "toor", "crud_products");
    $sname = "localhost";
    $uname = "root";
    $password = "toor";
    $db_name = "crud_products";
    $conn = mysqli_connect($sname, $uname, $password, $db_name);
?>