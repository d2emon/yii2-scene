<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model d2emon\scene\models\Spectacle */

$this->title = Yii::t('scene', 'Update {modelClass}: ', [
    'modelClass' => 'Spectacle',
]) . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('scene', 'Spectacles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('scene', 'Update');
?>
<div class="spectacle-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
