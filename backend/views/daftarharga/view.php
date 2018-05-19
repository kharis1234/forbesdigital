<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\daftarharga */

$this->title = $model->id_daftarharga;
$this->params['breadcrumbs'][] = ['label' => 'Daftarhargas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daftarharga-view">



    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_daftarharga], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['Hapus', 'id' => $model->id_daftarharga], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Apakah anda yakin untuk menghapus data ini?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_daftarharga',
            'judul',
            'jenis',
            'pekerjaan',
            'jenisfreon',
            'qty',
            'harga',
            'aktif',
        ],
    ]) ?>

</div>
