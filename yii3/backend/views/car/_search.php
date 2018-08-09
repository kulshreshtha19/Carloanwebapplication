<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CarSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carloan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'phone') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'cartype') ?>

    <?php // echo $form->field($model, 'precar') ?>

    <?php // echo $form->field($model, 'currenlive') ?>

    <?php // echo $form->field($model, 'comname') ?>

    <?php // echo $form->field($model, 'grosssalary') ?>

    <?php // echo $form->field($model, 'salaryaccount') ?>

    <?php // echo $form->field($model, 'joiningdate') ?>

    <?php // echo $form->field($model, 'workexperience') ?>

    <?php // echo $form->field($model, 'movecity') ?>

    <?php // echo $form->field($model, 'movecurrent') ?>

    <?php // echo $form->field($model, 'age') ?>

    <?php // echo $form->field($model, 'Emi') ?>

    <?php // echo $form->field($model, 'monthlyincentive') ?>

    <?php // echo $form->field($model, 'residencetype') ?>

    <?php // echo $form->field($model, 'savetype') ?>

    <?php // echo $form->field($model, 'cid') ?>

    <?php // echo $form->field($model, 'createdAt') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
