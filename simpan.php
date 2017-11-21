<?php

require "koneksi.php";


$nama   = $_POST['nama_user'];
$alamat = $_POST['alamat'];

try{
  $sql = "insert into pengguna (nama,alamat) values ('$nama','$alamat')";

  $que = $conn->query($sql);
   echo "sukses";
}catch(Exception $ex){
	echo "Ada Error";
    echo $ex->getMessage();
}
 ?>
