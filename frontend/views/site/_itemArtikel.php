<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<?php
$identitas = \common\models\Identitas::find() ->where(['id_identitas' =>1]) ->one();
?>


        <article class="post post-medium">
            <div class="row">

                <div class="col-md-5">
                    <div class="post-image">
                        <div class="owl-carousel owl-theme" data-plugin-options="{'items':1}">
                            <div>
                                <div class="img-thumbnail">
                                    <img class="img-responsive" src="<?=Url::to(['/']) ?>img/blog/<?=$model->gambar ?>" alt="<?=$model->gambar ?>, <?=$identitas->meta_keyword ?>">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-7">

                    <div class="post-content">

                        <h2><?= Html::a($model->judul  , ['view', 'id' => $model->id_artikel]) ?></h2>
                        <p><?=substr($model->isi_artikel, 0, 200)
?></p> <?= Html::a('Detail...' , ['view', 'id' => $model->id_artikel], ['class' => 'btn btn-xs btn-primary pull-left']) ?>

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



  
