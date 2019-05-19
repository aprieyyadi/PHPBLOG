<?php 



require_once 'core/init.php';
require_once 'view/header.php'; 



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


?>
<p id="judul_single">
	<?= $judul; ?>
</p>

<p id="description_single" >
	
	<?= $description; ?>

</p>

<p id="tag_single">
	
	<?= $tag; ?>




</p>







<?php require_once 'view/footer.php'; ?>