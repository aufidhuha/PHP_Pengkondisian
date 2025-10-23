<?php

$nilai = readline("masukkan nilai : ");
$status = "";
$keterangan = "";

if ($nilai >= 90 && $nilai <= 100) :
    $status = "A";
elseif ($nilai >= 70 && $nilai <= 89) :
    $status = "B";
elseif ($nilai >= 50 && $nilai <= 69) :
    $status = "C";
elseif ($nilai >= 30 && $nilai <= 49) :
    $status = "D";
elseif ($nilai >= 0 && $nilai <= 20) :
    $status = "E";
endif;

// cara pertama
// $keterangan = ($status == "A") ? "Genius" :
//               (($status == "B") ? "Baik": 
//               (($status == "C") ? "Cukup Baik" : 
//               (($status == "D") ? "Kurang" : "Perlu perbaikan")));


// cara kedua lebih direkomendasikan
$keterangan = match ($status) {
    "A" => "Genius",
    "B" => "Baik",
    "C" => "Cukup Baik",
    "D" => "Kurang",
     default => "Perlu Perbaikan",
};

echo "Nilai : $nilai" . PHP_EOL;
echo "Status : $status" . PHP_EOL;
echo "Keterangan : $keterangan" . PHP_EOL;
    



