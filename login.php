<head>
	<link type="text/css" rel="stylesheet" href="stylesheet.css">
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
	<title>登入使用者</title>
</head>
<body>	
	<?php

	session_start();
	if(isset($_SESSION['user'])){
	echo "你已經登入<a href='logout.php'>[登出]</a>";
	}else{
	?>
		<div id="log">
		<p style="text-align:center; color:blue;border:1px solid;">使用者登入</p>
		<form id="logText" autocomplete="off" action="login_check.php" method="post">
		帳號:<input type="text" name="user" ><br>
		<p></p>
		密碼:<input type="password" name="psd"><br>
		<p></p><input type="submit"  value="登入"> <a href="add_user.php"> [加入會員]</a><br>
		</form>
		<div id="log_fail" >
		<?php
			if(isset($_SESSION['err'])){
			switch($_SESSION['err']){
			case 1:
			echo "*錯誤，不能為空值!";
			break;
			case 2:
			echo "*錯誤，帳號密碼錯誤!";
			break;
			}
			}
		?>
		</div>
		</div>
	<?php
	}
	?>
		<script>
			function loginAJAX(){
			var poststr;
			var ajax;
			var user=document.getElementById('user').value;
			var psd=document.getElementById('psd').value
			poststr="user="+user+"&psd="+psd;
			if(window.XMLHttpRequest){
			ajax=new XMLHttpRequest();
			}else if(window.ActivXObject){
			ajax=new ActivXObject("Msxml2.XMLHTTP");
			}
			ajax.open("POST","login_check.php",true);
			ajax.onreadystatechange=function(){
				if(ajax.readyState==4 && ajax.status==200){
				document.getElementById('log_fail').innerHTML=ajax.responseText;
				document.getElementById('psd').value="";
				}
				}
			
			ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			ajax.send(poststr);
			}
			
		</script>
</body>