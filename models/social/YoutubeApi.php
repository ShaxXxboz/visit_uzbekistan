<?php
/**
 * Created by PhpStorm.
 * User: Навруз
 * Date: 16.08.2018
 * Time: 15:49
 */

namespace app\models\social;


class YoutubeApi extends SocialApi
{
    private $app_key;
    private $channel;

    public function __construct($app_key, $channel)
    {
        $this->app_key = $app_key;
        $this->channel = $channel;
    }


    public function getVideos($limit = 6)
    {
        $url = "https://www.googleapis.com/youtube/v3/search?key=$this->app_key&channelId=$this->channel&part=snippet,id&order=date&maxResults=$limit";
        $feed = $this->processURL($url);

        return json_decode($feed);
    }

}