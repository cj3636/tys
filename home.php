<!doctype html>
<html lang="en_US">
<?php require_once 'head.php'; ?>
<body>
<div id="page" class="ui stackable grid">
    <div class="sixteen wide column"></div>
    <?php require_once 'title.php'; ?>
    <?php require_once 'menu.php'; ?>
</div>
<div id="page" class="ui stackable fluid grid">
    <div class="center aligned sixteen wide column">
        <div class="ui items">
            <div class="item">
                <div class="content">
                    <svg>
                        <symbol id="s-text">
                            <text text-anchor="middle" x="50%" y="80%">Welcome</text>
                        </symbol>
                        <g>
                            <use xlink:href="#s-text" class="text-copy"></use>
                            <use xlink:href="#s-text" class="text-copy"></use>
                            <use xlink:href="#s-text" class="text-copy"></use>
                            <use xlink:href="#s-text" class="text-copy"></use>
                            <use xlink:href="#s-text" class="text-copy"></use>
                        </g>
                    </svg>
                    <div class="ui inverted divider"></div>
                    <h1 class="ui header" id="p">
                        To the Yellow Submarine
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="center aligned sixteen wide column">
        <div class="ui items">
            <div class="item">
                <div class="content">
                    <h2 class="ui title">Current Server Line Up:</h2>
                </div>
            </div>
        </div>
        <div class="ui centered stackable cards">
            <?php
            $dir = 'servers';
            $files = glob($dir . '/*.php');
            foreach ($files as $file) {
                require($file);
            }
            ?>
        </div>
    </div>
    <footer>&copy; P.o.P Industries 2019</footer>
</body>
<script>
    new ClipboardJS('#copyVanilla');
</script>
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
