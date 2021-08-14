<!doctype html>
<html lang="en_US">
<?php require 'head.php'; ?>
<head>
    <title>Tryptor</title>
    <link rel="stylesheet" type="text/css" href="css/tryptor.css">
</head>
<body>
<div id="page" class="ui stackable grid">
    <div class="sixteen wide column"></div>
    <?php require_once ROOT_PATH . 'title.php'; ?>
    <div class="sixteen wide column">
        <?php require_once ROOT_PATH . 'menu.php'; ?>
    </div>
    <div class="ten wide centered column">
        <?php //require_once ROOT_PATH . 'html/tryptor.html'; ?>
        <div id="tryptor" class="ui fluid stackable card">
            <div class="header" id="title-bar">
                <img id="img" alt="Tryptor" class="ui small left floated image" src="/img/tryptor.png">
                <button id="infobtn" class="ui right floated icon secondary button" onclick="showInfo()"
                        data-inverted=""
                        data-tooltip="Text Encryption/Decryption Program - More Info"
                        data-position="top right">
                    <i class="right floated info circle cyan icon"></i>
                </button>
            </div>
            <div id="content" class="ui content">
                <div id="meta" class="meta">
                    <div class="ui stackable compact icon menu">
                        <nav class="item" id="navMenuItem">
                            <button data-inverted="" data-tooltip="Create New Key"
                                    class="ui center aligned teal icon button"
                                    onclick="createKey()"
                                    id="genKey" name="genKey"><i class="yellow key icon"></i>
                            </button>
                        </nav>
                        <nav class="item" id="navMenuItem">
                            <button data-inverted="" data-tooltip="Encode Text"
                                    class="ui center aligned primary button icon"
                                    onclick="encode()"
                                    id="encode" name="encode"><i
                                        class="lock icon"></i>
                            </button>
                        </nav>
                        <nav class="item" id="navMenuItem">
                            <button data-inverted="" data-tooltip="Decode Text"
                                    class="ui center aligned blue button icon"
                                    onclick="decode()" id="decode"
                                    name="decode"><i
                                        class="unlock alternate icon"></i>
                            </button>
                        </nav>
                        <nav class="item" id="navMenuItem">
                            <button data-inverted="" data-tooltip="Upload Input"
                                    class="ui center aligned green button icon"
                                    onclick="loadFile()" id="buttonUpload"><i class="upload icon"></i>
                            </button>
                            <input type="file" id="inputUpload" hidden>
                        </nav>
                        <div class="inverted divider"></div>
                        <nav class="item" id="navMenuItem">
                            <button data-inverted="" data-tooltip="Downlaod Output"
                                    class="ui center aligned green button icon"
                                    onclick="saveFile()" value="save" id="save"><i class="download icon"></i>
                            </button>
                        </nav>
                        <nav class="item" id="navMenuItem">
                            <button data-inverted="" data-tooltip="Upload Key"
                                    class="ui center aligned black button icon">
                                <i class="icons">
                                    <i class="green upload icon"></i>
                                    <i class="bottom right corner yellow key icon"></i>
                                </i>
                                <input onchange="loadKey()" type="file" id="keyUpload" style="display: none;">
                            </button>
                        </nav>

                        <nav class="item" id="navMenuItem">
                            <button class="ui center aligned black button icon" id="keyDownload" data-inverted=""
                                    data-tooltip="Download Key"
                                    onclick="saveKeyAsFile()">
                                <i class="icons">
                                    <i class="orange download icon"></i>
                                    <i class="bottom right corner orange key icon"></i>
                                </i>
                                <input onchange="saveKeyAsFile()" type="file" id="keyDownload" hidden>
                            </button>
                        </nav>
                        <nav class="item" id="navMenuItem">
                            <button data-inverted="" data-tooltip="Reset Text" class="ui center aligned red button icon"
                                    onclick="reset()"
                                    id="reset" name="reset"><i class="undo alternate icon"></i>
                            </button>
                        </nav>
                        <div id="keyLengthDiv" class="ui input">
                            <input id="keyLength" type="number" min="1" max="256" step="1" value="16">
                            <div id="keyLengthPopup" class="ui inverted popup hidden">Key Size (1-256)<br>Scroll
                                to Change
                            </div>
                        </div>
                        <div class="ui right floated inverted input" id="projectName" data-inverted=""
                             data-tooltip="Project Name (1-32 Characters)">
                            <input id="fileDownloadName" type="text" placeholder="Project Name" maxlength="32"
                                   value="Tryptor">
                        </div>
                        <nav class="ui right floated item" id="navMenuItem">
                            <div onclick="showSettings()" class="ui icon black button">
                                <i class="cog icon"></i>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="ui fluid stackable description">
                    <form class="ui form">
                        <div class="ui fluid left icon input">
                            <label for="key"></label>
                            <i id="keyToggle" class="toggle link icon off" onclick="togglePassword()"></i>
                            <input id="key" name="key" class="key" type="password" placeholder="Key">
                            <div id="keyTogglePopup" class="ui inverted popup hidden">Show Key</div>
                        </div>
                        <label for="input"></label>
                        <textarea id="input" name="input" class="input" placeholder="Input"></textarea>
                    </form>
                    <form class="ui form">
                        <label for="output"></label>
                        <textarea readonly id="output" name="output" class="output" placeholder="Output"></textarea>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--    TODO Add modals for text areas-->
    <div class="ui basic mini modal login">
        <h1>Welcome Back!</h1>
        <form class="ui inverted form" action="" method="post" autocomplete="on">
            <div class="required field">
                <label>
                    <input type="text" required name="email" placeholder="Username or Email"/>
                </label>
            </div>
            <div class="required field">
                <label>
                    <input type="password" required name="password" placeholder="Password"/>
                </label>
            </div>
            <a href="" title="" class="ui orange basic inverted left floated button icon" data-inverted=""
               data-tooltip="Forgot your password?" data-position="rig ht center">
                <i class="question icon"></i>
            </a>
            <button class="ui blue basic ok inverted right floated button item" name="login">
                <i class="sign-in icon"></i>
                Login
            </button>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/g/filesaver.js"></script>
<script src="js/cypher.js"></script>
<script>
    $('.ui.dropdown').dropdown();
    $('#keyLengthDiv').popup({
        popup: $('#keyLengthPopup'),
        position: 'top center',
        on: 'hover'
    });
    $('#keyToggle').popup({
        popup: $('#keyTogglePopup'),
        position: 'left center',
        on: 'hover'
    });

    document.getElementById('keyLength').addEventListener("wheel", function (e) {
    });
    document.getElementById('keyLength').addEventListener("mouseenter", function (e) {
        this.focus()
    });
</script>
</html>
