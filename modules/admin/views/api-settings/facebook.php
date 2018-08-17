<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Facebook Api Settings';
$this->params['breadcrumbs'][] = 'Facebook Api Settings';
?>
<div class="post-update">

    <h3><?= Html::encode($this->title) ?></h3>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'facebook_access_token')->passwordInput() ?>

    <?= $form->field($model, 'facebook_channel')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>


    <?php ActiveForm::end(); ?>

</div>


</div>

