<?php
include '../db.php';
$sql = "select * from products";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){

        echo "<tr>";
        echo "<td id='title_".$row['id']."'>" . $row['title'] . "</td>";
        echo "<td><img src=../images/" . $row['image'] . "></img></td>";
        echo "<td id='description_".$row['id']."'>" . $row['description'] . "</td>";
        echo "<td id='stock_".$row['id']."'>" . $row['stock'] . "</td>";
        echo '<td><a class="btn btn-primary" onclick="openUpdateModal(' . $row['id'] . ')" role="button">Update</a></td>';
        echo '<td><a class="btn btn-primary" onclick="deleteRow(' . $row['id'] . ')" role="button">Delete</a></td>';
        echo "</tr>";

}
$conn->close();
?>