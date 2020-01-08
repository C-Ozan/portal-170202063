<?php

namespace kouosl\projemodulu\controllers\frontend;

use Yii;
use kouosl\projemodulu\models\SikayetTablosu;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DefaultController implements the CRUD actions for SikayetTablosu model.
 */
class DefaultController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Creates a new SikayetTablosu model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SikayetTablosu();

        $dataProvider = new ActiveDataProvider([
            'query' => SikayetTablosu::find(),
        ]);


        if ($model->load(Yii::$app->request->post()) && $model->save()) {
           
            Yii::$app->session->setFlash('success', "Şikayetiniz alındı");
            return $this->redirect(['create', 'id' ]);
        
        }

        
        return $this->render('create', [
            'model' => $model,
            'dataProvider' => $dataProvider,
        ]);



    }


    public function actionIndex()
    {
        $model = new SikayetTablosu();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
   
            
            return $this->redirect(['create', 'id']);
        }

        
        return $this->render('create', [
            'model' => $model,
        ]);
    }




}