<?php
require_once 'head.php';
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != true) {
    $_SESSION['message'] = "You must log in before viewing your profile page!";
    header("Location: error.php");
} else {
    require_once ROOT_PATH . "profileOutput.php";
}
require_once ROOT_PATH . 'templates/php/footer.php';
