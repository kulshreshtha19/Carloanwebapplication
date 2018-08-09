<?php

namespace backend\controllers;

use Yii;
use app\models\category;
use backend\models\CategorySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\image;
use app\models\Description;
use app\models\Review;
use yii\data\Pagination;


/**
 * CategoryController implements the CRUD actions for category model.
 */
class CategoryController extends Controller
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
     * Lists all category models.
     * @return mixed
     */
    public function actionIndex()
    {
        // $models=new category;
        //  print_r($request); die;
        $searchModel = new CategorySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionSort()
    {
        $request=Yii::$app->request->get();
        // print_r($request); die;
        $searchModel = new CategorySearch();
        $dataProvider = $searchModel->searchview(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider
        ]);
       }

    /**
     * Displays a single category model.
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
     * Creates a new category model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new category();

        if ($model->load(Yii::$app->request->post())) {
            // $date=date_create();
            $model->CREATED = date('Y-m-d');
            $model->updated = date('Y-m-d');
            $model->save();
            return $this->redirect(['view', 'id' => $model->ID]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing category model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->updated = date('Y-m-d');
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing category model.
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
     * Finds the category model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return category the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = category::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionReview(){
        $model=new Category;
        $var=new image;
        $temp=new Description;
        $request=Yii::$app->request;

        if($model->load(Yii::$app->request->post()) && $var->load(Yii::$app->request->post())
         && $temp->load(Yii::$app->request->post()))
        {
            $model->CREATED = date('Y-m-d');
            $model->updated = date('Y-m-d');

            $var->created = date('Y-m-d');
            $var->updated = date('Y-m-d');

            $temp->created = date('Y-m-d');
            $temp->updated = date('Y-m-d');

            if($model->save() && $var->save() && $temp->save())
            {
                $var->categoryID = $model->ID;
                $temp->categoryID = $model->ID;
                $var->save();
                $temp->save();
                return $this->refresh();
            }
        }

        return $this->render('blogcreate',['model'=>$model ,'var' => $var ,'temp' => $temp]);
    }

    public function actionBlog(){

        $temp=category::find();
        $model=new Description;
        // $var=Description::find()->all();

        $pagination=new Pagination([
            'defaultPageSize'=>6,
            'totalCount'=>$temp->count(),
        ]);

        $blog=$temp->orderBy('ID')->offset($pagination->offset)->limit($pagination->limit)->all();

        // return $this->render('Blog',[
        //     'blog'=>$blog,
        //     'pagination'=>$pagination,
        // ]);
        return $this->render('blog',['temp'=>$blog,'model'=>$model,'pagination' => $pagination]);
    }

    public function actionFind()
    {
        $request=Yii::$app->request->get();
        $model=new Description;
        $temp=category::find()->andWhere(['Parentct' => 'javascript'])->andWhere(['category'=>$request['id']]);
        $pagination=new Pagination([
            'defaultPageSize'=>6,
            'totalCount'=>$temp->count(),
        ]);

        $blog=$temp->orderBy('ID')->offset($pagination->offset)->limit($pagination->limit)->all();
        return $this->render('blog',['temp'=>$blog,'model'=>$model,'pagination' => $pagination]); 
        // die;
    }

    public function actionFull()
    {
        // $model=new Description;
        $request=Yii::$app->request->get();
        //  print_r($request[1]['key']);
        
         $model=Review::find()->where(['categoryID' => $request[1]['key']])->limit(2)->all();
        //  $var=Review::find()->where(['categoryID' => $request[1]['key']])->all();

         return $this->render('full',['temp' => $request[1],'model'=>$model,'var' => $request[1]['key']]);
    }

    public function actionComment(){
        $model=new Review;
        $request=Yii::$app->request->get();
        if($model->load(Yii::$app->request->post()))
        {
            $model->categoryID = $request['key'];
            $model->created=date('Y-m-d');
            $model->updated=date('Y-m-d');
            $model->save();
            return $this->refresh();
        }
        //  print_r($request['key']);
        return $this->render('review', ['model' => $model]);
    }

    public function actionAll(){
        $request = Yii::$app->request->get();
        // print_r($request['var']);
        $var=Review::find()->where(['categoryID' =>$request['var']])->all();
         return $this->render('comment',['var' => $var]);
    }
}
    