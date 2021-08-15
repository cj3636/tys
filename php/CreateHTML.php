<?php

namespace TYS;

use DOMDocument;

interface CreateHTML {
    public function createElement($dom, $tag, $class, $id = null, $text = null, $extraAttirubutes = [], $attributeValues = []): DOMDocument;

    public function createImg($dom, $class, $src): DOMDocument;

    public function createDiv($dom, $class, $text = ''): DOMDocument;

    public function createa($dom, $class, $href, $target): DOMDocument;

    public function createIcon($dom, $class): DOMDocument;

    public function createCopyButton($dom, $class, $id, $text, $clipboard, $tooltip, $icon = null): DOMDocument;

    public function createLinkButton($dom, $class, $id, $href, $target, $text, $clipboard, $tooltip, $icon): DOMDocument;
}