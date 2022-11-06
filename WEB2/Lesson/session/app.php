<?php

session_start();
if (isset($_SESSION['cinta'])){
    echo "Page Admin";
} else {
    echo "Welcome";
};

?>