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
    <div class="six wide centered column">
        <div class="ui center aligned fluid card">
            <h1 class="title">Modlist:</h1>
            <div class="content">
                <div class="ui link list">
                    <?php require 'modlist.html'; ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
