<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\artikel */

$this->title = 'Tambah Artikel';
$this->params['breadcrumbs'][] = ['label' => 'Artikels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="artikel-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
