<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Halaman statis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="halamanstatis-index">


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

        //    'id_halaman',
            'judul',
            'isi_halaman:ntext',
         //   'gambar',
         //   'show_foto',
            // 'type',


            ['class' => 'yii\grid\ActionColumn','template'=>'{view} {update}'],
        ],
    ]); ?>
</div>
