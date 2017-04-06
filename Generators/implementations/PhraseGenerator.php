<?php
/**
 * User: John
 * Date: 1.4.2017
 * Time: 14:26
 */

namespace MyCaptcha\Generators;

require_once __DIR__ . "/../contracts/PhraseGeneratorInterface.php";

class PhraseGenerator implements PhraseGeneratorInterface
{
    /**
     * @param int $length
     * @param string $charset
     * @return string
     */
    public function generate($length = 5, $charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789')
    {
        $phrase = '';
        $characters = str_split($charset);

        for($i=0; $i<$length; $i++){
            $phrase .= $characters[array_rand($characters)];
        }
        return $phrase;
    }
}