<?php
    $db = new PDO('sqlite:sqlite\afishadb.db');

    if(!$db){
        die('Ошибка подключения к базе данных');
    }
?>

