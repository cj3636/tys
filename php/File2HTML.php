<?php

namespace TYS;

use DOMDocument;

class TXT2HTML
{
    public function serverCardTXT($dir)
    {
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
            echo '<div class="card">
    <div class="content">
        <img id="logo" alt="TYS LOGO" class="right floated small ui image" src="/img/' . $lines[0] . '">
        <div id="header" class="header">' . $lines[1] . '</div>
        <div id="meta" class="meta">' . $lines[2] . '</div>
        <div id="description" class="description">' . $lines[3] . '</div>
        <div class="ui divider"></div>
        <div class="extra content">
            <button id="copyIP" data-clipboard-text="' . $lines[4] . '" data-tooltip="' . $lines[5] . '"
                    data-inverted="" class="ui huge green button"><i class="copy outline left icon"></i>' . $lines[6] . '
            </button>
        </div>
    </div>
</div>';
        }
    }

    public function serverCardJSON()
    {

    }
}

class JSON2HTML
{
    protected DOMDocument $domDoc;
    protected String $dir;

    public function __construct($dom, $dir) {
        $this->domDoc = $dom;
        $this->dir = $dom;
    }
    public function serverCardJSON($dom, $dir)
    {
        $dom = $this->domDoc;
    }
}