<?php
require_once 'templates/php/header.php';
/* Reset your password form, sends reset.php password link */
session_start();

// Check if form submitted with method="post"
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cfg = parse_ini_file('database/database.ini');
    $mysqli = new mysqli($cfg['host'], $cfg['username'], $cfg['passwd'], $cfg['dbname']) or die($mysqli->error);
    $email = $mysqli->escape_string($_POST['email']);
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

    if ($result->num_rows == 0) // User doesn't exist
    {
        $_SESSION['message'] = "User with that email doesn't exist!";
        header("location: error.php");
    } else { // User exists (num_rows != 0)

        $user = $result->fetch_assoc(); // $user becomes array with user data

        $email = $user['email'];
        $hash = $user['hash'];
        $first_name = $user['first_name'];

        // Session message to display on success.php
        $_SESSION['message'] = "<p>Please check your email <span>$email</span>"
            . " for a confirmation link to complete your password reset!</p>";

        // Send registration confirmation link (reset.php)
        $to = $email;
        $subject = 'Password Reset Link ( clevertechie.com )';
        $message_body = '
        Hello ' . $first_name . ',

        You have requested password reset!

        Please click this link to reset your password:

        http://localhost/login-system/reset.php?email=' . $email . '&hash=' . $hash;

        mail($to, $subject, $message_body);

        header("location: success.php");
    }
}
?>
<div class="four wide centered column">
    <h1>Forgot your password?</h1>
    <form class="ui inverted form" action="/forgot.php" method="post" autocomplete="on">
        <div class="required field">
            <input type="email" required name="email" placeholder="Email Address"/>
        </div>
        <button class="ui blue basic ok inverted right floated button item" name="login">
            <i class="envelope outline icon"></i>
            Reset
        </button>
    </form>
</div>
<?php
require_once 'templates/php/footer.php';
?>
