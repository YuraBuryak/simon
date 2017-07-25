<?php
error_reporting(-1);
ini_set('display_errors', true);
include 'simple_html_dom.php';


class LinkFinder extends simple_html_dom
{
    public function getAllLinks()
    {
        $links = [];
        foreach ($this->find('a') as $element) {
            $links[] = $element->href;
        }
        $links = array_unique($links);
        return $links;

    }
}

$linkFinder = new LinkFinder('http://sinoptik.ua/');

echo implode('<br/>', $linkFinder->getAllLinks());