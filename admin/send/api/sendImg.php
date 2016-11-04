<?php
session_start();
header("content-type:text/html;charset=utf-8");
include("mysql.php");
$title=$_GET['tt'];
$url=$_GET['url'];
$sql="insert into cartoon (title,url) values ('$title','$url')";
$query = mysql_query($sql);
if($query){
	echo "true";
}else{
	echo "false";
}
?>