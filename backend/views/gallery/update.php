<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\gallery */

$this->title = 'Update Gallery: ' . $model->id_gallery;
$this->params['breadcrumbs'][] = ['label' => 'Galleries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_gallery, 'url' => ['view', 'id' => $model->id_gallery]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gallery-update">



    <?= $this->render('_form_update', [
        'model' => $model,
    ]) ?>

</div>
