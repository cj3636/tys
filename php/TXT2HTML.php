<?php

namespace TYS;

class TXT2HTML {

    private $serverCard;

    public function __construct() {
        $this->serverCard = file_get_contents(CARD_HTML);
    }

    public function echoCard($dir) {
        foreach ($this->parseCards($dir) as $card) {
            echo $card;
        }
    }

    public function parseCards($dir): array {
        $files = glob(ROOT_PATH . $dir . '/*.txt');
        $lines = array();
        $cards = array();
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

    private function getHTML($img, $head, $meta, $desc, $ip, $hover, $btn): string {
        return sprintf($this->serverCard, $img, $head, $meta, $desc, $ip, $hover, $btn);
    }
}