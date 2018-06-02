<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class FrontEndAssetCss extends AssetBundle
{
	public $sourcePath = '@vendor/bower/frontend';
	public $jsOptions = array(
        'position' => \yii\web\View::POS_HEAD
    );
    public $css = [
     // "css/bootstrap.css",
      "css/stack-interface.css", 
      "css/socicon.css", 
      "css/lightbox.min.css", 
      "css/flickity.css", 
      "css/iconsmind.css", 
      "css/jquery.steps.css", 
      "css/theme-tangerine.css",
            "<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i\" rel=\"stylesheet\">",
        "<link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">"
    ];
	
   
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
