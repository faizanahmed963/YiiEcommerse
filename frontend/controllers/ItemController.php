<?php

namespace frontend\controllers;

use Yii;
use app\models\item;
use app\models\itemSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;


/**
 * ItemController implements the CRUD actions for item model.
 */
class ItemController extends Controller
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
     * Lists all item models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new itemSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single item model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new item model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new item();

//        if ($model->load(Yii::$app->request->post()) && $model->save()) 
	if(Yii::$app->request->post())
	{
			/*
			//$name = $model->item_id;
			$model->image = UploadedFile::getInstance($model,'image');
			
			if($model->upload())
			{
				echo success;
			}
			
			//$model->image->saveAs('itemImages/'.$name.'.'.$model->image->extension);
			
			//$model->item_image = 'itemImages/'.$name.'.'.$model->image->extension;
			*/
			 $model->item_id = 23 ;
            return $this->redirect(['view', 'id' => $model->item_id]);
        } else {
				/*	$model->image = UploadedFile::getInstance($model,'image');
			
			if($model->upload())
			{
				echo success;
			}
	*/
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing item model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

  //      if ($model->load(Yii::$app->request->post()) && $model->save()) {
		  if(Yii::$app->request->post()){
  /*					$model->image = UploadedFile::getInstance($model,'image');
			
			if($model->upload())
			{
				echo success;
			}
	*/
            return $this->redirect(['view', 'id' => $model->item_id]);
        } else {
		/*			$model->image = UploadedFile::getInstance($model,'image');
			
			if($model->upload())
			{
				echo success;
			}
	*/
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing item model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the item model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return item the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = item::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
