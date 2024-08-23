\<?php

$uang = 140500;

$lembar = [100000,50000,20000,10000,5000,2000,1000,500];

$hasil = [];

echo"uang: Rp. ". $uang . "<br>";
foreach($lembar as $pecahan){
    if($uang >= $pecahan){
        $jumlah = floor($uang/$pecahan);
        $uang = $uang % $pecahan;
        $hasil[$pecahan]= $jumlah;
    } else {
        $hasil[$pecahan]= 0;
    }
}
echo "Lembar rupiah : <br>";
foreach($hasil as $pecahan => $jumlah) {
    if($jumlah > 0){
        echo "<ul><li>Rp.". number_format($pecahan,0,"",".") .":". $jumlah ."</li></ul>" ;
    }
}

?>