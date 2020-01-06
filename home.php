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
<div id="page" class="ui stackable grid">
    <div class="center aligned eight wide column">
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
                    <div class="ui divider"></div>
                    <div class="ui center aligned title">
                        <div><span style="color:#ff0000;">T</span><span style="color:#ff0e00;">h</span><span
                                    style="color:#ff1c00;">e</span><span style="color:#ff2a00;"> </span><span
                                    style="color:#ff3800;">m</span><span style="color:#ff4700;">o</span><span
                                    style="color:#ff5500;">s</span><span style="color:#ff6300;">t</span><span
                                    style="color:#ff7100;"> </span><span style="color:#ff7f00;">a</span><span
                                    style="color:#ff8f00;">d</span><span style="color:#ff9f00;">v</span><span
                                    style="color:#ffaf00;">e</span><span style="color:#ffbf00;">n</span><span
                                    style="color:#ffcf00;">t</span><span style="color:#ffdf00;">u</span><span
                                    style="color:#ffef00;">r</span><span style="color:#ffff00;">o</span><span
                                    style="color:#e3ff00;">u</span><span style="color:#c6ff00;">s</span><span
                                    style="color:#aaff00;"> </span><span style="color:#8eff00;">s</span><span
                                    style="color:#71ff00;">e</span><span style="color:#55ff00;">r</span><span
                                    style="color:#39ff00;">v</span><span style="color:#1cff00;">e</span><span
                                    style="color:#00ff00;">r</span><span style="color:#00ff20;"> </span><span
                                    style="color:#00ff40;">t</span><span style="color:#00ff60;">h</span><span
                                    style="color:#00ff80;">i</span><span style="color:#00ff9f;">s</span><span
                                    style="color:#00ffbf;"> </span><span style="color:#00ffdf;">s</span><span
                                    style="color:#00ffff;">i</span><span style="color:#00e3ff;">d</span><span
                                    style="color:#00c6ff;">e</span><span style="color:#00aaff;"> </span><span
                                    style="color:#008eff;">o</span><span style="color:#0071ff;">f</span><span
                                    style="color:#0055ff;"> </span><span style="color:#0039ff;">P</span><span
                                    style="color:#001cff;">e</span><span style="color:#0000ff;">p</span><span
                                    style="color:#1100ff;">p</span><span style="color:#2300ff;">e</span><span
                                    style="color:#3400ff;">r</span><span style="color:#4600ff;">l</span><span
                                    style="color:#5700ff;">a</span><span style="color:#6800ff;">n</span><span
                                    style="color:#7a00ff;">d</span><span style="color:#8b00ff;">.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="tut" class="center aligned ten wide column" style="border-radius: 10px;">
        <div class="ui items">
            <div class="item">
                <div class="content">
                    <h2 class="ui title">Current Server Line Up:</h2>
                </div>
            </div>
        </div>
        <div class="ui centered stackable cards">
            <?php require('var/servers.html'); ?>
        </div>
    </div>
    <footer>&copy; P.o.P Industries 2019</footer>
</body>
</html>
