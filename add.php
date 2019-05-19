<?php 



require_once 'core/init.php';
require_once 'view/header.php'; 


if (!$_SESSION["username"]) {
	header("Location:login.php");
	
}else{


$error = '';


if (isset($_POST["submit"])) {

	$judul = $_POST["judul"];
	$description = $_POST["description"];
	$tag = $_POST["tag"];


	if (!empty(trim($judul)) && !empty(trim($description))) {

		if (add($judul,$description,$tag)) {

			header('Location: index.php');
			
		}else{
			$error = "gagal menambahkan blog";
		}

		
	}else{
		$error = "judul dan konten wajib di isi";
	}
	
}




?>



<form action="" method="post">
	


	<label for="judul">Judul</label><br>
	<input type="text" name="judul"> <br><br>

	<label for="description">Deskripsi</label><br>
	<textarea name="description" rows="8" cols="48"></textarea> <br><br>


	<label for="tag">Tag</label><br>
	<input type="text" name="tag"> <br><br>

	<div id="error">

		<?= $error; ?>
		
	</div>


	<button type="submit" name="submit">Tambah Blog</button>






</form>





<?php require_once 'view/footer.php'; ?>
<?php } ?>