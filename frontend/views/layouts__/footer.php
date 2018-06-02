<?php



use yii\helpers\Url;

?>
<?php
$identitas = \common\models\Identitas::find() ->where(['id_identitas' =>1]) ->one();
$pagestatic = \common\models\Halamanstatis::find() ->where(['id_halaman' =>65]) ->one();
$pagestatic2 = \common\models\Halamanstatis::find() ->where(['id_halaman' =>67]) ->one();
?>
	<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="footer-ribbon">
							<span><?=$identitas->nama_website ?></span>
						</div>
						<div class="col-md-3">
							<div class="newsletter">
								<h4><?=$pagestatic->judul ?></h4>
								<p> <?=$pagestatic->isi_halaman ?></p>
			
								
			
								
							</div>
						</div>
						<div class="col-md-3">
							<h4><?=$pagestatic2->judul ?></h4>
							<div id="tweet" class="twitter" data-plugin-tweets data-plugin-options="{'username': '', 'count': 2}">
								<p><?=$pagestatic2->isi_halaman ?></p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="contact-details">
								<h4>Hubungi kami</h4>
								<ul class="contact">
									<li><p><i class="fa fa-map-marker"></i> <strong>Alamat:</strong> <?=$identitas->alamat ?>
</p></li>
									<li><p><i class="fa fa-phone"></i> <strong>Tlp/Wa:</strong> <?=$identitas->tlp ?></p></li>
									<li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:<?=$identitas->email ?>"><?=$identitas->email ?></a></p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<h4>Follow Us</h4>
							<ul class="social-icons">
								<li class="social-icons-facebook"><a href="<?=$identitas->facebook_id ?>" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li class="social-icons-instagram"><a href="<?=$identitas->instagram_id ?>" target="_blank" title="Twitter"><i class="fa fa-instagram"></i></a></li>

							</ul>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-md-1">
								<a href="index.html" class="logo">
									<img alt="Porto Website Template" class="img-responsive" src="<?=Url::to(['/']) ?>img/logo-footer.png">
								</a>
							</div>
							<div class="col-md-7">
								<p>� Copyright 2017. All Rights Reserved.</p>
							</div>
							<div class="col-md-4">
							<nav id="sub-menu">
									<ul>
										
										
										<li><a href="hubungikami">Contact Form</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
		


