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
    <div class="four wide centered column">
        <div class="row">
            <div id='ui-embed' class="ui embed" data-source="youtube" data-id="QXARc2E4Jj8"
                 data-placeholder="http://i3.ytimg.com/vi/QXARc2E4Jj8/maxresdefault.jpg">
            </div>
        </div>
        <br>
        <div class="center aligned row">
            <div class="title">FTB Utilities</div>
        </div>
    </div>
    <div class="four wide centered column">
        <div class="row">
            <div id='ui-embed' class="ui embed" data-source="youtube" data-id="R3_sCJWZKp8"
                 data-placeholder="http://img.youtube.com/vi/R3_sCJWZKp8/maxresdefault.jpg">
            </div>
        </div>
        <br>
        <div class="center aligned row">
            <div class="title">Increasing Twitch RAM</div>
        </div>
    </div>
    <div class="four wide centered column">
        <div class="row">
            <div class="ui embed" data-url="img/install.mp4" data-placeholder="../img/thenewjourney.png"
                 data-icon="right circle arrow">
            </div>
        </div>
        <br>
        <div class="center aligned row">
            <div class="title">Twitch Custom Pack Install</div>
        </div>
    </div>
</div>
</body>
<script>
    $('.ui.embed').embed();
</script>
</html>
