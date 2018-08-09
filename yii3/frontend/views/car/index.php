<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\CarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Carloans';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="carloan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Carloan', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'name',
            'phone',
            'email:email',
            'cartype',
            'precar',
            'currenlive',
            'comname',
            //'grosssalary',
            //'salaryaccount',
            //'joiningdate',
            //'workexperience',
            //'movecity',
            //'movecurrent',
            //'age',
            //'Emi',
            //'monthlyincentive',
            //'residencetype',
            //'savetype',
            //'cid',
            //'createdAt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
