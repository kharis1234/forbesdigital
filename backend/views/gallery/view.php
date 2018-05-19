<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\gallery */

$this->title = $model->id_gallery;
$this->params['breadcrumbs'][] = ['label' => 'Galleries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallery-view">



    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_gallery], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_gallery], [
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
            'id_gallery',
            'jdl_gallery',
           [
                'label'=>'Gambar',
                'format'=>'raw',
                'value' => function ($data) {
                    return Html::img('../img/projects/' . $data['gbr_gallery'],
                        ['width' => '400px']);
                },
            ],
            'aktif',
        ],
    ]) ?>

</div>
