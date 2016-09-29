<?php
session_start();
header("content-type:text/html;charset=utf-8");
include("mysql.php");
$username=$_POST['username'];
$password=$_POST['password'];
$rs=mysql_query("select * from user where username='$username' and password='$password'");
$num=mysql_num_rows($rs);
if($num>0){
	$_SESSION['login']='true';
	$_SESSION['name']=$username;
	header("location:../hotText/hotText.html");
	}else{
		echo "<script type='text/javascript'>alert('用户名或密码错误！');location.href='login.html';</script>";
		}
?>