<?php
session_start();
//date_default_timezone_set("Europe/Istanbul");
include 'db.php';
$date_now=date("Y-m-d");

//echo $date_now=date("Y/m/d");
//echo "<br>";
//$time_now=date("h:i:a");
//$time_local=time()+10800000;
//echo $time_now=date("h:i");
//echo "<br>";
//echo $time_local;
//echo "<br>";
//echo $t=time();
 $t=localtime();
 $localtime_assoc = localtime(time(), true);
 // here Will Change The time to local Time The Time on Server Plus The 8 Hours
 $local=$localtime_assoc[tm_hour]+8;
 //echo "$local";echo ":$localtime_assoc[tm_min]";
 $min=date("i");
 echo "This is Server Time plus 8 hours To compair :";
 echo  $local.':'.$min;
 echo "<br>";
include 'min.php';
 $time_now=$hor.':'.$min;
echo "<br>";
echo $time_now;
echo "<br>";
echo $date_now;
$_SESSION['date']=$date_now;

$_SESSION['time']=$time_now;
//echo(date("h:i",$time_local));
$sql = "SELECT id,date,time,img_name, status,  CONVERT(text USING utf8) as text1 FROM posts WHERE `date`='$date_now' &&`time`='$time_now'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      if ($row['time']==$time_now) {
        $fileimg=$row['img_name'];
        //echo $row['text'];echo "  Tarih:"; echo $row['date']; echo "   Time:"; echo $row['time'];
        echo "<br>";
      //  echo "$fileimg";
          include 'instagram_autopost.php';

          include 'Update_Status.php';
      }else {

      }


    }
} else {
  echo"<br>";
    echo "0 results";
}
$conn->close();

//SELECT * FROM posts WHERE `date`='2018/07/03' && `time`='06:44:pm'


 ?>
