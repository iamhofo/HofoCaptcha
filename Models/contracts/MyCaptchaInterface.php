<?php
/**
 * User: John
 * Date: 1.4.2017
 * Time: 4:52
 */

namespace MyCaptcha\Models;

/**
 * Interface MyCaptchaInterface
 * @package MyCaptcha\Models\Contracts
 */
interface MyCaptchaInterface
{

    /**
     * @return mixed
     */
    public function getImage();

    /**
     * @return string
     */
    public function getPhrase();
}
