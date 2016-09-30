<?php
session_start();
header("content-type:text/html;charset=utf-8");
include("mysql.php");
$title=$_GET['carTitle'];
$picUrl=$_GET['picUrl'];
$url=$_GET['url'];
$sendTime=$_GET['sendTime'];
$sql="insert into sendcar (title,picUrl,url,time) values ('$title','$picUrl','$url','$sendTime')";
$query = mysql_query($sql);
if($query){
	echo "true";
}else{
	echo "false";
}
?>