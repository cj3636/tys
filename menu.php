<div class="sixteen wide column">
    <div class="ui stackable menu">
        <a class="item" href="home.php"><i class="large green home icon"></i>
            <p>Home</p></a>
        <a class="item" href="/tys/forum"><i class="large newspaper outline icon"></i>
            <p>Forum</p></a>
        <a class="item" href="discord.php"><i class="large blue discord icon"></i>
            <p>Discord</p></a>
        <a class="ui item inverted" href="videos.php"><i class="large red youtube icon"></i>
            <p>Videos</p></a>
        <a class="item" href="faq.php"><i class="large yellow question icon"></i>
            <p>Help</p></a>
        <a class="item" href="about.php"><i class="large blue users icon"></i>
            <p>About Us</p></a>
        <a class="item" href="download/install.php">
            <button class="ui blue button">
                <i class="white download icon"></i>Installation
            </button>
        </a>

        <div class="item">
            <div class="ui left labeled button">
                <button data-tooltip="Copy Modded IP Address" data-inverted="" class="ui button label"
                        onclick="copyMod()"><i class="copy outline left icon"></i>Modded IP
                </button>
                <label for="copyM"></label><input hidden="" type="text" readonly="readonly"
                                                  placeholder="theyellowsub.us:25566"
                                                  value="theyellowsub.us:25566"
                                                  id="copyM">
            </div>
        </div>
        <div class="item">
            <div class="ui left labeled button">
                <button data-tooltip="Copy Vanilla IP Address" data-inverted="" class="ui button label"
                        onclick="copyVanilla()"><i class="copy outline left icon"></i>Vanilla IP
                </button>
                <label for="copyV"></label><input hidden="" type="text" readonly="readonly"
                                                  placeholder="THEYELLOWSUB.US" value="theyellowsub.us"
                                                  id="copyV">
            </div>
        </div>
    </div>
</div>
<script>
    function copyMod() {
        var copyText = document.getElementById("copyM");
        document.execCommand("copy");
        alert("Copied to clipboard: " + copyText.value);
    }

    function copyVanilla() {
        var copyText = document.getElementById("copyV");
        copyText.select();
        document.execCommand("copy");
        alert("Copied to clipboard: " + copyText.value);
    }
</script>
