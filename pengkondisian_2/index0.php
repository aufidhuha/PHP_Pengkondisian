<?php

echo "\nPilihan Menu : \n
A. Siomay    
\t1. Biasa   - 6000
\t2. Sedang  - 8000
\t3. Jumbo   - 10000
\t4. Spesial - 14000
B. Bakso
\t1. Biasa   - 7000
\t2. Sedang  - 9000
\t3. Jumbo   - 12000
\t4. Spesial - 15000
C. Es Teh
\t1. Kecil   - 3000
\t2. Sedang  - 5000
\t3. Besar   - 8000\n";

echo "--------------------------------------\n";
$pilihanMenu = readline("Masukkan Pilihan (A-C) : ");
$pilihanMenu = strtoupper($pilihanMenu);

$pilihanUkuran = readline("Masukkan Ukuran(1-4) : ");

$namaMenu = ""; $namaPilihan = ""; $harga = 0; 

switch ($pilihanMenu) {
    case 'A':
        # code...
        $namaMenu = "Siomay";
        $harga = 6000;

        switch ($pilihanUkuran) {
            case '1':
                # code...
                $namaPilihan = "Biasa";
                $harga += 0;
                break;

            case '2':
                # code...
                $namaPilihan = "Sedang";
                $harga += 2000;
                break;

            case '3':
                # code...
                $namaPilihan = "Besar";
                $harga += 4000;
                break;

            case '4':
                # code...
                $namaPilihan = "Spesial";
                $harga += 8000;
                break;
            
            default:
                # code...
                $namaPilihan = "-";
                $harga = 0;
                break;
        }

        break;

    case 'B':
        # code...
        $namaMenu = "Bakso";
        $harga = 7000;

        switch ($pilihanUkuran) {
            case '1':
                # code...
                $namaPilihan = "Biasa";
                $harga += 0;
                break;

            case '2':
                # code...
                $namaPilihan = "Sedang";
                $harga += 2000;
                break;

            case '3':
                # code...
                $namaPilihan = "Besar";
                $harga += 5000;
                break;

            case '4':
                # code...
                $namaPilihan = "Spesial";
                $harga += 8000;
                break;
            
            default:
                # code...
                $namaPilihan = "-";
                $harga = 0;
                break;
        }

        break;
    
    case 'C':
        # code...
        $namaMenu = "Es Teh";
        $harga = 3000;

        switch ($pilihanUkuran) {
            case '1':
                # code...
                $namaPilihan = "Kecil";
                $harga += 0;
                break;

            case '2':
                # code...
                $namaPilihan = "Sedang";
                $harga += 2000;
                break;

            case '3':
                # code...
                $namaPilihan = "Besar";
                $harga += 5000;
                break;

            default:
                # code...
                $namaPilihan = "-";
                $harga = 0;
                break;
        }

        break;
    
    default:
        # code...
        $namaMenu = "-";
        $harga = 0;
        $namaPilihan = "";
        break;
}

$jumlahBeli = readline("Masukkan jumlah beli : ");
$intJumlahBeli = intval($jumlahBeli);
echo "\n--------------------------------------\n";
$total = $intJumlahBeli * $harga;

echo "Jenis Menu   : $namaMenu $namaPilihan \n";
echo "Harga Menu   : $harga \n";
echo "Jumlah Beli  : $jumlahBeli \n";
echo "Total        : $total \n";