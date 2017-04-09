# HofoCaptcha
Unfinished version of pointless captcha. **Not meant for usage.**

![Captchas examples](http://i.imgur.com/ddEfU8U.png)



# How to use:
```
require_once __DIR__ . "/Factory/implementations/MyCaptchaFactory.php";

$captchaFactory = new \MyCaptcha\Factory\MyCaptchaFactory();
//instantiates new instance of MyCaptchaFactory which has only 1 method->create();

$captcha = $captchaFactory->create();
//returns new instance of MyCaptcha model.

$image = $captcha->getImage();
//returns image in png format by default

$phrase = $captcha->getPhrase();
//returns phrase in string
```

If you're looking for a good way to ensure your website is safe against bots, I recommend using Google reCAPTCHA.

I will keep updating this periodically.
