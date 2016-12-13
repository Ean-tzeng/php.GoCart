<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<link type="text/css" rel="stylesheet" href="stylesheet.css">
<title>加入會員</title>
</head>
<body>
	<div id="log">
	<p style="border:1px solid;color:blue;text-align:center;" >加入會員</p>
	<form action="add.php" method="post" autocomplete="off">
		<table border="1" align="center">
			<tr>
			<td>帳號：</td>
			<td><input type="text" name="user"></td>
			</tr>
			<tr>
			<td>密碼：</td>
			<td><input type="password" name="psd"></td>
			</tr>
			<tr>
			<td>暱稱：</td>
			<td><input type="text" name="u_name"></td>
			</tr>
			<tr>
			<td></td>
			<td><input type="submit" value="送出"><input type="reset" value="重填"></td>
			</tr>
		</table>
	</form>
			<?php
				session_start();
				if(isset($_SESSION['aerr'])){
				switch($_SESSION['aerr']){
				case 1:
				echo "<div id='log_fail'>*錯誤，有項目為空</div>";
				break;
				case 2:
				echo "<div id='log_fail'>*錯誤，帳號存在</div>";
				break;
				}
				}
			?>
	</div>
</body>
</html>
