<?php
include '../db.php';
$sql = "select * from products";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    echo "<tr>";
    echo "<td>" . $row['title'] . "</td>";
    echo "<td><img src=../images/>" . $row['image'] . "</img></td>";
    echo "<td>" . $row['description'] . "</td>";
    echo "<td>" . $row['stock'] . "</td>";
    echo "</tr>";
    
}
$conn->close();
?>