<?php
	use yii\helpers\Html;
	use yii\web\AssetBundle;
	use yii\helpers\Url;
?>

<html>
<head>
<style>
img {
  border-radius: 50%;
  margin-top:70px;
  display:inline-block;
}

h2{
    text-align:center;
    color: grey;
    margin-top: 20px;
}

.profile{
	/*display: inline-block;*/
	margin-left: 150px;
	margin-top: 50px;
	width: 750px;
}

.name,.email,.dob,.address{
	font-size: 24px;
	margin-top: 10px;
	text-align: justify;
}

.compro{
	/*height: 500px;*/
	display: flex;
}

.head{
	font-size: 25px;
	font-weight: bold;
}

p{
	/*margin-left: 100px;*/
	font-size: 20px;
}

</style>
</head>
<body>

<h2><?php echo "Welcome ". Yii::$app->user->identity->username."....!";?></h2>

<div class="compro">
			<?php if(empty(Yii::$app->user->identity->profileimage)){ ?> 
				<img src="<?= Url::to('@web/img/default.png')?>" alt="Avatar" style="width:200px;height: 200px;">
			<?php } else{?>

			<img src="<?= Url::to('@web/img/'.Yii::$app->user->identity->profileimage)?>" alt="Avatar" style="width:200px;height: 200px;">
			<?php }?>
	<div class="profile">
		<div class="name"><b>Name:</b> <?= Yii::$app->user->identity->name?></div>
		<div class="email"><b>Email:</b> <?= Yii::$app->user->identity->email?></div>
		<div class="dob"><b>DOB:</b> <?= Yii::$app->user->identity->dob?></div>
		<div class="address"><b>Address:</b> <?= Yii::$app->user->identity->address?>
		</div>
		<?= Html::a('Update your profile',["/car/uppro","user" => Yii::$app->user->identity->username],['class' => 'btn btn-primary','style'=>'margin-top:10px;']); ?>

		<?= Html::a('Change your password',["/car/pass","user" => Yii::$app->user->identity->username],['style'=>'margin-top:10px;color:grey;']); ?>
	</div>
</div>
	 <div class="form" style="margin-top: 100px;">
	 	<?php 
	 	$model = $model->find()->where(['cid' =>Yii::$app->user->identity->id])->all();
	 	$index=0;

	 	if(empty($model)){
				echo "<h2>"."You haven't filled any form yet...!"."</h2>";
			}
		else
		{
		 	foreach ($model as $key) 
		 	{
		 		// echo $key->cid;
					if($key->savetype=="Draft"){
						echo  Html::a('Edit',["/car/form","user" => Yii::$app->user->identity->username,"createdAt" => $key->createdAt],['class' => 'btn btn-primary','style'=>'float:right;']);
					}

					elseif($key->savetype=="Saved") 
					{					
						echo  Html::a('Draft',[""],['class' => 'btn btn-primary','style'=>'float:right;',
							'disabled'=> true]);
					}

					elseif($key->savetype=="Accepted") 
					{					
						echo  Html::a('Accepted',[""],['class' => 'btn btn-primary','style'=>'float:right;','disabled'=> true]);
					}

					elseif($key->savetype=="Rejected") 
					{					
						echo  Html::a('Rejected',[''],['class' => 'btn btn-danger','style'=>'float:right;','disabled'=> true]);
					}

					echo "<p>".++$index.". ".$key->cartype."_________".$key->precar."</p>"."<hr>"; 
			 	}
		}?>
	 </div>
</body>
</html> 
