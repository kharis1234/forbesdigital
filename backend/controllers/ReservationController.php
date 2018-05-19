<?php

namespace backend\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Json;
use common\models\Reservasi;

class ReservationController extends \yii\web\Controller
{
    public function actionIndex()
    {
		return $this->render('index', []);
    }
	
	public function actionSearch()
    {

        $prm = Yii::$app->datatable->processDataTable($_REQUEST);
        $data = Reservasi::search($prm);
        if(count($data)>0)
        {
            $no=1;
            for($i=0;$i<count($data);$i++)
            {
				
				$urlUpdate = "index.php?r=reservation/update&id=".$data[$i]['id'];
				$urlView = "index.php?r=reservation/view&id=".$data[$i]['id'];
                
                $chk_box = '<p class="center"><input type="checkbox" value="'.$i.'"/></p>';
                $btn ='<a href="'.$urlUpdate.'" class="btn btn-primary waves-effect" onclick="callModal('.$data[$i]['id'].')">Update</a>&nbsp;<a href="'.$urlView.'" class="btn btn-success waves-effect">View</a>';
                $arr [] = array(
                    'firstname' =>$data[$i]['firstname'],
                    'lastname' =>$data[$i]['lastname'],
					'gender' =>$data[$i]['gender'],
					'company_name' =>$data[$i]['company_name'],
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
               "recordsTotal"=>count($arr)+1,
               "recordsFiltered"=>count($arr)+1,
               "data"=>$arr
        );
    }
	
	public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

	public function actionUpdate($id)
    {
		 $model = $this->findModel($id);
		 if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {	
			return $this->render('_form', [
				'model' => $this->findModel($id),
			]);
		}
    }
	
	protected function findModel($id)
    {
        if (($model = Reservasi::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
