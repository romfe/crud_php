<?php
    include '../db.php';
    $entry_id = $_POST["id"];
    $sql = "delete id, title, description, image, stock from products where id='$entry_id'";
    $conn->query($sql);
    $conn->close();
    echo '<script>location.href="index.php"</script>';
?>