<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\halamanstatis */

$this->title = 'Create Halamanstatis';
$this->params['breadcrumbs'][] = ['label' => 'Halamanstatis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-default color-palette-box">
<div class="box-header with-border"></div>
	<div class="box-body">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
</div>
