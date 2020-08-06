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
    <div class="thirteen wide centered column">
        <div class="ui three stackable cards">
            <div class="ui center aligned card dark">
                <div class="header">
                    <h1 class="ui huge left floated purple ribbon label">Modpack Files</h1>
                </div>
                <div>
                    <div class="ui small image">
                        <img src="img/TYS_ATM5.png" alt="TYS ATM5">
                    </div>
                </div>
                <div class="meta">
                    <div class="item">
                        <a href="dist/TYS_ATM5.zip"
                           target="_blank">
                            <button class="ui huge purple button">
                                <i class="white download icon"></i>Latest
                            </button>
                        </a>
                    </div>
                </div>
                <div class="ui divider"></div>
                <div>
                    <div class="ui small image">
                        <img src="img/TYS_ATMR.png" alt="TYS ATMR+">
                    </div>
                </div>
                <div class="meta">
                    <div class="item">
                        <a href="dist/TYS_FINAL.zip"
                           target="_blank">
                            <button class="ui huge yellow button">
                                <i class="white download icon"></i>Final
                            </button>
                        </a>
                    </div>
                </div>
                <div class="ui divider"></div>
            </div>
            <div class="ui centered card dark">
                <div class="center aligned content header">
                    <h1 class="title">
                        Modpack Installation Videos
                    </h1>
                </div>
                <div class="content">
                    <div class="ui embed" data-url="img/install.webm" data-placeholder="img/thenewjourney.png"
                         data-icon="play">
                    </div>
                </div>
                <div class="header">Install Using <a target="_blank" href="https://gdevs.io/#downloadContainer">GDLauncher</a>
                    (Recommended)
                </div>
                <div class="content">
                    <div class="ui embed" data-url="img/installTwitch.mp4" data-placeholder="img/thenewjourney.png"
                         data-icon="play">
                    </div>
                </div>
                <div class="header">Install Using <a target="_blank" href="https://www.twitch.tv/downloads/videos/all">Twitch</a>
                </div>
            </div>
            <div class="ui center aligned card dark">
                <div class="header">
                    <h1 class="ui huge left floated blue ribbon label">World Files</h1>
                </div>
                <div class="ui divider"></div>
            </div>
        </div>
    </div>
</div>
</body>
<script>
    $('.ui.embed').embed();
    $('.ui.accordion').accordion({exclusive: false});
    $('.ui.buttons .button').on('click', function () {
        $(this).addClass('positive')
            .siblings()
            .removeClass('positive');
        $('.treemenu').toggleClass('boxed');
    });
</script>
</html>
