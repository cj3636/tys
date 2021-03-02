<!doctype html>
<html lang="en_US">
<?php
require 'head.php';
?>
<body>
<div id="page" class="ui stackable grid">
    <div class="sixteen wide center aligned column">

        <h1 class="ui fluid header" id="h1">Yellow<br/>Submarine</h1>
        <div id="test" class="ui black button"
             data-inverted="" data-tooltip="Use a PC for Best experience." data-position="bottom center">
            <a href="/home.php">
                <button id="h11" class="ui primary icon button">GO</button>
            </a>
        </div>
    </div>
    <div class="sixteen wide center aligned column">
        <div data-inverted="" data-tooltip="Tutorial for installing the Modpack" data-position="bottom center">
            <a href="/download.php">
                <button class="ui huge blue button">
                    <i class="white question icon"></i>Modpack Installation Instructions
                </button>
            </a>
        </div>
        <br>
        <div data-inverted="" data-tooltip="TYS_ATM3+ Modpack ZIP for Twitch/Overwolf/MultiMC/GDLauncher"
             data-position="bottom center">
            <a href="/dist/TYS_LATEST.zip"
               target="_blank">
                <button class="ui huge purple button">
                    <i class="white download icon"></i>Modpack ZIP Download
                </button>
            </a>
        </div>
        <br>
        <div data-inverted="" data-tooltip="TYS_ATM3+ Modpack ZIP for Twitch/Overwolf/MultiMC/GDLauncher"
             data-position="bottom center">
            <a href="/dist/TYS_OLD.zip"
               target="_blank">
                <button class="ui huge green button" data-inverted=""
                        data-tooltip="TYS_ATM3+ Modpack .bat installer for Windows 10 and MultiMC. Can install MultiMC."
                        data-position="bottom center">
                    <i class="white download icon"></i>
                    <i class="white terminal icon"></i>LATEST INSTALLER
                </button>
            </a>
        </div>
    </div>
</div>
<footer>&copy;P.o.P Industries 2020</footer>
</body>
</html>
