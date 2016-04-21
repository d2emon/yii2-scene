<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model d2emon\scene\models\Spectacle */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="spectacle-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'premiere')->textInput() ?>

    <?= $form->field($model, 'poster')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'genre_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('scene', 'Create') : Yii::t('scene', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
