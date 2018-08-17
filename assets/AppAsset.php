<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.css',
        'css/style.css',
        'http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css',
        'css/simplelightbox.min.css',
        'css/ken-burns.css',
    ];
    public $js = [
        'admin_asset/js/jquery.3.2.1.min.js',
        'js/SmoothScroll.min.js',
        'js/bootstrap.js',
        'js/SmoothScroll.min.js',
        'js/simple-lightbox.js',
        'js/main.js',
    ];
}
