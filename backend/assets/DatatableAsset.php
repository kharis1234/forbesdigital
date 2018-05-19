<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class DatatableAsset extends AssetBundle
{
	public $sourcePath = '@vendor/bower/adminlte/dist/plugins/jquery-datatable';
	    public $jsOptions = array(
        'position' => \yii\web\View::POS_HEAD
    );
    public $css = [
        'skin/bootstrap/css/dataTables.bootstrap.css',
    ];
    public $js = [
		'js/jquery.js',
		'js/jquery.dataTables.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
