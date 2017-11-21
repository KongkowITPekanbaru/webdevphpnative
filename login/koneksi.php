<?php

$host= "localhost";
$dbname = "webdev";
$dbuser = "root";
$dbpassword = "";

try{
	$conn = new PDO("mysql:host=$host;dbname=$dbname",$dbuser,$dbpassword);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $ex){
	echo "Koneksi Error <br>";
    echo $ex->getMessage();
}