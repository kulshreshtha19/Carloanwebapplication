<?php

namespace backend\controllers;

use Yii;
use app\models\Carloan;
use backend\models\CarSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\User;

/**
 * CarController implements the CRUD actions for Carloan model.
 */
class CarController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Carloan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CarSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Carloan model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Carloan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Carloan();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Carloan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Carloan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Carloan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Carloan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Carloan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionFinal(){
        return $this->render('final');
    }

    public function actionTest(){
        $request=Yii::$app->request->post();
        // // echo '<pre>';print_r($request);die;
        // // $request=Yii::$app->request->get();
        $tem=User::find()->where(['username' => $request['temp']])->one();
        // print_r($tem->id);
        $var=time();
        $model=new Carloan;
        $model->setAttributes([
            'cartype' => $request['key'][0],
            'precar' => $request['key'][1],
            'currenlive' =>$request['key'][2],
            'comname' => $request['key'][3],
            'grosssalary' => $request['key'][4],
            'salaryaccount' => $request['key'][5],
            'joiningdate' => $request['key'][6],
            'movecity' => $request['key'][7],
            'movecurrent' => $request['key'][8],
            'residencetype' => $request['key'][9],
            'age' => $request['key'][10],
            'Emi' => $request['key'][11],
            'monthlyincentive'=> $request['key'][12],
            'name' => $request['key'][13],
            'phone' => $request['key'][14],
            'email' => $request['key'][15],
            'workexperience' => $request['key'][16],
            'savetype' => $request['key'][17],
            'cid' => $tem->id,
            'createdAt' => (string)$var
        ]);
        
         print_r($model->getAttributes());
             if($model->save())
             {
                print_r($model->getAttributes());
             }

             else
             {
                print_r($model->getErrors());die;
             }
        // print_r($request);
    }

    public function actionSign(){
        $request=Yii::$app->request->post();
        $user = new User();
        $pass=Yii::$app->security->generatePasswordHash($request['password']);
        $var=Yii::$app->getSecurity()->generateRandomString();
        $user->setAttributes([
            'username' =>  $request['username'],
            'password_hash' =>  $pass,
            'auth_key' => $var
        ]);

        if($user->save())
        {
            $tem=User::find()->where(['username' => $request['username']])->one();
            $model=new Carloan;
            $model->setAttributes([
                'cartype' => $request['key'][0],
                'precar' => $request['key'][1],
                'currenlive' =>$request['key'][2],
                'comname' => $request['key'][3],
                'grosssalary' => $request['key'][4],
                'salaryaccount' => $request['key'][5],
                'joiningdate' => $request['key'][6],
                'movecity' => $request['key'][7],
                'movecurrent' => $request['key'][8],
                'residencetype' => $request['key'][9],
                'age' => $request['key'][10],
                'Emi' => $request['key'][11],
                'monthlyincentive'=> $request['key'][12],
                'name' => $request['key'][13],
                'phone' => $request['key'][14],
                'email' => $request['key'][15],
                'workexperience' => $request['key'][16],
                'savetype' => $request['key'][17],
                'cid' => $tem->id,
            ]);

             if($model->save())
             {
                print_r($model->getAttributes());
             }       
        }
    }
}
