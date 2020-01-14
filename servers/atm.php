<!--ATMR+ Card-->
<div class="card">
    <div class="content">
        <img alt="TYS ATMR+ LOGO" class="right floated small ui image" src="img/TYS_ATMR.png">
        <div class="header">
            <a href="modlist.php">ATMR+</a>
        </div>
        <div class="meta">
            All The Mods Remix + Extra
        </div>
        <div class="description">
            An All The Mods 3 Remix Pack with extra spice.
        </div>
        <div class="ui divider"></div>
        <div class="ui centered extra content">
            <a href="download.php">
                <button class="ui huge purple button">
                    <i class="white external icon"></i>Download
                </button>
            </a>
        </div>
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
    </div>
</div>
