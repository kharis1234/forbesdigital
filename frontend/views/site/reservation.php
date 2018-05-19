<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'firstname')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'lastname') ?>

				<?= $form->field($model, 'gender') ?>
				
				<?= $form->field($model, 'job_title') ?>
				
				<?= $form->field($model, 'company_name') ?>
				
				<?= $form->field($model, 'industry') ?>
				
				<?= $form->field($model, 'address') ?>
				
				<?= $form->field($model, 'cityid') ?>
				
				<?= $form->field($model, 'state') ?>
				
				<?= $form->field($model, 'zipcode') ?>
				
				<?= $form->field($model, 'phone') ?>
				
				
				<?= $form->field($model, 'fax') ?>
				
				<?= $form->field($model, 'hp') ?>
				
				<?= $form->field($model, 'email') ?>
				
				
                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
