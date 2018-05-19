<?php

namespace backend\controllers;

use Yii;
use common\models\Layanan;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LayananController implements the CRUD actions for layanan model.
 */
class LayananController extends Controller
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
     * Lists all layanan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => layanan::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single layanan model.
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
     * Creates a new layanan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new layanan();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_layanan]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing layanan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_layanan]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing layanan model.
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
     * Finds the layanan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return layanan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = layanan::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
	
	public function actionSearch()
    {

        $prm = Yii::$app->datatable->processDataTable($_REQUEST);
        $data = Layanan::search($prm);
        if(count($data)>0)
        {
            $no=1;
            for($i=0;$i<count($data);$i++)
            {              
				$urlUpdate = "index.php?r=layanan/update&id=".$data[$i]['id_layanan'];
				$urlView = "index.php?r=layanan/view&id=".$data[$i]['id_layanan'];
				
                $chk_box = '<p class="center"><input type="checkbox" value="'.$i.'"/></p>';
                $btn ='<a href="'.$urlUpdate.'" class="btn btn-primary">Update</a>&nbsp;<a href="'.$urlView.'" class="btn btn-success">View</a>';
                $arr [] = array(
                    'judul' =>$data[$i]['judul'],
                    'isi_layanan' =>$data[$i]['isi_layanan'],
                    'no'=>$no++,
                    'btn'=>$btn
                );
            }
        }
        else
        {
            $arr=array();
        }
        
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return array(
               "draw"=>$_REQUEST['draw'],
               "recordsTotal"=>count($arr),
               "recordsFiltered"=>count($arr),
               "data"=>$arr
        );
    }
}
