<?php

$angka1 = 0;
$angka2 = 1;

echo "Deret Fibonacci hingga 10 suku: <br>";

for ($i = 0; $i < 10; $i++) {
    // print angka saat ini
    echo $angka1 . " ";
    
    // menghitung angka selanjutnya
    $selanjutnya = $angka1 + $angka2;
    
    // geser nilai untuk iterasi berikutnya
    $angka1 = $angka2;
    $angka2 = $selanjutnya;
}

?>