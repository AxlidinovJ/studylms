<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class Sayt2Asset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
            "css/bootstrap.css",
	        "css/plugins.css",
	        "css/colors.css",
	        "style.css",
	        "css/responsive.css",
    ];
    public $js = [
        'js/plugins.js',
        // 'js/jquery.js',
        'js/jquery.main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap4\BootstrapAsset',
    ];
}
