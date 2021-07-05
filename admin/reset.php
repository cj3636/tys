<?php
require_once 'templates/php/header.php';

$cfg = parse_ini_file('database/database.ini');
$mysqli = new mysqli($cfg['host'], $cfg['username'], $cfg['passwd'], $cfg['dbname']) or die($mysqli->error);
// Make sure email and hash variables aren't empty
if (isset($_GET['email']) && !empty($_GET['email']) and isset($_GET['hash']) && !empty($_GET['hash'])) {
    $email = $mysqli->escape_string($_GET['email']);
    $hash = $mysqli->escape_string($_GET['hash']);

    // Make sure user email with matching hash exist
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email' AND hash='$hash'");

    if ($result->num_rows == 0) {
        $_SESSION['message'] = "You have entered invalid URL for password reset!";
        header("location: error.php");
    }
} else {
    $_SESSION['message'] = "Sorry, verification failed, try again!";
    header("location: error.php");
}
?>
<div class="four wide centered column">
    <h1>Reset your Password</h1>
    <form class="ui inverted form" action="/resetAction.php" method="post" autocomplete="on">
        <div class="required field">
            <input type="password" required name="newpassword" placeholder="New Password" autocomplete="off"/>
        </div>
        <div class="required field">
            <input type="password" required name="confirmpassword" placeholder="Confirm Password" autocomplete="off"/>
        </div>
        <input type="hidden" name="email" value="<?= $email ?>">
        <input type="hidden" name="hash" value="<?= $hash ?>">
        <button class="ui blue basic ok inverted right floated button item" name="submit">
            <i class="arrow alternate circle up outline icon"></i>
            Update Password
        </button>
    </form>
</div>
<?php
require_once 'templates/php/footer.php';
?>
