<?php
header("content-type:text/html;charset=utf-8");
include("mysql.php");
$username=$_POST['username'];
$password=$_POST['password'];
$date=date('y-m-d H:i:s',time());
$sql="insert into user (username,password,regTime) values ('$username','$password','$date')";
$query = mysql_query($sql);
if($query){
	echo "<script type='text/javascript'>alert('注册成功！');location.href='login.html';</script>";
}else{
	echo "<script type='text/javascript'>alert('出故障了！请稍后再试！');location.href='reg.html';</script>";
}
?>