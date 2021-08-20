<?php
namespace TYS;
use DOMDocument;

require_once 'CreateHTML.php';

class PHP2HTML implements CreateHTML {
    public function createElement($dom,
        $tag,
        $class,
        $id = null,
        $text = null,
        $extraAttirubutes = [],
        $attributeValues = []): DOMDocument {
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

    public function createImg($dom, $class, $src): DOMDocument {
        $img = $dom->createElement('img');
        $img->setAttribute('class', $class);
        $img->setAttribute('src', $src);
        return $img;
    }

    public function createDiv($dom, $class, $text = ''): DOMDocument {
        $div = $dom->createElement('div', $text);
        $div->setAttribute('class', $class);
        return $div;
    }

    public function createa($dom, $class, $href, $target): DOMDocument {
        $a = $dom->createElement('a');
        $a->setAttribute('href', $href);
        $a->setAttribute('target', $target);
        return $a;
    }

    public function createIcon($dom, $class): DOMDocument {
        return createElement($dom, 'i', $class, null);
    }

    public function createCopyButton($dom, $class, $id, $text, $clipboard, $tooltip, $icon = null): DOMDocument {
        $btn = createElement($dom, 'div', $class, $id, $text, ['data-clipboard-text', 'data-tooltip', 'data-inverted'],
            [$clipboard, $tooltip, '']);
        $btn->appendChild(createIcon($dom, $icon));
        return $btn;
    }

    public function createLinkButton(
        $dom,
        $class,
        $id,
        $href,
        $target,
        $text,
        $clipboard,
        $tooltip,
        $icon = null
    ): DOMDocument {
        $a = createa($dom, $href, $target);
        $btn = createElement($dom, 'div', $class, $id, $text, ['data-clipboard-text', 'data-tooltip', 'data-inverted'],
            [$clipboard, $tooltip, '']);
        $btn->appendChild(createIcon($dom, $icon));
        $a->appendChild($btn);
        return $a;
    }
}
