<?php

use yii\grid\GridView;
use yii\helpers\Html;
use app\models\InstagramApi;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="post-index">

    <h2><?= Html::encode($this->title) ?></h2>

    <p>
        <?= Html::a('Create Post', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            //'thumbnail',
            //'description:ntext',
            'keywords',
            [
                'attribute' => 'status',
                'value' => function ($data) {
                    return $data->status ? '<span class="text-success">Active</span>' : '<span class="text-danger">Disabled</span>';
                },
                'format' => 'html',
                'filter'=>array(1 => "Active", 2 => "Disabled"),
            ],
            //'created_at',
            //'updated_at',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update}{delete}',
                'buttons' => [
                    'update' => function ($url, $model) {
                        return Html::a('<span class="fa fa-pencil"></span>', $url);
                    },
                    'delete' => function ($url, $model) {
                        return Html::a('<span class="fa fa-trash"></span>', $url);
                    }

                ],
            ],
        ],
    ]); ?>
</div>
