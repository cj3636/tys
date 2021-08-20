<?php
$cfg = parse_ini_file('database/config.ini');
$mysqli = new mysqli($cfg['host'], $cfg['username'], $cfg['passwd'], $cfg['dbname']) or die($mysqli->error);
$email = $mysqli->escape_string($_POST['email']);
$resultEmail = $mysqli->query("SELECT * FROM users WHERE email='$email'");
$resultUsername = $mysqli->query("SELECT * FROM users WHERE username='$email'");
if ($resultEmail->num_rows == 0 || $resultUsername->num_rows == 0) {
    $_SESSION['message'] = "Username/Email or Password is incorrect.";
    header("location: error.php");
} else {
    $userEmail = $resultEmail->fetch_assoc();
    $userUsername = $resultUsername->fetch_assoc();
    if (password_verify($_POST['password'], $userEmail['password'])) {
        $_SESSION['email'] = $userEmail['email'];
        $_SESSION['username'] = $userEmail['username'];
        $_SESSION['active'] = $userEmail['active'];
        $_SESSION['logged_in'] = true;
        header("location: profile.php");
    } elseif (password_verify($_POST['password'], $userUsername['password'])) {
        $_SESSION['email'] = $userEmail['email'];
        $_SESSION['username'] = $userEmail['username'];
        $_SESSION['active'] = $userEmail['active'];
        $_SESSION['logged_in'] = true;
        header("location: profile.php");
    } else {
        $_SESSION['message'] = "Username/Email or Password is incorrect .";
        header("location: error.php");
    }
}

