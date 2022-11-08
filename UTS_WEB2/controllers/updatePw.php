<?php

include "../config/db.php";
session_start();

$id = $_SESSION['id'];
$password = $_POST['password'];
$confirmPw = $_POST['confirmPw'];

$querySelect = "UPDATE tbuser SET password='$confirmPw' WHERE id_user='$id'";
if ($connect_server->query($querySelect) === TRUE) {
    echo "<script> alert('Change password successfully');
        window.location.href = 'http://localhost:8000/views/pages/dashboard.php';    
        </script>";
} else {
    echo "Error updating record: " . $connect_server->error;
}

?>