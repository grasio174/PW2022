<?php
    unset($_COOKIE['User']);
    setcookie('User', '', time() - 3600, '/');
    session_start();
    $_SESSION['Username'] = '';
    unset($_SESSION['Username']);
    session_unset();
    session_destroy();
    header("Location: index.html");
?>


