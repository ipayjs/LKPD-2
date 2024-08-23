<?php

$umur = [12,15,17,20,25,30,35,40,45,50];
$jumlahdewasa = 0;
$jumlahanak = 0;
$dewasa = 17;
$kecil = 15;
foreach ($umur as $usia) {
    if($usia >= $dewasa){
      $jumlahdewasa++;
    } else if($usia <= $kecil){
        $jumlahanak++;
    }
}
echo "Jumlah kategori dewasa : " . $jumlahdewasa . "<br>";
echo "Jumlah kategori  anak anak : " .$jumlahanak . "";


?>