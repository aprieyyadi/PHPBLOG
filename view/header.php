<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Blog</title>
	<link rel="stylesheet" href="view/style.css">
</head>
<body>

<h1>Blog PHP</h1>

<?php global $login; ?>

<div id="menu">

	

	<?php if ($login):?>
	<a href="add.php">Tambah</a>
	<a href="logout.php" title="">Logout</a>
	<?php else: ?>
		<a href="index.php">Beranda</a>
		<a href="login.php">Login</a>
		<a href="register.php" title="">Daftar</a>

	<?php endif; ?>
	
</div>
	
