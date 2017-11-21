<?php
$array = array("Hello" , 5, 3.14 , "variabel");

for($a=0; $a <= 3; $a++){
  echo $array[$a];
  echo "<br>";
}

echo "<br><hr>";


foreach ($array  as $value) {
  echo $value;
  echo "<br>";
}


 ?>
