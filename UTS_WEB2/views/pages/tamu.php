<?php 

session_start();

if(isset($_SESSION['akses'])) {
    echo "<h1>Selamat datang di halamah Tamu </h1>";
    echo "<br><br>";
    echo "<a href='logout.php'> Logout </a>";
} else {
    echo "access denied.";
}

?>