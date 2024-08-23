<?php

$name1 = "Fema Flamelina Putri";
$name2 = "Artasya Legina";

$jmlh1 = strlen($name1);
$jmlh2 = strlen($name2);

if($jmlh1 >= $jmlh2){
    $selisih = $jmlh1 - $jmlh2;
    echo "<b>$name1</b> memiliki jumlah karakter lebih banyak dari <b>$name2</b> : selisih $selisih karakter ";
}
else if($jmlh2 >= $jmlh1){
    $selisih = $jmlh2 - $jmlh1;
    echo "<b>$name2</b> memiliki jumlah karakter lebih banyak dari <b>$name1</b> : selisih $selisih karakter ";

}


?>