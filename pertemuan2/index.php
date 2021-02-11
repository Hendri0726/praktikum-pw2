<?php 
// ini adalah komentar
/*
ini
juga
komentar
*/

// Pertemuan 2 - PHP Dasar
// SIntaks PHP

// Standar Output
// echo, print (mencetak tulisan/variabel)
// print_r (mencetak array)
// var_dump (mengetahui isi/tipe variabel)

// echo "Hendri<br>";
// print "Hendri<br>";
// print_r("Hendri<br> ");
// var_dump("Hendri");

// echo true;
// echo 123;

// Penulisan Sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe data
// Variabel
// Variabel tidak boleh diawali dengan angka, tapi boleh mengandung angka
// $nama = "Hendri";
// echo "Hallo. nama saya $nama";

// Operator
// Aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// penggabung string / concatenation / concat
//  operatornya: . (titik)
// $nama_depan = "Hen";
// $nama_belakang = "dri";
// echo $nama_depan . " " . $nama_belakang;

// Assignment
// =, +=, -+, *=, /=, %=, .=
// $x = 1;
// $x += 5;
// echo $x;
// $nama = "Hen";
// $nama .= "dri";
// echo $nama;

// Perbandingan (tidak mengecek tipe data)
//  <, >, <=, >=, ==, !=
// var_dump(1<5);
// var_dump(1 == "1"); (bernilai true karena tidak mengecek tipe data)

// Identitas (mengecek tipe data dan nilainya)
// ===, !==
// var_dump(1 === "1");

// Logika
// &&, ||, !
// $x = 10;
// var_dump($x > 30 && $x % 2 == 0);
// var_dump($x > 30 || $x % 2 == 0);
?>

<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <title>Belajar PHP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1>Halo, Selamat datang <?php echo "Hendri" ?></h1>
        <h1>Halo, Selamat datang <?php echo $nama ?></h1>
    </body>
</html> -->