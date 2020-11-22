<!--ATMR+ Card-->
<div class="ui card dark">
<div class="content">
    <img alt="TYS ATMR+ LOGO" class="small ui image" src="/img/TYS_ATMR.png">
    <div class="ui divider"></div>
    <div class="extra content">
        <?php

        use MCServerStatus\MCPing;

        require_once('vendor/autoload.php');
        $response = MCPing::check('theyellowsub.us', 25567);
        echo $response->getMotdToHtml();
        if ($response->online) {
            echo '<div class="ui green paragraph">Server is UP</div>';
            echo '<div class="ui blue paragraph">' . $response->players . ' Online</div>';
        } else {
            echo '<div class="ui red paragraph">Server is DOWN</div>';
        }
        ?>
    </div>
    <div class="ui divider"></div>
    <div class="ui centered extra content">
        <a href="/modlist.php">
            <button class="ui huge orange button">Modlist</button>
        </a>
    </div>
</div>
</div>
