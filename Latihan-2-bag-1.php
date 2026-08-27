<?php

function hitungNilaiAkhir($uts, $uas, $tugas) {
    $nilaiAkhir = ($uts * 0.30) + ($uas * 0.40) + ($tugas * 0.30);
    return (float) $nilaiAkhir;
}

$nilai_uts = 80;
$nilai_uas = 85;
$nilai_tugas = 90;

$hasil = hitungNilaiAkhir($nilai_uts, $nilai_uas, $nilai_tugas);

echo "Nilai UTS = " . $nilai_uts . "<br>";
echo "Nilai UAS = " . $nilai_uas . "<br>";
echo "Nilai Tugas = " . $nilai_tugas . "<br>";
echo "Nilai Akhir = " . $hasil;

?>