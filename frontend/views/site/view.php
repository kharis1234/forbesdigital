<?php

use yii\widgets\ActiveForm;	
use yii\helpers\Html;
use yii\widgets\ListView;
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
                                    <li class="active"><a href="../artikel">Artikel</a></li>
                                    <li class="active"><?=$model->judul ?></li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Artikel</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-9">
                            <div class="blog-posts">

                              <article class="post post-medium">
            <div class="row">


                <div class="col-md-12">

                    <div class="post-content">

                        <h2><a href="#"><?=$model->judul ?></a></h2>
                        <p> <img class="pull-left img-responsive img-thumbnail" style="margin-right: 20px; margin-bottom: 15px;" width="300" height="211" src="<?=Url::to(['/']) ?>img/blog/<?=$model->gambar ?>" alt="<?=$model->gambar ?>, <?=$identitas->meta_keyword ?>"><?=$model->isi_artikel?></p>

                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="post-meta">
                        <span><i class="fa fa-calendar"></i> <?=date("d-m-Y",  strtotime($model->tanggal)) ?></span>
                        <span><i class="fa fa-user"></i> Oleh : <a href="#">Administrator</a> </span>
                        <span><i class="fa fa-tag"></i> Kategori : <a href="#"><?=$model->idKategori->nama_kategori ?></a> </span>
                        <span><i class="fa fa-comments"></i> Dilihat : <a href="#"><?=$model->jumlah_baca ?></a></span>

                    </div>
                </div>
            </div>

        </article>


						</div>
                        </div>

						<div class="col-md-3">
							<aside class="sidebar">
							
								


								<div class="tabs mb-xlg">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#popularPosts" data-toggle="tab"><i class="fa fa-star"></i> Terpopuler</a></li>
										<li><a href="#recentPosts" data-toggle="tab">Terkini</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="popularPosts">
											<ul class="simple-post-list">
                                                <?php foreach(common\models\Artikel::topArtikel() as $row): ?>
                                                    <li>
                                                        <div class="post-image">
                                                            <div class="img-thumbnail">
                                                                <a href="blog-post.html">
                                                                    <img src="<?=Url::to(['/']) ?>img/blog/<?=$row->gambar ?>" alt="<?=$row->gambar ?>, <?=$identitas->meta_keyword ?>" width="50">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="post-info">
                                                            <?= Html::a($row->judul , ['view', 'id' => $row->id_artikel]) ?> (<?=  $row->jumlah_baca?>)
                                                            <div class="post-meta">
                                                                <?=date("d-m-Y",  strtotime($row->tanggal)) ?>
                                                            </div>
                                                        </div>
                                                    </li>
                                                <?php endforeach; ?>
											</ul>
										</div>
										<div class="tab-pane" id="recentPosts">

											<ul class="simple-post-list">
                                                <?php foreach(common\models\Artikel::lastArtikel() as $row): ?>
												<li>
													<div class="post-image">
														<div class="img-thumbnail">
															<a href="blog-post.html">
																<img src="<?=Url::to(['/']) ?>img/blog/<?=$row->gambar ?>" alt="<?=$row->gambar ?>, <?=$identitas->meta_keyword ?>" width="50">
															</a>
														</div>
													</div>
													<div class="post-info">
                                                        <?= Html::a($row->judul , ['view', 'id' => $row->id_artikel]) ?> (<?=  $row->jumlah_baca?>)
														<div class="post-meta">
                                                            <?=date("d-m-Y",  strtotime($row->tanggal)) ?>
														</div>
													</div>
												</li>
                                                <?php endforeach; ?>

											</ul>
										</div>
									</div>
								</div>

                                <h4 class="heading-primary">Kategori</h4>
                                <ul class="nav nav-list mb-xlg">
                                    <?php
                                    $kategori = \common\models\Kategori::find()->where(['aktif'=>'Y'])->all();

                                    ?>

                                    <?php foreach ($kategori as $kategori) { ?>

                                        <li>

                                            <?= Html::a($kategori->nama_kategori , ['kategori', 'kategori' => $kategori->id_kategori]) ?>

                                        </li>

                                    <?php } ?>
                                </ul>

								<hr>
							
								
							</aside>
						</div>
					</div>

				</div>

			</div>



  
