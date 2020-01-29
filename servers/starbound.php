<!--Vanilla Card-->
<div class="card">
    <div class="content">
        <img alt="TYS STARBOUND LOGO" class="right floated small ui image" src="img/TYS_STARBOUND.png">
        <div class="header">Starbound</div>
        <div class="meta">The Yellow Sub Goes Starbound</div>
        <div class="description">A small server with big dreams. Lightly Modded.</div>
        <div class="ui divider"></div>
        <div class="extra content">
            <button id="copyVanilla" data-clipboard-text="theyellowsub.us" data-tooltip="Copy Starbound IP Address"
                    data-inverted="" class="ui huge pink button"><i class="copy outline left icon"></i>Starbound IP
            </button>
        </div>
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
    </div>
</div>
