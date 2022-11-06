<?php 

$req = $_SERVER['R'];

switch ($req) {
    case '/':
        require __DIR__ . '/route/header.php';
        break;
    case '/about':
        require __DIR__ . '/about.php';
        break;
    default: 
        http_response_code(401);
        require __DIR__ . '/404.php';
        break;
}

?>