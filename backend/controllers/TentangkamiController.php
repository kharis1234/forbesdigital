<?php

namespace backend\controllers;

class TentangkamiController extends \yii\web\Controller
{
    public function actionIndex()
    {
        public function actionTentangkami()
    {
        $halamanstatis=Halamanstatis::find()->where(['IN', 'id_halaman', [64,66]])->all();



        return $this->render('tentangkami', ['halamanstatis' => $halamanstatis]);

    }
    }

}
