
<?php


use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;
?>

<div role="main" class="main">

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Artikel</li>
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

                    <?= ListView::widget([
                        'dataProvider' => $dataProviderKategori,
                        'pager' => array(
                            'options' => [
                                'tag' => 'ul',
                                'class' => 'pagination pagination-lg pull-right',
                                //  'id' => 'pager-container',
                            ],

                        ),
                        'layout' => "{items}\n{pager}",
                        //  'itemOptions' => ['class' => 'item'],
                        'itemView' => '_itemArtikel'
                    ]) ?>


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
                                                        <img src="<?=Url::to(['/']) ?>img/blog/<?=$row->gambar ?>" alt="" width="50">
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
                                                        <img src="<?=Url::to(['/']) ?>img/blog/<?=$row->gambar ?>" alt="" width="50">
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
                    <h4 class="heading-primary">Layanan Kami</h4>
                    <ul class="nav nav-list mb-xlg">
                        <?php
                        $layanan = \common\models\Layanan::find()->where(['aktif'=>'Y'])->all();

                        ?>

                        <?php foreach ($layanan as $layanan) { ?>

                            <li><a href="#"><?=$layanan->judul ?></a></li>

                        <?php } ?>
                    </ul>
                    <hr>


                </aside>
            </div>
        </div>

    </div>

</div>