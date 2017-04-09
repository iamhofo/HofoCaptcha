# HofoCaptcha
Unfinished version of pointless captcha. Not meant for usage.

# How to use:

require_once __DIR__ . "/Factory/implementations/MyCaptchaFactory.php";

$captchaFactory = new \MyCaptcha\Factory\MyCaptchaFactory();
//instantiates new instance of MyCaptchaFactory which has only 1 method->create();

$captcha = $captchaFactory->create();
//returns new instance of MyCaptcha model.

$image = $captcha->getImage();
//returns image in png format by default

$phrase = $captcha->getPhrase();
//returns phrase in string
