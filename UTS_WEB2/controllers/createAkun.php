<?php 

include "../config/db.php";
$username = $_POST['username'];
$password = $_POST['password'];
$hak_akses = 2;

if($username != "") {    
    $query_insert = "INSERT INTO tbuser (username, password, hak_akses) VALUES ('$username', '$password', '$hak_akses')";
    if ($connect_server->query($query_insert) === true) {
        header('location:http://localhost:8000/views/login.php');
    } else {
        echo "error" . $query_insert . "<br>" . $connect_server;
    }
} else {
        header('location:http://localhost:8000/views/regis.php');
}

?>