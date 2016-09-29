<?php
session_start();
header("content-type:text/html;charset=utf-8");
include("../api/mysql.php");
$username=$_SESSION['name'];
$content=$_GET['content'];
$date=date('y-m-d H:i:s',time());
$sql="insert into words (username,content,time) values ('$username','$content','$date')";
$query = mysql_query($sql);
if($query){
	echo "true";
}else{
	echo "false";
}
?>