<?php

$nilai = 60;

if($nilai > 70){
  echo "LULUS";
}else{
  echo "TIDAK LULUS";
}

echo "<br>";

if($nilai > 80 ){
  echo "A";
}elseif($nilai > 70){
  echo "B";
}elseif($nilai >= 60) {
  echo "C";
}else{
  echo "GAGAL";
}



 ?>
