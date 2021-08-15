<?php require_once LOGIN_HTML ?>
<?php require_once SIGNUP_HTML ?>
<div class="sixteen wide column">
    <div id="menu" class="ui secondary pointing inverted stackable icon menu" style="padding: 0; margin: 0;">
        <a id="home" name="Home" class="icon item" href="home.php"><i class="large green home icon"></i></a>
        <a id="discord" class="icon item" href="discord.php"><i class="large blue discord icon"></i></a>
        <a id="help" class="icon item" href="help.php"><i class="large yellow question icon"></i></a>
        <a id="videos" class="icon item" href="videos.php"><i class="large red youtube icon"></i></a>
        <a id="about" class="icon item" href="about.php"><i class="large blue users icon"></i></a>
        <a id="status" class="icon item" href="status.php" onclick="disableStatus()">
            <i class="large icons">
                <i class="orange server icon"></i>
                <i class="corner green rss icon"></i>
            </i>
        </a>
        <div id="statusLoading" class="item">
            <div class="ui inline loader active"></div>
        </div>
        <div id="tools" class="ui dropdown item">
            <i class="large purple cogs icon"></i>
            <div class="menu">
                <div class="ui center aligned centered white header">Tools</div>
                <a id="tryptor" class="icon item" href="tryptor.php"><i class="large key cyan icon"></i></a>
                <a id="game" href="game/game.html" class="icon item"><i class="large orange game icon"></i></a>
                <a id="render" href="render.php" class="icon item"><i class="large green js icon"></i></a>
                <a id="render2" href="render2.php" class="icon item"><i class="large pink js icon"></i></a>
                <!--                <a class="icon item" href="sa/index.php"><i class="large purple info icon"></i>Second Aether</a>-->
                <!--                <a class="icon item" href="qa/index.php"><i class="large pink info icon"></i>Quantum Aether</a>-->
            </div>
        </div>
        <div id="account" class="ui dropdown item">
            <i class="large green user circle icon"></i>
            <div class="ui menu">
                <div class="ui center aligned centered white header">Account</div>
                <div id="login" class="icon item" onclick="showLogin()"><i class="large blue sign-in circle icon"></i></div>
                <div id="signup" class="icon item" onclick="showSignup()"><i class="large blue signup icon"></i></div>
            </div>
        </div>
        <!--        <div id="account" class="ui dropdown item"-->
        <!--             data-tooltip="Legacy Server's & Interesting Developer API's"-->
        <!--             data-inverted="">-->
        <!--            <i class="large green user circle icon"></i>-->
        <!--            <div class="ui title">Account</div>-->
        <!--            <div class="ui labeled icon menu">-->
        <!--                <div class="item" onclick="showLogin()"><i class="large blue sign-in circle icon"></i>Login</div>-->
        <!--                <div class="item" onclick="showSignup()"><i class="large blue signup icon"></i>Sign Up</div>-->
        <!--            </div>-->
        <!--        </div>-->
        <a id="download" class="icon item" href="download.php"><i
                    class="large inverted purple download icon"></i></a>
    </div>
</div>
<script src="js/menu.js"></script>