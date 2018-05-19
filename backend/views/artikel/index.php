<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\searchartikel */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Artikel';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="artikel-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah Artikel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id_artikel',
            'tanggal',
            'idKategori.nama_kategori',
            'judul',
         //   'isi_artikel:ntext',

            // 'jumlah_baca',
            // 'create_by',
            [
                'label'=>'Gambar',
                'format'=>'raw',
                'value' => function ($data) {
                    return Html::img('../img/blog/' . $data['gambar'],
                        ['width' => '150px']);
                },
            ],
            'aktif',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
