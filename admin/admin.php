<?php session_start();  ?>
<!doctype html>
<html>
<head>   
<meta charset="utf-8">   
<title>Examples</title>   
</head>
<body>
    <?php
	if($_SESSION['login']=='chenggong'){
	?>
	欢迎<span><?php echo $_SESSION['name']; ?></span>进入管理系统！<br>
	<?php }else{
		echo "<script type='text/javascript'>location.href='index.html';</script>";	
		}
	?>
</body>
</html>