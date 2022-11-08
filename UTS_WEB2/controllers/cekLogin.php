<?php 

include "../config/db.php";
session_start();

if((isset($_POST['username'])) && (isset($_POST['password']))) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // echo $username;
    // echo $password;

    $query_select = "SELECT * FROM tbuser WHERE username='".$username."' AND password='".$password."'";
    $result = mysqli_query($connect_server, $query_select);
    $n = mysqli_num_rows($result);
    if ($n<>0) {
        while ($hasil = mysqli_fetch_array($result)) {
            // create session
            $_SESSION['id'] = $hasil['id_user'];
            $_SESSION['user'] = $hasil['username'];
            $_SESSION['akses'] = $hasil['hak_akses'];
            
            if ($hasil['hak_akses']) {
                header('location:http://localhost:8000/views/pages/dashboard.php');
            } else {
                echo "access denied,";
            }
        }
    } else {
        echo "Login gagal. Periksa Username dan Password anda <br>";
        echo "<a href='../views/login.php'> Kembali </a>";
    }
} else {
    echo "acces denied.";
}


?>