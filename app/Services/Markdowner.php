<?php
/**
 * Created by PhpStorm.
 * Author: SpiRit-Moon
 * Time: 2019/1/22 14:25
 * Module: Markdowner.php
 */

namespace App\Services;

use Michelf\MarkdownExtra;
use Michelf\SmartyPants;

class Markdowner
{
    public function toHTML($text)
    {
        $text = $this->preTransformText($text);
        $text = MarkdownExtra::defaultTransform($text);
        $text = SmartyPants::defaultTransform($text);
        $text = $this->postTransformText($text);
        return $text;
    }

    protected function preTransformText($text)
    {
        return $text;
    }

    protected function postTransformText($text)
    {
        return $text;
    }
}