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
    <div class="twelve wide centered column">
        <div class="ui three stackable cards">
            <div class="ui center aligned card dark">
                <div class="content header">
                    <h1 class="ui huge left floated purple ribbon label">Modpacks</h1>
                </div>
                <div class="ui divider"></div>
                <div class="description">
                    <div class="ui small image">
                        <img src="img/TYS_ATMR.png" alt="ATMR+LOGO">
                    </div>
                    <div class="content">
                        <div class="item">
                            <a href="https://theyellowsub.us/dist/TYS_LATEST.zip"
                               target="_blank">
                                <button class="ui huge purple button">
                                    <i class="white download icon"></i>Latest
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="ui divider"></div>
                <div class="description">
                    <div class="ui small image">
                        <img src="img/TYS_ARK.png" alt="ATMR+LOGO">
                    </div>
                    <div class="content">
                        <div class="item">
                            <a href="https://steamcommunity.com/sharedfiles/filedetails/?id=1991455942"
                               target="_blank">
                                <button class="ui huge orange button">
                                    <i class="white external icon"></i>Latest
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="ui divider"></div>
                <div class="description">
                    <div class="ui small image">
                        <img src="img/TYS_STARBOUND.png" alt="ATMR+LOGO">
                    </div>
                    <div class="content">
                        <div class="item">
                            <a href="https://steamcommunity.com/sharedfiles/filedetails/?id=1984162246"
                               target="_blank">
                                <button class="ui huge pink button">
                                    <i class="white external icon"></i>Latest
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="ui divider"></div>
            </div>
            <div class="ui centered card dark">
                <div class="center aligned content header">
                    <h1 class="title">
                        Minecraft Installation Video
                    </h1>
                </div>
                <div class="content">
                    <div class="ui embed" data-url="img/install.mp4" data-placeholder="img/thenewjourney.png"
                         data-icon="right circle arrow">
                    </div>
                </div>
                <div class="ui center aligned extra content">
                    <a href="https://www.twitch.tv/downloads"
                       target="_blank">
                        <div class="ui blue button">
                            <i class="white external alternate icon"></i>Twitch
                        </div>
                    </a>
                    <div class="ui header">
                        <a href="https://www.youtube.com/watch?v=R3_sCJWZKp8"
                           target="_blank">
                            <div class="ui green button">
                                <i class="white external alternate icon"></i>Increase RAM
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="ui center aligned card dark">
                <div class="content header">
                    <h1 class="ui huge left floated blue ribbon label">World Files</h1>
                </div>
                <div class="ui divider"></div>
                <div class="description">
                    <div class="ui small image">
                        <img src="img/TYS_AETHER.png" alt="SECOND AETHER TYS LOGO">
                    </div>
                    <div class="content">
                        <div class="item">
                            <a href="https://theyellowsub.us/dist/worldSP.zip"
                               target="_blank">
                                <button class="ui huge blue button">
                                    <i class="white download icon"></i>Singleplayer
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="ui divider"></div>
                <div class="description">
                    <div class="ui small image">
                        <img src="img/TYS_AETHER.png" alt="SECOND AETHER TYS LOGO">
                    </div>
                    <div class="content">
                        <div class="item">
                            <a href="https://theyellowsub.us/dist/worldMP.zip"
                               target="_blank">
                                <button class="ui huge red button" data-tooltip="Requires Custom Server"
                                        data-inverted="">
                                    <i class="white download icon"></i>Multiplayer
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="ui divider"></div>
                <div class="ui divider"></div>
                <div class="description">
                    <div class="ui small image">
                        <img src="img/TYS_AETHER.png" alt="SECOND AETHER TYS LOGO">
                    </div>
                    <div class="content">
                        <div class="item">
                            <a data-tooltip="Available Soon"
                               data-inverted="" href=""
                               target="_blank">
                                <button class="ui huge red disabled button">
                                    <i class="white download icon"></i>Server
                                </button>
                            </a>
                        </div>
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
