<?php
session_start();
header("content-type:text/html;charset=utf-8");
$conn=@mysql_connect("180.178.46.130","vduanchao","2190911147dc") or
die("db connect error!");
mysql_select_db("sqlvduanchao",$conn);
mysql_query("set names utf8");
$name=$_POST['username'];
$password=$_POST['password'];
$rs=mysql_query("select * from admin where adminname='$name' and adminpassword='$password'");
$num=mysql_num_rows($rs);
if($num>0){
	$_SESSION['login']='chenggong';
	$_SESSION['name']=$name;
	header("location:admin.php");
	}else{
		echo "<script type='text/javascript'>alert('用户名或密码错误！');location.href='index.html';</script>";
		}
?>