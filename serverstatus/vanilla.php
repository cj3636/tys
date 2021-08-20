<!--Vanilla Card-->
<div class="ui card dark">
    <div class="content">
        <img alt="TYS ATMR+ LOGO" class="small ui image" src="/img/TYS_VANILLA.png">
        <div class="ui divider"></div>
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
                echo '<div class="ui yellow paragraph">(Likely in Sleep Mode)</div>';
            }
            ?>
        </div>
        <div class="ui divider"></div>
    </div>
</div>
