<?php
	session_start();
		$_SESSION['url']=$_SERVER['HTTP_HOST'];
		if(isset($_SERVER['REQUEST_URI'])){
		$_SESSION['url'].=$_SERVER['REQUEST_URI'];
		}//記憶網址，方便跳轉
		unset($_SESSION['err']);
		unset($_SESSION['aerr']);//清空登入或加入會員產生的錯誤
	$gid=$_GET['gid'];
	include 'mylink.php';
	$search=mysql_query('SELECT * FROM glist WHERE gid='.$gid);
	while($value=mysql_fetch_array($search)){
	$a=array(
	'gname'=>$value['gname'],
	'gprice'=>$value['gprice'],
	'gbrief'=>$value['gbrief'],
	'gdescript'=>$value['gdescript'],
	'gid'=>$value['gid']
	);
	}
	$a['gurl']=$_SESSION['url'];
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<link type="text/css" rel="stylesheet" href="stylesheet.css">
<title>產品資訊-<?php echo $a['gname']; ?></title>
<script>
	function add_good(){
	var postStr;
	var ajax;
	var gname="<?php echo  $a['gname']; ?>";
	var gprice="<?php echo $a['gprice'];?>";
	var gurl="<?php echo $a['gurl'];?>";
	var gid="<?php echo $a['gid']; ?>";
	var num=document.getElementById('number').value;
	var date="<?php echo date('Y-m-d'); ?>";
	postStr="gname="+gname+"&gprice="+gprice+"&gurl="+gurl+"&gid="+gid+"&num="+num+"&date="+date;
	if(window.XMLHttpRequest){
	ajax=new XMLHttpRequest();
	}else if(window.ActivXObject){
	ajax=new ActivXobject("Msxml2.XMLHTTP");
	}else{
	alert("程式出錯囉，換換瀏覽器試試");
	}
	ajax.open("POST","add.php",true);
	ajax.onreadystatechange=function(){
	if(ajax.readyState==4 && ajax.status==200){
	//document.getElementById('brief').innerHTML=ajax.responseText;
	alert(ajax.responseText);
	}
	}
	ajax.setRequestHeader('Content-type','application/x-www-form-urlencoded');
	ajax.send(postStr);
	}
</script>
</head>
<body>
	<div id="show_header">
	<a href="index.php">回首頁</a>
	<p style="text-align:right;">
		<?php
			if(isset($_SESSION['user'])){?>
			你好，<a href="javascript:;">
			<?php echo $_SESSION['name'];?>
			</a>
			 | <a href='cart.php'>我的購物籃</a> <a href="logout.php"> | 登出 |</a>
			<?php
			}else{
			echo "<a href='login.php'>登入</a> | <a href='add_user.php'>加入會員</a>";
			}
			?>
	</p>
	</div>
		<div id="gbrief">
				<div id="photo">
					<div id="show" class="showphoto">
					</div>
					<div id="minp1" class="miniphto">
						
					</div>
				</div>
				<div id="brief">
				<?php
					echo '<p>產品名稱 : '.$a['gname'].'</p><br>';
					echo '價格 : '.$a['gprice'].'元<br>';
					echo nl2br($a['gbrief']);
				?>
				</div>
				
				<a href="javascript:"><div id="buy" onclick='add_good();'>放入購物籃
				</div>
				</a>
				<div style="width:120px; height:30px; float:left; position:relative;margin:50 10 10 10;padding:5 0 0 0;">
				數量:<input type="text" id="number" style="width:50px;">個
				</div>
		</div>
		<div id="gdescript">
		<p class="123">產品敘述</p>
			<?php
			echo nl2br($a['gdescript']);
			?>
		</div>
	
</body>
</html>