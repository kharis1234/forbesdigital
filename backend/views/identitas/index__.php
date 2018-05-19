<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Identitas';
$this->params['breadcrumbs'][] = $this->title;

echo Yii::$app->request->baseUrl;
?>
<div class="identitas-index">


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id_identitas',
            'nama_website',
            'email:email',
            'alamat',
            'tlp',
            // 'website',
            // 'meta_deskripsi',
            // 'meta_keyword',
            // 'facebook_id',
            // 'instagram_id',
            // 'logo',
            // 'favico',

            ['class' => 'yii\grid\ActionColumn','template'=>'{view} {update}'],
        ],

    ]); ?>
</div>
