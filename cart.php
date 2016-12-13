<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<link type="text/css" rel="stylesheet" href="stylesheet.css">
<title>購物車查詢</title>
</head>
<body>
	<div id="header">
	<?php
	session_start();
	if(isset($_SESSION['user'])){
	$_SESSION['url']=$_SERVER['HTTP_HOST'];
	if(isset($_SERVER['REQUEST_URI'])){
	$_SESSION['url'].=$_SERVER['REQUEST_URI'];
	}
	echo $_SESSION['name'];
	?>
	的購物車
	<p style="text-align:right;"><a href="index.php">首頁</a> | <a href="logout.php">登出</a> </p>
	</div>
	<div id="show_header">
	購物車商品
	<p style="text-align:right;"></p>
	</div>
		<?php
			include "mylink.php";
			$result=mysql_query("SELECT * FROM cart WHERE u_id=".$_SESSION['u_id']." ORDER BY date DESC");
			$n=mysql_num_rows($result);
			if($n!=0){
			?>
	
	<table width="864";  align="center" border="1">
		<tr>
			<th>編號</th>
			<th>產品名稱</th>
			<th>價錢</th>
			<th>產品數量</th>
			<th>放入購物車日期</th>
			<th>操作</th>
		</tr>
		<?php
			$sum=0;
			while($show=mysql_fetch_array($result)){
				echo "<tr align='center'><td>".$show['c_id']."</td><td>".$show['g_name']."</td><td>".$show['gprice']."</td><td id=num_".$show['c_id'].">".$show['num']."</td><td>".$show['date']."</td>";
				$sum=$sum+$show['gprice']*$show['num'];
				echo "<td id='operat_".$show['c_id']."' style='font-size:15px;'> <a href='edit.php?c_id=".$show['c_id']."' >[變更]</a></td>";
			}
		?>
		</table>
		<p style="text-align:center; color:red;";>總共<?php echo $sum; ?>元</p>
		<?php
			}else{
				echo "<p style='text-align:center; color:red;'>購物車裡是空的!</p>";
			}
		?>
	
	<div id="show_header">
	<?php
	}else{
	header("Location: index.php");
	}
	?>
</body>
</html>