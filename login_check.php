<?php
	session_start();
	include 'mylink.php';
	if($_POST['user']=='' || $_POST['psd']==''){
	$_SESSION['err']=1;
	}else{
	$user=$_POST['user'];
	$psd=$_POST['psd'];
	$result=mysql_query("SELECT * FROM user WHERE user='".$user."'");
	$check=mysql_fetch_array($result);
	if($psd==$check['psd']){
	setcookie("user",$user,time()+3600);
	setcookie("psd",$psd,time()+3600);
	setcookie("name",$check['name'],time()+3600);
	setcookie("u_id",$check['u_id'],time()+3600);
	$_SESSION['user']=$user;
	$_SESSION['psd']=$psd;
	$_SESSION['name']=$check['name'];
	$_SESSION['u_id']=$check['u_id'];
	$_SESSION['err']=0;
	header("Location: http://".$_SESSION['url']);
	break;
	}else{
	$_SESSION['err']=2;
	}
	}
	header("location: login.php");
	
	
?>
