<?php

$hbd = "Selamat Ulang Tahun yang ke-17";

if(preg_match("/\d/",$hbd)) {
    $pisah = preg_replace("/[^0-9]/","",$hbd);
    $number = implode(",",str_split($pisah));
    echo "text mengandung angka : " . $number  ;
    // var_dump(str_split($pisah));
} else {
    echo "The HBD message does not contain a number.";
}

?>

