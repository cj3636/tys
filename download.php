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
                    <h1 class="ui huge left floated yellow ribbon label">TYS ATM3+</h1>
                </div>
                <div>
                    <div class="ui small image">
                        <img src="img/TYS_ATM3.png" alt="TYS ATM3+">
                    </div>
                </div>
                <div class="ui divider"></div>
                <div class="meta">
                    <div class="item">
                        <a href="dist/TYS_ATM5.zip"
                           target="_blank">
                            <button class="ui huge purple button" data-inverted=""
                                    data-tooltip="TYS_ATM3+ Modpack ZIP for Twitch/MultiMC/GDLauncher"
                                    data-position="bottom center">
                                <i class="white download icon"></i>LATEST
                            </button>
                        </a>
                    </div>
                </div>
                <div class="ui divider"></div>
            </div>
            <div class="ui centered card dark">
                <div class="center aligned content header">
                    <h1 class="title">
                        Modpack Installation
                    </h1>
                    <div class="title">
                        <h2 class="ui green header">
                            Twitch/GDLauncher/MultiMC</h2>
                    </div>
                    <div class="content">
                        <div class="item"><h2>Download the zip and import it using the modpack manager of your
                                choice.</h2>
                            <h2 class="title">Install video:</h2>
                            <div class="meta">
                                <div id='ui-embed' class="ui embed" data-source="youtube" data-id="XHW5Y4eY-yA"
                                     data-placeholder="https://img.youtube.com/vi/XHW5Y4eY-yA/maxresdefault.jpg">
                                </div>
                            </div>
                            <div class="description">
                                Remember to increase your memory!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui center aligned card dark">
                <div class="header">
                    <h1 class="ui huge left floated red ribbon label">TYS ATM5+ (Legacy)</h1>
                </div>
                <div>
                    <div class="ui small image">
                        <img src="img/TYS_ATM5.png" alt="TYS ATM5">
                    </div>
                </div>
                <div class="ui divider"></div>
                <div class="meta">
                    <div class="item">
                        <a href="dist/TYS_ATM5.zip"
                           target="_blank">
                            <button class="ui huge yellow button" data-inverted=""
                                    data-tooltip="Old Singleplayer Modpack" data-position="bottom center">
                                <i class="white download icon"></i>Final
                            </button>
                        </a>
                    </div>
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
