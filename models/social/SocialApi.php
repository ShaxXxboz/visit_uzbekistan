<?php
/**
 * Created by PhpStorm.
 * User: Навруз
 * Date: 16.08.2018
 * Time: 0:23
 */

namespace app\models\social;


class SocialApi
{
    public function processURL($url)
    {
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => 2
        ));

        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
}