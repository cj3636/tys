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
            <div class="ui center aligned fluid card">
                <div class="content header">
                    <h1 class="ui huge left floated yellow ribbon label">Latest Downloads</h1>
                </div>
                <div class="ui divider"></div>
                <div class="image">
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
                <div class="image">
                    <div class="ui small image">
                        <img src="img/TYS_ATMR.png" alt="ATMR+LOGO">
                    </div>
                    <div class="content">
                        <div class="item">
                            <a href="https://theyellowsub.us/dist/TYS_LATEST_LITE.zip"
                               target="_blank">
                                <button class="ui huge pink button">
                                    <i class="white download icon"></i>[WIP]
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="ui divider"></div>
            </div>
            <div class="ui centered fluid card">
                <div class="center aligned content header">
                    <h1 class="title">
                        Installation Video
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
                        <a href="https://www.youtube.com/watch?v=R3_sCJWZKp8" target="_blank">Increase RAM <i
                                    class="white external icon"></i></a>
                    </div>
                </div>
            </div>
            <div class="ui center aligned fluid card">
                <div class="content header">
                    <h1 class="ui huge left floated blue ribbon label">Legacy Downloads</h1>
                </div>
                <div class="ui divider"></div>
                <div class="image">
                    <div class="ui small image">
                        <img src="img/TYS_LEGACY.png" alt="ATMR+ LEGACY LOGO">
                    </div>
                    <div class="content">
                        <div class="item">
                            <a href="https://theyellowsub.us/tys/modpack/TYS_LEGACY.zip"
                               target="_blank">
                                <button class="ui huge purple button">
                                    <i class="white download icon"></i>Legacy
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="ui divider"></div>
                <div class="image">
                    <div class="ui small image">
                        <img src="img/TYS_LEGACY.png" alt="ATMR+ LEGACY LOGO">
                    </div>
                    <div class="content">
                        <div class="item">
                            <a href="https://theyellowsub.us/dist/world.zip"
                               target="_blank">
                                <button class="ui huge green button">
                                    <i class="white download icon"></i>World File
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
