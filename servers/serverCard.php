<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$dom = new DOMDocument('1.0');

function createElement($dom, $tag, $class, $id = null, $text = null, $extraAttirubutes = [], $attributeValues = [])
{
    $element = $dom->createElement($tag, $text);
    $element->setAttribute('class', $class);

    if (isset($id)) {
        $element->setAttribute('id', $id);
    }

    $attLength = sizeof($extraAttirubutes);
    $valueLength = sizeof($attributeValues);
    if ($attLength > 0 && $valueLength > 0 && ($attLength == $valueLength)) {
        for ($i = 0; $i < $attLength; $i++) {
            $element->setAttribute($extraAttirubutes[$i], $attributeValues[$i]);
        }
    }
    return $element;
}

function createImg($dom, $class, $src)
{
    $img = $dom->createElement('img');
    $img->setAttribute('class', $class);
    $img->setAttribute('src', $src);

    return $img;
}

function createDiv($dom, $class, $text = '')
{
    $div = $dom->createElement('div', $text);
    $div->setAttribute('class', $class);

    return $div;
}

function createa($dom, $href, $target)
{
    $a = $dom->createElement('a');
    $a->setAttribute('href', $href);
    $a->setAttribute('target', $target);

    return $a;
}

function createIcon($dom, $class)
{
    return createElement($dom, 'i', $class, null);
}

function createCopyButton($dom, $class, $id, $icon, $text, $clipboard, $tooltip)
{
    $btn = createElement($dom, 'div', $class, $id, $text, ['data-clipboard-text', 'data-tooltip', 'data-inverted'], [$clipboard, $tooltip, '']);
    $btn->appendChild(createIcon($dom, $icon));
    return $btn;
}

function createLinkButton($dom, $class, $id, $icon, $href, $target, $text, $clipboard, $tooltip)
{
    $a = createa($dom, $href, $target);
    $btn = createElement($dom, 'div', $class, $id, $text, ['data-clipboard-text', 'data-tooltip', 'data-inverted'], [$clipboard, $tooltip, '']);
    $btn->appendChild(createIcon($dom, $icon));
    $a->appendChild($btn);
    return $a;
}

$dir = 'C:\wamp64\www\servers';
$files = glob($dir . '/*.json');
$filejson = array();

foreach ($files as $file) {
    $json = file_get_contents($file);
    $jsonObj = json_decode($json, true);
    array_push($filejson, $jsonObj);
}

foreach ($filejson as $jc) {
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

    $cards = $dom->createElement('div');
    $cards->setAttribute('class', 'ui centered center aligned stackable cards');

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
    $dom->appendChild($card);
}
echo $dom->saveHTML();
//TODO fix dir; can html be variable
$dir = '/servers';
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
}

function getCard($lines): string
{
    return '<div class="card">
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