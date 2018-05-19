<?php



use yii\helpers\Url;
use yii\helpers\Html;

?>


<div role="main" class="main">

				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">Tentang Kami</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Tentang Kami</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<h2><strong>Tentang</strong> Harapan Jaya Teknik AC</h2>

					<div class="row">
						<div class="col-md-8">
							<p class="lead">
                            <?php
                            $tentangkami = \common\models\Halamanstatis::find() ->where(['id_halaman' =>65]) ->one();
?>
                                <?=$tentangkami->isi_halaman ?>
							</p>
							
							<div class="toggle toggle-primary mt-lg" data-plugin-toggle>

                                <?php foreach ($halamanstatis as $halamanstatis){ ?>
								<section class="toggle active">
									<label><?=$halamanstatis->judul ?></label>
									<div class="toggle-content">
								
										<p><?=$halamanstatis->isi_halaman ?></p>
										
									</div>
								</section>

                                <?php } ?>

								
							</div>
						</div>
						<div class="col-md-4">
							<div class="featured-box featured-box-primary">
								<div class="box-content">
									<h4 class="text-uppercase">Tim Kami</h4>
									<ul class="thumbnail-gallery" data-plugin-lightbox data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
										<li>
											<a title="Benefits 1" href="<?=Url::to(['/']) ?>img/benefits/benefits-1.jpg">
												<span class="thumbnail mb-none">
													<img src="<?=Url::to(['/']) ?>img/benefits/benefits-1-thumb.jpg" alt="">
												</span>
											</a>
										</li>
										<li>
											<a title="Benefits 2" href="<?=Url::to(['/']) ?>img/benefits/benefits-2.jpg">
												<span class="thumbnail mb-none">
													<img src="<?=Url::to(['/']) ?>img/benefits/benefits-2-thumb.jpg" alt="">
												</span>
											</a>
										</li>
										<li>
											<a title="Benefits 3" href="<?=Url::to(['/']) ?>img/benefits/benefits-3.jpg">
												<span class="thumbnail mb-none">
													<img src="<?=Url::to(['/']) ?>img/benefits/benefits-3-thumb.jpg" alt="">
												</span>
											</a>
										</li>
										
									</ul>

									<hr>

									<ul class="list list-icons align-left">
										<li><i class="fa fa-check"></i>Berpengalaman</li>
										<li><i class="fa fa-check"></i>Professional</li>
										<li><i class="fa fa-check"></i>Terima Panggilan</li>
									</ul>

								</div>
							</div>
						</div>
						
					</div>

					<hr>

					

				</div>

			</div>
