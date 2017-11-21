<?php
include "koneksi.php";

try{
$sql ="select * from pengguna";
$query = $conn->query($sql);
$result = $query->fetchAll();

// print_r($result);
// exit();

}catch(Exception $ex){
	echo "ERROR !!!   " . $ex->getMessage();
}

?>
<table border=1>
	<tr>
		<td width="100">Nama</td>
		<td width="100">Alamat</td>
	</tr>
<?php foreach($result as $q){ ?>
	<tr>
		<td><?= $q['nama'] ?></td>
		<td><?= $q['alamat'] ?></td>
	</tr>
		<?php } ?>
</table>
