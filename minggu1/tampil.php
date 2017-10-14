<?php
include "koneksi.php";

try{
	
	$sql ="select * from user";
$query = $conn->prepare($sql);
$query->execute();
$result = $query->fetchAll();

// print_r($result);

}catch(Exception $ex){
	echo "ERROR !!!   " . $ex->getMessage();
}


?>

<table>
	<?php foreach($result as $q){ ?>

	<tr>
		<td width="100">Username</td>
		<td width="100">Email</td>
		<td width="100">Password</td>
	</tr>

	<tr>
		<td><?= $q['username'] ?></td>
		<td><?= $q['email'] ?></td>
		<td><?= $q['password'] ?></td>
	</tr>

		<?php } ?>
</table>