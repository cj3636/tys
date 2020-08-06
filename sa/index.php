<!doctype html>
<html lang="en_US">
<?php
require 'head.php';
?>
<body>
<div id="page" class="ui stackable grid">
    <div class="five wide centered center aligned column">
        <div class="ui inverted divider"></div>
        <div class="ui cards" id="leftCards">
            <?php require 'leftCards.php'; ?>
        </div>
    </div>
    <div class="five wide center aligned column">
        <div class="content" id="test1">
            <div class="ui inverted divider"></div>
            <div id="yt">
                <h1 class="ui fluid header" id="h1">SECOND AETHER</h1>
            </div>
            <button data-tooltip="Click to Enlarge"
                    data-inverted="" class="ui button image" onclick="openModal()"><img
                    class="ui big centered image"
                    src="img/timetable.png"
                    alt="SHOW LINEUP">
            </button>
            <div><a href="warning.php" target="_blank">Seizure Warning</a></div>
            <div class="ui inverted divider"></div>
            <button class="ui primary button"><a href="../home.php">Home</a></button>
            <button class="ui black button"><a href="https://discord.gg/DvBk6fG" target="_blank">Discord</a></button>
        </div>
        <div class="content" id="test1">
            <button data-tooltip="Click to Enlarge"
                    data-inverted="" class="ui button image" onclick="openModal2()"><img
                    class="ui big centered image"
                    src="img/afterparty.png"
                    alt="SHOW LINEUP">
            </button>
        </div>
    </div>
    <div class="five wide centered center aligned column">
        <div class="ui inverted divider"></div>
        <div class="ui cards" id="rightCards">
            <?php require 'rightCards.php'; ?>
        </div>
    </div>
    <div class="ui modal">
        <div class="image content">
            <img class="ui centered image"
                 src="img/timetable.png"
                 alt="LARGE SHOW LINEUP">
            <div class="description">
                <p></p>
            </div>
        </div>
    </div>
    <div class="ui modal 2">
        <div class="image content">
            <img class="ui centered image"
                 src="img/afterparty.png"
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
    function openModal2() {
        $('.ui.modal.2')
            .modal('show')
        ;
    }
</script>
</html>
