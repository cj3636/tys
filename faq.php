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
                            <h3><i class="dropdown icon"></i>
                                How much ram / computer power do I need to run the modpack?</h3>
                        </div>
                        <div class="content">
                            <div class="ui relaxed divided list">
                                <div class="item"><h2>A good amount! We recommend at least 10GB dedicated to the game
                                        on launch.</h2>
                                </div>
                                <div class="item"><h4>This means your PC needs to have 12GB+ of RAM installed.</h4>
                                </div>
                                <div class="item"><h4>If your PC is underpowered you can try using <a target="_blank"
                                                                                                      href="https://optifine.net/downloads">Optifine</a>
                                        to improve performance. This comes at the cost of various glitches.</h4>
                                </div>
                            </div>
                        </div>
                        <div class="title">
                            <h3><i class="dropdown icon"></i>
                                How many people play on each server?</h3>
                        </div>
                        <div class="content">
                            <div class="ui relaxed divided list">
                                <div class="item"><h2>We average about 5 players on at all times, but have a quite
                                        large player base in total.
                                    </h2>
                                </div>
                                <div class="item"><h4>The modded world is absolutely massive and there are players
                                        and bases everywhere.</h4>
                                </div>
                            </div>
                        </div>
                        <div class="title">
                            <h3><i class="dropdown icon"></i>
                                Why won't my game launch?</h3>
                        </div>
                        <div class="content">
                            <div class="ui relaxed divided list">
                                <div class="item"><h2>First, make sure you have allocated enough ram. See the Install
                                        page on the navigation
                                        menu.
                                    </h2>
                                </div>
                                <div class="item"><h4>If you are sure you have enough, make sure you have 64 BIT Java
                                        Installed and that
                                        Minecraft/Twitch/MultiMC is using the correct Java.</h4>
                                </div>
                                <div class="item"><h4>If neither of those fix your issue, hit us up with a full crash
                                        report on the Discord.</h4>
                                </div>
                            </div>
                        </div>
                        <div class="title">
                            <h3><i class="dropdown icon"></i>
                                My question wasn't answered.</h3>
                        </div>
                        <div class="content">
                            <div class="ui relaxed divided list">
                                <div class="item"><h2>Let us know on the discord.
                                    </h2>
                                </div>
                                <div class="item"><h4>If it becomes frequently asked we will put it on this list, but we
                                        always answer any reasonable questions our players ask.</h4>
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