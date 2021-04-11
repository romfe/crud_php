<?php
include '../db.php';
$sql = "select * from products";
$result = $conn->query($sql);
echo "<tr>";
echo "<td>Title</td>";
echo "<td>Image</td>";
echo "<td>Description</td>";
echo "<td>Stock</td>";
echo "<td>Action</td>";
echo "</tr>";
while($row = $result->fetch_assoc()){

        echo '<tr class="table-display">';
        echo "<td id='title_".$row['id']."'>" . $row['title'] . "</td>";
        echo "<td><img src=../images/" . $row['image'] . "></img></td>";
        echo "<td id='description_".$row['id']."'>" . $row['description'] . "</td>";
        echo "<td id='stock_".$row['id']."'>" . $row['stock'] . "</td>";
        echo '<td><a class="btn btn-primary" onclick="openUpdateModal(' . $row['id'] . ')" role="button">Update</a><a class="btn btn-danger" onclick="deleteRow(' . $row['id'] . ')" role="button">Delete</a></td>';
        echo "</tr>";

}
$conn->close();
?>