<?php

include "../config/db.php";
session_start();

$id = $_SESSION['id'];

$sql = "DELETE FROM tbuser WHERE id_user='$id'";
if ($connect_server->query($sql) === TRUE) {
    unset($_SESSION['akses']);
    echo "<script> alert('Deleted account succesfully');
        window.location.href = 'http://localhost:8000/views/login.php';    
        </script>";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
?>