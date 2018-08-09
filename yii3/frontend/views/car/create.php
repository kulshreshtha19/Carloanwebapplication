<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Carloan */

$this->title = 'Create Carloan';
$this->params['breadcrumbs'][] = ['label' => 'Carloans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carloan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
