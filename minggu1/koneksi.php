<?php

$host= "localhost";
$dbname = "webdev";
$dbuser = "roodst";
$dbpassword = "";

try{
	$conn = new PDO("mysql:host=$host;dbname=$dbname",$dbuser,$dbpassword);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $ex){
	echo "Koneksi Error";
    echo $ex->getMessage();
}