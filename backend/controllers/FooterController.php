<?php

namespace backend\controllers;

use Yii;
use common\models\Footer;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


class FooterController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

	public function actionSearch()
    {

        $prm = Yii::$app->datatable->processDataTable($_REQUEST);
        $data = Footer::search($prm);
        if(count($data)>0)
        {
            $no=1;
            for($i=0;$i<count($data);$i++)
            {              
				$urlUpdate = "index.php?r=kategori/update&id=".$data[$i]['id'];
				$urlView = "index.php?r=kategori/view&id=".$data[$i]['id'];
				
                $chk_box = '<p class="center"><input type="checkbox" value="'.$i.'"/></p>';
                $btn ='<a href="'.$urlUpdate.'" class="btn btn-primary">Update</a>&nbsp;<a href="'.$urlView.'" class="btn btn-success">View</a>';
                $arr [] = array(
                    'name' =>$data[$i]['name'],
                    'title' =>$data[$i]['title'],
					'phone' =>$data[$i]['phone'],
					'email' =>$data[$i]['email'],
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
