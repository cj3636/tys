<?php

$cfg = parse_ini_file('database/config.ini');
$mysqli = new mysqli($cfg['host'], $cfg['username'], $cfg['passwd'], $cfg['dbname']) or die($mysqli->error);

$username = $mysqli->escape_string($_POST['username']);
$email = $mysqli->escape_string($_POST['email']);
$token = $mysqli->escape_string($_POST['token']);
$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
$hash = $mysqli->escape_string(md5(rand(0, 1000)));

$resultEmail = $mysqli->query("SELECT * FROM users WHERE email='$email'") or die($mysqli->error());
$resultUsername = $mysqli->query("SELECT * FROM users WHERE username='$username'") or die($mysqli->error);
$tokenCheck = $mysqli->query("SELECT * FROM tokens WHERE token='$token' AND username='$username' AND available='1'") or die($mysqli->error());

// We know user email exists if the rows returned are more than 0
if ($resultEmail->num_rows > 0) {
    $_SESSION['message'] = 'User with that email already exists!';
    header("location: error.php");
} elseif ($resultUsername->num_rows > 0) {
    $_SESSION['message'] = 'Username: ' . $username . ' taken!';
    header("location: error.php");
} elseif ($tokenCheck->num_rows > 1) {
    $adminCheck = $mysqli->query("SELECT * FROM tokens WHERE token='$token' AND username='$username' AND available='1' AND admin='1'") or die($mysqli->error);
    if ($adminCheck->num_rows > 0) {
        createAccount($mysqli, $username, $email, $password, $hash, $token, 1);
    } else {
        createAccount($mysqli, $username, $email, $password, $hash, $token);
    }
} else {
    createAccount($mysqli, $username, $email, $password, $hash);
}

$mysqli->query("UPDATE tokens SET available='0' WHERE username='$username'") or die($mysqli->error);
$mysqli->query("UPDATE tokens SET email='$email' WHERE username='$username'") or die($mysqli->error);

function createAccount($mysqli, $username, $email, $password, $hash, $token = null, $admin = 0) {
    $sql = "INSERT INTO users (username, email, password, hash, token, admin) "
        . "VALUES ('$username','$email','$password', '$hash', '$token', '$admin')";

    // Add user to the database
    if ($mysqli->query($sql)) {
//        $_SESSION['active'] = 0; //0 until user activates their account with verify.php
//        $_SESSION['logged_in'] = true; // So we know the user has logged in
//        $_SESSION['message'] =
//
//            "Confirmation link has been sent to $email, please verify
//                 your account by clicking on the link in the message!";
//
//        // Send registration confirmation link (verify.php)
//        $to = $email;
//        $subject = 'Account Verification ( sectionzero.us )';
//        $message_body = '
//        Hello ' . $username . ',
//
//        Thank you for signing up!
//
//        Please click this link to activate your account:
//
//        http://localhost/login-system/verify.php?email=' . $email . '&hash=' . $hash;
//
//        mail($to, $subject, $message_body);
        ?>
        <script>
          console.log('email');
        </script>
        <?php
        header("Location: profile.php");
    } else {
        ?>
        <script>
          console.log('error');
        </script>
        <?php
        $_SESSION['message'] = 'Registration failed!';
        header("Location: error.php");
    }
}
