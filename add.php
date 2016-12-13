<?php
	session_start();
	//加入會員
	//unset($_SESSION['aerr']);
	if(isset($_POST['user'])){
	if($_POST['user']=="" || $_POST['psd']=="" || $_POST['u_name']==""){
	$_SESSION['aerr']=1;
	header("Location: add_user.php");
	}else{
		include "mylink.php";
		$check_double=mysql_query("SELECT * FROM user WHERE user='".$_POST['user']."'");
		$n=mysql_num_rows($check_double);
		//echo $n;
		if($n==0){
		mysql_query("INSERT INTO user(user, name, psd) VALUES('$_POST[user]','$_POST[u_name]','$_POST[psd]')");
		setcookie("user",$_POST['user'],time()+3600);
		setcookie("psd",$_POST['psd'],time()+3600);
		setcookie("name",$_POST['u_name'],time()+3600);
		$_SESSION['user']=$_POST['user'];
		$_SESSION['psd']=$_POST['psd'];
		$_SESSION['name']=$_POST['u_name'];
		header("Location: http://".$_SESSION['url']);
		}else{
		$_SESSION['aerr']=2;
		header("Location: add_user.php");
		}
		}
	//echo $_SESSION['aerr'];
	}//加入會員
	
	//加入購物車
	if(isset($_POST['gname'])){
	include "mylink.php";
	if(!isset($_SESSION['u_id'])){
	echo "請先登入，在執行購買";
	}else{
	if($_POST['num']==NULL){
	$_POST['num']=1;
	}
	$num=$_POST['num'];
	if(preg_match("/^\d*$/",$num)){
	$u_id=$_SESSION['u_id'];
	$u_name=$_SESSION['name'];
	mysql_query("INSERT INTO `cart` Values(NULL,'$u_id', '$u_name', '$_POST[gid]','$_POST[gname]', '$_POST[gprice]', '$_POST[num]', '$_POST[date]')");
	echo $_POST['gname']."放入購物車成功，請到購物車確認";
	}else{
	echo "非法數量，請填入數字";
	}
	}
	}
?>