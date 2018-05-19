<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\daftarharga */

$this->title = 'Create Daftarharga';
$this->params['breadcrumbs'][] = ['label' => 'Daftarhargas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daftarharga-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
