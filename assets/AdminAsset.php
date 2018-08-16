<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Admin asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'admin_asset/css/bootstrap.css',
        'admin_asset/css/animate.min.css',
        'admin_asset/css/light-bootstrap-dashboard.css?v=1.4.0',
        'http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css',
        'http://fonts.googleapis.com/css?family=Roboto:400,700,300',
        'admin_asset/css/pe-icon-7-stroke.css',

    ];
    public $js = [
        //'admin_asset/js/jquery.3.2.1.min.js',
        'admin_asset/js/bootstrap.min.js',
        'admin_asset/js/chartist.min.js',
        'admin_asset/js/bootstrap-notify.js',
        'admin_asset/js/light-bootstrap-dashboard.js?v=1.4.0',
        'admin_asset/js/demo.js',
    ];
}
