<?php

use yii\helpers\Url;

?>

<div class="banner">
    <div class="top-banner">
        <div class="container">
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="header">
        <div class="container">
            <div class="logo">
                <h1>
                    <a href="index.html">Uzbekistan</a>
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
                            <li><a href="#about" id="about-link">Welcome</a></li>
                            <li><a href="#destinations">Destinations</a></li>
                            <li><a href="#news">Blog</a></li>
                            <li><a href="#gallery">Media</a></li>
                            <div class="clearfix"></div>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000"
     data-pause="hover">
    <!-- Wrapper for Slides -->
    <div class="carousel-inner" role="listbox">
        <!-- First Slide -->
        <div class="item active">
            <div class="slider slider2">
                <div class="carousel-caption kb_caption kb_caption_center slider-grid">
                    <h3>Architecture</h3>
                    <p>A Piece of Art</p>
                </div>
            </div>
        </div>

        <!-- Second Slide -->
        <div class="item">
            <div class="slider slider1">
                <div class="carousel-caption kb_caption kb_caption_right slider-grid">
                    <h3>Culture</h3>
                    <p>Passed  Through Centuries</p>
                </div>
            </div>
        </div>

        <!-- Third Slide -->
        <div class="item">
            <div class="slider">
                <div class="carousel-caption kb_caption slider-grid">
                    <h3>Cuisine</h3>
                    <p>Loved & Honored</p>
                </div>
            </div>
        </div>

    </div>
    <!-- Navigation Buttons -->
    <!-- Left Button -->
    <a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
        <span class="fa fa-angle-left kb_icons" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <!-- Right Button -->
    <a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
        <span class="fa fa-angle-right kb_icons" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="block" id="about">
    <div class="container">
        <div class="a-grid">
            <div class="w3l-about-heading">
                <h2>Welcome to Uzbekistan!</h2>
                <p>The Crossroad of Civilizations</p>
            </div>
            <div class="agileits-a-about-grids">
                <div class="col-md-5 agileits-a-about-left">
                    <img src="images/a1.jpg" alt=""/>
                </div>
                <div class="col-md-7 agileits-a-about-right">
                    <p>
                        The region’s cradle of culture for more than two millennia,
                        Uzbekistan is the proud home to a spellbinding arsenal of
                        architecture and ancient cities, all deeply infused with the bloody,
                        fascinating history of the Silk Road. In terms of sights alone,
                        Uzbekistan is Central Asia's biggest draw and most impressive showstopper.
                    </p>
                </div>
                <div class="clearfix"></div>

                <div class="agileits-a-about-grids">
                    <div class="col-md-7 agileits-a-about-right">
                        <p>Samarkand, Bukhara and Khiva never fail to impress
                            visitors with their fabulous mosques, medressas and mausoleums,
                            while its more eccentric attractions, such as the fast disappearing Aral Sea,
                            the fortresses of desperately remote Karakalpakstan, its boom town capital
                            Tashkent and the ecotourism opportunities of the Nuratau Mountains, mean that
                            even the most diverse tastes can be catered for.
                        </p>
                    </div>
                    <div class="col-md-5 agileits-a-about-left">
                        <img src="images/a2.jpg" alt=""/>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="block" id="destinations">
    <div class="container">
        <div class="w3l-about-heading" id="destinations">
            <h2>Top Destinations</h2>
            <p>Must visit cities</P>
        </div>
        <div class="about-grids">
            <div class="col-md-3 about-grid">
                <div class="about-grid-info effect-1">
                    <h4>Samarkand</h4>
                </div>
            </div>
            <div class="col-md-3 about-grid">
                <div class="about-grid-info about-grid-info1 effect-1">
                    <h4>Bukhara</h4>
                </div>
            </div>
            <div class="col-md-3 about-grid">
                <div class="about-grid-info about-grid-info2 effect-1">
                    <h4>Khiva</h4>
                </div>
            </div>
            <div class="col-md-3 about-grid">
                <div class="about-grid-info about-grid-info3 effect-1">
                    <h4>Tashkent</h4>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<div class="news" id="news">
    <div class="container">
        <div class="news-heading">
            <h3>News & Events</h3>
            <? if ($pinned_post): ?>
                <div class="offer">
                    <div class="container">
                        <div class="wthree-offer-grid" style='
                                background: url("/<?= $pinned_post->thumbnail ?>") no-repeat center center'>
                            <h4><?= $pinned_post->title ?></h4>
                            <div class="click-button">
                                <a href="<?= Url::to(['blog/view', 'slug' => $pinned_post->slug]) ?>">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <div class="news-grids">
                <?php foreach ($latest_posts as $post): ?>
                    <div class="col-md-4 news-grid">
                        <div class="agile-news-grid-info">
                            <div class="news-grid-info-img">
                                <a href="<?= Url::to(['blog/view', 'slug' => $post->slug]) ?>"><img
                                            src="<?= '/' . $post->thumbnail ?>"/></a>
                            </div>
                            <div class="news-grid-info-bottom">
                                <div class="news-grid-info-bottom-text">
                                    <a href="<?= Url::to(['blog/view', 'slug' => $post->slug]) ?>"><?= $post->title ?></a>
                                    <p><?= $post->description ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="clearfix"></div>
            </div>
            <div class="blog-button">
                <a href="<?= Url::to(['/blog']) ?>">More Posts</a>
            </div>
        </div>
    </div>
    <!-- //news -->
</div>

<div class="a-grid" id="gallery">
    <div class="container">
        <div class="w3l-about-heading">
            <h2>Uzbekistan Media</h2>
            <p>Instagram life feed <i class="fa fa-instagram"></i></p>
        </div>
        <div class="gallery">
            <?php for ($i = 0; $i < count($instagram_gallery); $i++): ?>
                <div class="gallery-small gallery-middle">
                    <div class="gallery-small-text effect-3">
                        <a href="<?= $instagram_gallery[$i]['url'] ?>" class="big"><img
                                    src="<?= $instagram_gallery[$i]['url'] ?>"/></a>
                    </div>
                </div>
            <?php endfor; ?>
            <div class="clearfix"></div>
        </div>
        <div class="w3l-about-heading">
            <p>Youtube feed <i class="fa fa-youtube-square"></i></p>
        </div>
        <div class="gallery">
            <?php foreach ($youtube_feed as $item):
                $url = "https://www.youtube.com/embed/" . $item->id->videoId;
                ?>
                <div class="gallery-bg">
                    <iframe width="100%" height="auto"
                            src="<?= $url ?>"
                            allowfullscreen>
                    </iframe>
                </div>
            <?php endforeach; ?>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
