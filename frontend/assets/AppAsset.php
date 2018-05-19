<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
       // 'css/site.css',
	   'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light',
			'vendor/bootstrap/css/bootstrap.min.css',
		'vendor/font-awesome/css/font-awesome.min.css',
		'vendor/animate/animate.min.css',
		'vendor/simple-line-icons/css/simple-line-icons.min.css',
		'vendor/owl.carousel/assets/owl.carousel.min.css',
		'vendor/owl.carousel/assets/owl.theme.default.min.css',
		'vendor/magnific-popup/magnific-popup.min.css',
		'css/theme.css',
		'css/theme-elements.css',
		'css/theme-blog.css',
		'css/theme-shop.css',
		'vendor/rs-plugin/css/settings.css',
		'vendor/rs-plugin/css/layers.css',
		'vendor/rs-plugin/css/navigation.css',
		'vendor/circle-flip-slideshow/css/component.css',
		'css/skins/default.css',
		'css/custom.css',
    ];
    public $js = [

	'vendor/modernizr/modernizr.min.js',
		'vendor/jquery/jquery.min.js',
		'vendor/jquery.appear/jquery.appear.min.js',
		'vendor/jquery.easing/jquery.easing.min.js',
		'vendor/jquery-cookie/jquery-cookie.min.js',
		'vendor/bootstrap/js/bootstrap.min.js',
		'vendor/common/common.min.js',
		'vendor/jquery.validation/jquery.validation.min.js',
		'vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js',
		'vendor/jquery.gmap/jquery.gmap.min.js',
		'vendor/jquery.lazyload/jquery.lazyload.min.js',
		'vendor/isotope/jquery.isotope.min.js',
		'vendor/owl.carousel/owl.carousel.min.js',
		'vendor/magnific-popup/jquery.magnific-popup.min.js',
		'vendor/vide/vide.min.js',
				'js/theme.js',
			'vendor/rs-plugin/js/jquery.themepunch.tools.min.js',
		'vendor/rs-plugin/js/jquery.themepunch.revolution.min.js',
		'vendor/circle-flip-slideshow/js/jquery.flipshow.min.js',
		'js/views/view.home.js',
			'js/custom.js',
				'js/theme.init.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
