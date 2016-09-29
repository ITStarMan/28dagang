<?php
header("content-type:text/html;charset=utf-8");
include("mysql.php");
$username=$_GET['username'];
$rs=mysql_query("select * from user where username='$username'");
$num=mysql_num_rows($rs);
if($num>0){
	echo "1";
	}else{
		echo "0";
		}
?>