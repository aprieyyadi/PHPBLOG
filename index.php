<?php 



require_once 'core/init.php';

$admin = $login = false;



$login = false;
if(isset($_SESSION["username"])) {

	$login = true;
	if(cek_status($_SESSION["username"]) == 1){
		$admin = true;
	}
	
}



$article = tampil();
$error = '';


if (isset($_GET["cari"])) {


	$cari = $_GET["cari"];
	$article = search($cari);


	
}

require_once 'view/header.php'; 

?>

<form action="" method="GET">

	<input type="search" name="cari" placeholder="cari disini">
	<p><?= $error; ?></p>
	
	




</form>



<?php while($data = mysqli_fetch_assoc($article)):?>

<div class="grid-article">
	<h3><a href="single.php?id=<?= $data['id'] ?>" title=""><?= $data["judul"]; ?></a></h3>

	<p>
		
	<?= single($data["description"]); ?>

	</p>
	<p class="waktu"> Waktu :<?= $data["waktu"]; ?></p>
	<p class="tag">Tag :<?= $data["tag"]; ?></p>
	<a href="edit.php?id=<?= $data['id'] ?>">Edit</a>
	<?php if($admin): ?>
	
	<a href="delete.php?id=<?= $data['id'] ?>">Hapus</a>
	<?php endif; ?>
</div>

<?php endwhile; ?>


<?php require_once 'view/footer.php'; ?>

