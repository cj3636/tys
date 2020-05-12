<!doctype html>
<html lang="en_US">
<?php
require 'head.php';
?>
<body>
<div id="page" class="ui stackable grid">
    <div class="five wide center aligned column">
        <div class="content" id="test1">
            <div class="ui inverted divider"></div>
            <div id="yt">
                <h1 class="ui fluid header" id="h1">QUANTUM AETHER</h1>
            </div>
            <button data-tooltip="Click to Enlarge"
                    data-inverted="" class="ui button image" onclick="openModal()"><img
                        class="ui big centered image"
                        src="img/qa.png"
                        alt="SHOW LINEUP">
            </button>
            <div><a href="warning.php" target="_blank">Seizure Warning</a></div>
            <div class="ui inverted divider"></div>
            <button class="ui black button"><a href="https://discord.gg/DvBk6fG" target="_blank">Discord</a></button>
        </div>
    </div>
    <div class="ui modal">
        <div class="image content">
            <img class="ui centered image"
                 src="img/qa.png"
                 alt="LARGE SHOW LINEUP">
            <div class="description">
                <p></p>
            </div>
        </div>
    </div>
</body>
<script>
    function openModal() {
        $('.ui.modal')
            .modal('show')
        ;
    }
</script>
</html>
