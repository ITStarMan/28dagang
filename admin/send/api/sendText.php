<?php
session_start();
header("content-type:text/html;charset=utf-8");
include("mysql.php");
$title=$_GET['context'];
$sql="insert into text (context) values ('$title')";
$query = mysql_query($sql);
if($query){
	echo "true";
}else{
	echo "false";
}
?>