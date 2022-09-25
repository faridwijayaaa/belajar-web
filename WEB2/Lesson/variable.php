<?php

// Penulisan variable
$umur = 25;
$_umur = 25;
$_umur_roy = 23;

// boolean
$alive = false; // alive bernilai false
$alive = -1; // alive bernilai false
$alive = 1; // alive bernilai true

// Integer
$a = 42; // decimal
$b = 67800; // decimal
$c = 0755; // octal
$d = 0xc4e; // hexal

// Float
$a = 4.5123;
$b = 4.0;
$c = 8.7e4;
$d = 1.23e11;

// String
$x = 'PHP is a great lang';
$y = 'PHP-is-good';
$z = '*9mato\n';
$k = '123e$^^e';

// Array
$kr[0] = 'Halo';
$kr[1] = 'Karin';
$kr[2] = 'sndr';
for ($i = 0; $i < 3; $i++) {
    echo $kr[$i] . ' ';
}

// Konstanta = bilangan yang tidak dapat dirubah
define('kampus', 'Universitas Nusantara PGRI Kediri');
echo kampus;
?>
