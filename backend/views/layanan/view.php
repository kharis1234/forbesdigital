<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\layanan */

$this->title = $model->id_layanan;
$this->params['breadcrumbs'][] = ['label' => 'Layanan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-default color-palette-box">
<div class="box-header with-border"></div>
	<div class="box-body">    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_layanan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_layanan], [
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
            'id_layanan',
            'judul',
            'isi_layanan:ntext',
            'aktif',
        ],
    ]) ?>

</div>
</div>
</div>

