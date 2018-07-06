<?php
include 'db.php';
$sql = "SELECT id,date,time,img_name, status,  CONVERT(text USING utf8) as text1
FROM posts ";
$result = $conn->query($sql);

