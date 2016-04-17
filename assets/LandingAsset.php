<?php
namespace app\assets;
use yii\web\AssetBundle;

class LandingAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'themes/landing/css/bootstrap.min.css',
        'themes/landing/css/landing-page.css',
        'css/site.css',
    ];
    public $js = [
        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
