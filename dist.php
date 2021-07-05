<!doctype html>
<html lang="en_US">
<?php require_once 'head.php'; ?>
<body>
<div id="page" class="ui stackable grid">
    <div class="sixteen wide column"></div>
    <?php require_once 'title.php'; ?>
    <?php require_once 'menu.php'; ?>
</div>
<div id="page" class="ui stackable grid">
    <div class="center aligned sixteen wide column">
        <div class="ui items">
            <div class="item">
                <div class="content">
                    <h2 class="ui title">Current Server Line Up:</h2>
                </div>
            </div>
        </div>
        <div class="ui centered stackable cards">
            <?php
            $dir = 'servers';
            $files = glob($dir . '/*.php');
            foreach ($files as $file) {
                require($file);
            }
            ?>
        </div>
    </div>
    <footer>&copy; P.o.P Industries 2019</footer>
</body>
</html>
