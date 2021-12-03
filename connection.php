<?php
    $login = 'root';
    $database = 'management';
    $password = '123456';
    $location = '127.0.0.1';
    $link = new PDO("mysql:host=".$location.";dbname=".$database, $login, $password);
?>