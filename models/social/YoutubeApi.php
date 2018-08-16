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
    public $app_key;


    public function getVideos($limit = 5)
    {
        $url = "https://www.googleapis.com/youtube/v3/search?key=$this->app_key&part=snippet,id&order=date&maxResults=$limit";
    }

}