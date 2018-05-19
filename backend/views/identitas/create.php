<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\identitas */

$this->title = 'Create Identitas';
$this->params['breadcrumbs'][] = ['label' => 'Identitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
</div>
