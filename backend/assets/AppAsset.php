<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot/themes/test';
    public $baseUrl = '@web/../themes/test';
    public $css = [
        'css/styles.css',
        'css/plugins.css',
        'css/themes/theme-1.css',

        'vendor/fontawesome/css/font-awesome.min.css',
        'vendor/themify-icons/themify-icons.min.css',
        'vendor/fontawesome/fonts/fontawesome-webfont.woff',
        'vendor/fontawesome/fonts/fontawesome-webfont.eot',
        'vendor/fontawesome/fonts/fontawesome-webfont.svg',
        'vendor/fontawesome/fonts/fontawesome-webfont.ttf',
        'vendor/fontawesome/fonts/fontawesome-webfont.woff2',
        'vendor/fontawesome/fonts/FontAwesome.otf',

    ];
    public $js = [
        'js/login.js',
        'js/index.js',
        'js/main.js',
        'js/ui-elements.js',
        'js/ui-treeview.js',
        'js/form-elements.js',
        'js/form-validation.js',
        'js/form-wizard.js',


        'vendor/jquery/jquery.min.js',
		'vendor/bootstrap/js/bootstrap.min.js',
		'vendor/modernizr/modernizr.js',
		'vendor/jquery-cookie/jquery.cookie.js',
		'vendor/perfect-scrollbar/perfect-scrollbar.min.js',
		'vendor/switchery/switchery.min.js',
		'vendor/Chart.js/Chart.min.js',
		'vendor/jquery.sparkline/jquery.sparkline.min.js',





    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
