<?php
header("content-type:text/html;charset=utf-8");
include("../api/mysql.php");

$page=isset($_GET['page'])?intval($_GET['page']):1; 
$num=10;
$total=mysql_num_rows(mysql_query("select * from text"));
$pagenum=ceil($total/$num);
If($page>$pagenum || $page == 0){
       Echo "Error : Can Not Found The page .";
       Exit;
}
$offset=($page-1)*$num;
$arr=array();
$info=mysql_query("select * from text order by floors desc limit $offset,$num");
While($it=mysql_fetch_array($info)){
       $arr[]=$it;
} 
echo json_encode($arr);
?>