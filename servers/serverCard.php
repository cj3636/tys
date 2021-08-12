<!--Vanilla Card-->
<!--<div class="card">-->
<!--    <div class="content">-->
<!--        <img class="right floated small ui image" alt="TYS VANILLA LOGO" src="/img/TYS_VANILLA.png">-->
<!--        <div class="header">Vanilla</div>-->
<!--        <div class="meta">Vanilla Minecraft with Plugins</div>-->
<!--        <div class="description">An experience you can't miss! Factions, Minigames, Creative plots. You-->
<!--            name it, we've-->
<!--            got it.-->
<!--        </div>-->
<!--        <div class="ui divider"></div>-->
<!--        <div class="extra content">-->
<!--            <button class="ui huge green button" id="copyIP" data-clipboard-text="theyellowsub.us"-->
<!--                    data-tooltip="Copy Vanilla IP Address"-->
<!--                    data-inverted=""><i class="copy outline left icon"></i>Vanilla IP-->
<!--            </button>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<?php
$dom = new DOMDocument('1.0');

function createElement($dom, $tag, $class, $id, $text = '', $extraAttirubutes = [], $attributeValues = [])
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
            $element->setAttribute($extraAttirubutes[$i]);
            $element->setAttribute($attributeValues[$i]);
        }
    }
    //$dom->appendChild($element);
    return $element;
}

function createImageElement($dom, $class, $alt, $src)
{
    $img = $dom->createElement('img');
    $img->setAttribute('class', $class);
    $img->setAttribute('alt', $alt);
    $img->setAttribute('src', $src);

    //$dom->appendChild($img);
    return $img;
}

$card = $dom->createElement('div');
$card->setAttribute('class', 'card');

$content = $dom->createElement('div');
$content->setAttribute('class', 'content');

//$content->appendChild();

$dir = '../servers';
$files = glob($dir . '/*.json');
$jsonContents = array();

foreach ($files as $file) {
    $json = file_get_contents($file);
    $jsonObj = json_decode($json, true);
    array_push($jsonContents, $jsonObj);
    $img = $jsonObj["img"];
    $class = "class";

    echo $img[$class];
}

//createImageElement($dom, "right floated small ui image", "TYS VANILLA LOGO", "/img/TYS_VANILLA.png");
$card->appendChild($content);
$dom->appendChild($card);

echo $dom->saveHTML();
?>