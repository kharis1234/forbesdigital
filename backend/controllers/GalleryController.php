<?php

namespace backend\controllers;

use Yii;
use common\models\Gallery;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;


/**
 * GalleryController implements the CRUD actions for gallery model.
 */
class GalleryController extends Controller
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
     * Lists all gallery models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => gallery::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single gallery model.
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
     * Creates a new gallery model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new gallery();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $imageName = $model->jdl_gallery;
            $rand =Yii::$app->security->generateRandomString(7);
            $randomString = $rand .'_'. $imageName ;
            $model->gbr_gallery = UploadedFile::getInstance($model, 'gbr_gallery');
            $model->gbr_gallery->saveAs(Yii::getAlias('../img/projects/').$randomString .'.' . $model->gbr_gallery->extension);
            $model->gbr_gallery = $randomString . '.' . $model->gbr_gallery->extension;
            $model->save();

            return $this->redirect(['view', 'id' => $model->id_gallery]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }

    }

    /**
     * Updates an existing gallery model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())&& $model->validate()) {

            $imageName = $model->jdl_gallery;
            $rand =Yii::$app->security->generateRandomString(7);
            $randomString = $rand .'_'. $imageName ;
            $model->gbr_gallery = UploadedFile::getInstance($model, 'gbr_gallery');
            $model->gbr_gallery->saveAs(Yii::getAlias('../img/projects/').$randomString .'.' . $model->gbr_gallery->extension);
            $model->gbr_gallery = $randomString . '.' . $model->gbr_gallery->extension;
            $model->save();

            return $this->redirect(['view', 'id' => $model->id_gallery]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing gallery model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $imageName = $model->gbr_gallery;
        unlink(Yii::getAlias('../img/projects/').$imageName );
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the gallery model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return gallery the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = gallery::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
