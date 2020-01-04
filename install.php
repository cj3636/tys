<!doctype html>
<html lang="en_US">
<?php
require 'head.php';
?>
<body>
<div id="page" class="ui stackable grid">
    <div class="sixteen wide column"></div>
    <?php require 'title.php' ?>
    <div class="sixteen wide column">
        <?php require 'menu.php'; ?>
    </div>
</div>
<br>
<div class="ui inverted segment">
    <div id="page" class="ui two column very relaxed stackable grid">
        <div id="tut" class="center aligned column">
            <div class="ui items">
                <div class="item">
                    <div class="content">
                        <h1 class="ui purple header">
                            Using Twitch
                        </h1>
                        <div class="ui divider"></div>
                        <a class="item" href="https://www.twitch.tv/downloads" target="_blank">
                            <button class="ui purple button">
                                <i class="white download icon"></i>Download Twitch
                            </button>
                        </a>
                        <a class="item"
                           href="<?php require 'text/twitch_download.txt'; ?>" target="_blank">
                            <button class="ui blue button">
                                <i class="white download icon"></i>Download Modpack
                            </button>
                        </a>
                        <div class="ui divider"></div>
                        <div class="ui title">
                            <h2>Inside of the Twitch launcher, Navigate to:
                                <br>
                                <br>
                                <button class="ui button">Mods</button>
                                <i class="white arrow right icon"></i>
                                <button class="ui button">Minecraft</button>
                                <i class="white arrow right icon"></i><a>"Create Custom Profile".</a>
                                <br>
                                <br>
                                Inside of the popup, tap <a>"Import" </a>and select
                                <br>the above downloaded modpack zip file.
                            </h2>
                            <h2></h2>
                        </div>
                        <br>
                        <div class="treemenu boxed">
                            <div class="ui fluid styled accordion">
                                <div class="title">
                                    <i class="dropdown icon"></i> Twitch Install Video
                                </div>
                                <div class="content">
                                    <div id='ui-embed' class="ui embed" data-source="youtube" data-id=""
                                         data-placeholder="download/installtut.gif">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="ui title">
                            <h2>Be sure to allocate enough ram! We recommend 10GB.</h2>
                        </div>
                        <br>
                        <div class="treemenu boxed">
                            <div class="ui fluid styled accordion">
                                <div class="title">
                                    <i class="dropdown icon"></i> Ram Allocation (Twitch)
                                </div>
                                <div class="content">
                                    <div id='ui-embed' class="ui embed" data-source="youtube" data-id="R3_sCJWZKp8"
                                         data-placeholder="http://i3.ytimg.com/vi/R3_sCJWZKp8/maxresdefault.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tut" class="center aligned column">
            <div class="ui items">
                <div class="item">
                    <div class="content">
                        <h1 class="ui green header">
                            Using MultiMC
                        </h1>
                        <div class="ui divider"></div>
                        <a class="item" href="https://multimc.org/#Download" target="_blank">
                            <button class="ui green button">
                                <i class="white download icon"></i>Download MultiMC
                            </button>
                        </a>
                        <a class="item"
                           href="<?php require 'text/multi_download.txt'; ?>" target="_blank">
                            <button class="ui blue button">
                                <i class="white download icon"></i>Download Modpack
                            </button>
                        </a>
                        <div class="ui divider"></div>
                        <div class="ui title">
                            <h2>Inside of the MultiMC launcher, Navigate to:
                                <br>
                                <br>
                                <button class="ui button">Add Instance</button>
                                <i class="white arrow right icon"></i>
                                <button class="ui button">Import From Zip</button>
                                <i class="white arrow right icon"></i><a>"Browse".</a>
                                <br>
                                <br>
                                Inside of the file explorer,
                                <br>
                                select the above downloaded modpack zip file.
                            </h2>
                            <h2></h2>
                        </div>
                        <br>
                        <div class="treemenu boxed">
                            <div class="ui fluid styled accordion">
                                <div class="title">
                                    <i class="dropdown icon"></i> MultiMC Install Video
                                </div>
                                <div class="content">
                                    <div id='ui-embed' class="ui embed" data-source="youtube" data-id="O_rcmHeW5yk"
                                         data-placeholder="http://i3.ytimg.com/vi/O_rcmHeW5yk/hqdefault.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="ui title">
                            <h2>Be sure to allocate enough ram! We recommend 10GB.</h2>
                        </div>
                        <br>
                        <div class="treemenu boxed">
                            <div class="ui fluid styled accordion">
                                <div class="title">
                                    <i class="dropdown icon"></i> Ram Allocation (MultiMC)
                                </div>
                                <div class="content">
                                    <div id='ui-embed' class="ui embed" data-source="youtube" data-id="gGyHhqgw9dE"
                                         data-placeholder="http://i3.ytimg.com/vi/gGyHhqgw9dE/hqdefault.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ui vertical divider">
        <h3>OR</h3>
    </div>
</div>
<footer>&copy; P.o.P Industries 2019</footer>
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
