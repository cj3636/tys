<!doctype html>
<html lang="en_US">
<?php require 'head.php'; ?>
<body>
<div id="page" class="ui stackable grid">
    <?php require_once 'title.php'; ?>
    <?php require_once 'menu.php'; ?>
</div>
<?php
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != 1) {
    $_SESSION['message'] = "You must log in to perform this action!";
    header("location: ../error.php");
} else {
?>
<div id="page" class="ui stackable grid">
    <div class="center aligned twelve wide column">
        <div class="ui red header">Warning!</div>
        <div class="ui blue header">Pressing submit will immediately overwrite the text for that field on its resctive
            page. Use carefully.
        </div>
        <form class="ui form" action="init.php" method="POST">
            <button type="button" class="ui center aligned button" id="setLatest" name="setLatest" value="latest"
                    onclick="getTxt('modded_info');setValue(this.value);">
                Latest
            </button>
            <button type="button" class="ui center aligned button" id="setModInfo" name="setModInfo"
                    value="modded_info"
                    onclick="getTxt('modded_info');setValue(this.value);">Modded
                Info
            </button>
            <button type="button" class="ui center aligned button" id="setModDesc" name="setModDesc"
                    value="modded_desc"
                    onclick="getTxt('modded_desc');setValue(this.value);">Modded
                Desc
            </button>
            <button type="button" class="ui center aligned button" id="setVanInfo" name="setVanInfo"
                    value="vanilla_info"
                    onclick="getTxt('vanilla_info');setValue(this.value);">
                Vanilla Info
            </button>
            <button type="button" class="ui center aligned button" id="setVanDesc" name="setModDesc"
                    value="vanilla_desc"
                    onclick="getTxt('vanilla_desc');setValue(this.value);">
                Vanilla Desc
            </button>
            <button type="button" class="ui center aligned button" id="setTwitch" name="setTwitch"
                    value="twitch_download"
                    onclick="getTxt('twitch_download');setValue(this.value);">
                Twitch Download
            </button>
            <button type="button" class="ui center aligned button" id="setMulti" name="setMulti"
                    value="multi_download"
                    onclick="getTxt('multi_download');setValue(this.value);">
                MultiMc Download
            </button>
            <button type="button" class="ui center aligned button" id="setBeta" name="setBeta" value="beta"
                    onclick="getTxt('beta');setValue(this.value);">
                Beta Info
            </button>
            <label for="textID"></label>
            <textarea name="textID" id="textID" type="text" required readonly autocomplete="off"></textarea>

            <label for="input"></label>
            <textarea name="input" id="input" type="text" required autocomplete="off"></textarea>

            <input type="submit" class="ui center aligned blue button">

        </form>
    </div>
    <div class="center aligned five wide column">
        <a href="admin/logout.php">
            <button class="button button-block" name="logout">Log Out</button>
    </div>
</div>
<footer>&copy; P.o.P Industries 2019</footer>
</body>
<script>
    getTxt = function (fileName) {
        $.ajax({
            url: 'text/' + fileName + '.txt',
            success: function (data) {
                document.getElementById('input').innerText = data;
            }
        });
    };

    function setValue(newValue) {
        document.getElementById("textID").value = newValue;
    }

    function runOut() {
        alert(document.getElementById("textID").value);
    }
</script>
</html>
<?php
}
?>