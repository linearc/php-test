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
        'css/themes/theme-2.css',
        'css/themes/theme-3.css',
        'css/themes/theme-4.css',
        'css/themes/theme-5.css',
        'css/themes/theme-5.css',
        'vendor/fontawesome/css/font-awesome.min.css',
        'vendor/fontawesome/fonts/fontawesome-webfont.woff',
        'vendor/fontawesome/fonts/fontawesome-webfont.eot',
        'vendor/fontawesome/fonts/fontawesome-webfont.svg',
        'vendor/fontawesome/fonts/fontawesome-webfont.ttf',
        'vendor/fontawesome/fonts/fontawesome-webfont.woff2',
        'vendor/fontawesome/fonts/FontAwesome.otf',
    ];
    public $js = [
        'js/login.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
