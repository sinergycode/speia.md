<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
//        'css/bootstrap.min.css',
        'simple-line-icons/css/simple-line-icons.css',
        'css/fancybox/jquery.fancybox.css',
        'css/flexslider.css',
        'js/owl-carousel/owl.carousel.css',
        'css/style.css',
    ];
    public $js = [
//        'js/jquery.js',
        'js/jquery.easing.1.3.js',
//        'js/bootstrap.min.js',
        'js/jquery.fancybox.pack.js',
        'js/jquery.fancybox-media.js',
        'js/portfolio/jquery.quicksand.js',
        'js/portfolio/setting.js',
        'js/jquery.flexslider.js',
        'js/animate.js',
        'js/custom.js',
        'js/owl-carousel/owl.carousel.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
