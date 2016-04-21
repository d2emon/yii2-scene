<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model d2emon\scene\models\Genre */

$this->title = Yii::t('scene', 'Create Genre');
$this->params['breadcrumbs'][] = ['label' => Yii::t('scene', 'Genres'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="genre-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
