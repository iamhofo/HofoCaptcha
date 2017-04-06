<?php
/**
 * User: John
 * Date: 2.4.2017
 * Time: 22:56
 */

namespace MyCaptcha\Generators;

interface ImageGeneratorInterface
{
    /**
     * @param int $widthPx
     * @param int $heightPx
     * @param string $phrase
     * @return string
     */
    public function generate($widthPx, $heightPx, $phrase);
}