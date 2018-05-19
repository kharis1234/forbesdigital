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

                <?= $form->field($model, 'startup_name')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'reg_buss_name') ?>

				<?= $form->field($model, 'date_founded_in') ?>
				
				<div class="form-group field-registrasi-date_founded_in required">
					<label class="control-label" for="registrasi-date_founded_in">Date Founded In</label>
					<input type="checkbox" name="category" class="form-control">
					<input type="checkbox" name="category" class="form-control">
					<input type="checkbox" name="category" class="form-control">
					<input type="checkbox" name="category" class="form-control">
					<input type="checkbox" name="category" class="form-control">
					<input type="checkbox" name="category" class="form-control">
					<input type="checkbox" name="category" class="form-control">
					<input type="checkbox" name="category" class="form-control">
					<input type="checkbox" name="category" class="form-control">
				<p class="help-block help-block-error"></p>
				</div>
				
				<?= $form->field($model, 'phone') ?>
				
				<?= $form->field($model, 'email') ?>
				
				<?= $form->field($model, 'website') ?>
				
				
				<div class="form-group field-registrasi-date_founded_in required">
					<label class="control-label" for="registrasi-date_founded_in">Title</label>
					<input type="radio" name="title" class="form-control">
					<input type="radio" name="title" class="form-control">
				<p class="help-block help-block-error"></p>
				</div>
				
				<?= $form->field($model, 'firstname') ?>
				
				<?= $form->field($model, 'lastname') ?>
				
				<?= $form->field($model, 'date_birth') ?>
				
				<?= $form->field($model, 'position') ?>
				
				<div class="form-group field-registrasi-date_founded_in required">
					<label class="control-label" for="registrasi-date_founded_in">Whats Is History of your Startup</label>
					<textarea class="form-control" rows="10"></textarea>
				<p class="help-block help-block-error"></p>
				</div>
				
				<div class="form-group field-registrasi-date_founded_in required">
					<label class="control-label" for="registrasi-date_founded_in">What is the problem taht your startup tries to solve</label>
					<textarea class="form-control" rows="10"></textarea>
				<p class="help-block help-block-error"></p>
				</div>
				
				<div class="form-group field-registrasi-date_founded_in required">
					<label class="control-label" for="registrasi-date_founded_in">What is the chalange and oppourtunity of your bussiness?</label>
					<textarea class="form-control" rows="10"></textarea>
				<p class="help-block help-block-error"></p>
				</div>
				
				<div class="form-group field-registrasi-date_founded_in required">
					<label class="control-label" for="registrasi-date_founded_in">Tell us how your startup has been growing so far (for example term of transaction, number of user, product and service management, etc) and what its your future goal for it ?</label>
					<textarea class="form-control" rows="10"></textarea>
				<p class="help-block help-block-error"></p>
				</div>
				
				<div class="form-group field-registrasi-date_founded_in required">
					<label class="control-label" for="registrasi-date_founded_in">What receive financings and what did you use it ?	</label>
					<textarea class="form-control" rows="10"></textarea>
				<p class="help-block help-block-error"></p>
				</div>
				
				<div class="form-group field-registrasi-date_founded_in required">
					<label class="control-label" for="registrasi-date_founded_in">Are you planning or currently raising series B or C, or in search for strategic partner of investor? what will the funds be used and what is your criteria of strategic investor</label>
					<textarea class="form-control" rows="10"></textarea>
				<p class="help-block help-block-error"></p>
				</div>
				
                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
