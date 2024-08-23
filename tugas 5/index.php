<?php

$bil1 = [80,77,65,89,55,12,90,86];
$bil2 = [77,99,55,81,45,90,91,98];

foreach ($bil1 as $bilangan1){
    echo $bilangan1 . ",";
}
echo "<br>";
foreach ($bil2 as $bilangan2){
echo $bilangan2 . ",";
}

echo "<hr>";

$result = array_intersect($bil1, $bil2);
echo "bilangan yang ada di kedua variable <br> ";
foreach ($result as $resul){
    echo $resul . ",";
}
echo "<br>";
$gabung1 = array_diff($bil1,$bil2);

echo "bilangan yang tidak ada di kedua variable <br> ";
foreach ($gabung1 as $gaksama) {
    echo $gaksama . ",";
}

?>