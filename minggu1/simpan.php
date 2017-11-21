<?php
include "koneksi.php";
$nama = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// var_dump($_POST);

// echo $nama;
// echo "<br>";
// echo $email;
// echo "<br>";
// echo $password;
// echo "<br>";

if($_SERVER['REQUEST_METHOD'] == 'POST'){


try{
	$sql = "insert into user (username ,password, email) values('$nama' , '$password' , '$email')";
	// $query = $conn->prepare($sql);
	// $query->bindParam(1,$nama);
	// $query->bindParam(3,$email);
	// $query->bindParam(2,$password);
	// $query->execute();

	$query =$conn->query($sql);
	echo "
	<script>
	alert('Sukses');
	window.location.href = 'realform.php';

	</script>


	";
	// header('location:realform.php');


}catch(Exception $ex){
	echo "ERROR !!!   " . $ex->getMessage();
	echo "$sql";
}



}
