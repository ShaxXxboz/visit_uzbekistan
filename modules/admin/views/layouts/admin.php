<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AdminAsset;
use yii\widgets\Breadcrumbs;
use app\widgets\Alert;
use yii\helpers\Url;


AdminAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en_US">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="/admin_asset/img/sidebar-5.jpg">
        <!--
            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag
        -->
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Admin Panel
                </a>
            </div>

            <ul class="nav">
                <li <? if (Yii::$app->controller->id == 'posts'):?> class="active" <? endif;?>>
                    <a href="<?= Url::to(['posts/index'])?>">
                        <i class="fa fa-clipboard"></i>
                        <p>Posts</p>
                    </a>
                </li>
                <li <? if ($this->title == 'Youtube Api Settings'):?> class="active" <? endif;?>>
                    <a href="<?= Url::to(['api-settings/youtube'])?>">
                        <i class="fa fa-youtube"></i>
                        <p>Youtube Api</p>
                    </a>
                </li>
                <li <? if ($this->title == 'Instagram Api Settings'):?> class="active" <? endif;?>>
                    <a href="<?= Url::to(['api-settings/instagram'])?>">
                        <i class="fa fa-instagram"></i>
                        <p>Instagram Api</p>
                    </a>
                </li>
                <li <? if ($this->title == 'Facebook Api Settings'):?> class="active" <? endif;?>>
                    <a href="<?= Url::to(['api-settings/facebook'])?>">
                        <i class="fa fa-facebook-square"></i>
                        <p>Facebook Api</p>
                    </a>
                </li>
                <li <? if (Yii::$app->controller->id == 'settings'):?> class="active" <? endif;?>>
                    <a href="<?= Url::to(['settings/update'])?>">
                        <i class="fa fa-cog"></i>
                        <p>SEO Settings</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><?= $this->title?></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item dropdown">
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Admin
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="<?= Url::to(['/site/logout'])?>">Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <?= Breadcrumbs::widget([
                        'homeLink' => ['label' => 'Admin', 'url' => '/admin/posts'],
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]) ?>
                    <?//= Alert::widget() ?>
                </div>
                <div class="row">
                    <?= $content ?>
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>

<!-- ./wrapper -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
