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
<div id="page" class="ui stackable grid">
    <div class="centered eight wide column">
        <div class="ui items">
            <div class="item">
                <div class="content">
                    <h2 class="ui yellow header">
                        Frequently Asked Questions
                    </h2>
                    <div class="ui divider"></div>
                    <div class="ui styled fluid accordion">
                        <div class="title">
                            <h3 class="ui header"><i class="dropdown icon"></i>
                                How much ram do I need to run the modpack?</h3>
                        </div>
                        <div class="content">
                            <div class="ui relaxed divided list">
                                <div class="item"><h2>A good amount! We recommend at least 10GB dedicated to the game
                                        on launch.</h2>
                                </div>
                                <div class="item"><h4>This means your PC needs to have 12GB+ of RAM installed.</h4>
                                </div>
                                <div class="item">
                                    <h4>If your PC is underpowered you can try using the <a href="download.php">LITE</a>
                                        version of the modpack.</h4>
                                    <h4><i class="blue question icon"></i>LITE is the same modpack without any graphical
                                        mods and <a target="_blank" href="https://optifine.net/downloads">Optifine</a>
                                    </h4>
                                    <h4><i class="red warning icon"></i>Optifine is known to cause graphical bugs, but
                                        is usually not game breaking.</h4>
                                </div>
                            </div>
                        </div>
                        <div class="title">
                            <h3 class="ui header"><i class="dropdown icon"></i>
                                Why won't my game launch?
                            </h3>
                        </div>
                        <div class="content">
                            <div class="ui relaxed divided list">
                                <div class="item">
                                    <h2>First, make sure you have allocated enough ram.</h2>
                                    <h2><a target="_blank" href="https://www.youtube.com/watch?v=R3_sCJWZKp8">Increasing
                                            RAM in Twitch</a>
                                    </h2>
                                </div>
                                <div class="item">
                                    <h4>If you are sure you have enough allocated, delete the pack from Twitch and
                                        reinstall it.
                                    </h4>
                                </div>
                                <div class="item">
                                    <h4>If neither of those fix your issue, hit us up with a full crash
                                        report on the Discord.
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="title">
                            <h3 class="ui header"><i class="dropdown icon"></i>
                                Where is the modded IP address?</h3>
                        </div>
                        <div class="content">
                            <div class="ui relaxed divided list">
                                <div class="item">
                                    <h2>Included in the modpack.</h2>
                                </div>
                                <div class="item">
                                    <h4>You can also find it on <a target="_blank"
                                                          href="https://discordapp.com/invite/jgST5R?utm_source=Discord%20Widget&utm_medium=Connect">Discord</a>.
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="title">
                            <h3 class="ui header"><i class="dropdown icon"></i>
                                My question wasn't answered.</h3>
                        </div>
                        <div class="content">
                            <div class="ui relaxed divided list">
                                <div class="item">
                                    <h2>Let us know on <a target="_blank"
                                                          href="https://discordapp.com/invite/jgST5R?utm_source=Discord%20Widget&utm_medium=Connect">Discord</a>.
                                    </h2>
                                </div>
                                <div class="item">
                                    <h4>If it becomes frequently asked we will put it on this list, but we
                                        will always answer any reasonable questions our players ask.
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>&copy; P.o.P Industries 2019</footer>
</body>
<script>
    $('.ui.accordion').accordion({exclusive: false});
    $('.ui.buttons .button').on('click', function () {
        $(this).addClass('positive')
            .siblings()
            .removeClass('positive');
        $('.treemenu').toggleClass('boxed');
    });
</script>
</html>
