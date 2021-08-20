<!doctype html>
<html lang="en_US">
<?php
require 'head.php'; ?>
<body>
<div id="page" class="ui stackable grid">
    <?php
    require_once TITLE; ?>
    <div class="ui sixteen wide center aligned column">
        <?php
        if (isset($_GET['r'])) {
            $_GET['r'] == 1 ? require_once RENDER_HTML1 : require_once RENDER_HTML2;
        } else {
            echo 'error';
            require_once RENDER_HTML1;
        }
        ?>
    </div>
</div>
<footer>&copy; P.o.P Industries 2019</footer>
</body>
</html>
