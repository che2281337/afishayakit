<?php
    include 'database.php';

    $login = $_POST['login'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE login = '$login' AND pass = '$password'";
    $result = $db->query($query);

    if ($result->fetch()) {
        session_start();
        $_SESSION['login'] = $login;
        header("Location: main.php");
        exit;
    } else {
        session_start();
        $_SESSION['error'] = "Неправильный логин или пароль";
        header("Location: index.php");
        exit;
    }
?>
