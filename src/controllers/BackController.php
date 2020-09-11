<?php

namespace ityakutia\banner\controllers;

use ityakutia\banner\models\Banner;
use ityakutia\banner\models\BannerSearch;
use uraankhayayaal\materializecomponents\imgcropper\actions\UploadAction;
use uraankhayayaal\sortable\actions\Sorting;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class BackController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['banner']
                    ]
                ]
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'delete' => ['POST']
                ]
            ]
        ];
    }

    public function actions()
    {
        return [
            'uploadImg' => [
                'class' => UploadAction::class,
                'url' => '/images/uploads/banner',
                'path' => '@frontend/web/images/uploads/banner/',
                'maxSize' => 10485760
            ],
            'sorting' => [
                'class' => Sorting::class,
                'query' => Banner::find(),
            ]
        ];
    }

    public function actionIndex()
    {
        $searchModel = new BannerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        Url::remember();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]); 
    }

    public function actionCreate()
    {
        $model = new Banner();

        $post = Yii::$app->request->post();
        $load = $model->load($post);

        if($load && $model->save()) {
            Yii::$app->session->setFlash('success', 'Запись успешно создана!');
            return $this->redirect(Url::previous());
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $post = Yii::$app->request->post();
        $load = $model->load($post);

        if($load && $model->save()) {
            Yii::$app->session->setFlash('success', 'Запись успешно изменена!');
            return $this->redirect(Url::previous());
        }

        return $this->render('update', [
            'model' => $model
        ]);
    }

    public function actionDelete($id)
    {
        $modelDelete = $this->findModel($id)->delete();
        if(false !== $modelDelete) {
            Yii::$app->session->setFlash('success', 'Запись успешно удалена!');
        }

        return $this->redirect(Url::previous());
    }

    protected function findModel($id)
    {
        $model = Banner::findOne($id);
        if(null === $model) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }

        return $model;
    }
}