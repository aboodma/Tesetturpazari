<?php
include 'get_posts.php';
echo "<img src='uploads/'.$fileimg.' alt=''>";
include 'instagram_autopost.php';
if ($result->num_rows > 0) {
  echo "okey";
}




 ?>
