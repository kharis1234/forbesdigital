<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\artikel */

$this->title = 'Update Artikel: ' . $model->id_artikel;
$this->params['breadcrumbs'][] = ['label' => 'Artikels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_artikel, 'url' => ['view', 'id' => $model->id_artikel]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="artikel-update">



    <?= $this->render('_form_update', [
        'model' => $model,
    ]) ?>

</div>
