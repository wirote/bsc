<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class MaterialAsset extends AssetBundle
{
    //public $sourcePath = '@themes/material';
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'material/css/material-wfont.css',
        'material/css/material.css',
        'material/css/ripples.css',
        'material/css/style.css',
    ];
    public $js = [
        'material/js/material.min.css',
        'material/js/ripples.min.css',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
