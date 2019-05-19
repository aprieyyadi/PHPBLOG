<?php 



function tampil(){
	global $conn;


	$query = "SELECT * FROM blog";


	$result = mysqli_query($conn,$query)or die('gagal menampilkan data');


	return $result;





}


function add($judul,$description,$tag){
	global $conn;
	$judul = mysqli_real_escape_string($conn,$judul);
	$description = mysqli_real_escape_string($conn,$description);
	$tag= mysqli_real_escape_string($conn,$tag);

	$query = "INSERT INTO blog (judul,description,tag) VALUES ('$judul','$description','$tag')";

	if (mysqli_query($conn,$query)) return true;
	else return false;
}


function edit($id){
	global $conn;


	$query = "SELECT * FROM blog WHERE id = $id";


	$result = mysqli_query($conn,$query)or die('gagal menampilkan data');


	return $result;





}

function update($judul,$description,$tag,$id){
	global $conn;
	$query = "UPDATE blog SET judul='$judul',description='$description',tag='$tag' WHERE id=$id";
	$result = mysqli_query($conn,$query)or die('gagal menampilkan data');


	return $result;

}

function single($string){
	$string = substr($string,0,10);

	return $string . "....";
}

function delete($id){
	global $conn;
	$query = "DELETE FROM blog WHERE id=$id";
	$result = mysqli_query($conn,$query)or die('gagal menghapus data');


	return $result;

}

function search($cari){

	global $conn;
	$query = "SELECT * FROM blog WHERE judul LIKE '%$cari%'";
	if($result = mysqli_query($conn,$query)){

		return $result;
	}else{
		return 'data tidak ditemukan';
	}


	


}
?>