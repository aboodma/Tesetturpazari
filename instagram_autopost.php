<?php
$fileimg=$row['img_name'];
$text=$row['text1'];
$text2=iconv("UTF-8", "windows-1254//TRANSLIT", $text);
include 'simpleimage.class.php';
include 'instagram.class.php';

$username = 'tesetturpazarimoda';   // your username
$password = 'pirveli25';   // your password
$filename = $fileimg;   // your sample photo
echo  $filename ;   // your sample photo
$caption =$text2 ;   // your caption
$product_image= getcwd() .'/uploads/' . $filename;
$square = getcwd().'/resize/' . $filename;
$image = new SimpleImage();
$image->load($product_image);
$image->resize(1080,1080);
$image->save($square, IMAGETYPE_JPEG);
unset($image);

$insta = new instagram();
$response = $insta->Login($username, $password);

if(strpos($response[1], "Sorry")) {
    echo "Request failed, there's a chance that this proxy/ip is blocked";
	print_r($response);
	exit();
}
if(empty($response[1])) {
    echo "Empty response received from the server while trying to login";
	print_r($response);
	exit();
}

$insta->Post($square, $caption);
?>
