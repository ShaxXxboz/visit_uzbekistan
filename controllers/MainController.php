<?php
/**
 * Created by PhpStorm.
 * User: Навруз
 * Date: 16.08.2018
 * Time: 17:08
 */

namespace app\controllers;


use app\models\ApiSettings;
use app\models\Post;
use app\models\social\InstagramApi;
use app\models\social\YoutubeApi;

class MainController extends AppController
{

    public function actionIndex()
    {
        $this->registerSeo();

        $api_settings = ApiSettings::find()->one();

        $instagram_class = new InstagramApi($api_settings->instagram_access_token);
        $instagram_gallery = $instagram_class->getGallery(5);

        $youtube_class = new YoutubeApi($api_settings->youtube_api_key, $api_settings->youtube_channel);
        $youtube_feed = $youtube_class->getVideos();

        $latest_posts = Post::find()->limit(3)->orderBy(['id' => SORT_DESC])->where(['status' => 1])->all();
        $pinned_post = Post::find()->where(['pinned' => 1])->andWhere(['status' => 1])->one();

        $params = [
            'instagram_gallery' => $instagram_gallery,
            'latest_posts' => $latest_posts,
            'pinned_post' => $pinned_post,
            'youtube_feed' => $youtube_feed->items,
        ];

        return $this->render('index', $params);
    }

}