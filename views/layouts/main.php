<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;

\app\assets\AppAsset::register($this);

$settings = \app\models\Settings::find()->one();


?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>

    <title><?= Html::encode($this->title) ?></title>

    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Prata" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Halant" rel="stylesheet">
    <?php $this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'href' => '/' . $settings->favicon]); ?>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?= $content ?>
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="footer-grids">
            <div class="col-md-6 footer-grid">
                <div class="footer-grid-heading">
                    <h4>Address</h4>
                </div>
                <div class="footer-grid-info">
                    <p>Visit Uzbekistan
                        <span>St Shodiev, Jizzakh 130100.</span>
                    </p>
                    <p class="phone">Phone : +XXX XXXX XXX
                        <span>Email : <a href="mailto:shaxbozfarhodov@gmail.com">shaxbozfarhodov@gmail.com</a></span>
                    </p>
                </div>
            </div>
            <div class="col-md-6 footer-grid">
                <div class="footer-grid-heading">
                    <h4>Follow</h4>
                </div>
                <div class="social">
                    <ul>
                        <li><a href="https://www.facebook.com/visituzbekistan2018/"><i
                                        class="fa fa-facebook-square"></i></a></li>
                        <li><a href="https://www.instagram.com/visituzbekistan2018/"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li><a href="https://www.youtube.com/channel/UCilhbsbhiXgTjQjpw7DATgQ"><i
                                        class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="copyright">
            <p>© <?= date('Y') ?> Visit Uzbekistan . All Rights Reserved</p>
        </div>
    </div>
</div>
<!-- //footer -->
<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
