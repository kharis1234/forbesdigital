<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\halamanstatis */

$this->title = $model->id_halaman;
$this->params['breadcrumbs'][] = ['label' => 'Halamanstatis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-default color-palette-box">
<div class="box-header with-border"></div>
	<div class="box-body">
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_halaman], ['class' => 'btn btn-primary']) ?>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_halaman',
            'judul',
            'isi_halaman:ntext',
           // 'gambar',
          //  'show_foto',
           // 'type',
        ],
    ]) ?>
</div>
</div>
</div>
