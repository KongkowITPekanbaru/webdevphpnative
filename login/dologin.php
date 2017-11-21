<?php

include "koneksi.php";
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST')
{

	try{

	 $user = $_POST['username'];
	$pass = $_POST['password'];
	$sql = "select * from usser where username = :username";
	$records = $conn->prepare($sql);
	$records->bindParam(':username', $user);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);
	// print_r($results);
	// exit();
	$message = '';
	if(count($results) > 1 && password_verify($pass,$results['password'])  ){

		$_SESSION['username'] = $results['username'];
		header("Location:berhasil.php");
	}else{
		$message = "You Cannot Login";
		// echo $results['password'];
		echo $message;
	}

	}catch(Exception $ex){
		echo "error<br>";
		echo $ex->getMessage();

	}

	

}else
{
	echo "tidak bisa";
}