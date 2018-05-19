<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Galleri';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallery-index">


    <p>
        <?= Html::a('Tambah Galeri Foto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id_gallery',
            'jdl_gallery',

            [
                'label'=>'Gambar',
                'format'=>'raw',
                'value' => function ($data) {
                    return Html::img('../img/projects/' . $data['gbr_gallery'],
                        ['width' => '150px']);
                },
            ],
            'aktif',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
