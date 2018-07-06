<?php
$id=$row['id'];
include 'db.php';
$sql="UPDATE `posts` SET `status` = 1 WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}





 ?>
