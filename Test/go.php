<?php
/**
 * User: John
 * Date: 1.4.2017
 * Time: 2:57
 */

require_once __DIR__ . "/../Factory/implementations/MyCaptchaFactory.php";

header("Content-Type: image/png");

//TODO Write proper Unit Tests

$test = new \MyCaptcha\Factory\MyCaptchaFactory();

$captcha = $test->create();

$image = $captcha->getImage();
$text = $captcha->getPhrase();

echo $image;