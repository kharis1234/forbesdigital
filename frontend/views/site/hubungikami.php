	
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
									<li class="active">Hubungi Kami</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Hubungi Kami</h1>
							</div>
						</div>
					</div>
				</section>

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				
<div id="google_map" class="google-map">
                                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.512026184325!2d106.89830461537615!3d-6.456619064930866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eaa8a1965ba1%3A0xbccb318757826566!2sJl.+Gunungputri+Selatan+No.29%2C+Gn.+Putri%2C+Bogor%2C+Jawa+Barat+16961%2C+Indonesia!5e0!3m2!1sen!2sid!4v1504104820555" width="1903" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
				<div class="container">

					<div class="row">
						<div class="col-md-6">

							<div class="alert alert-success hidden mt-lg" id="contactSuccess">
								<strong>Sukses!</strong> Pesan anda telah berhasil dikirim
							</div>

							<div class="alert alert-danger hidden mt-lg" id="contactError">
								<strong>Gagal!</strong> Pesan anda gagal dikirim
								<span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
							</div>

							<h2 class="mb-sm mt-sm"><strong>Hubungi</strong> Kami</h2>
							<form id="contactForm" action="php/contact-form.php" method="POST">
								<div class="row">
									<div class="form-group">
										<div class="col-md-6">
											<label>Nama Anda *</label>
											<input type="text" value="" data-msg-required="Silahkan masukan nama anda" maxlength="100" class="form-control" name="name" id="name" required>
										</div>
										<div class="col-md-6">
											<label>Alamat Email Anda *</label>
											<input type="email" value="" data-msg-required="Silahkan masukan email anda" data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>Judul</label>
											<input type="text" value="" data-msg-required="Silahkan Masukan judul" maxlength="100" class="form-control" name="subject" id="subject" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>Pesan *</label>
											<textarea maxlength="5000" data-msg-required="Silahkan masukan pesan anda" rows="10" class="form-control" name="message" id="message" required></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<input type="submit" value="Kirim" class="btn btn-primary btn-lg mb-xlg" data-loading-text="Loading...">
									</div>
								</div>
							</form>
						</div>
						<div class="col-md-6">

							<h4 class="heading-primary mt-lg">Isi <strong>Form Pertanyaan</strong></h4>
							<p>Kami selalu senang untuk membantu. Cukup tinggalkan rincian kontak bersama pertanyaan Anda di bawah dan kami akan segera menghubungi Anda kembali.</p>

							<hr>

							<h4 class="heading-primary">Info <strong>Bengkel</strong></h4>
							<ul class="list list-icons list-icons-style-3 mt-xlg">
								<li><i class="fa fa-map-marker"></i> <strong>Alamat:</strong>   <?=$identitas->alamat ?></li>
								<li><i class="fa fa-phone"></i> <strong>Tlp/Wa:</strong>  <?=$identitas->tlp ?></li>
								<li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:<?=$identitas->email ?>"> <?=$identitas->email ?></a></li>
							</ul>

							<hr>

							<h4 class="heading-primary">Jam <strong>Kerja</strong></h4>
							<ul class="list list-icons list-dark mt-xlg">
								<li><i class="fa fa-clock-o"></i> Senin - Jumat - 9.00 s/d 17.00</li>
								<li><i class="fa fa-clock-o"></i> Sabtu - 9.00 s/d 14.00</li>
								<li><i class="fa fa-clock-o"></i> Minggu - Tutup (Kecuali dengan Janji)</li>
							</ul>

						</div>

					</div>

				</div>

			</div>

			<section class="call-to-action call-to-action-default with-button-arrow call-to-action-in-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<center>
								<h3>Jasa <strong>Service</strong> Panggilan Seluruh  <strong> Area</strong> Jabodetabek </h3>
								<p>Anda <strong>Telepon</strong>, Kami Akan Datang</p>
							</center>
							
						</div>
					</div>
				</div>
			</section>