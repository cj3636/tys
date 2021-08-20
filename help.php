<!doctype html>
<html lang="en_US">
<?php
require 'head.php'; ?>
<body>
<div id="page" class="ui stackable grid">
    <?php
    require 'title.php' ?>
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
                                What is "The Yellow Submarine?</h3>
                        </div>
                        <div class="content">
                            <div class="ui relaxed divided list">
                                <div class="item">
                                    <h2>A movie made by <a href="https://en.wikipedia.org/wiki/The_Beatles"
                                                           target="_blank">The Beatles</a></h2>
                                    <h3><a href="https://en.wikipedia.org/wiki/Yellow_Submarine_(film)" target="_blank"><i>Yellow
                                                Submarine</i></<a></a>. Directed by George Dunning, performances by John
                                        Lennon, Paul McCartney, George Harrison and Ringo Starr, United Artists,
                                        1968
                                    </h3>
                                    <h3>Watch the movie <a href="https://theyellowsub.us/movie.mp4">here</a>. Buy the
                                        movie <a
                                                href="https://itunes.apple.com/us/movie/yellow-submarine/id518267514"
                                                target="_blank">here.</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="title">
                            <h3 class="ui header"><i class="dropdown icon"></i>
                                How much RAM do I need to run the modpack?</h3>
                        </div>
                        <div class="content">
                            <div class="ui relaxed divided list">
                                <div class="item"><h2>We recommend at least 8GB dedicated to the game
                                        on launch.</h2>
                                </div>
                                <div class="item"><h4>This means your PC needs to have 10GB+ of RAM installed (Windows
                                        can use up to 4GB).</h4>
                                </div>
                                <div class="item">
                                    <h4><i class="blue question circle icon"></i>You can try installing <a
                                                target="_blank" href="https://optifine.net/downloads">Optifine</a> for
                                        improved performance.
                                    </h4>
                                    <h4><i class="yellow exclamation circle icon"></i>Optifine is known to cause
                                        graphical bugs, but
                                        is usually not game breaking.</h4>
                                </div>
                            </div>
                        </div>
                        <div class="title">
                            <h3 class="ui header"><i class="dropdown icon"></i>
                                How do I add more RAM?</h3>
                        </div>
                        <div class="content">
                            <div class="ui relaxed divided list">
                                <div class="item">
                                    <h2>Check out the <a target="_blank"
                                                         href="videos.php">Videos</a>
                                        section.</h2>
                                </div>
                                <div class="item"><h4><i class="yellow exclamation circle icon"></i>Be sure you do not
                                        allocate more RAM than is available</h4></div>
                                <div class="item"><h4><i class="red exclamation triangle icon"></i>Windows can use up to
                                        4GB for system processes.</h4></div>
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
                                </div>
                                <div class="item">
                                    <h4>If you are sure you have enough allocated, delete the pack from Twitch and
                                        reinstall it.
                                    </h4>
                                </div>
                                <div class="item">
                                    <h4>If neither of those fix your issue, hit us up with a full crash
                                        report on the <a target="_blank" href="https://discord.gg/we6qnRg">Discord</a>.
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="title">
                            <h3 class="ui header"><i class="dropdown icon"></i>
                                Where is the IP address for 'X'?</h3>
                        </div>
                        <div class="content">
                            <div class="ui relaxed divided list">
                                <div class="item">
                                    <h2>Vanilla</h2>
                                </div>
                                <div class="item">
                                    <button id="copyVanilla" data-clipboard-text="theyellowsub.us"
                                            data-tooltip="Copy Vanilla IP Address"
                                            data-inverted="" class="ui green button"><i
                                                class="copy outline left icon"></i>Vanilla IP
                                    </button>
                                </div>
                                <div class="item">
                                    <h2>ATM5+</h2>
                                </div>
                                <div class="item">
                                    <h4>Launch the pack and the server will there!</h4>
                                </div>
                            </div>
                        </div>
                        <div class="title">
                            <h3 class="ui header"><i class="dropdown icon"></i>
                                Why is the modpack not on Curseforge/Twitch?</h3>
                        </div>
                        <div class="content">
                            <div class="ui relaxed divided list">
                                <div class="item">
                                    <h2>It is a terrible platform that takes up to 48 hours to upload new files to.</h2>
                                    <h3><i class="yellow exclamation circle icon"></i>We may recommend using <a
                                                href="https://curseforge.overwolf.com/" target="_blank">Overwolf</a> in
                                        the near future.
                                    </h3>
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
                                    <h2>Let us know on <a target="_blank" href="https://discord.gg/we6qnRg">Discord</a>.
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
  new ClipboardJS('#copyVanilla');
</script>
<script>
  $('.ui.accordion').accordion({exclusive: false});
  $('.ui.buttons .button').on('click', function() {
    $(this).addClass('positive').siblings().removeClass('positive');
    $('.treemenu').toggleClass('boxed');
  });
</script>
</html>
