<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Youtube Api Settings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-update">

    <h3><?= Html::encode($this->title) ?></h3>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'youtube_api_key')->textInput() ?>

    <?= $form->field($model, 'youtube_channel')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>


    <?php ActiveForm::end(); ?>

</div>


</div>

