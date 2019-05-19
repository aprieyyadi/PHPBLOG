<?php 



require_once 'core/init.php';



if(isset($_SESSION["username"])){
	header("Location:index.php");
	

}else{
$error = '';




if (isset($_POST["submit"])) {

	$username = $_POST["username"];
	$password = $_POST["password"];


	if (!empty(trim($username)) && !empty(trim($password))) {
		if (!register_cek_username($username)) {
			if (register($username,$password)) {
			

			$_SESSION["username"] = $username;

			header('Location:index.php');
			
		}else{
			$error = "ada masalah saat daftar";
		}
	}else{
		$error = "username sudah terdaftar";
	}

		
	}else{
		$error = "username dan password wajib di isi";
	}
	
}


require_once 'view/header.php';



?>



<form action="" method="post">
	


	<label for="username">username</label><br>
	<input type="text" name="username"> <br><br>
	<label for="password">password</label><br>
	<input type="password" name="password"> <br><br>





	<div id="error">

		<?= $error; ?>
		
	</div>


	<button type="submit" name="submit">DAFTAR</button>






</form>





<?php require_once 'view/footer.php'; ?>

<?php } ?>