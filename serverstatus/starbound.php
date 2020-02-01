<!--Vanilla Card-->
<div class="ui card dark">
    <div class="content">
        <img alt="TYS STARBOUND LOGO" class="small ui image" src="img/TYS_STARBOUND.png">
        <div class="ui divider"></div>
        <div class="extra content">
            <?PHP
            $host = 'theyellowsub.us';
            $port = '21025';
            $status = @fsockopen($host, $port, $errno, $errstr, 1);

            if ($status) {
                echo "<font color='#00FF00'>ONLINE</font>";
            } else {
                echo "<font color='#FF0000'>OFFLINE</font>";
            }
            ?>
        </div>
        <div class="ui divider"></div>
        <br>
        <br>
        <div class="ui centered extra content">
            <a target="_blank" href="https://steamcommunity.com/sharedfiles/filedetails/?id=1984162246">
                <button class="ui huge purple button">Modlist</button>
            </a>
        </div>
    </div>
</div>
