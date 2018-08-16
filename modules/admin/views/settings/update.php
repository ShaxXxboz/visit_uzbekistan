<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Settings */

$this->title = 'Settings';
$this->params['breadcrumbs'][] = 'Settings';
?>
<div class="settings-update">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
