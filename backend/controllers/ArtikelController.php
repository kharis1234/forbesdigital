<?php

namespace backend\controllers;

use Yii;
use common\models\Artikel;
use common\models\searchartikel;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\base\Security;
use yii\web\UploadedFile;


/**
 * ArtikelController implements the CRUD actions for artikel model.
 */
class ArtikelController extends Controller
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
     * Lists all artikel models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new searchartikel();
      
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single artikel model.
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
     * Creates a new artikel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {


        $model = new artikel();
        if ($model->load(Yii::$app->request->post()) ) {
            $imageName = $model->judul;
$rand =Yii::$app->security->generateRandomString(7);
$randomString = $rand .'_'. $imageName ;
            $model->gambar = UploadedFile::getInstance($model, 'gambar');
            $model->gambar->saveAs(Yii::getAlias('../img/blog/').$randomString .'.' . $model->gambar->extension);
            $model->gambar = $randomString . '.' . $model->gambar->extension;
            $model->save();

            return $this->redirect(['view', 'id' => $model->id_artikel]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }

    }

    /**
     * Updates an existing artikel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())&& $model->validate()) {

            $imageName = $model->judul;
            $rand =Yii::$app->security->generateRandomString(7);
            $randomString = $rand .'_'. $imageName ;
            $model->gambar = UploadedFile::getInstance($model, 'gambar');
            $model->gambar->saveAs(Yii::getAlias('../img/blog/').$randomString .'.' . $model->gambar->extension);
            $model->gambar = $randomString . '.' . $model->gambar->extension;
            $model->save();

            return $this->redirect(['view', 'id' => $model->id_artikel]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing artikel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $imageName = $model->gambar;
        unlink(Yii::getAlias('../img/blog/').$imageName );
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }


    /**
     * Finds the artikel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return artikel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = artikel::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
