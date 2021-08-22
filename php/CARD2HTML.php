<?php
namespace TYS;
class CARD2HTML {
    private $serverCard;

    public function __construct() {
        $this->serverCard = file_get_contents(CARD_HTML);
    }

    public function parseCards($dir): array {
        $files = glob(ROOT_PATH . $dir . '/*.txt');
        $lines = [];
        $cards = [];
        foreach ($files as $file) {
            $handle = fopen($file, "r");
            if ($handle) {
                while (($line = fgets($handle)) !== false) {
                    array_push($lines, $line);
                }
                array_push($cards,
                    $this->getHTML($lines[1], $lines[2], $lines[3], $lines[4], $lines[5], $lines[6], $lines[7]));
                fclose($handle);
            }
            $lines = [];
        }
        return $cards;
    }

    private function getHTML($img, $head, $meta, $desc, $ip, $hover, $btn): string {
        return sprintf($this->serverCard, $img, $head, $meta, $desc, $ip, $hover, $btn);
    }

    public function echoCard($dir) {
        foreach ($this->parseCards($dir) as $card) {
            echo $card;
        }
    }
}