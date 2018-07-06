<?php
if(isset($_FILES['image'])){
     $errors= array();
     $file_name = $_FILES['image']['name'];
     $file_size =$_FILES['image']['size'];
     $file_tmp =$_FILES['image']['tmp_name'];
     $file_type=$_FILES['image']['type'];
     $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

     $expensions= array("jpeg","jpg","png");

     if(in_array($file_ext,$expensions)=== false){
        $errors[]="extension not allowed, please choose a JPEG or PNG file.";
     }

     if($file_size > 2097152){
        $errors[]='File size must be excately 2 MB';
     }

     if(empty($errors)==true){
        move_uploaded_file($file_tmp,"uploads/".$file_name);
        echo "Success";




include 'db.php';
$date=$_POST['date'];
$time=$_POST['time'];
//$text = mysqli_real_escape_string($conn, $_POST['text']);
$text = $conn->escape_string($_POST["text"]);
//$text=$_POST['text'];
$img_name=$file_name;
$sql = "INSERT INTO `posts` (`id`, `date`, `time`, `img_name`, `text`, `timestamp`)
VALUES (NULL, '$date', '$time', '$img_name', '$text', CURRENT_TIMESTAMP)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
      echo "<script>window.location.replace('http://instagram.tesetturpazari.info/');</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}

$conn->close();
}else{
   print_r($errors);
}
}

echo $time;
echo $_POST['text'];
 ?>
