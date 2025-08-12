<?php

echo "\nPilihan : \n
1. McDonalds
\tA. Burger
\tB. Sandwich
\tC. Soda
2. KFC
\tA. Ayam Goreng
\tB. Chicken Rice
\tC. Ice Cream KFC
3. Pizza Hut
\tA. Pizza Italia
\tB. Pizza Mozarella
\tC. Soft Drink\n\n";

$restoran = readline("Masukkan pilihan resto(1-3) : ");
$menuPilihan = readline("Masukkan Jenis Menu(A-C) : ");
$jenisResto = ""; $menu = ""; $harga = 0;

 $menuPilihan = strtoupper($menuPilihan);

if ($restoran == 1) {
    # code...
    $jenisResto = "McDolands";

    if ($menuPilihan == 'A') {
        # code...
        $menu = "Burger";
        $harga = 20000;
    } else if ($menuPilihan == 'B') {
        # code...
        $menu = "Sandwich";
        $harga = 15000;
    } else if ($menuPilihan == 'C') {
        # code...
        $menu = "Soda";
        $harga = 10000;
    } else {
        $menu = "Pilihan tidak valid";
        $harga = 0;
    }
    
} else if ($restoran == 2)  {
    # code...
    $jenisResto = "KFC";

    if ($menuPilihan == 'A') {
        # code...
        $menu = "Ayam Goreng";
        $harga = 30000;
    } else if ($menuPilihan == 'B') {
        # code...
        $menu = "Chicken Rice";
        $harga = 20000;
    } else if ($menuPilihan == 'C') {
        # code...
        $menu = "Ice Cream KFC";
        $harga = 10000;
    } else {
        $menu = "Pilihan tidak valid";
        $harga = 0;
    }

} else if ($restoran == 3) {
    # code...
    $jenisResto = "Pizza Hut";

    if ($menuPilihan == 'A') {
        # code...
        $menu = "Pizza Italia";
        $harga = 50000;
    } else if ($menuPilihan == 'B') {
        # code...
        $menu = "Pizza Mozarella";
        $harga = 40000;
    } else if ($menuPilihan == 'C') {
        # code...
        $menu = "Soft Drink";
        $harga = 15000;
    } else {
        $menu = "Pilihan tidak valid";
        $harga = 0;
    }

} else {

    $jenisResto = "Jenis Resto Tidak Valid";
}

echo "\n---------------------------------------\n";
echo "Jenis Restoran : $jenisResto\n";
echo "Jenis Menu     : $menu\n";
echo "Harga Menu     : $harga\n";

