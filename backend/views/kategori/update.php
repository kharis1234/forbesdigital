<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Kategori */

$this->title = 'Update Kategori: ' . $model->id_kategori;
$this->params['breadcrumbs'][] = ['label' => 'Kategori', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kategori, 'url' => ['view', 'id' => $model->id_kategori]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kategori-update">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
