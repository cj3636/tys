<!--Vanilla Card-->
<div class="card">
    <div class="content">
        <img alt="TYS ATMR+ LOGO" class="right floated small ui image" src="img/TYS_VANILLA.png">
        <div class="header">
            Vanilla
        </div>
        <div class="meta">
            Vanilla Minecraft with Plugins
        </div>
        <div class="description">
            An experience you can't miss, with an Earth map and more.
        </div>
        <div class="ui divider"></div>
        <div class="extra content">
            <button id="copyVanilla" data-clipboard-text="theyellowsub.us" data-tooltip="Copy Vanilla IP Address"
                    data-inverted="" class="ui huge green button"><i class="copy outline left icon"></i>Vanilla IP
            </button>
        </div>
        <div class="extra content">
            <?php

            use MCServerStatus\MCPing;

            require_once('vendor/autoload.php');
            $response = MCPing::check('theyellowsub.us');
            echo $response->getMotdToHtml();
            if ($response->online) {
                echo '<div class="ui green paragraph">Server is UP</div>';
                echo '<div class="ui blue paragraph">' . $response->players . ' Online</div>';
            } else {
                echo '<div class="ui red paragraph">Server is DOWN</div>';
            }
            ?>
        </div>
    </div>
</div>