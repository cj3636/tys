<?php
require_once 'templates/php/header.php';
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != 1) {
    $_SESSION['message'] = "You must log in before viewing your profile page!";
    header("Location: error.php");
} else {
    require_once "profileOutput.php";
}
require_once 'templates/php/footer.php';
