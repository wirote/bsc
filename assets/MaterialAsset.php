<?php

namespace app\assets;

use yii\web\AssetBundle;

class MaterialAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'themes/material/css/material-wfont.min.css',
        'themes/material/css/material.min.css',
        'themes/material/css/ripples.min.css',
        'themes/material/css/style.css',
    ];
    public $js = [
        'themes/material/js/material.min.js',
        'themes/material/js/ripples.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
