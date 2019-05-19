<?php


require_once 'core/init.php';

if (!$_SESSION["username"]) {

	header('Location: login.php');
	
}


if (isset($_GET["id"])) {
	if (delete($_GET["id"])) {

		header('Location:index.php');
		
	}else{
		echo 'gagal';
	}
	
}
?>