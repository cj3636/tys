<?php require_once LOGIN_HTML ?>
<?php require_once SIGNUP_HTML ?>
<div class="ui two wide column">
    <img class="ui small image" src="img/tys.png" alt="logo">
</div>
<div class="ui four wide column">
    <a id="link1"><h1 class="ui title">The Yellow Sub Servers</h1></a>
    <h3 class="ui description">Minecraft | Vanilla + Modded</h3>
    <h3 id="desc" class="ui description"></h3>
</div>

<div class="ui two wide right floated column">
    <div data-tooltip="" id="paypal">
        <a class="ui massive blue right corner icon label"
           href="https://www.paypal.com/donate?hosted_button_id=REUAFVC9PPVBC"
           target="_blank">
            <i class="white paypal icon"></i>
        </a>
    </div>
</div>
<div class="ui sixteen wide column">
    <div id="menu" class="ui secondary pointing inverted fluid icon menu">
        <a id="home" class="icon item" href="home.php"><i class="big green home icon"></i></a>
        <a id="discord" class="icon item" href="discord.php"><i class="big blue discord icon"></i></a>
        <a id="help" class="icon item" href="help.php"><i class="big yellow question icon"></i></a>
        <a id="videos" class="icon item" href="videos.php"><i class="big red youtube icon"></i></a>
        <a id="about" class="icon item" href="about.php"><i class="big blue users icon"></i></a>
        <nav id="toolsNav">
            <div id="tools" class="ui dropdown item">
                <i class="big purple cogs icon"></i>
                <div class="menu">
                    <a id="status" class="icon item" href="status.php" onclick="disableStatus()">
                        <i class="big icons">
                            <i class="orange server icon"></i>
                            <i class="corner inverted info circle icon"></i>
                        </i>
                    </a>
                    <div id="statusLoading" class="item">
                        <div class="ui inline loader active"></div>
                    </div>
                    <a id="tryptor" class="icon item" href="tryptor.php"><i class="icons"><i
                                    class="big key cyan icon"></i></i></a>
                    <a id="game" href="game/game.html" class="icon item">
                        <i class="big icons">
                            <i class="blue baseball ball icon"></i>
                            <i class="corner orange play icon"></i>
                        </i>
                    </a>
                    <a id="render" href="render.php?r=1" class="icon item"><i class="big green js icon"></i></a>
                    <a id="render2" href="render.php?r=2" class="icon item"><i class="big pink js icon"></i></a>
                    <!--                <a class="icon item" href="sa/index.php"><i class="big purple info icon"></i>Second Aether</a>-->
                    <!--                <a class="icon item" href="qa/index.php"><i class="big pink info icon"></i>Quantum Aether</a>-->
                </div>
            </div>
        </nav>
        <nav id="accountNav">
            <div id="account" class="ui dropdown item">
                <i class="big green user circle icon"></i>
                <div class="menu">
                    <a id="login" class="icon item" onclick="showLogin()"><i
                                class="big blue sign-in circle icon"></i></a>
                    <a id="signup" class="icon item" onclick="showSignup()"><i class="big blue signup icon"></i></a>
                </div>
            </div>
        </nav>
        <a id="download" class="icon item" href="download.php"><i class="big inverted purple download icon"></i></a>
    </div>
</div>
<script src="js/title.js"></script>
<script>
  // $('.ui.dropdown.item').transition('scale');
</script>
