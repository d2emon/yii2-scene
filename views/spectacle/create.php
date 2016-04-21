<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model d2emon\scene\models\Spectacle */

$this->title = Yii::t('scene', 'Create Spectacle');
$this->params['breadcrumbs'][] = ['label' => Yii::t('scene', 'Spectacles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spectacle-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
