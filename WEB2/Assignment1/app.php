<?php

/* 
Nama    : Muhammad Farid Wijayanto
NPM     : 2013020107
Kelas   : 3A
NB      : Penjelasan ada dibawah
 */

echo $_SERVER['PHP_SELF'];
echo "<br/>";
echo $_SERVER['GATEWAY_INTERFACE'];
echo "<br/>";
echo $_SERVER['SERVER_ADDR'];
echo "<br/>";
echo $_SERVER['SERVER_NAME'];
echo "<br/>";
echo $_SERVER['SERVER_SOFTWARE'];
echo "<br/>";
echo $_SERVER['SERVER_PROTOCOL'];
echo "<br/>";
echo $_SERVER['REQUEST_METHOD'];
echo "<br/>";
echo $_SERVER['REQUEST_TIME'];
echo "<br/>";
echo $_SERVER['QUERY_STRING'];
echo "<br/>";
echo $_SERVER['HTTP_ACCEPT'];
echo "<br/>";
echo $_SERVER['HTTP_ACCEPT_CHARSET'];
echo "<br/>";
echo $_SERVER['HTTP_HOST'];
echo "<br/>";
echo $_SERVER['HTTP_REFERER'];
echo "<br/>";
echo $_SERVER['HTTPS'];
echo "<br/>";
echo $_SERVER['REMOTE_ADDR'];
echo "<br/>";
echo $_SERVER['REMOTE_HOST'];
echo "<br/>";
echo $_SERVER['REMOTE_PORT'];
echo "<br/>";
echo $_SERVER['SCRIPT_FILENAME'];
echo "<br/>";
echo $_SERVER['SERVER_ADMIN'];
echo "<br/>";
echo $_SERVER['SERVER_PORT'];
echo "<br/>";
echo $_SERVER['SERVER_SIGNATURE'];
echo "<br/>";
echo $_SERVER['PATH_TRANSLATED'];
echo "<br/>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br/>";
echo $_SERVER['SCRIPT_URI'];
echo "<br/>";

/* 
 $_SERVER['PHP_SELF'] Mengembalikan nama file dari skrip yang sedang dieksekusi
 $_SERVER['GATEWAY_INTERFACE'] Mengembalikan versi Common Gateway Interface (CGI) yang digunakan server
 $_SERVER['SERVER_ADDR'] Mengembalikan alamat IP dari server host
 $_SERVER['SERVER_NAME'] Mengembalikan nama server host (localhost)
 $_SERVER['SERVER_SOFTWARE'] Mengembalikan string identifikasi server (seperti PHP 7.4.3 Development Server)
 $_SERVER['SERVER_PROTOCOL'] Mengembalikan nama dan revisi protokol informasi (seperti HTTP/1.1)
 $_SERVER['REQUEST_METHOD'] Mengembalikan metode permintaan yang digunakan untuk mengakses halaman (seperti GET/POST)
 $_SERVER['REQUEST_TIME'] Mengembalikan stempel waktu awal permintaan (seperti 1377687496)
 $_SERVER['QUERY_STRING'] Mengembalikan string kueri jika halaman diakses melalui string kueri
 $_SERVER['HTTP_ACCEPT'] Mengembalikan header Terima dari permintaan saat ini
 $_SERVER['HTTP_ACCEPT_CHARSET'] Mengembalikan header Accept_Charset dari permintaan saat ini (seperti utf-8)
 $_SERVER['HTTP_HOST'] Mengembalikan header Host dari permintaan saat ini
 $_SERVER['HTTP_REFERER'] Mengembalikan URL lengkap halaman saat ini (tidak dapat diandalkan karena tidak semua agen pengguna mendukungnya)
 $_SERVER['HTTPS'] Apakah skrip ditanyakan melalui protokol HTTP yang aman
 $_SERVER['REMOTE_ADDR'] Mengembalikan alamat IP dari tempat pengguna melihat halaman saat ini
 $_SERVER['REMOTE_HOST'] Mengembalikan nama Host dari tempat pengguna melihat halaman saat ini
 $_SERVER['REMOTE_PORT'] Mengembalikan port yang digunakan pada mesin pengguna untuk berkomunikasi dengan server web
 $_SERVER['SCRIPT_FILENAME'] Mengembalikan nama path absolut dari skrip yang sedang dieksekusi
 $_SERVER['SERVER_ADMIN'] Mengembalikan nilai yang diberikan ke direktif SERVER_ADMIN di file konfigurasi server web (jika skrip Anda berjalan pada host virtual, itu akan menjadi nilai yang ditentukan untuk host virtual tersebut) (seperti someone@w3schools.com )
 $_SERVER['SERVER_PORT'] Mengembalikan port pada mesin server yang digunakan oleh server web untuk komunikasi (seperti 80)
 $_SERVER['SERVER_SIGNATURE'] Mengembalikan versi server dan nama host virtual yang ditambahkan ke halaman yang dibuat server
 $_SERVER['PATH_TRANSLATED'] Mengembalikan jalur berbasis sistem file ke skrip saat ini
 $_SERVER['SCRIPT_NAME'] Mengembalikan jalur skrip saat ini
 $_SERVER['SCRIPT_URI'] Mengembalikan URI halaman saat ini 
 */

?>