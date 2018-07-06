<?php
session_start();
$_SESSION['log']="now okey";
if ($_SESSION['log']=="now okey") {
  function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

echo 'User Real IP - '.getUserIpAddr();
  $myfile = fopen("log.txt", "w") or die("Unable to open file!");
$txt = "user\n";
fwrite($myfile, $txt);
$txt = $_SERVER['REMOTE_ADDR'];
fwrite($myfile, $txt);
fclose($myfile);
}



?>
