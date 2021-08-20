<?php
session_start();
session_unset();
session_destroy();
?>
<?php require_once 'templates/php/header.php';
?>
<div class="four wide centered column">
    <div class="ui center aligned inverted segment">
        <h1 class="header">Successfully logged out.</h1>
    </div>
</div>
<?php require_once 'templates/php/footer.php';
?>
