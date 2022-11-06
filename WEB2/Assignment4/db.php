<?php

// connect to db
define('HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'Polopo.90');
define('DB_NAME', 'praktimum_4');
$connect_server = MySQLi_connect(HOST,DB_USER,DB_PASS);

if(!$connect_server) {  
    die('Gagal terkoneksi: ' . mysqli_error($connect_server));
}

$connect_db = mysqli_select_db($connect_server, DB_NAME);
if(!$connect_db){
    die('Tidak bisa diakses ' . DB_NAME . " : " . mysqli_error($connect_server));    
}
 
?>