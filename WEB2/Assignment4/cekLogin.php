<?php 

session_start();
include "db.php";

if((isset($_POST['username'])) && (isset($_POST['pw']))) {
    $username = $_POST['username'];
    $password = $_POST['pw'];

    $query_select = "SELECT * FROM tbuser WHERE username='".$username."' AND password='".$password."'";
    $result = mysqli_query($connect_server, $query_select);
    $n = mysqli_num_rows($result);
    if ($n<>0) {
        while ($hasil = mysqli_fetch_array($result)) {
            // create session
            $_SESSION['id'] = $hasil['id'];
            $_SESSION['user'] = $hasil['username'];
            $_SESSION['akses'] = $hasil['hak_akses'];
            
            if ($hasil['hak_akses'] == 1) {
                header('location:http://localhost:8080/pages/admin.php');
            } else {
                header('location:http://localhost:8080/pages/tamu.php');
            }
            echo $hasil['id'] . " - " . $hasil['username'];
        }
    } else {
        echo "Login gagal. Periksa Username dan Password anda <br>";
        echo "<a href='index.php> Kembali </a>'";
    }
} else {
    echo "acces denied.";
}

// echo "Hello coy";

?>