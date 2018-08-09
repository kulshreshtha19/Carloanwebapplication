<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Carloan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carloan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cartype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'precar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'currenlive')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grosssalary')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'salaryaccount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'joiningdate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'workexperience')->textInput() ?>

    <?= $form->field($model, 'movecity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'movecurrent')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'age')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Emi')->textInput() ?>

    <?= $form->field($model, 'monthlyincentive')->textInput() ?>

    <?= $form->field($model, 'residencetype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'savetype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cid')->textInput() ?>

    <?= $form->field($model, 'createdAt')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
