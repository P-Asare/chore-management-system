<?php
    // Stop session and redirect user to login page

    session_start();

    unset($_SESSION['user-id']);
    unset($_SESSION['role-id']);

    header("Location: login.php");

    exit();

?>