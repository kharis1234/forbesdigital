<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\daftarharga */

$this->title = 'Update Daftar harga: ' . $model->id_daftarharga;
$this->params['breadcrumbs'][] = ['label' => 'Daftar harga', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_daftarharga, 'url' => ['view', 'id' => $model->id_daftarharga]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="daftarharga-update">



    <?= $this->render('_form_update', [
        'model' => $model,
    ]) ?>

</div>
