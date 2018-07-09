<?php
/*****************************************************************
Created :  2018-09-06
Author : Mr.Abdulrahman Mardinli  (dr.monster)
E-mail : aboodma@gmail.com
Website : http://griffindesign.mypressonline.com
Facebook : https://www.facebook.com/jack.hard.5036

*****************************************************************/
$fileimg=$row['img_name'];
$text=$row['text1'];
include_once("instagram-photo-video-upload-api.class.php");

// Upload Photo

$obj = new InstagramUpload();
$obj->Login("tesetturpazarimoda", "pirveli25");
$obj->UploadPhoto('$fileimg', '$text');

// Upload Video
/*
$obj = new InstagramUpload();
$obj->Login("aboodma209", "540963za");
$obj->UploadVideo("test-video.mp4", "square-thumb.jpg", "Test Upload Video From PHP");
*/
?>
