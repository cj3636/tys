<!doctype html>
<html lang="en_US">
<?php require 'head.php'; ?>
<body>
<div id="page" class="ui stackable grid">
    <div class="sixteen wide column"></div>
    <?php require 'title.php'; ?>
    <div class="sixteen wide column">
        <?php require 'menu.php'; ?>
    </div>
</div>
<br>
<div class="ui stackable grid">
    <div class="five wide centered column">
        <div class="ui center aligned inverted segment">
            <h1 class="header">
                <?php
                if (isset($_SESSION['message']) and !empty($_SESSION['message'])) {
                    echo $_SESSION['message'];
                } else {
                    echo "An unknown error has occurred.";
                }
                ?>
            </h1>
        </div>
    </div>
</div>
</body>
</html>