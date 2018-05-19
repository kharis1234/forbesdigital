<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


$this->title = "Update";
$this->params['breadcrumbs'][] = ['label' => 'Registration', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
/* @var $this yii\web\View */
/* @var $model common\models\Kategori */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="identitas-form"><div class="box box-default color-palette-box">
<div class="box-header with-border"></div>
	<div class="box-body">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'startup_name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'reg_buss_name')->textInput(['maxlength' => true]) ?>
	<?= $form->field($model, 'date_founded_in')->textInput(['maxlength' => true]) ?>
	<?= $form->field($model, 'category')->textInput(['maxlength' => true]) ?>
	<?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
	<?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
	<?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
	<?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>
	<?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
	<?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>
	<?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>
	<?= $form->field($model, 'date_birth')->textInput(['maxlength' => true]) ?>
	<?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>
	<?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>
	<?= $form->field($model, 'quest1')->textArea() ?>
	<?= $form->field($model, 'quest2')->textArea() ?>
	<?= $form->field($model, 'quest3')->textArea() ?>
	<?= $form->field($model, 'quest4')->textArea() ?>
	<?= $form->field($model, 'quest5')->textArea() ?>
	<?= $form->field($model, 'quest6')->textArea() ?>
	
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
</div>