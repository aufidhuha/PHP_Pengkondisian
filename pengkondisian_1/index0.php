<?php

$nama = readline("Masukkan Nama : ");
$nilai = readline("Masukkan Nilai : ");
$keterangan = "";

if ($nilai <= 100 && $nilai >= 90) {
    $keterangan = "A";
} else if ($nilai <= 89 && $nilai >= 70) {
     $keterangan = "B";
} else if ($nilai <= 69 && $nilai >= 50) {
     $keterangan = "C";
} else if ($nilai <= 49 && $nilai >= 20) {
     $keterangan = "D";
} else if ($nilai <= 19 && $nilai >= 0) {
     $keterangan = "E";
} else {
    $keterangan = "Input-an tidak valid";
}

echo "---------------------------------\n";

echo "Nama Anda  : $nama \n";
echo "Nilai Anda : $nilai \n";
echo "Keterangan : $keterangan \n"; 