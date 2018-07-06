<?php
$id=$_GET['id'];
include 'db.php';
$sql = "DELETE FROM posts WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
      echo "<script>window.location.replace('http://instagram.tesetturpazari.info/');</script>";
} else {
    echo "Error deleting record: " . $conn->error;
}

 ?>
