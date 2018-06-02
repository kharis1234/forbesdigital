<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class FrontEndAssetJs extends AssetBundle
{
	public $sourcePath = '@vendor/bower/frontend';
	public $jsOptions = array(
        'position' => \yii\web\View::POS_END
    );
  
	
    public $js = [
		"js/jquery.js",
		"js/jquery.dataTables.js",
		"js/jquery-3.1.1.min.js",
        "js/flickity.min.js",
        "js/easypiechart.min.js",
        "js/parallax.js",
        "js/typed.min.js",
        "js/datepicker.js",
        "js/isotope.min.js",
        "js/ytplayer.min.js",
        "js/lightbox.min.js",
        "js/granim.min.js",
        "js/jquery.steps.min.js",
        "js/countdown.min.js",
        "js/twitterfetcher.min.js",
        "js/spectragram.min.js",
        "js/smooth-scroll.min.js",
        "js/scripts.js"
        
    ];
   
}
