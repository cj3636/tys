<!doctype html>
<html lang="en_US">
<?php
require 'head.php';
?>
<body>
<div id="page" class="ui stackable grid">
    <div class="sixteen wide center aligned column">
        <h1 class="ui fluid header" id="h1">Yellow<br/>Submarine</h1>
        <h2 class="ui title">The Page you are looking for could not be found</h2>
        <h3 class=""><?php echo "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?></h3>
        <div id="test" class="ui black button"
             data-inverted="" data-tooltip="Use a PC for Best experience." data-position="bottom center">
            <a href="home.php">
                <button id="h11" class="ui primary icon button">HOME</button>
            </a>
        </div>
    </div>
</div>
</body>
</html>
