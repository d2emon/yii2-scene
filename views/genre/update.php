<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model d2emon\scene\models\Genre */

$this->title = Yii::t('scene', 'Update {modelClass}: ', [
    'modelClass' => 'Genre',
]) . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('scene', 'Genres'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('scene', 'Update');
?>
<div class="genre-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
