<?php
	include "mylink.php";
	if(isset($_GET['type'])){
	$t=$_GET['type'];
	switch($t){
	case 1:
	echo "3C家電";
	break;
	case 2:
	echo "男性時尚";
	break;
	case 3:
	echo "女性時尚";
	break;
	case 4:
	echo "嬰兒用品";
	break;
}
	$result=mysql_query('SELECT * FROM `gtype` where type='.$t);
	while($array=mysql_fetch_array($result)){
	echo "<a href='index.php?type=".$t."&gtid=".$array['gtid']."'><div class='typbox'>".$array['typename']."</div></a>";
	
	}
	}else{
	echo "最新促銷";
	include "promote.php";
	}
	
?>