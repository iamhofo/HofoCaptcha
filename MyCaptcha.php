<?php

/**
 * User: John
 * Date: 1.4.2017
 * Time: 4:33
 */
namespace MyCaptcha\Repository\Contracts;

use MyCaptcha\PhraseGeneratorInterface;

class MyCaptcha
{
    private $phrase;
    private $textColor;
    private $backgroundColor;
    private $image;

    function __construct(PhraseGeneratorInterface $phraseBuilder)
    {
        $this->phrase = $phraseBuilder->generate();
    }


    public function getImage(){
        return $this->image;
    }

    /**
     * @param $phrase
     * @param $widthPx
     * @param $heightPx
     * @param $background
     */
    public function generateImage($phrase, $widthPx = 160, $heightPx = 80, $background){



    }

    public function getPhrase(){
        return $this->phrase;
    }

    private function obfuscate($image){
        $saltedImage = $image;
    }

}

$captcha = new Recaptcha();

$image = $captcha->getImage();

$result = $captcha->getResult();

class MyCaptchaModel{



}

class CaptchaController{


    private function view(MyCaptchaModelInterface $captcha){
        $image = $captcha->getImage();
        $result = $captcha->getResult();
    }

}