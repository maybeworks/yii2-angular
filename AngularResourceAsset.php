<?php

namespace maybeworks\angular;

use yii\web\AssetBundle;

class AngularResourceAsset extends AssetBundle
{

    public $sourcePath = '@bower/angular-resource';

    public $css = [
    ];

    public $js = [
        'angular-resource.js',
    ];

    public $depends = [
        'maybeworks\angular\AngularMainAsset'
    ];
}
