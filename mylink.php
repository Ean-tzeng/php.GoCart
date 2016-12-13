<?php
	$mysql_host="sql312.byethost9.com";
	$mysql_user="b9_19137063";
	$mysql_password="snow0413";
	$mysql_db="b9_19137063_gocart";
	$link = mysql_connect($mysql_host, $mysql_user, $mysql_password);
	$db=mysql_select_db($mysql_db, $link) or die("連線逾時") ; 
	mysql_query("SET NAMES 'utf8'");
?>