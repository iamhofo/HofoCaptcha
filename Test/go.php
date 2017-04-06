<?php
/**
 * User: John
 * Date: 1.4.2017
 * Time: 2:57
 */

require_once __DIR__ . "/../Factory/implementations/MyCaptchaFactory.php";

header("Content-Type: image/png");

/**
 * MyCaptcha 2017-04-01
 *
 * I. Request captcha
 *  a ) on register
 *  b ) on suspicious activity
 *
 * II. Generate captcha
 *
 * III. Get captcha
 *
 * IV. Get user input
 *
 * V. Compare given input to expected input
 *
 * VI. Return result to user
 */

//TODO Proper tests

$test = new \MyCaptcha\Factory\MyCaptchaFactory();

$captcha = $test->create();

$image = $captcha->getImage();
$text = $captcha->getPhrase();

echo $image;

echo $text;

file_put_contents("image.png", $image);