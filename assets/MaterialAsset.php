<?php

namespace app\assets;

use yii\web\AssetBundle;

class MaterialAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'material/css/material-wfont.min.css',
        'material/css/material.min.css',
        'material/css/ripples.min.css',
        'material/css/style.css',
    ];
    public $js = [
        'material/js/material.min.js',
        'material/js/ripples.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
