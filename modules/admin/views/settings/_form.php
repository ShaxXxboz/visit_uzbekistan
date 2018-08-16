<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Settings */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-md-6">
        <?= $form->field($model, 'site_title')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'site_description')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'site_keywords')->textInput(['maxlength' => true]) ?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>
    </div>

    <div class="col-md-6">
        <label class="control-label" for="settings-favicon_file">Favicon</label>
        <? if ($model->favicon != '' AND file_exists($model->favicon)): ?>
            <div class="thumbnail">
                <?= Html::img('/' . $model->favicon, [
                    'width' => '50%',
                ]); ?>

            </div>
        <?php endif; ?>

        <?= $form->field($model, 'favicon_file')->fileInput()->label(false) ?>

    </div>

    <?php ActiveForm::end(); ?>

</div>
