<?php

// variable $GLOBALS and PHP
$x = 25;
$y = 75;
function addition(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
};

addition();
echo $z;

echo $_SERVER['PHP_SELF'] . ' : Mengembalikan nama file dari skrip yang sedang dieksekusi';
echo "<br/>";
echo $_SERVER['GATEWAY_INTERFACE'] . ': Mengembalikan versi Common Gateway Interface (CGI) yang digunakan server';
echo "<br/>";
echo $_SERVER['SERVER_ADDR'] . ' : Mengembalikan alamat IP dari server host';
echo "<br/>";
echo $_SERVER['SERVER_NAME'] . ' : Mengembalikan nama server host (localhost)';
echo "<br/>";
echo $_SERVER['SERVER_SOFTWARE'] . ' : Mengembalikan string identifikasi server';
echo "<br/>";
echo $_SERVER['SERVER_PROTOCOL'] . ' : Mengembalikan nama dan revisi protokol informasi';
echo "<br/>";
echo $_SERVER['REQUEST_METHOD'] . ' : Mengembalikan metode permintaan yang digunakan untuk mengakses halaman (seperti GET/POST)';
echo "<br/>";
echo $_SERVER['REQUEST_TIME'] . ' : Mengembalikan stempel waktu awal permintaan';
echo "<br/>";
echo $_SERVER['QUERY_STRING'] . ' : Mengembalikan string kueri jika halaman diakses melalui string kueri';
echo "<br/>";
echo $_SERVER['HTTP_ACCEPT'] . ' : Mengembalikan header Terima dari permintaan saat ini';
echo "<br/>";
echo $_SERVER['HTTP_ACCEPT_CHARSET'] . ' : Mengembalikan header Accept_Charset dari permintaan';
echo "<br/>";
echo $_SERVER['HTTP_HOST'] . ' : Mengembalikan header Host dari permintaan saat ini';
echo "<br/>";
echo $_SERVER['HTTP_REFERER'] . ' : Mengembalikan URL lengkap halaman saat ini';
echo "<br/>";
echo $_SERVER['HTTPS'] . ' : Apakah skrip ditanyakan melalui protokol HTTP yang aman';
echo "<br/>";
echo $_SERVER['REMOTE_ADDR'] . ' : Mengembalikan alamat IP dari tempat pengguna melihat halaman saat ini';
echo "<br/>";
echo $_SERVER['REMOTE_HOST'] . ' : Mengembalikan nama Host dari tempat pengguna melihat halaman saat ini';
echo "<br/>";
echo $_SERVER['REMOTE_PORT'] . ' : Mengembalikan port yang digunakan pada mesin pengguna untuk berkomunikasi dengan server web';
echo "<br/>";
echo $_SERVER['SCRIPT_FILENAME'] . ' : Mengembalikan nama path absolut dari skrip yang sedang dieksekusi';
echo "<br/>";
echo $_SERVER['SERVER_ADMIN'] . ' :  Mengembalikan nilai yang diberikan ke direktif SERVER_ADMIN di file konfigurasi server web';
echo "<br/>";
echo $_SERVER['SERVER_PORT'] . ' : Mengembalikan port pada mesin server yang digunakan oleh server web untuk komunikasi (seperti 8080)';
echo "<br/>";
echo $_SERVER['SERVER_SIGNATURE'] . ' : Mengembalikan versi server dan nama host virtual yang ditambahkan ke halaman yang dibuat server';
echo "<br/>";
echo $_SERVER['PATH_TRANSLATED'] . ' : Mengembalikan jalur berbasis sistem file ke skrip saat ini';
echo "<br/>";
echo $_SERVER['SCRIPT_NAME'] . ' : Mengembalikan jalur skrip saat ini';
echo "<br/>";
echo $_SERVER['SCRIPT_URI'] . ' : Mengembalikan URI halaman saat ini ';
echo "<br/>";

?>