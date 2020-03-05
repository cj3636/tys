<!doctype html>
<html lang="en_US">
<?php require 'head.php';
?>
<head>
    <title>Tryptor</title>
    <script src="js/cypher.js"></script>
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
        <div id="title-bar">
            <div class="title"><img alt="tryptor" class="ui small left floated image" src="img/tryptor.png"></div>
        </div>
    </div>
    <div class="ten wide centered column">
        <div class="ui stackable menu">
            <button data-inverted="" data-tooltip="Create New Key" class="ui center aligned teal icon button"
                    onclick="genKey()"
                    id="genKey" name="genKey"><i class="yellow key icon"></i>
            </button>
            <button data-inverted="" data-tooltip="Encode Text" class="ui center aligned primary button icon"
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
            <button data-inverted="" data-tooltip="Save Output to File" class="ui center aligned green button icon"
                    onclick="saveTextAsFile()" value="save" id="save"><i class="download icon"></i>
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
                        onclick="saveKey()" value="save" id="keyDownload" style="display: none">
                </button>
            </div>
        </div>
    </div>
    <div class="ten wide centered column">
        <form class="ui form">
            <label for="key"></label>
            <input type="text" id="key" name="key" class="key" placeholder="Key">
            <label for="crypt"></label>
            <textarea id="crypt" name="crypt" class="crypt" placeholder="Input"></textarea>
        </form>
        <form class="ui form" action="mailto:" method="post">
            <label for="output"></label>
            <textarea readonly id="output" name="output" class="output" placeholder="Output"></textarea>
        </form>
    </div>
</div>
</body>
</html>
