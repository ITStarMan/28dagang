<?php
header("content-type:text/html;charset=utf-8");
include("../api/mysql.php");
/*$result =mysql_query("select * from words");
$aa=array();
while($row = mysql_fetch_array($result)){
	$aa[]=$row;
} 
echo json_encode($aa); */

$page=isset($_GET['page'])?intval($_GET['page']):1; 
$num=10;
$total=mysql_num_rows(mysql_query("select * from words"));
$pagenum=ceil($total/$num);
If($page>$pagenum || $page == 0){
       Echo "Error : Can Not Found The page .";
       Exit;
}
$offset=($page-1)*$num;
$arr=array();
$info=mysql_query("select * from words order by time desc limit $offset,$num");
While($it=mysql_fetch_array($info)){
       $arr[]=$it;
} 
echo json_encode($arr);
?>