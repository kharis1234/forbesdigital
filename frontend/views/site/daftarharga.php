<?php



use yii\helpers\Url;

?>

			<div role="main" class="main">

				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">Daftar Harga</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Daftar Harga</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-9">

							<div class="row">
								<div class="col-md-12">

									

									<h4>Price List AC Harapan Jaya Teknik</h4>

									<table class="table table-striped">
										<thead>
											<tr>
												<th>
													#
												</th>
												<th>
													Size
												</th>
												<th>
													Jenis
												</th>
												<th>
													Pekerjaan
												</th>
												<th>
													Jenis Freon
												</th>
												<th>
													Qty
												</th>
												<th>
													Unit Price (IDR)
												</th>
											</tr>
										</thead>
										<tbody>

                                        <?php
                                        $daftarharga = \common\models\Daftarharga::find()->where(['aktif'=>'Y'])->all();

                                        ?>

                                            <?php foreach ($daftarharga as $daftarharga) { ?>
                                                <tr >
  <td ><?=$daftarharga->id_daftarharga ?></td>
  <td ><?=$daftarharga->judul ?></td>
  <td ><?=$daftarharga->jenis ?></td>
  <td ><?=$daftarharga->pekerjaan ?></td>
  <td ><?=$daftarharga->jenisfreon ?></td>
  <td ><?=$daftarharga->qty ?></td>
  <td ><?=$daftarharga->harga ?></td>
                                        </tr>                                         <?php } ?>


											
										</tbody>
									</table>

									<hr class="tall">


								</div>
							</div>

						</div>

						<div class="col-md-3">
							<aside class="sidebar">
                                <?php
                                $layanan = \common\models\Layanan::find()->where(['aktif'=>'Y'])->all();

                                ?>
								<h4 class="heading-primary">Layanan Kami</h4>
								<ul class="nav nav-list narrow">
                                    <?php foreach ($layanan as $layanan) { ?>
                                        <li><a href="#">   <?=$layanan->judul ?></a></li>


                                    <?php } ?>
								</ul>

							</aside>
						</div>
					</div>

				</div>

			</div>