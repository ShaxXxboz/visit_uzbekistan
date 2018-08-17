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
                            <li><a class="active" href="#">Blog</a></li>
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
<!-- //banner -->
<div class="news" id="news">
    <div class="container">
        <div class="news-heading">
            <h3>News & Events</h3>

            <div class="news-grids">
                <?php foreach ($latest_posts as $post): ?>
                    <div class="col-md-10 col-md-offset-1 news-grid1">
                        <div class="agile-news-grid-info">
                            <div class="news-grid-info-img col-md-4">
                                <a href="<?= Url::to(['blog/view', 'slug' => $post->slug]) ?>"><img
                                            src="<?= '/' . $post->thumbnail ?>"/></a>
                            </div>
                            <div class="news-grid-info-bottom col-md-7">
                                <div class="date-grid">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="news-grid-info-bottom-text">
                                    <a href="<?= Url::to(['blog/view', 'slug' => $post->slug]) ?>"><?= $post->title ?></a>
                                    <p class="blog-page-p"><?= $post->description ?> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="pagination-button">
                <?= \yii\widgets\LinkPager::widget([
                    'pagination' => $pages,
                ]); ?>
            </div>
        </div>
    </div>
    <!-- //news -->
</div>
