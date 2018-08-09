<?php 

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\jui\DatePicker;
use yii\web\AssetBundle;
use yii\helpers\Url;

$this->title = 'Update your profile';
// $this->params['breadcrumbs'][] = $this->title;
?>

<style>
	img{
		border-radius: 50%;
		margin-left: 130px;
	}
</style>

<div class="site-contact">
	<h1><?=($this->title)?></h1>

	<div class="row">
		<div class="col-lg-5">

			<?php if(empty($model->profileimage)){ ?> 
				<img src="<?= Url::to('@web/img/default.png')?>" alt="Avatar" style="width:200px;height: 200px;">
			<?php }  else{?>

			<img src="<?= Url::to('@web/img/'.Yii::$app->user->identity->profileimage)?>" alt="Avatar" style="width:200px;height: 200px;">
			<?php }?>

			<?php $form=ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

			<?= $form->field($model, 'profileimage')->label('Update photo',['class'=>'btn btn-primary','style' => 'margin-left:175px;margin-top:20px;'])
                                ->fileInput(['class'=>'sr-only']) ?>

			<?= $form->field($model,'name')->textInput([ 'autofocus' => true,'placeholder' => 'Enter your name']) ?>

			<?= $form->field($model,'email')->textInput([ 'autofocus' => true,'placeholder' => 'Enter your email']) ?>

			<?= $form->field($model,'dob')->textInput([ 'autofocus' => true,'placeholder' => 'Enter your Date of birth']) ?>

			<?= $form->field($model,'address')->textArea(['rows'=>10,'placeholder' => 'Your Address']) ?>

			<div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'create-button'])?>
             </div>
			<?php ActiveForm::end(); ?>		
		</div>
	</div>
</div>	