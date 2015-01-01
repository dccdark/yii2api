<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
/*
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}*/

class AppAsset extends AssetBundle
{
    public $sourcePath = '@bower/';
    
    public $css = array(
        //'admin-lte/css/bootstrap.min.css',
        'admin-lte/css/AdminLTE.css',
        'admin-lte/css/font-awesome.min.css',
        'admin-lte/css/ionicons.min.css'
        );
    public $js = ['admin-lte/js/AdminLTE/app.js'];
   
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
