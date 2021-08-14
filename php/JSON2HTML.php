<?php

namespace TYS;

use DOMDocument;

class JSON2HTML {
    private $dom;
    private $p2h;

    public function __construct() {
        $this->dom = new DOMDocument();
        $this->p2h = new PHP2HTML();
    }

    public function echoCard($dir) {

    }

    public function parseCards($dir): array {
        $dom = $this->dom;
        $files = glob($dir . '/*.json');
        $filejson = array();
        foreach ($files as $file) {
            $json = file_get_contents($file);
            $jsonObj = json_decode($json, true);
            array_push($filejson, $jsonObj);
        }

        foreach ($filejson as $jc) {
            $cards = array();

            $imgclass = $jc['img']['class'];
            $imgsrc = $jc['img']['src'];

            $hclass = $jc['header']['class'];
            $htext = $jc['header']['text'];

            $mclass = $jc['meta']['class'];
            $mtext = $jc['meta']['text'];

            $dclass = $jc['description']['class'];
            $dtext = $jc['description']['text'];

            $dividerClass = $jc['divider']['class'];

            $eclass = $jc['extra']['class'];

            $card = $dom->createElement('div');
            $card->setAttribute('class', 'card');

            $img = createImg($dom, $imgclass, $imgsrc);
            $header = createDiv($dom, $hclass, $htext);
            $meta = createDiv($dom, $mclass, $mtext);
            $description = createDiv($dom, $dclass, $dtext);
            $divider = createDiv($dom, $dividerClass);
            $extra = createDiv($dom, $eclass);

            foreach ($jc['extra']['buttons'] as $btn) {
                $btnclass = $btn['class'];
                $btnid = $btn['id'];
                $btnclipboard = $btn['data-clipboard-text'];
                $btntooltip = $btn['data-tooltip'];
                $btnicon = $btn['icon'];
                $btntext = $btn['text'];
                $btnislink = $btn['islink'];
                $btnhref = $btn['href'];
                $btntarget = $btn['target'];

                if ($btnislink) {
                    $button = createLinkButton($dom, $btnclass, $btnid, $btnicon, $btnhref, $btntarget, $btntext, $btnclipboard, $btntooltip);
                } else {
                    $button = createCopyButton($dom, $btnclass, $btnid, $btnicon, $btntext, $btnclipboard, $btntooltip);
                }
                $extra->appendChild($button);
            }
            $card = $dom->createElement('div');
            $card->setAttribute('class', 'card');

            $content = $dom->createElement('div');
            $content->setAttribute('class', 'content');

            $content->appendChild($img);
            $content->appendChild($header);
            $content->appendChild($meta);
            $content->appendChild($description);
            $content->appendChild($divider);
            $content->appendChild($extra);

            $card->appendChild($content);

            array_push($cards, $card);
        }

        return $cards;
    }

    protected function cards($dom) {
        $cards = $dom->createElement('div');
        $cards->setAttribute('class', 'ui centered center aligned stackable cards');
        $dom->saveHTML();
    }

    protected function getHTML($dir) {

    }
}