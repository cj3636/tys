<!doctype html>
<html lang="en_US">
<?php require 'head.php';?>
<body>
<div id="page" class="ui stackable grid">
    <div class="sixteen wide column"></div>
    <?php require 'title.php'; ?>
    <div class="sixteen wide column">
        <?php require 'menu.php'; ?>
    </div>
</div>
<div class="ui centered center aligned card">
    <h1 class="title">Modlist</h1>
    <div class="content">
        <?php

        use MCServerStatus\MCPing;

        require_once('vendor/autoload.php');
        $response = MCPing::check('theyellowsub.us', 25567);
        echo $response->getMotdToHtml();
        echo "<br>";
        $modList = $response->toArray()["mods"];
        for ($i = 0; $i < sizeof($modList["modList"]); $i++) {
            print_r($modList["modList"][$i]["modid"]);
            echo '<div class="ui divider"></div>';
        }
        ?>
    </div>
</div>
</body>
</html>
