<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\searchdaftarharga */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar harga';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daftarharga-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id_daftarharga',
            'judul',
            'jenis',
            'pekerjaan',
            'jenisfreon',
            // 'qty',
             'harga',
            // 'aktif',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
