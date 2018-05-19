<?php



use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;

?>

<div role="main" class="main">

    <div class="slider-container light rev_slider_wrapper">
        <div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 500, 'disableProgressBar': 'on'}">
            <ul>

                <li data-transition="fade">

                    <img src="<?=Url::to(['/']) ?>img/slides/slide-corporate-1.jpg"
                         alt=""
                         data-bgposition="right center"
                         data-bgpositionend="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         data-kenburns="on"
                         data-duration="9000"
                         data-ease="Linear.easeNone"
                         data-scalestart="110"
                         data-scaleend="100"
                         data-rotatestart="0"
                         data-rotateend="0"
                         data-offsetstart="0 0"
                         data-offsetend="0 0"
                         data-bgparallax="0"
                         class="rev-slidebg">

                    <div class="tp-caption featured-label"
                         data-x="center"
                         data-y="210"
                         data-start="500"
                         style="z-index: 5"
                         data-transform_in="y:[100%];s:500;"
                         data-transform_out="opacity:0;s:500;">SELAMAT DATANG</div>

                    <div class="tp-caption bottom-label"
                         data-x="center"
                         data-y="270"
                         data-start="1000"
                         data-transform_idle="o:1;"
                         data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:600;e:Power4.easeInOut;"
                         data-transform_out="opacity:0;s:500;"
                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                         data-splitin="chars"
                         data-splitout="none"
                         data-responsive_offset="on"
                         style="font-size: 23px; line-height: 30px;"
                         data-elementdelay="0.05">HAPARAN JAYA TEKNIK AC</div>

                </li>
                <li data-transition="fade">

                    <img src="<?=Url::to(['/']) ?>img/slides/slide-corporate-3.jpg"
                         alt=""
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         data-kenburns="on"
                         data-duration="9000"
                         data-ease="Linear.easeNone"
                         data-scalestart="150"
                         data-scaleend="100"
                         data-rotatestart="0"
                         data-rotateend="0"
                         data-offsetstart="0 0"
                         data-offsetend="0 0"
                         data-bgparallax="0"
                         class="rev-slidebg">

                    <div class="tp-caption"
                         data-x="177"
                         data-y="188"
                         data-start="1000"
                         data-transform_in="x:[-300%];opacity:0;s:500;"><img src="<?=Url::to(['/']) ?>img/slides/slide-title-border-light.png" alt=""></div>

                    <div class="tp-caption top-label"
                         data-x="227"
                         data-y="180"
                         data-start="500"
                         data-transform_in="y:[-300%];opacity:0;s:500;">JASA SERVIS/MAINTENANCE</div>

                    <div class="tp-caption"
                         data-x="530"
                         data-y="188"
                         data-start="1000"
                         data-transform_in="x:[300%];opacity:0;s:500;"><img src="<?=Url::to(['/']) ?>img/slides/slide-title-border-light.png" alt=""></div>

                    <div class="tp-caption main-label"
                         data-x="135"
                         data-y="210"
                         data-start="1500"
                         data-whitespace="nowrap"
                         data-transform_in="y:[100%];s:500;"
                         data-transform_out="opacity:0;s:500;"
                         data-mask_in="x:0px;y:0px;">SOLUSI NYA ADA PADA KAMI!?</div>

                    <div class="tp-caption bottom-label"
                         data-x="185"
                         data-y="280"
                         data-start="2000"
                         data-transform_in="y:[100%];opacity:0;s:500;"> HARAPAN JAYA TEKNIK AC selau siap memberikan harga dan pelayanan terbaik.</div>

                </li>
            </ul>
        </div>
    </div>

    <div style="margin-bottom: 30px;" id="home-intro">

    </div>

    <div class="container">

        <div class="row center">
            <div class="col-md-12">
                <h1 class="mb-sm word-rotator-title">
                    Anda Butuh Jasa Servis & Bongkar Pasang AC untuk
                    <strong class="inverted">
									<span class="word-rotate" data-plugin-options="{'delay': 2000, 'animDelay': 300}">
										<span class="word-rotate-items">
											<span>Rumah</span>
											<span>Kantor</span>
											<span>Pabrik</span>
											<span>Kantor</span>
											<span>Sekolah</span>
											<span>Instansi</span>
											<span>Dll?</span>
										</span>
									</span>
                    </strong>

                </h1>
                <p class="lead">
                    Kami siap datang membantu anda. Hubungi kami untuk mendapatkan penawaran spesial.
                </p>
            </div>
        </div>

    </div>



    <div class="container">

        <div class="row">
            <hr class="tall">
        </div>

    </div>

    <div class="container">

        <div class="row">
            <div class="col-md-8">
                <h2>Layanan <strong>Kami</strong></h2>
                <div class="row">
                    <div class="col-sm-6">

                        <?php
                        $layanan = \common\models\Layanan::find() ->where(['IN', 'id_layanan', [1,2,3,4]])->all();

                        ?>

                        <?php foreach ($layanan as $layanan) { ?>
                            <div class="feature-box">
                                <div class="feature-box-icon">
                                    <i class="fa fa-cogs"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="heading-primary mb-none"><?=$layanan->judul ?></h4>
                                    <p class="tall"><?=$layanan->isi_layanan ?></p>
                                </div>
                            </div>

                        <?php } ?>

                    </div>
                    <div class="col-sm-6">
                        <?php
                        $layanan2 = \common\models\Layanan::find() ->where(['IN', 'id_layanan', [5,6,7,8]])->all();

                        ?>

                        <?php foreach ($layanan2 as $layanan2) { ?>
                            <div class="feature-box">
                                <div class="feature-box-icon">
                                    <i class="fa fa-cogs"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="heading-primary mb-none"><?=$layanan2->judul ?></h4>
                                    <p class="tall"><?=$layanan2->isi_layanan ?></p>
                                </div>
                            </div>

                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                </br></br></br>

                <div class="panel-group" id="accordion">
                    <?php
                    $halamanstatis=\common\models\Halamanstatis::find()->where(['IN', 'id_halaman', [64,66]])->all();

                    ?>


                    <?php   foreach ($halamanstatis as $halamanstatis){     ?>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#<?=$halamanstatis->url?>">
                                        <i class="fa fa-bars"></i>
                                        <?=$halamanstatis->judul?>
                                    </a>
                                </h4>
                            </div>
                            <div id="<?=$halamanstatis->url?>" class="accordion-body collapse <?=$halamanstatis->type?>">
                                <div class="panel-body">
                                    <?=$halamanstatis->isi_halaman?></br></br>
                                    <a href="tentangkami" target="_parent" title="Facebook">Detail</a>
                                </div>
                            </div>
                        </div>

                    <?php  } ?>




                </div>
            </div>
        </div>

        <hr class="tall">

        <div class="row center">
            <div class="col-md-12">
                <h2 class="mb-sm word-rotator-title">
                    Jasa Service AC
                    <strong>
									<span class="word-rotate" data-plugin-options="{'delay': 3500, 'animDelay': 400}">
										<span class="word-rotate-items">
											<span>Terbaik</span>
											<span>Berpengalaman</span>
											<span>Terpercaya</span>
											<span>Bergaransi</span>
										</span>
									</span>
                    </strong>
                    se-Jabodetabek
                </h2>
                <h4 class="heading-primary lead tall"> Berikut adalah Merk AC Populer yang digunakan oleh konsumen dan juga telah ditangani oleh teknisi AC Harapan Jaya Teknik</h4>
            </div>
        </div>

        <div class="row center">
            <div class="owl-carousel owl-theme" data-plugin-options="{'items': 6, 'autoplay': true, 'autoplayTimeout': 3000}">
                <div>
                    <img class="img-responsive" src="<?=Url::to(['/']) ?>img/logos/logo-1.png" alt="">
                </div>
                <div>
                    <img class="img-responsive" src="<?=Url::to(['/']) ?>img/logos/logo-2.png" alt="">
                </div>
                <div>
                    <img class="img-responsive" src="<?=Url::to(['/']) ?>img/logos/logo-3.png" alt="">
                </div>
                <div>
                    <img class="img-responsive" src="<?=Url::to(['/']) ?>img/logos/logo-4.png" alt="">
                </div>
                <div>
                    <img class="img-responsive" src="<?=Url::to(['/']) ?>img/logos/logo-5.png" alt="">
                </div>
                <div>
                    <img class="img-responsive" src="<?=Url::to(['/']) ?>img/logos/logo-6.png" alt="">
                </div>
                <div>
                    <img class="img-responsive" src="<?=Url::to(['/']) ?>img/logos/logo-4.png" alt="">
                </div>
                <div>
                    <img class="img-responsive" src="<?=Url::to(['/']) ?>img/logos/logo-2.png" alt="">
                </div>
            </div>
        </div>

    </div>

    <section class="section section-custom-map">
        <section class="section section-default section-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="recent-posts mb-xl">
                            <h2>Artikel <strong>Terakhir</strong> </h2>
                            <div class="row">
                                <div class="owl-carousel owl-theme mb-none" data-plugin-options="{'items': 1}">

                                    <div>

                                        <?php foreach(common\models\Artikel::lastArtikelIndexpage1() as $artikel): ?>
                                            <div class="col-md-6">
                                                <article>
                                                    <div class="date">
                                                        <span class="day"> <?=date('d', strtotime($artikel->tanggal))?></span>
                                                        <span class="month"> <?=date('M', strtotime($artikel->tanggal))?></span>
                                                    </div>
                                                    <h4 class="heading-primary"><?= Html::a($artikel->judul  , ['view', 'id' => $artikel->id_artikel]) ?></h4>
                                                    <p><?=substr($artikel->isi_artikel, 0, 100)
                                                        ?>
                                                        <?= Html::a('Detail <i class="fa fa-angle-right"></i>' , ['view', 'id' => $artikel->id_artikel], ['class' => 'read-more']) ?>


                                                    </p>
                                                </article>
                                            </div>
                                        <?php endforeach; ?>




                                    </div>
                                    <div>
                                        <?php foreach(common\models\Artikel::lastArtikelIndexpage2() as $artikel): ?>
                                            <div class="col-md-6">
                                                <article>
                                                    <div class="date">
                                                        <span class="day"><?=date('d', strtotime($artikel->tanggal))?></span>
                                                        <span class="month"><?=date('M', strtotime($artikel->tanggal))?></span>
                                                    </div>
                                                    <h4 class="heading-primary"><?= Html::a($artikel->judul  , ['view', 'id' => $artikel->id_artikel]) ?></h4>
                                                    <p><?=substr($artikel->isi_artikel, 0, 100)
                                                        ?>
                                                        <?= Html::a('Detail <i class="fa fa-angle-right"></i>' , ['view', 'id' => $artikel->id_artikel], ['class' => 'read-more']) ?>


                                                    </p>
                                                </article>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2><strong>Apa</strong> Kata Mereka</h2>
                        <div class="row">
                            <div class="owl-carousel owl-theme mb-none" data-plugin-options="{'items': 1}">
                                <div>
                                    <div class="col-md-12">
                                        <div class="testimonial testimonial-primary">
                                            <blockquote>
                                                <p>Respon cepat, berpengalaman, menjelaskan semua proses dari bagian mana yang bermasalah, penyebab dan lama pengerjaan. AC sudah kembali dingin.</p>
                                            </blockquote>
                                            <div class="testimonial-arrow-down"></div>
                                            <div class="testimonial-author">
                                                <div class="testimonial-author-thumbnail img-thumbnail">
                                                    <img src="<?=Url::to(['/']) ?>img/clients/client-1.jpg" alt="">
                                                </div>
                                                <p><strong>Ibu Rika</strong><span>Pengguna Jasa Service AC</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="col-md-12">
                                        <div class="testimonial testimonial-primary">
                                            <blockquote>
                                                <p>Saya selalu khawatir setiap service AC karena ketidakjujuran teknisi yang sering mengakali freon. Tapi kali ini teknisi menceritakan kondisi AC dengan jujur (freon stabil tidak perlu tambah). Terima kasih!.</p>
                                            </blockquote>
                                            <div class="testimonial-arrow-down"></div>
                                            <div class="testimonial-author">
                                                <div class="testimonial-author-thumbnail img-thumbnail">
                                                    <img src="<?=Url::to(['/']) ?>img/clients/client-2.jpg" alt="">
                                                </div>
                                                <p><strong>Bapak Sigit</strong><span>Pengguna Jasa Cuci AC</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

</div>

			
	
	