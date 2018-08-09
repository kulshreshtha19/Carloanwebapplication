<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Carloan;
use frontend\models\CarSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\models\User;

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

            'access' => [
                        'class' => \yii\filters\AccessControl::className(),
                        'only' => ['index','create','update','view','front','carform','changepass','uppro'],
                        'rules' => [
                            // allow authenticated users
                            [
                                'allow' => true,
                                'roles' => ['@'],
                            ],
                            // everything else is denied
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

     public function actionFront(){
        $model=new Carloan;
        return $this->render('front',['model' => $model]);
    }

    public function actionUppro(){
        $request=Yii::$app->request->get();
        // $model=new User;
        $model=User::find()->where(['username' => $request['user']])->one();
        $path = Yii::getAlias('@webroot');
        // echo $path;die;
        if ($model->load(Yii::$app->request->post())){
            $proid=$model->id;
            $image=UploadedFile::getInstance($model,'profileimage');
            if($image!=null)
            {
                $imgname='pro_'.$proid.'.'.$image->getExtension();
                $image->saveAs($path.'/img/'.$imgname);
                $model->profileimage=$imgname;
            }
            $model->save();
            return $this->redirect(['front']);
        }

        return $this->render('uppro',['model' => $model]);
    }

    public function actionPass()
    {
        $request=Yii::$app->request->get();
        $model=new User;
        if($model->load(Yii::$app->request->post()))
        {
           $pass=Yii::$app->security->generatePasswordHash($model->password_hash);
           $temp=User::find()->where(['username' => $request['user']])->one();
           $temp->setAttributes(['password_hash' => $pass]);
            if($temp->save())
            {
              return $this->redirect(['front']);
            } 
        }
        return $this->render('changepass',['model' => $model]);
    }

    public function actionForm(){
        $this->layout='form';
        $request=Yii::$app->request->get();
        // print_r($request);die;
        $model=new Carloan;
        return $this->render('carform',['model' => $model,'createdAt' => $request['createdAt']]);
    }

    public function actionTest(){
        $request=Yii::$app->request->post();
        // // echo '<pre>';print_r($request);die;
        // // $request=Yii::$app->request->get();
        // $model=new Carloan;
        $model = Carloan::find()->where(['cid' =>Yii::$app->user->identity->id])->one();
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
        ]);
        // print_r($model->getAttributes());
        $model->save();
        // print_r($request);
    }

    public function actionTime()
    {
        return $this->render('time');
    }
}
