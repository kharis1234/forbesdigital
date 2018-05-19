<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\searchdaftarharga */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="daftarharga-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_daftarharga') ?>

    <?= $form->field($model, 'judul') ?>

    <?= $form->field($model, 'jenis') ?>

    <?= $form->field($model, 'pekerjaan') ?>

    <?= $form->field($model, 'jenisfreon') ?>

    <?php // echo $form->field($model, 'qty') ?>

    <?php // echo $form->field($model, 'harga') ?>

    <?php // echo $form->field($model, 'aktif') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
