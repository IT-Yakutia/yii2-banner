<?php

use uraankhayayaal\materializecomponents\checkbox\WCheckbox;
use uraankhayayaal\materializecomponents\imgcropper\Cropper;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

?>

<div class="banner-form">

    <?php $form = ActiveForm::begin([
        'errorCssClass' => 'red-text',
    ]); ?>

    <?= WCheckbox::widget(['model' => $model, 'attribute' => 'is_publish']); ?>

    <div class="row">
        <div class="col s12 m4 l6">
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col s12 m4 l6">
            <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col s12 m4 l6">
            <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col s12 m6 l6">
            
            <?= $form->field($model, 'photo')->widget(Cropper::class, [
                'aspectRatio' => 421/1680,
                'maxSize' => [1680, 421, 'px'],
                'minSize' => [10, 10, 'px'],
                'startSize' => [100, 100, '%'],
                'uploadUrl' => Url::to(['/banner/back/uploadImg']),
            ]); ?>
            <small>Your upload img have to has size: 1680x421 px</small>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn']) ?>
    </div>
    <div class="fixed-action-btn">
        <?= Html::submitButton('<i class="material-icons">save</i>', [
            'class' => 'btn-floating btn-large waves-effect waves-light tooltipped',
            'title' => 'Сохранить',
            'data-position' => "left",
            'data-tooltip' => "Сохранить",
        ]) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
