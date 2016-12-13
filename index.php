<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<link type="text/css" rel="stylesheet" href="stylesheet.css">
<title>Go Cart</title>

</head>
<body>
	<div id="header">
	<h1>GoCart</h1><br>
	登入帳號請使用'test',密碼請輸入1234
		
		<?php 
		include "mylink.php";
		session_start();
		unset($_SESSION['err']);
		unset($_SESSION['aerr']);
		$_SESSION['url']=$_SERVER['HTTP_HOST'];
		if(isset($_SERVER['REQUEST_URI'])){
		$_SESSION['url'].=$_SERVER['REQUEST_URI'];
		}
		if(isset($_COOKIE['user'])){
		echo "<p style='text-align:right;'>歡迎光臨, <a href='javascript:;'>".$_COOKIE['name']."</a> | <a href='cart.php'>我的購物籃</a> | <a href='logout.php'>  登出 |</a></p>";
		}else if(isset($_SESSION['user'])){
		echo "<p style='text-align:right;'>歡迎光臨, <a href='javascript:;'>".$_SESSION['name']."</a> | <a href='cart.php'>我的購物籃</a> | <a href='logout.php'>  登出 |</a></p>";
		}else{
		?>
		<p style="text-align:right;"><a href="login.php"> [ 登入 ] </a> <a href="add_user.php">[加入會員]</a></p>
		<?php }
		?>
	</div>
	<div id="menu">
	<a href="index.php">最新促銷</a> | <a href="index.php?type=1">3C家電</a> | <a href="index.php?type=2">男性時尚</a> | <a href="index.php?type=3">女性時尚</a> | <a href="index.php?type=4">嬰兒相關</a> | 
	</div>
	<div id="content">
		<div id="gtypmenu">
			<div id="gtyptop">
			</div>
			<div id="gtype">
				<?php
				include "GtypeSelector.php";
				?>
			</div>
			<div id="gtypbottom">
			</div>
		</div>
		<div id="glist">
			<?php include 'glist.php'; ?>
		
		</div>
		
		</div>
	<div id="bottom">
	<p>曾文彥 設計 2013/7/10</p>
	<p>design by WaterCool 2016/7/10</p>
	</div>
	
</body>

</html>
