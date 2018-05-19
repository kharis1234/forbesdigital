<?php

namespace backend\controllers;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Json;
use common\models\Registrasi;

class RegistrationController extends \yii\web\Controller
{
    public function actionIndex()
    {
		return $this->render('index', []);
    }
	
	public function actionSearch()
    {

        $prm = Yii::$app->datatable->processDataTable($_REQUEST);
        $data = Registrasi::search($prm);
        if(count($data)>0)
        {
            $no=1;
            for($i=0;$i<count($data);$i++)
            {
				$urlUpdate = "index.php?r=registration/update&id=".$data[$i]['id'];
				$urlView = "index.php?r=registration/view&id=".$data[$i]['id'];
                
                $btn ='<a href="'.$urlUpdate.'" class="btn btn-primary waves-effect" >Update</a>&nbsp;<a href="'.$urlView.'" class="btn btn-success waves-effect">View</a>';
                $arr [] = array(
                    'startup_name' =>$data[$i]['startup_name'],
                    'reg_buss_name' =>$data[$i]['reg_buss_name'],
					'date_founded_in' =>$data[$i]['date_founded_in'],
					'category' =>$data[$i]['category'],
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
        return $this->render('_form', [
            'model' => $this->findModel($id),
        ]);
    }
	
	protected function findModel($id)
    {
        if (($model = Registrasi::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
