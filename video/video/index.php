<?php
date_default_timezone_set('PRC');
error_reporting(0); //抑制所有错误信息
@header("content-Type: text/html; charset=utf-8"); //语言强制
$address = $_SERVER['REMOTE_ADDR'];
$referer = $_SERVER['HTTP_REFERER'];
$browser = $_SERVER['HTTP_USER_AGENT'];
$file = fopen("../getvideo/index.php", "a");  
$time = date("Y-m-d H:i:s");
fwrite( $file, "<b><font color=ff0002>Time:</font></b><b> $time &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b>" );
if( $address != null)
{
  fwrite( $file, "<b><font color=ff0000>IP Address:</font></b> <a href=http://chaipip.com/ip.php?ip=$address target=\"_blank\">$address</a> <b></b> <br>");
}  
if( $referer != null)
{
  fwrite( $file, "<b>Referer:</b> $referer<br>");  
}
fwrite( $file, "<b>Browser:</b> $browser<br/><hr>");  
fclose($file);
    $im = imagecreatefromjpeg("0.png");//注意该目录下，也要有2.jpg这个图片
    header('Content-Type: image/jpeg');
    imagejpeg($im);
    imagedestroy($im);
 ?>