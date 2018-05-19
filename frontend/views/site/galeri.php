<?php



use yii\helpers\Url;

?>
<?php
$identitas = \common\models\Identitas::find() ->where(['id_identitas' =>1]) ->one();
?>

<div role="main" class="main">

				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">Galeri</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Galeri</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					

					<div class="row">
						<div class="col-md-12">


							<ul class="nav nav-pills sort-source" data-sort-id="portfolio" data-option-key="filter">
							
							</ul>

							<hr>

							<div class="row">

								<div class="sort-destination-loader sort-destination-loader-showing">
									<ul class="image-gallery sort-destination lightbox" data-sort-id="portfolio" data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">

                                        <?php
                                        $galeri = \common\models\Gallery::find()->where(['aktif'=>'Y'])->all();

                                        ?>

                                        <?php foreach ($galeri as $galeri) { ?>
                                            <li class="col-md-3 col-sm-6 col-xs-12 isotope-item websites">
                                                <div class="image-gallery-item">
                                                    <a href="<?=Url::to(['/']) ?>img/projects/<?=$galeri->gbr_gallery ?>" class="lightbox-portfolio" alt="<?=$galeri->jdl_gallery ?>, <?=$identitas->meta_keyword ?>">
													<span class="thumb-info">
														<span class="thumb-info-wrapper">
															<img src="<?=Url::to(['/']) ?>img/projects/<?=$galeri->gbr_gallery ?>" class="img-responsive" alt="<?=$galeri->jdl_gallery ?>, <?=$identitas->meta_keyword ?>">
															<span class="thumb-info-title">
																<span class="thumb-info-inner"><?=$galeri->jdl_gallery ?></span>
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
                                        <?php } ?>

									</ul>
								</div>
							</div>
						</div>
					</div>
<hr class="tall">
				
				</div>

				

					

				</div>