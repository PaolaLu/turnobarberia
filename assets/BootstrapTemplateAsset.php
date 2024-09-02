<?php
namespace app\assets;

use yii\web\AssetBundle;

class BootstrapTemplateAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/main.css',
    ];
    public $js = [
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',  // Cambiado a Bootstrap 4
    ];
}