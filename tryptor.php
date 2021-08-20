<!doctype html>
<html lang="en_US">
<?php
require 'head.php'; ?>
<head>
    <title>Tryptor</title>
    <link rel="stylesheet" type="text/css" href="css/tryptor.css">
</head>
<body>
<div id="page" class="ui stackable grid">
    <?php
    require_once 'title.php' ?>
    <div class="ten wide centered column">
        <div id="tryptor" class="ui fluid stackable card">
            <div class="header" id="title-bar">
                <img id="img" alt="Tryptor" class="ui small left floated image" src="/img/tryptor.png">
                <button id="infobtn" class="ui right floated icon secondary button" onclick="showInfo()"
                        data-inverted="" data-position="top right"
                        data-tooltip="Text Encryption/Decryption Program - More Info">
                    <i class="right floated info circle cyan icon"></i>
                </button>
            </div>
            <div id="content" class="content">
                <div class="meta" id="meta">
                    <div class="ui stackable compact icon menu">
                        <nav class="item" id="navMenuItem">
                            <button data-inverted="" data-position="top left" data-tooltip="Create New Key"
                                    class="ui center aligned teal icon button"
                                    onclick="createKey()"
                                    id="genKey" name="genKey"><i class="yellow key icon"></i>
                            </button>
                        </nav>
                        <nav class="item" id="navMenuItem">
                            <button data-inverted="" data-position="top left" data-tooltip="Encode Text"
                                    class="ui center aligned primary button icon"
                                    onclick="encode()"
                                    id="encode" name="encode"><i
                                        class="lock icon"></i>
                            </button>
                        </nav>
                        <nav class="item" id="navMenuItem">
                            <button data-inverted="" data-position="top left" data-tooltip="Decode Text"
                                    class="ui center aligned blue button icon"
                                    onclick="decode()" id="decode"
                                    name="decode"><i
                                        class="unlock alternate icon"></i>
                            </button>
                        </nav>
                        <nav class="item" id="navMenuItem">
                            <button data-inverted="" data-position="top left" data-tooltip="Upload Input"
                                    class="ui center aligned green button icon"
                                    onclick="loadFile()" id="buttonUpload"><i class="upload icon"></i>
                            </button>
                            <input type="file" id="inputUpload" hidden>
                        </nav>
                        <nav class="item" id="navMenuItem">
                            <button data-inverted="" data-position="top left" data-tooltip="Downlaod Output"
                                    class="ui center aligned green button icon"
                                    onclick="saveFile()" value="save" id="save"><i class="download icon"></i>
                            </button>
                        </nav>
                        <nav class="item" id="navMenuItem">
                            <button data-inverted="" data-position="top left" data-tooltip="Upload Key"
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
                                    data-position="top left"
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
                            <button class="ui center aligned red button icon" data-inverted="" data-position="top left"
                                    data-tooltip="Reset Text"
                                    onclick="reset()"
                                    id="reset" name="reset"><i class="undo alternate icon"></i>
                            </button>
                        </nav>
                        <nav class="item" id="navMenuItem">
                            <div id="keyLengthDiv" class="ui input">
                                <input class="prompt" id="keyLength" type="number" min="1" max="256" step="1"
                                       value="16">
                                <div id="keyLengthPopup" class="ui inverted popup hidden" style="width: 10rem;">Key Size
                                    (1-256)<br>Scroll
                                    to Change
                                </div>
                            </div>
                        </nav>
                        <nav class="item" id="navMenuItem">
                            <div class="ui input" data-inverted="" data-position="top left"
                                 data-tooltip="Project Name">
                                <input class="prompt" id="fileDownloadName" type="text" placeholder="Project Name"
                                       maxlength="16"
                                       value="Tryptor">
                            </div>
                        </nav>
                        <nav class="ui right floated item" id="navMenuItem">
                            <div onclick="showSettings()" class="ui icon black button"
                                 data-tooltip="Additional Settings"
                                 data-inverted="" data-position="top left">
                                <i class="cog icon"></i>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="ui description" id="description">
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
    <!--    TODO Add modals/popups for text areas-->
    <!--    <div class="ui basic mini modal login">-->
    <!--        <h1>Welcome Back!</h1>-->
    <!--        <form class="ui inverted form" action="" method="post" autocomplete="on">-->
    <!--            <div class="required field">-->
    <!--                <label>-->
    <!--                    <input type="text" required name="email" placeholder="Username or Email"/>-->
    <!--                </label>-->
    <!--            </div>-->
    <!--            <div class="required field">-->
    <!--                <label>-->
    <!--                    <input type="password" required name="password" placeholder="Password"/>-->
    <!--                </label>-->
    <!--            </div>-->
    <!--            <a href="" title="" class="ui orange basic inverted left floated button icon" data-inverted=""-->
    <!--               data-position="top left"-->
    <!--               data-tooltip="Forgot your password?" data-position="rig ht center">-->
    <!--                <i class="question icon"></i>-->
    <!--            </a>-->
    <!--            <button class="ui blue basic ok inverted right floated button item" name="login">-->
    <!--                <i class="sign-in icon"></i>-->
    <!--                Login-->
    <!--            </button>-->
    <!--        </form>-->
    <!--    </div>-->
</body>
<script src="https://cdn.jsdelivr.net/g/filesaver.js"></script>
<script src="js/cypher.js"></script>
<script>
  $('.ui.dropdown').dropdown();
  $('#keyLengthDiv').popup({
    popup: $('#keyLengthPopup'),
    position: 'top center',
    on: 'hover',
  });
  $('#keyToggle').popup({
    popup: $('#keyTogglePopup'),
    position: 'left center',
    on: 'hover',
  });

  document.getElementById('keyLength').addEventListener('wheel', function(e) {
  });
  document.getElementById('keyLength').addEventListener('mouseenter', function(e) {
    this.focus();
  });
</script>
</html>
