<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Kategori */

$this->title = "View";
$this->params['breadcrumbs'][] = ['label' => 'Registration', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-default color-palette-box">
<div class="box-header with-border"></div>
<div class="box-body">
<div class="kategori-view">
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'startup_name',
            'reg_buss_name',
			'date_founded_in',
			'category',
			'address',
			'phone',
			'email',
			'website',
			'website',
			'firstname'
        ],
    ]) ?>
</div>
</div>
