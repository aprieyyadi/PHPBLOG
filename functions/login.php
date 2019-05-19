<?php


function login($username,$password){
	global $conn;
 	$username = mysqli_real_escape_string($conn,$username);
	$password = mysqli_real_escape_string($conn,$password);
	MD5($password);

	$query = "SELECT * FROM login WHERE username='$username' AND password='$password'";

	if ($result = mysqli_query($conn,$query)) {
		if (mysqli_num_rows($result) != 0) {

			return true;
			
		}else{
			return false;
		}
	}

}

function cek_status($username){
	global $conn;
 	$username = mysqli_real_escape_string($conn,$username);


	$query = "SELECT status FROM login WHERE username='$username'";

	if ($result = mysqli_query($conn,$query)) {
		while($data = mysqli_fetch_assoc($result)){
			$status = $data["status"];
		}
		return $status;
	}

}
function register($username,$password){
	global $conn;
	$username = mysqli_real_escape_string($conn,$username);
	$password = mysqli_real_escape_string($conn,$password);

	MD5($password);

	$query = "INSERT INTO login (username,password,status) VALUES ('$username','$password',0)";

	if (mysqli_query($conn,$query)) return true;
	else return false;
}
function register_cek_username($username){
	global $conn;
 	$username = mysqli_real_escape_string($conn,$username);


	$query = "SELECT username FROM login WHERE username='$username'";

	if ($result = mysqli_query($conn,$query)) {
		if (mysqli_num_rows($result) != 0) {
			return true;

		}else{
			return false;
		}
	}

}









?>