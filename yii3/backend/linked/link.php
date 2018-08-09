<?php
namespace backend\linked;
use yii\web\helper;
use yii;
use app\models\image;
use app\models\Description;

class link{
    public function actionImage($id)
    {
         $model=new image;
         $model=$model->find()->where(['categoryID' =>$id])->one();
        return $model->image;
    }
}

?>