<?php 



require_once 'core/init.php';
require_once 'view/header.php'; 

if (!$_SESSION["username"]) {

	header('Location: login.php');
	
}


$error = '';
$id = $_GET["id"];

if (isset($_GET["id"])) {

	

	$article = edit($id);
    while($data = mysqli_fetch_assoc($article)){
    	$judul = $data["judul"];
    	$description = $data["description"];
    	$tag = $data["tag"];


    }
}



if (isset($_POST["submit"])) {
	

	$judul = $_POST["judul"];
	$description = $_POST["description"];
	$tag = $_POST["tag"];


	if (!empty(trim($judul)) && !empty(trim($description))) {

		if(update($judul,$description,$tag,$id)) {

			header('Location: index.php');
			
		}else{
			$error = "gagal mengedit blog";
		}

		
	}else{
		$error = "judul dan konten wajib di isi";
	}
}





?>



<form action="" method="post">
	


	<label for="judul">Judul</label><br>
	<input type="text" name="judul" value="<?= $judul; ?>"> <br><br>

	<label for="description">Deskripsi</label><br>
	<textarea name="description" rows="8" cols="48"><?= $description; ?></textarea> <br><br>


	<label for="tag">Tag</label><br>
	<input type="text" name="tag" value="<?= $tag; ?>"> <br><br>

	<div id="error">

		<?= $error; ?>
		
	</div>


	<button type="submit" name="submit">Update Blog</button>






</form>





<?php require_once 'view/footer.php'; ?>