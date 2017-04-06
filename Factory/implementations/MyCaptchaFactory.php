<?php
/**
 * User: John
 * Date: 1.4.2017
 * Time: 4:47
 */

namespace MyCaptcha\Factory;

require_once __DIR__ . "/../contracts/MyCaptchaFactoryInterface.php";
require_once __DIR__ . "/../../Models/implementations/MyCaptcha.php";
require_once __DIR__ . "/../../Generators/implementations/PhraseGenerator.php";
require_once __DIR__ . "/../../Generators/implementations/ImageGenerator.php";

use MyCaptcha\Generators\ImageGenerator;
use MyCaptcha\Generators\PhraseGenerator;
use MyCaptcha\Models\MyCaptcha;

class MyCaptchaFactory implements MyCaptchaFactoryInterface
{
  public static function create($phraseLength = 5, $widthPx = 160, $heightPx = 80, $backgroundImage = null){
        return new MyCaptcha($phraseLength, $widthPx, $heightPx, $backgroundImage, new PhraseGenerator(), new ImageGenerator());
    }
}