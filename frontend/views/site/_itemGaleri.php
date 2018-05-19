<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<?php
$identitas = \common\models\Identitas::find() ->where(['id_identitas' =>1]) ->one();
?>


<li class="col-md-3 col-sm-6 col-xs-12 isotope-item websites">
    <div class="image-gallery-item">
        <a href="<?=Url::to(['/']) ?>img/projects/<?=$model->gbr_gallery ?>" class="lightbox-portfolio">
													<span class="thumb-info">
														<span class="thumb-info-wrapper">
															<img src="<?=Url::to(['/']) ?>img/projects/<?=$model->gbr_gallery ?>" class="img-responsive" alt="<?=$model->jdl_gallery ?>, <?=$identitas->meta_keyword ?>">
															<span class="thumb-info-title">
																<span class="thumb-info-inner"><?=$model->jdl_gallery ?></span>
																<span class="thumb-info-type">Harapan Jaya Teknik</span>
															</span>
															<span class="thumb-info-action">
																<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
															</span>
														</span>
													</span>
        </a>
    </div>
</li>



  
