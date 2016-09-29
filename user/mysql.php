<?php
$conn=@mysql_connect("180.178.46.130","vduanchao","2190911147dc") or
die("db connect error!");
mysql_select_db("sqlvduanchao",$conn);
mysql_query("set names utf8");
?>