<?php

include "koneksi.php";

try{
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$password = password_hash("$pass", PASSWORD_BCRYPT);
		$sql = "insert into user (username,password) values ( :user , :pass)";
		$que = $conn->prepare($sql);
		$que->bindParam(':user' , $user, PDO::PARAM_STR);
		$que->bindParam(':pass' , $password, PDO::PARAM_STR);
		$que->execute();
		header('Location:index.php');
}catch(Exception $ex){
	echo "ERROR !!! <br>  " . $ex->getMessage();
	
}
	
 
	
