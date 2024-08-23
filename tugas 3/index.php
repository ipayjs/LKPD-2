<?php

for($i = 1; $i <= 10; $i++){
    if($i % 2 == 1){
        for($j = 1; $j <= 10; $j++){
            if($j == 5){
                $hasil = $i * $j;
                echo $i . "x" . $j . "= " . $hasil ."<br>";
            }
        }
    }
}


?>