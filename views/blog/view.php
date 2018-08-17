<?php
/* @var $this yii\web\View */

use yii\helpers\Url;

?>

<div class="banner about-bg">
    <div class="header">
        <div class="container navigation-top">
            <div class="logo">
                <h1>
                    <a href="<?= Url::to(['/index']) ?>">Uzbekistan</a>
                </h1>
            </div>
            <div class="top-nav">
                <nav class="navbar navbar-default">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">Menu
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="<?= Url::to(['/index']) ?>" id="about-link">Welcome</a></li>
                            <li><a href="<?= Url::to(['/index#destinations']) ?>">Destinations</a></li>
                            <li><a class="active" href="<?= Url::to(['/blog']) ?>">Blog</a></li>
                            <li><a href="<?= Url::to(['/index#gallery']) ?>#gallery">Media</a></li>
                            <div class="clearfix"></div>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="a-grid">
    <div class="container">
        <div class="w3l-about-heading">
            <h2><?= $post->title ?></h2>
            <p><?= $post->description ?></p>
        </div>
        <div class="agileits-a-about-grids">
            <div class="col-md-8 col-md-offset-2 agileits-a-about-left">
                <img src="/<?= $post->thumbnail ?>" alt=""/>
            </div>
            <div class="col-md-12 agileits-a-about-right">
                <?= $post->content ?>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
