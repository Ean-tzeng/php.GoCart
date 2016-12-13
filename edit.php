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
	您要查詢的商品資訊如下:
	<p style="text-align:right;"></p>
	</div>
		<?php
			include "mylink.php";
			$result=mysql_query("SELECT * FROM cart WHERE c_id=".$_GET['c_id']);
			$n=mysql_num_rows($result);
			if($n!=0){
			$show=mysql_fetch_array($result)
			?>
	<form>
	<table width="864";  align="center" border="1">
		
			

				<input type="hidden" id='c_id'value="<?php echo $show['c_id'];?>">

			<tr>
				<td>產品名稱</td><td id=g_name><?php echo $show['g_name'];?></td>
			</tr>
			<tr>
				<td>價錢</td><td id=g_price><?php echo $show['gprice'];?></td>
			</tr>
			<tr>
				<td>產品數量</td><td><input type='text' id= "g_num" value="<?php echo $show['num'];?>"></td>
			</tr>
			
			<input type="hidden" id="date">
	<input type='submit' value="確認修改">
		</table>

	</form>
		<?php
			}else{
				echo "<p style='text-align:center; color:red;'>查無此筆交易紀錄</p>";
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
