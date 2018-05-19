<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\identitas */

$this->title = $model->id_identitas;
$this->params['breadcrumbs'][] = ['label' => 'Identitas', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="identitas-form"><div class="box box-default color-palette-box">
<div class="box-header with-border"></div>
	<div class="box-body">



    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_identitas], ['class' => 'btn btn-primary']) ?>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
          //  'id_identitas',
            'nama_website',
            'email:email',
            'alamat',
            'tlp',
            'website',
            'meta_deskripsi',
            'meta_keyword',
            'facebook_id',
            'instagram_id',
           // 'logo',
          //  'favico',
        ],
    ]) ?>

</div>
</div>
</div>
