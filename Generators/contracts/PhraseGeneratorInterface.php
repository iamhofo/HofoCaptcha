<?php
/**
 * User: John
 * Date: 1.4.2017
 * Time: 14:30
 */

namespace MyCaptcha\Generators;

interface PhraseGeneratorInterface
{
    /**
     * @return string
     */
    public function generate();
}