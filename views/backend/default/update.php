<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\projemodulu\models\SikayetTablosu */

$this->title = 'Update Sikayet Tablosu: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sikayet Tablosus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sikayet-tablosu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>