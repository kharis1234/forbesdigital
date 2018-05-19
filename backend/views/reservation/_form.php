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

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>
	<?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>
	<?= $form->field($model, 'company_name')->textInput(['maxlength' => true]) ?>
	<?= $form->field($model, 'industry')->textInput(['maxlength' => true]) ?>
	<?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
	<?= $form->field($model, 'cityid')->textInput(['maxlength' => true]) ?>
	<?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>
	<?= $form->field($model, 'zipcode')->textInput(['maxlength' => true]) ?>
	<?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
	<?= $form->field($model, 'fax')->textInput(['maxlength' => true]) ?>
	<?= $form->field($model, 'hp')->textInput(['maxlength' => true]) ?>
	<?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
	
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
</div>