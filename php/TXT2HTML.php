<?php

namespace TYS;

class TXT2HTML {
    public function echoCard($dir) {
        foreach ($this->parseCards($dir) as $card) {
            echo $card;
        }
    }

    public function parseCards($dir): array {
        $files = glob(ROOT_PATH . $dir . '/*.txt');
        $lines = array();
        $cards = array();
        $at = 0;
        foreach ($files as $file) {
            $handle = fopen($file, "r");
            if ($handle) {
                while (($line = fgets($handle)) !== false) {
                    array_push($lines, $line);
                }
                array_push($cards, $this->getHTML($lines[1], $lines[2], $lines[3], $lines[4], $lines[5], $lines[6], $lines[7]));
                fclose($handle);
            }
            $lines = [];
        }
        return $cards;
    }

    protected function getHTML($img, $head, $meta, $desc, $ip, $hover, $btn): string {
        return sprintf($this->serverCard, $img, $head, $meta, $desc, $ip, $hover, $btn);
    }

    protected string $serverCard = '<div class="card">
    <div class="content">
        <img id="logo" alt="TYS LOGO" class="right floated small ui image" src="/img/%s">
        <div id="header" class="header">%s</div>
        <div id="meta" class="meta">%s</div>
        <div id="description" class="description">%s</div>
        <div class="ui divider"></div>
        <div class="extra content">
            <button id="copyIP" data-clipboard-text="%s" data-tooltip="%s"
                    data-inverted="" class="ui huge green button"><i class="copy outline left icon"></i>%s
            </button>
        </div>
    </div>
</div>';
}