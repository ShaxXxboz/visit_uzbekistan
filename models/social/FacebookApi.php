<?php
/**
 * Created by PhpStorm.
 * User: Навруз
 * Date: 16.08.2018
 * Time: 15:14
 */

namespace app\models\social;


class FacebookApi extends SocialApi
{
    private $access_token;
    private $channel;

    public function __construct($access_token, $channel)
    {
        $this->access_token = $access_token;
        $this->channel = $channel;
    }

    /**
     * @return array|mixed
     *
     * funtion for retrieving posts from facebook
     */

    public function getPosts()
    {
        $url = "https://graph.facebook.com/v2.9/$this->channel/posts?access_token=$this->access_token";

        $posts = $this->processURL($url);

        if ($posts['data'])
            return $posts['data'];
        else
            return [];
    }
}