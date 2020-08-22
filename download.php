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
                    <h1 class="ui huge left floated yellow ribbon label">TYS ATM5+</h1>
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
                            <button class="ui huge blue button" data-inverted=""
                                    data-tooltip="Automatic .bat Installer for Windows" data-position="bottom center">
                                <i class="white windows icon"></i>Windows Installer
                            </button>
                        </a>
                    </div>
                </div>
                <div class="ui divider"></div>
                <div class="meta">
                    <div class="item">
                        <a href="dist/TYS_ATM5.zip"
                           target="_blank">
                            <button class="ui huge purple button" data-inverted=""
                                    data-tooltip="TYS_ATM5+ Modpack ZIP for Twitch/MultiMC/GDLauncher"
                                    data-position="bottom center">
                                <i class="white download icon"></i>ZIP Modpack
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
                    <div class="ui styled fluid accordion">
                        <div class="title">
                            <h3 class="ui blue header"><i class="dropdown icon"></i>
                                Windows Installation (MultiMC)</h3>
                        </div>
                        <div class="content">
                            <div class="ui relaxed divided list">
                                <div class="item">
                                    <h2>Download the Windows 10 <code>tys.bat</code> file and follow the prompts.</h2>
                                    <h4>Remember to increase your memory!</h4>
                                </div>
                            </div>
                        </div>
                        <div class="title">
                            <h3 class="ui green header"><i class="dropdown icon"></i>
                                Other Installation (Twitch/GDLauncher/MultiMC)</h3>
                        </div>
                        <div class="content">
                            <div class="ui relaxed divided list">
                                <div class="item"><h2>Download the zip and import it using the modpack manager of your
                                        choice.</h2>
                                    <h4>Remember to increase your memory!</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui center aligned card dark">
                <div class="header">
                    <h1 class="ui huge left floated red ribbon label">TYS ATM3+ (Legacy)</h1>
                </div>
                <div>
                    <div class="ui small image">
                        <img src="img/TYS_ATMR.png" alt="TYS ATMR+">
                    </div>
                </div>
                <div class="ui divider"></div>
                <div class="meta">
                    <div class="item">
                        <a href="dist/TYS_FINAL.zip"
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
