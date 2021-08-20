<?php

$dir = ROOT_PATH . 'servers/txt';
$files = glob($dir . '/*.txt');
$lines = array();
foreach ($files as $file) {
    $handle = fopen($file, "r");
    if ($handle) {
        while (($line = fgets($handle)) !== false) {
            array_push($lines, $line);
        }
        fclose($handle);
    }
    echo getCard($lines);
    $lines = [];
}

function getCard($lines): string {
    return '<div class="card">
    <div class="content">
        <img id="logo" alt="TYS LOGO" class="right floated small ui image" src="/img/' . $lines[1] . '">
        <div id="header" class="header">' . $lines[2] . '</div>
        <div id="meta" class="meta">' . $lines[3] . '</div>
        <div id="description" class="description">' . $lines[4] . '</div>
        <div class="ui divider"></div>
        <div class="extra content">
            <button id="copyIP" data-clipboard-text="' . $lines[5] . '" data-tooltip="' . $lines[6] . '"
                    data-inverted="" class="ui huge green button"><i class="copy outline left icon"></i>' . $lines[7] . '
            </button>
        </div>
    </div>
</div>';
}
