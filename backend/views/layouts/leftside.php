<?php

use adminlte\widgets\Menu;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
<?= Html::img('@web/img/user2-160x160.jpg', ['class' => 'img-circle', 'alt' => 'User Image']) ?>
            </div>
            <div class="pull-left info">
                <p>Administrator</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
<!--        <form action="#" method="get" class="sidebar-form">-->
<!--            <div class="input-group">-->
<!--                <input type="text" name="q" class="form-control" placeholder="Search...">-->
<!--                <span class="input-group-btn">-->
<!--                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>-->
<!--                </span>-->
<!--            </div>-->
<!--        </form>-->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <?=
        Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => [
                        ['label' => 'Menu', 'options' => ['class' => 'header']],
                        ['label' => 'Dashboard', 'icon' => 'fa fa-dashboard',

                            'url' => ['/'],

                            'active' => $this->context->route == 'site/index'
                        ],
                        ['label' => 'Identitas Perusahaan', 'icon' => 'fa fa-file-code-o', 'url' => ['identitas/index'],],
                        [
                            'label' => 'Blog',
                            'icon' => 'fa fa-database',
                            'url' => '#',
                            'items' => [
                                [
                                    'label' => 'Kategori',
                                    'icon' => 'fa fa-database',
                                    'url' => '?r=kategori/',
				   'active' => $this->context->route == 'kategori/index'
                                ],
                                [
                                    'label' => 'Artikel',
                                    'icon' => 'fa fa-database',
                                    'url' => '?r=artikel/',
				  'active' => $this->context->route == 'artikel/index'
                                ]
                            ]
                        ],

                        ['label' => 'Halaman Statis', 'icon' => 'fa fa-file-code-o', 'url' => ['halamanstatis/index'],],
						['label' => 'Registrasi', 'icon' => 'fa fa-file-code-o', 'url' => ['registration/index'],],
						['label' => 'Reservasi', 'icon' => 'fa fa-file-code-o', 'url' => ['reservation/index'],],
                        ['label' => 'Galeri Foto', 'icon' => 'fa fa-file-code-o', 'url' => ['gallery/index'],],
                        ['label' => 'Layanan', 'icon' => 'fa fa-file-code-o', 'url' => ['layanan/index'],],
						 ['label' => 'Footer', 'icon' => 'fa fa-file-code-o', 'url' => ['footer/index'],],
                        //['label' => 'Daftar Harga', 'icon' => 'fa fa-file-code-o', 'url' => ['daftarharga/index'],],
                       /* [
                            'label' => 'Pengguna',
                            'icon' => 'fa fa-users',
                            'url' => ['user/index'],
                         //   'active' => $this->context->route == 'user/index',
                        ],*/
                       /* ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/halamanstatis'],],
                        ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],*/
                    ],
                ]
        )
        ?>
        
    </section>
    <!-- /.sidebar -->
</aside>
