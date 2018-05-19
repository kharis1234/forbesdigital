<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\layanan */

$this->title = 'Update Layanan: ' . $model->id_layanan;
$this->params['breadcrumbs'][] = ['label' => 'Layanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_layanan, 'url' => ['view', 'id' => $model->id_layanan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="layanan-update">



    <?= $this->render('_form_update', [
        'model' => $model,
    ]) ?>

</div>
