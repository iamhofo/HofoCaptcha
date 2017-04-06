<?php
/**
 * User: John
 * Date: 1.4.2017
 * Time: 15:56
 */
namespace MyCaptcha\Factory;

use MyCaptcha\Models\MyCaptchaInterface;

interface MyCaptchaFactoryInterface
{
    /**
     * @param int $phraseLength
     * @param int $widthPx
     * @param int $heightPx
     * @param null|resource $backgroundImage
     * @return MyCaptchaInterface
     */
    public static function create($phraseLength = 5, $widthPx = 160, $heightPx = 80, $backgroundImage = null);
}
