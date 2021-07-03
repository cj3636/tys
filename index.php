<!doctype html>
<html lang="en_US">
<?php
require 'head.php';
?>
<body>
<div id="page" class="ui stackable grid">
    <div class="sixteen wide center aligned column">

        <h1 class="ui fluid header" id="h1">Yellow<br/>Submarine</h1>
        <div id="test" class="ui black button">
            <a href="/home.php">
                <button id="h11" class="ui primary icon button">GO</button>
            </a>
        </div>
    </div>
    <div class="sixteen wide center aligned column">
        <a href="download.php">
            <button class="ui huge purple button">
                <i class="white download icon"></i>Downloads
            </button>
        </a>
    </div>
    <div class="ui center aligned">
        <form action="https://www.paypal.com/donate" method="post" target="_top">
            <input type="hidden" name="hosted_button_id" value="REUAFVC9PPVBC"/>
            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0"
                   name="submit" title="Donate with PayPal! Keep our servers free!" alt="Donate with PayPal button"/>
            <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1"/>
        </form>
    </div>
</div>
<footer>&copy;P.o.P Industries 2020</footer>
</body>
</html>
