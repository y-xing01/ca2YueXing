<?php
    $dsn = 'mysql:host=localhost;dbname=badminton_shop';
    $username = 'd00234628';
    $password = '123!@#qweQWE';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>