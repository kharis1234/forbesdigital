<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Layanan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="layanan-index">


    <p>
        <?= Html::a('Tambah Layanan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id_layanan',
            'judul',
            'isi_layanan:ntext',
            'aktif',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
