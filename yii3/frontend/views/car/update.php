<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Carloan */

$this->title = 'Update Carloan: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Carloans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="carloan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
