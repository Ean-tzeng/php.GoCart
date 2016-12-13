<?php
	include "mylink.php";
	
	$result=mysql_query('SELECT * FROM promlist ORDER BY pdate LIMIT 5');
	while($list=mysql_fetch_array($result)){
		echo "<a href='index.php?pid=".$list['pid']."'><div class='typbox'>".$list['pname']."</div></a>";
	}
?>