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
    <?php require 'title.php'; ?>
    <div class="sixteen wide column">
        <?php require 'menu.php'; ?>
    </div>
    <div class="ten wide centered column">
        <div class="ui fluid card">
            <div class="header" id="title-bar">
                <div class="title"><img alt="tryptor" class="ui small left floated image" src="img/tryptor.png"></div>
            </div>
            <div class="content">
                <div class="header">
                    <div class="ui stackable fluid secondary menu">
                        <button data-inverted="" data-tooltip="Create New Key"
                                class="ui center aligned teal icon button"
                                onclick="createKey()"
                                id="genKey" name="genKey"><i class="yellow key icon"></i>
                        </button>
                        <button data-inverted="" data-tooltip="Encode Text"
                                class="ui center aligned primary button icon"
                                onclick="encode()"
                                id="encode" name="encode"><i
                                    class="lock icon"></i>
                        </button>
                        <button data-inverted="" data-tooltip="Decode Text" class="ui center aligned blue button icon"
                                onclick="decode()" id="decode"
                                name="decode"><i
                                    class="unlock alternate icon"></i>
                        </button>
                        <button data-inverted="" data-tooltip="Reset Text" class="ui center aligned red button icon"
                                onclick="reset()"
                                id="reset" name="reset"><i class="undo alternate icon"></i>
                        </button>
                        <button data-inverted="" data-tooltip="Save Output"
                                class="ui center aligned green button icon"
                                onclick="saveFile()" value="save" id="save"><i class="download icon"></i>
                        </button>
                        <div data-inverted="" data-tooltip="Upload Input">
                            <label for="fileUpload" class="ui icon grey item button">
                                <i class="green upload icon"></i>
                            </label>
                            <input onchange="loadFile()" type="file" id="fileUpload" style="display: none">
                        </div>
                        <div data-inverted="" data-tooltip="Upload Key">
                            <label for="keyUpload" class="ui icon grey item button">
                                <i class="teal upload icon"></i> <i class="teal key icon"></i>
                            </label>
                            <input onchange="loadKey()" type="file" id="keyUpload" style="display: none">
                        </div>
                        <div data-inverted="" data-tooltip="Download Key">
                            <label for="keyDownload" class="ui icon grey item button">
                                <i class="orange download icon"></i> <i class="orange key icon"></i>
                            </label>
                            <button class="ui button"
                                    onclick="saveKeyAsFile()" value="save" id="keyDownload" style="display: none">
                            </button>
                        </div>
                        <div onclick="showSettings()" class="ui icon top left pointing dropdown button">
                            <i class="wrench icon"></i>
                        </div>
                        <div class="ui input" data-inverted="" data-tooltip="Key Length 1-256">
                            <label for="keyLength"></label>
                            <input id="keyLength" type="number" min="1" max="256" value="16">
                        </div>
                    </div>
                </div>
                <div class="description">
                    <form class="ui form">
                        <div class="ui right floated inverted input" id="projectName" data-inverted=""
                             data-tooltip="Name for Saved Files" data-position="right center">
                            <label for="fileDownloadName"></label>
                            <input id="fileDownloadName" type="text" placeholder="Project Name" maxlength="32"
                                   value="Tryptor">
                        </div>
                        <div class="ui fluid left icon input" data-inverted="" data-tooltip="Show Password"
                             data-position="left center">
                            <label for="key"></label>
                            <i id="passwordToggleIcon" class="toggle link icon off" onclick="togglePassword()"></i>
                            <input id="key" name="key" class="key" type="password" placeholder="Key">
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
                <input type="text" required name="email" placeholder="Username or Email"/>
            </div>
            <div class="required field">
                <input type="password" required name="password" placeholder="Password"/>
            </div>
            <a href="" class="ui orange basic inverted left floated button icon" data-inverted=""
               data-tooltip="Forgot your password?" data-position="right center">
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
</script>
</html>
