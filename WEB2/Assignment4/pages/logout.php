<?php

session_start();
unset($_SESSION['akses']);
header('location:http://localhost:8080/index.php');

?>