<?php
/**
 * Created by PhpStorm.
 * User: Навруз
 * Date: 26.07.2018
 * Time: 13:20
 */

namespace app\controllers;

use app\models\Settings;
use yii\web\Controller;
use Yii;

class AppController extends Controller
{
    public function debug($array)
    {
        echo "<pre>";
        var_dump($array);
        echo "</pre>";
    }

    public function registerSeo($title = '', $keywords = '', $description = '')
    {
        $settings = Settings::find()->one();

        $title != '' ? Yii::$app->view->title = $settings->site_title . ' | ' . $title : Yii::$app->view->title = $settings->site_title . ' | Home';

        if ($description != '') {
            Yii::$app->view->registerMetaTag([
                'name' => 'description',
                'content' => $description,
            ]);
        } else {
            Yii::$app->view->registerMetaTag([
                'name' => 'description',
                'content' => $settings->site_description,
            ]);
        }

        if ($keywords != '') {
            Yii::$app->view->registerMetaTag([
                'name' => 'keywords',
                'content' => $keywords,
            ]);
        } else {
            Yii::$app->view->registerMetaTag([
                'name' => 'keywords',
                'content' => $settings->site_keywords,
            ]);
        }
    }
}