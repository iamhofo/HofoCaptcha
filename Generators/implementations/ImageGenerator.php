<?php
/**
 * User: John
 * Date: 2.4.2017
 * Time: 22:55
 */

namespace MyCaptcha\Generators;

require_once __DIR__ . "/../contracts/ImageGeneratorInterface.php";

class ImageGenerator implements ImageGeneratorInterface
{
    public function generate($widthPx, $heightPx, $phrase)
    {
        $fonts = array();
        $fontsDirectory = __DIR__ . "/../../fonts";
        foreach (new \DirectoryIterator($fontsDirectory) as $file){
            if($file->isFile())
            $fonts[] = $fontsDirectory . "/" . $file->getFilename();
        }
        //var_dump($fonts);
        $fonts = scandir($fontsDirectory);
        $image = imagecreatetruecolor($widthPx, $heightPx);
        $bg = imagecolorallocate($image, rand(230, 255), rand(230, 255), rand(230, 255));
        imagefill($image,0,0,$bg);
        $fontColor = imagecolorallocate($image, rand(30, 155), rand(30, 155), rand(30, 155));
        imagettftext($image, 22, rand(0, 30), $widthPx - ($widthPx - rand(10,40) ), $heightPx - rand(10,30), $fontColor, __DIR__ . "/../../fonts/arial.ttf", $phrase);
        ob_start();
        imagefilter($image, IMG_FILTER_MEAN_REMOVAL);
        imagefilter($image, IMG_FILTER_NEGATE);
        imagepng($image);
        $stringData = ob_get_contents();
        ob_end_clean();
        $zData = $stringData;
        return $zData;
    }
}