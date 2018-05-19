<?php



use yii\helpers\Url;

?>
<?php
$identitas = \common\models\Identitas::find() ->where(['id_identitas' =>1]) ->one();
?>
<header id="header" class="header-no-border-bottom has-nav-bar" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 148, 'stickySetTop': '-148px', 'stickyChangeLogo': false}">
				<div class="header-body">
					<div class="header-top header-top-style-2">
						<div class="container">
							<p class="pull-left hidden-xs">

								Memberikan Pelayanan yang maksimal
							</p>
							<p class="pull-right">
								<i class="fa fa-map-marker"></i> <?=$identitas->alamat ?>
							</p>
						</div>
					</div>
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
                                <div class="header-logo">
                                    <a href="<?=Url::to(['/']) ?>">
                                        <img alt="Harapan Jaya Teknik AC" width="111" height="54" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="<?=Url::to(['/']) ?>img/logo.png">
                                    </a>
                                </div>
                            </div>
							<div class="header-column">
								<ul class="header-extra-info hidden-xs">
									<li>
										<div class="feature-box feature-box-style-3">
											<div class="feature-box-icon">
												<i class="fa fa-phone"></i>
											</div>
											<div class="feature-box-info">
												<h4 class="mb-none">

                                                    <?=$identitas->tlp ?>

                                                    </h4>
												<p><small>Tlp/Wa</small></p>
											</div>
										</div>
									</li>
									<li>
										<div class="feature-box feature-box-style-3">
											<div class="feature-box-icon">
												<i class="fa fa-envelope"></i>
											</div>
											<div class="feature-box-info">
												<h4 class="mb-none">   <?=$identitas->email ?></h4>
												<p><small>kirim pesan untuk info lebih lanjut</small></p>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="header-container header-nav header-nav-bar header-nav-bar-primary">
						<div class="container">
							<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
								<i class="fa fa-bars"></i>
							</button>
							<div class="header-nav-main header-nav-main-light header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
								<nav>
									<ul class="nav nav-pills" id="mainNav">
										<li class="">
											<a href="<?=Url::to(['/']) ?>">
												Home
											</a>
											
											
												
										</li>
										<li class="">
											<a href="tentangkami">
												Tentang Kami
											</a>
										</li>
											<li class="">
											<a href="daftarharga">
												Daftar Harga
											</a>
										</li>
										<li class="">
											<a href="galeri">
												Galeri
											</a>
											
										</li>
										<li class="">
											<a href="artikel">
												Blog
											</a>
										
											
										</li>
										<li class="">
											<a  href="hubungikami">
												Hubungi Kami
											</a>
											
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</header>