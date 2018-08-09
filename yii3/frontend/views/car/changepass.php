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

			<?php $form=ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

			<?= $form->field($model,'password_hash')->passwordInput([ 'autofocus' => true,'placeholder' => 'Change your password']) ?>

			<div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'create-button'])?>
             </div>
			<?php ActiveForm::end(); ?>		
		</div>
	</div>
</div>	