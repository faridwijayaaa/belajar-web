<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>

    <?php
        session_start();
        $username = $_SESSION['user'];
        if($_SESSION['akses'] == 1) {
            echo "Selamat datang di halaman admin";
            echo "<br> <br>";
        } else {
            echo "Selamat datang " . $username . " di halaman KITAX";
            echo "<br> <br>";
        }
    ?>
    <div>
        <a href="./logout.php">Logout</a>
    </div>

</body>

</html>