<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\artikel */

$this->title = $model->id_artikel;
$this->params['breadcrumbs'][] = ['label' => 'Artikel', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="artikel-view">



    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_artikel], ['class' => 'btn btn-primary']) ?>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_artikel',
          'tanggal',
            'judul',
            'isi_artikel:ntext',
            'idKategori.nama_kategori',

            [
                'label'=>'Gambar',
                'format'=>'raw',
                'value' => function ($data) {
                    return Html::img('../img/blog/' . $data['gambar'],
                        ['width' => '400px']);
                },
            ],
            'jumlah_baca',
            'aktif',
        ],
    ]) ?>

</div>
