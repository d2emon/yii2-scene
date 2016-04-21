<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model d2emon\scene\models\Spectacle */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('scene', 'Spectacles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spectacle-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('scene', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('scene', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('scene', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'description:ntext',
            'premiere',
            'poster',
            'genre_id',
        ],
    ]) ?>

</div>
