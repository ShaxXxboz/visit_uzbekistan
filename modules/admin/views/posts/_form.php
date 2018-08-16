<?php

use mihaildev\ckeditor\CKEditor;
use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model app\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-md-6">

        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

        <?php echo $form->field($model, 'content')->widget(CKEditor::className(), [
            'editorOptions' => [
                'preset' => 'basic', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                'height' => 400,
            ],
        ]); ?>

        <?= $form->field($model, 'pinned')->dropDownList([0 => 'No', 1 => 'Yes']) ?>

        <?= $form->field($model, 'status')->dropDownList([1 => 'Active', 0 => 'Disabled']) ?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

    </div>

    <div class="col-md-6">

        <label class="control-label" for="settings-favicon_file">Thumbnail</label>

        <? if ($model->thumbnail != '' AND file_exists($model->thumbnail)): ?>
            <div class="thumbnail">
                <?= Html::img('/' . $model->thumbnail, [
                    'width' => '50%',
                ]); ?>

            </div>
        <?php endif; ?>

        <?= $form->field($model, 'thumbnail_file')->fileInput()->label(false) ?>

        <? echo $form->field($model, 'description')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'slug')->textInput()
            ->label('Slug (If empty will be generated automatically)') ?>


    </div>


    <?php ActiveForm::end(); ?>

</div>
