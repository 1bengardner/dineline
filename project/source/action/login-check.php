<?php
    session_start();

    if (!isset($_SESSION["auth"]) || !$_SESSION["auth"]) {
        header("Location: login.php");
        exit;
    }
?>