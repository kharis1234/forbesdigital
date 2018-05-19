<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="identitas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_identitas') ?>

    <?= $form->field($model, 'nama_website') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'alamat') ?>

    <?= $form->field($model, 'tlp') ?>

    <?php // echo $form->field($model, 'website') ?>

    <?php // echo $form->field($model, 'meta_deskripsi') ?>

    <?php // echo $form->field($model, 'meta_keyword') ?>

    <?php // echo $form->field($model, 'facebook_id') ?>

    <?php // echo $form->field($model, 'instagram_id') ?>

    <?php // echo $form->field($model, 'logo') ?>

    <?php // echo $form->field($model, 'favico') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
