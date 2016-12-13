<?php
	include "mylink.php";
	mysql_query("DELETE FROM cart WHERE c_id=".$_GET['c_id']);
	header("Location: cart.php");
?>