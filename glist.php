<?php
	include 'mylink.php';
	$n=0;
	if(isset($_GET['page'])){
	$page_end=$_GET['page']*10;
	$page_from=$page_end-10;
	}else{
	$page_from=0;
	$page_end=10;
	}
	if(isset($_GET['gtid'])){
	$gtid=$_GET['gtid'];
	$total_page=mysql_query('SELECT * FROM `glist` WHERE gtid='.$gtid);
	$result=mysql_query('SELECT * FROM glist WHERE gtid='.$gtid.' ORDER BY date DESC LIMIT '.$page_from.','.$page_end);
	$n=mysql_num_rows($total_page);
	if($n==0){
	echo "<p style='text-align:center'>此目前項目沒有商品</p>";
	}else{
	while($list=mysql_fetch_array($result)){
		echo "<a href='showg.php?gid=".$list['gid']."'><div class='gbox'>".$list['gname']."<br>".$list['gprice']."</div></a>";
	}
	/*$p=floor($n/10)+1;
	echo "<p style='text-align:center'>第".$p."頁";
	for($i=1;$i<=$p;$i++){
		echo " <a href='javascript:;'>".$i."</a> ";
		echo "共".$p."頁</p>";*/
	page($n);
	
	
	}
	}else if(isset($_GET['type'])){
	$t=$_GET['type'];
	$total_page=mysql_query('SELECT * FROM `glist` WHERE type='.$t.' and boolp=1 ORDER BY date');
	$result=mysql_query('SELECT * FROM `glist` WHERE type='.$t.' and boolp=1  ORDER BY date DESC LIMIT '.$page_from.','.$page_end);
	$n=mysql_num_rows($total_page);
	if($n==0){
	echo "<p style='text-align:center'>此目前項目沒有商品</p>";
	}else{
	while($list=mysql_fetch_array($result)){
		echo "<a href='showg.php?gid=".$list['gid']."'><div class='gbox'>".$list['gname']."<br>".$list['gprice']."</div></a>";
	}
		page($n);
		}

	}else if(isset($_GET['pid'])){
	$pid=$_GET['pid'];
	$total_page=mysql_query('SELECT * FROM `glist` WHERE pid='.$pid.' ORDER BY date');
		$result=mysql_query('SELECT * FROM `glist` WHERE pid='.$pid.'  ORDER BY date DESC LIMIT '.$page_from.','.$page_end);
	$n=mysql_num_rows($result);
	if($n==0){
	echo "<p style='text-align:center'>此目前項目沒有商品</p>";
	}else{
	while($list=mysql_fetch_array($result)){
		echo "<a href='showg.php?gid=".$list['gid']."'><div class='gbox'>".$list['gname']."<br>".$list['gprice']."</div></a>";
	}
	page($n);
	}
	
	}else{
	$total_page=mysql_query('SELECT * FROM `glist` WHERE boolp=1 ORDER BY date');
	$result=mysql_query('SELECT * FROM `glist` WHERE boolp=1  ORDER BY date DESC LIMIT '.$page_from.','.$page_end);
	$n=mysql_num_rows($total_page);
	if($n==0){
	echo "<p style='text-align:center'>此目前項目沒有商品</p>";
	}else{
	while($list=mysql_fetch_array($result)){
		echo "<a href='showg.php?gid=".$list['gid']."'><div class='gbox'>".$list['gname']."<br>".$list['gprice']."</div></a>";
	}
	page($n);
	}
	}
		
		
	function page($n){
	$p=floor($n/10)+1;
	echo "<p style='clear:left;text-align:center;'>第";if(isset($_GET['page'])){echo $_GET['page']."頁";}else{echo "1頁";}
	$url=$_SERVER['REQUEST_URI'];
	$l=strpos($url,'?');
	for($i=1;$i<=$p;$i++){
		echo " <a href='";if(isset($_GET['pid'])){echo  "?pid=".$_GET['pid'];}if(isset($_GET['type'])){echo "?type=".$_GET['type'];}if($l!=false){echo "&page=".$i;}else{ echo "?page=".$i;} echo "'>".$i."</a> ";

	}	echo "共".$p."頁</p>";
	}
?>