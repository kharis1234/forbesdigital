<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\identitas */

$this->title = 'Update Identitas: ' . $model->id_identitas;
$this->params['breadcrumbs'][] = ['label' => 'Identitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_identitas, 'url' => ['view', 'id' => $model->id_identitas]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="identitas-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
