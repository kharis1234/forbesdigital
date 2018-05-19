<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\halamanstatis */

$this->title = 'Update Halamanstatis: ' . $model->id_halaman;
$this->params['breadcrumbs'][] = ['label' => 'Halaman statis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_halaman, 'url' => ['view', 'id' => $model->id_halaman]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="halamanstatis-update">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
