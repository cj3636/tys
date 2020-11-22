<div class="sixteen wide column">
    <div class="ui stackable tabular menu">
        <a id="home" class="item" href="home.php"><i class="large green home icon"></i>
            <div class="ui title">Home</div>
        </a>
        <a id="discord" class="item" href="discord.php"><i class="large blue discord icon"></i>
            <div class="ui title">Discord</div>
        </a>
        <a id="videos" class="ui item inverted" href="videos.php"><i class="large red youtube icon"></i>
            <div class="ui title">Videos</div>
        </a>
        <a id="help" class="item" href="help.php"><i class="large yellow question icon"></i>
            <div class="ui title">Help</div>
        </a>
        <a id="about" class="item" href="about.php"><i class="large blue users icon"></i>
            <div class="ui title">About Us</div>
        </a>
        <a id="status" class="item" href="status.php" onclick="disableStatus()"><i
                    class="large orange info circle icon"></i>
            <div class="ui title">Server Status</div>
        </a>
        <nav id="statusLoading" hidden="hidden">
            <a class="item">
                <div class="ui active inline loader"></div>
                <div class="ui title">Server Status</div>
            </a>
        </nav>
        <div id="dropdown" class="ui floating dropdown item"
             data-tooltip="Legacy Server's & Interesting Developer API's"
             data-inverted="">
            <i class="large purple plus circle icon"></i>
            <div class="ui title">Legacy/Dev</div>
            <div class="ui inverted menu">
                <a id="tryptor" href="tryptor.php" class="item">Tryptor</a>
                <a id="game" href="game.php" class="item">Game</a>
                <a id="render" href="render.php" class="item">Render 1</a>
                <a id="render2" href="render2.php" class="item">Render 2</a>
                <a class="item" href="sa/index.php"><i class="large purple info icon"></i>Second Aether</a>
                <a class="item" href="qa/index.php"><i class="large pink info icon"></i>Quantum Aether</a>
            </div>
        </div>
        <a id="download" class="ui right floated item" href="download.php"><i
                    class="large inverted purple download icon"></i>
            <div class="ui title">Downloads</div>
        </a>
    </div>
</div>
<script>
    function disableStatus() {
        $('#status').hide();
        $('#statusLoading').show();
    }

    setMenuActive();

    function setMenuActive() {
        switch (page) {
            case index:
                document.getElementById("home").className = "active item";
                break;
            case discord:
                document.getElementById("discord").className = "active item";
                break;
            case videos:
                document.getElementById("videos").className = "active item";
                break;
            case help:
                document.getElementById("help").className = "active item";
                break;
            case about:
                document.getElementById("about").className = "active item";
                break;
            case status:
                document.getElementById("status").className = "active item";
                break;
            case download:
                document.getElementById("download").className = "active ui right floated active item";
                break;
            case tryptor:
                document.getElementById("tryptor").className = "active item";
                break;
            case game:
                document.getElementById("game").className = "active item";
                break;
            case render:
                document.getElementById("render").className = "active item";
                break;
            case render2:
                document.getElementById("render2").className = "active item";
                break;
            default:
                return "";
        }
    }

    $('.ui.dropdown').dropdown();
</script>
